<?php
class Controller_Users_Basicinfo extends Controller_Users
{

	public function action_index()
	{
		$data['info'] = Model_Basicinfo::find('all');
		$this->template->title = "基本情報";
		$this->template->content = View::forge('users/basicinfo/index', $data);

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
					$info = Model_Basicinfo::find('all');
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

	public function action_edit($id = null)
	{
		$user = Model_Basicinfo::find($id);
		$val = Model_Basicinfo::validate('edit');

		if ($val->run())
		{
			$auth = Auth::update_user(
						array(
							'password' => Input::post('password'), 
							'old_password' => 'pass', 
							'email' => Input::post('email'), 
						)
					);
/*
			$user->username = Input::post('username');
			$user->password = Input::post('password');
			$user->email = Input::post('email');
*/
			if ($user->username != Input::post('username')) 
			{
				Session::set_flash('error', e('ユーザー名は変更できません。'));				
			} 
			else if ($auth)
			{
				Session::set_flash('success', e('更新しました。'));

				Response::redirect('users/user');
			}

			else
			{
				Session::set_flash('error', e('更新に失敗しました。'));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$user->username = $val->validated('username');
				$user->password = $val->validated('password');
				$user->email = $val->validated('email');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "ユーザー管理";
		$this->template->content = View::forge('users/user/edit');

	}

	public function action_delete($id = null)
	{
		if ($user = Model_Basicinfo::find($id))
		{
			$user->delete();

			Session::set_flash('success', e('ユーザー '.$user->username. ' を削除しました。'));
		}

		else
		{
			Session::set_flash('error', e('削除に失敗しました。'));
		}

		Response::redirect('users/user');

	}

}
