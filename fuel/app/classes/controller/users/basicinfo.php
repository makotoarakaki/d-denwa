<?php
class Controller_Users_Basicinfo extends Controller_Users
{

	public function action_index()
	{
		$this->template->title = "基本情報";
		$info = Model_Basicinfo::find('first');

		$this->template->set_global('info', $info, false);
		$this->template->content = View::forge('users/basicinfo/index');
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Basicinfo::validate('create');
		    
			if ($val->run())
			{
				// 登録がなかったらInsert
				$cnt = DB::select()->from('basicinfo')->execute()->count();
				
				if ($cnt < 1) {
					// 電話番号から"-"を削除する。
					$teino = str_replace("-","",Input::post('telno'));
					// データベースへ登録
					$info = Model_Basicinfo::forge(array(
						'username' => Input::post('username'),
						'temponame' => Input::post('temponame'),
						'telno' => $teino,
					));

					if ($info and $info->save())
					{
						Session::set_flash('success', '基本情報を追加しました。');

						Response::redirect('users/basicinfo');
					}

					else
					{
						Session::set_flash('error', '基本情報の追加に失敗しました。');
					}

				}
				else
				{
					// 更新処理
					$info = Model_Basicinfo::find('first');
					$val = Model_Basicinfo::validate('edit');

					// 電話番号から"-"を削除する。
					$teino = str_replace("-","",Input::post('telno'));
					if ($val->run())
					{
						$info->temponame = Input::post('temponame');
						$info->telno = $teino;

						if ($info->save())
						{
							Session::set_flash('success', '基本情報を更新しました。');

							Response::redirect('users/basicinfo');
						}

						else
						{
							Session::set_flash('error', '基本情報の顧客情報の更新に失敗しました。');
						}

					}
					else
					{
						if (Input::method() == 'POST')
						{
							$info->temponame = $val->validated('temponame');
							$info->telno = $val->validated('telno');

							Session::set_flash('error', $val->error());
						}						
					}
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "基本情報";
		$this->template->content = View::forge('users/basicinfo');

	}
}
