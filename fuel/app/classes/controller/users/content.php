<?php
class Controller_Users_Content extends Controller_Users
{
	private $_classname = 'content';

	public function action_index()
	{
		$_perpage = 10;
		$data = array();
		$data['page'] = Input::get('page');
		$cnt = DB::select()->from('contents')->execute()->count();

		$pagination = \Pagination::forge('default', array(
						'wrapper' => "<div class=\"pagination\">\n\t{pagination}\n</div>\n",
						'uri_segment' => 'page',
						'total_items' =>  $cnt,
						'per_page' => $_perpage,
						'name' => 'bootstrap'
		));

		$data['paginate'] = \Pagination::instance('default')->render();

		if (\Pagination::get('current_page') == 1)
		{
			$data['offset'] = 0;
		}
		else
		{
			$data['offset'] = ($data['page'] -1) * $_perpage;
		}

		$data['contents'] = Model_Content::query()
			->order_by('created_at', 'DESC')
			->rows_offset($data['offset'])
			->rows_limit($_perpage)
		->get();			
		
		$this->template->set_global('total_customers', $pagination->total_items, false);

		$this->template->title = "広告管理"; //default
		$this->template->content = View::forge('users/content/index', $data);//default
	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('index');
		// 店舗情報を取得
		$info = Model_Basicinfo::find('first');


		if ( ! $data['content'] = Model_Content::find($id))
//		if ( ! $content = Model_Content::find($id))
		{
			Session::set_flash('error', '広告情報がありませんでした。'.$id);
			Response::redirect('users/content');
		}
		
		$this->template->title = "";
		$this->template->content = View::forge('users/content/view', $data);
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Content::validate('create');
			
			if ($val->run())
			{
				// 設定（ファイル保存場所）
				$config = array(
					'path' => DOCROOT . 'uploads/',
					'randomize' => true,
					'ext_whitelist' => array('pdf', 'img', 'jpg', 'jpeg', 'gif', 'png'),
				);

				// アップロード実行
				Upload::process($config, 
					array(
						'max_size'    => 10240,
						'auto_rename' => false,
						'overwrite'   => true
					));

				// 検証
				$filename = '';
				$file = $_FILES['upload'];
				if (Upload::is_valid())
				{
					$data = Upload::get_files(0);
					// アップロードファイルを保存
					Upload::save();
					
					foreach (Upload::get_files() as $file)
					{
						$filename = $file['saved_as'];
					}				
				} 
				else 
				{
					Session::set_flash('error', 'ファイルの保存に失敗しました。');					
					foreach (Upload::get_errors() as $error) {
						Log::debug('ファイルアップロードエラー  '. $error['errors'][0]['message']);
					}
				}
				
				// データベースへ登録
				$contents = Model_Content::forge(array(
					'title' => Input::post('title'),
					'filename' => $filename,
					'overview' => Input::post('overview'),
				));

				if ($contents and $contents->save())
				{
					Session::set_flash('success', '広告情報を追加しました。');

					Response::redirect('users/content');
				}

				else
				{
					Session::set_flash('error', '広告情報の追加に失敗しました。');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		$this->template->title = "広告管理";
		$this->template->content = View::forge('users/content/create');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users/content');

		if ( ! $contents = Model_Content::find($id))
		{
			Session::set_flash('error', '更新するデータが見つかりませんでした #'.$id);
			Response::redirect('users/content');
		}
		
		// バリデーション
		$val = Model_Content::validate('edit');

		if ($val->run())
		{
			$contents->title = Input::post('title');
			$contents->filename = Input::post('filename');
			$contents->overview = Input::post('overview');

			if ($contents->save())
			{
				Session::set_flash('success', '広告を更新しました。');

				Response::redirect('users/content');
			}

			else
			{
				Session::set_flash('error', '広告の更新に失敗しました。');
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$contents->title = $val->validated('title');
				$contents->filename = $val->validated('filename');
				$contents->overview = $val->validated('overview');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('contents', $contents, false);
		}

		$this->template->title = "広告管理";
		$this->template->content = View::forge('users/content/edit');
	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users/content');

		if ($customer = Model_Customer::find($id))
		{
			$customer->delete();

			Session::set_flash('success', '顧客情報を削除しました。'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete customer #'.$id);
		}

		Response::redirect('users/content');

	}
}
