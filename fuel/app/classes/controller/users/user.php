<?php
class Controller_Users_User extends Controller_Users
{

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = "ユーザー管理";
		$this->template->content = View::forge('users/user/index', $data);

	}

	public function action_view($id = null)
	{
		$data['user'] = Model_User::find($id);

		$this->template->title = "ユーザー管理";
		$this->template->content = View::forge('users/user/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('create');
		    
			if ($val->run())
			{
				$auth = Auth::create_user(
					Input::post('username'),
					Input::post('password'),
					Input::post('email'),
					100,
					array(
						'username' => Input::post('username'),
					)
				);
				if ($auth)
				{
					Session::set_flash('success', e('新しいユーザー '.Input::post('username').' さんを追加しました。'));

					Response::redirect('users/user');
				}

				else
				{
					Session::set_flash('error', e('ユーザー登録に失敗しました。'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "ユーザー管理";
		$this->template->content = View::forge('users/user/create');

	}

	public function action_edit($id = null)
	{
		$user = Model_User::find($id);
		$val = Model_User::validate('edit');

		if ($val->run())
		{
Log::debug('ユーザーパスワード', $user->password);
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
		if ($user = Model_User::find($id))
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
