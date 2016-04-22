<?php

class Controller_Member extends Controller_Template
{

	//テンプレートファイルを指定
	public $template = 'member/template';
	//管理者かどうかを示すプロパティ
	public $is_admin = false;

	public function before()
	{
		//before()をオーバーライドするので、親クラスのbefore()を呼び出す
		parent::before();

		//認証済みでなく、現在リクエストされているアクションが'login'でない場合は
		//ログインフォームにリダイレクト
		if (!Auth::check() and Request::active()->action != 'login') {
			Response::redirect('member/login');
		}

		//ユーザが管理者（Administratorsグループ）であれば
		//is_adminプロパティをtrueに設定
		if (Auth::member(100)) {
			$this->is_admin = true;
		}
		//is_adminプロパティをビューに受け渡す
		View::set_global('is_admin', $this->is_admin);
	}

	public function action_index()
	{
		//会員トップページ
		$this->template->title = 'ようこそ' . Auth::get_screen_name() . 'さん';
		$this->template->content = View::forge('member/index');
	}

	public function action_login()
	{
		//既にログイン済みであれば会員トップページにリダイレクト
		Auth::check() and Response::redirect('member');
		$val = Validation::forge();
		if (Input::method() == 'POST')
		{
			$val->add('email', 'ユーザ名')
			    ->add_rule('required');
			$val->add('password', 'パスワード')
			    ->add_rule('required');
			if ($val->run())
			{
				$auth = Auth::instance();
				// check the credentials. This assumes that you have the previous table created
				if (Auth::check() or $auth->login(Input::post('email'), Input::post('password')))
				{
					// credentials ok, go right in
					if (Config::get('auth.driver', 'Simpleauth') == 'Ormauth')
					{
						$current_user = Model\Auth_User::find_by_username(Auth::get_screen_name());
					}
					else
					{
						$current_user = Model_User::find_by_username(Auth::get_screen_name());
					}
					Session::set_flash('success', e('ようこそ、'.$current_user->username.'さん'));
					Response::redirect('admin');
				}
				else
				{
					$this->template->set_global('login_error', '失敗しました');
				}
			}
		}
		$this->template->title = '会員ログイン';

		//usernameとpasswordがPOSTされている場合は認証を試みる
		if (Input::post('username') and Input::post('password')) {
			$username = Input::post('username');
			$password = Input::post('password');
			$auth = Auth::instance();

			//認証に成功したら会員トップページにリダイレクト
			if ($auth->login($username, $password)) {
				Response::redirect('member');
			}
		}

		//ログインフォームの表示
		$this->template->title = '会員専用ページ';
		$this->template->content = View::forge('member/form');
	}

	public function action_logout()
	{
		//ログアウト
		$auth = Auth::instance();
		$auth->logout();

		//'member'にリダイレクト
		Response::redirect('member');
	}

}
