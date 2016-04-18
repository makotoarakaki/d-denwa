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
class Model_Csvexport extends Model {

	public static function export_csv($array, $csv_name) {
		// Response
		$response = new Response();

	    // content-type: csv
	    $response->set_header('Content-Type', 'application/csv');

	    // ファイル名をセット
	    $response->set_header('Content-Disposition', 'attachment; filename="'. $csv_name.'.csv' .'"');

	    // キャッシュをなしに
	    $response->set_header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
	    $response->set_header('Expires', 'Mon, 26 Jul 1997 05:00:00 GMT');
	    $response->set_header('Pragma', 'no-cache');
		$response->send(true);
 
		// CSVデータの出力
        echo(Format::forge($array)->to_csv());
        exit();
		return;
	}
}

