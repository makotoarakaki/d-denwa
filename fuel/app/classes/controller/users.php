<?php
/**
 * 電子書籍『はじめてのフレームワークとしてのFuelPHP 第2版』の一部です。
 *
 * @version    1.0
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2014 Kenji Suzuki
 * @link       https://github.com/kenjis/fuelphp1st-2nd-contact-form
 * @link       https://github.com/kenjis/fuelphp1st-2nd
 */
class Controller_Users extends Controller_Base
{
	public $template = 'users/template';
	public function before()
	{
		parent::before();
		if (Request::active()->controller !== 'Controller_Users' or ! in_array(Request::active()->action, array('login', 'logout')))
		{
			if (Auth::check())
			{
//				$users_group_id = Config::get('auth.driver', 'Simpleauth') == 'Ormauth' ? 6 : 100;
//				if ( ! Auth::member($users_group_id))
				if ( !(Auth::member(100) || Auth::member(1)))
				{
					Session::set_flash('error', e('ログイン権限がありません！'));
					Auth::logout();
					Response::redirect('admin');
				}
			}
			else
			{
				Response::redirect('users/login');
			}
		}
	}
	public function action_login()
	{
		// Already logged in
		Auth::check() and Response::redirect('users');
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
					Response::redirect('users');
				}
				else
				{
					$this->template->set_global('login_error', '失敗しました');
				}
			}
		}
		$this->template->title = 'ユーザーログイン';
		$this->template->content = View::forge('users/login', array('val' => $val), false);
	}
	/**
	 * The logout action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_logout()
	{
		Auth::logout();
		Response::redirect('users');
	}
	/**
	 * The index action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		$this->template = Request::forge('users/content')->execute();
	}
}
/* End of file users.php */