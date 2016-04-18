<?php
/**
 * 電子書籍『はじめてのフレームワークとしてのFuelPHP』の一部です。
 *
 * @version    1.0
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2012 Kenji Suzuki
 * @link       https://github.com/kenjis/fuelphp1st
 */
class Model_Csvimport extends Model
{
	/* HTML特殊文字をエスケープする関数 */
	function h($str) {
		return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
	}

	public static function import($post)
	{
		// パラメータを正しい構造で受け取った時のみ実行
		if (isset($_FILES['upfile']['error']) && is_int($_FILES['upfile']['error'])) {
			try {
				/* ファイルアップロードエラーチェック */
				switch ($_FILES['upfile']['error']) {
					case UPLOAD_ERR_OK:
						// エラー無し
						break;
					case UPLOAD_ERR_NO_FILE:
						// ファイル未選択
						throw new RuntimeException('File is not selected');
					case UPLOAD_ERR_INI_SIZE:
					case UPLOAD_ERR_FORM_SIZE:
						// 許可サイズを超過
						throw new RuntimeException('File is too large');
					default:
						throw new RuntimeException('Unknown error');
				}
				setlocale(LC_ALL, 'ja_JP.UTF-8');
				$tmp_name = $_FILES['upfile']['tmp_name'];
				$detect_order = 'ASCII,JIS,UTF-8,CP51932,SJIS-win';

				/* 文字コードを変換してファイルを置換 */
				$buffer = file_get_contents($tmp_name);
				if (!$encoding = mb_detect_encoding($buffer, $detect_order, true)) {
					// 文字コードの自動判定に失敗
					unset($buffer);
					throw new RuntimeException('Character set detection failed');
				}
				file_put_contents($tmp_name, mb_convert_encoding($buffer, 'UTF-8', $encoding));
				unset($buffer);

				/* データベースに接続 */
				$pdo = new PDO(
//					'mysql:dbname=cm0001_dev;host=localhost;charset=utf8', // テスト環境
					'mysql:dbname=cm0001;host=localhost;charset=utf8', // 本番環境
					'os',
					'pass',
					array(
						// カラム型に合わない値がINSERTされようとしたときSQLエラーとする
						PDO::MYSQL_ATTR_INIT_COMMAND => "SET SESSION sql_mode='TRADITIONAL'",
						// SQLエラー発生時にPDOExceptionをスローさせる
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
						// プリペアドステートメントのエミュレーションを無効化する
						PDO::ATTR_EMULATE_PREPARES => false,
					)
				);

				$sql = 'INSERT INTO cm_customers(last_name, firs_tname, ph_family_name, ph_name, sex, post_code, adress1, adress2, adress3, phone, personname, created_at)'
									. 'VALUES(:last_name, :firs_tname, :ph_family_name, :ph_name, :sex, :post_code, :adress1, :adress2, :adress3, :phone, :personname, :created_at)';
				
//				$stmt = $pdo->prepare('set character_set_database=utf8;');
//				$stmt->execute();
				$stmt = $pdo->prepare($sql);
				/* トランザクション処理 */
				$pdo->beginTransaction();
				try {
					$fp = fopen($tmp_name, 'rb');
					$cnt = 1;
					while ($row = fgetcsv($fp)) {
						if ($row === array(null) || $cnt < 5) {
							$cnt++;
							// 空行はスキップ
							continue;
						}
						if (count($row) !== 18) {
							// カラム数が異なる無効なフォーマット
							throw new RuntimeException('Invalid column detected');
						}
						// 性別の設定
						if (isset($row[6])) {
							if (strcmp($row[6], '男性') === 0) {
								$row[6] = 1;
							} else if (strcmp($row[5], '女性') === 0) {
								$row[6] = 2;
							} else {
								$row[6] = 0;
							}
						}
Log::debug('顧客名', $row[2]);
						$executed = $stmt->execute(array(
											':last_name'      => $row[2],
											':firs_tname'     => $row[3],
											':ph_family_name' => $row[4],
											':ph_name'        => $row[5],
											':sex'            => $row[6],
											':post_code'      => $row[7],
											':adress1'        => $row[8],
											':adress2'        => $row[9],
											':adress3'        => $row[10],
											':phone'          => $row[11],
											':personname'     => $row[15],
											':created_at'     => time(),
									   ));
//						$executed = $stmt->execute($row);// ここでデータ挿入
					}
					if (!feof($fp)) {
						// ファイルポインタが終端に達していなければエラー
						throw new RuntimeException('CSV parsing error');
					}
					fclose($fp);
					$pdo->commit();
				} catch (Exception $e) {
					fclose($fp);
					$pdo->rollBack();
					throw $e;
				}

				/* 結果メッセージをセット */
				if (isset($executed)) {
					// 1回以上実行された
					Session::set_flash('success', 'インポートに成功しました。');
				} else {
					// 1回も実行されなかった
					Session::set_flash('success', 'インポートデータがありませんでした。');
				}

			} catch (Exception $e) {

				/* エラーメッセージをセット */
				Session::set_flash('error', $e->getMessage());
			}
		}
	}
}