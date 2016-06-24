<?php
/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Ddenwa extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		// 広告情報の取得
		$data['contents'] = Model_Content::query()->connection('user_db')
			->where('mainflg', 1)->get();
		// 基本情報の取得
		$info = DB::select('temponame', 'telno')->from('basicinfo')->execute('user_db');
 
		if ( ! $data)
		{
			Session::set_flash('error', '広告情報がありませんでした。');
			Response::redirect('users/content');
		}
		
        $view = View::forge('ddenwa/index', $data);
		$view->set('temponame', $info[0]['temponame']);
		$view->set('telno', $info[0]['telno']);

		return Response::forge($view);		
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
