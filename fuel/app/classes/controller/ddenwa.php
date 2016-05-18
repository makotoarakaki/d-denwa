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
		is_null($id) and Response::redirect('index');
		// 店舗情報を取得
		$info = Model_Basicinfo::find('first');


//		if ( ! $data['content'] = Model_Content::find($id))
		if ( ! $content = Model_Content::find($id))
		{
			Session::set_flash('error', '広告情報がありませんでした。'.$id);
			Response::redirect('index');
		}
		//ファイル名取得
		if (!empty($content->filename)) {
			$content->filename = \File::get(DOCROOT.'/uploads/'.$content->filename);		
		} else {
			$content->filename = \File::get(DOCROOT.'/uploads/'.no_photo.gif);
		}
		
		View::set_global('title', $info->temponame);
//		View::set_global('content', $content);
//		$this->template->content = View::forge('index');
		return Response::forge(View::forge('ddenwa/index', $content));
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
