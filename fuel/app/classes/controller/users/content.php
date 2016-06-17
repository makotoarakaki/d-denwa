<?php
class Controller_Users_Content extends Controller_Users
{
	private $_classname = 'content';

	public function action_index()
	{
		$_perpage = 5;
		$data = array();
		$data['page'] = Input::get('page');
		$cnt = DB::select()->from('contents')->execute('user_db')->count();

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

		$data['contents'] = Model_Content::query()->connection('user_db')
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

		$data['content'] = Model_Content::query()->connection('user_db')->where('id', $id)->get();
		if ( ! $data)
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
					// アップロードファイルを保存
					Upload::save();
					
					foreach (Upload::get_files() as $file)
					{
						$filename = $file['saved_as'];
					}				
				} 
				
				// データベースへ登録
				$query = DB::insert('contents');
				$query->columns(array('title', 'filename', 'overview', 'created_at', 'updated_at'));
				$query->values(array(Input::post('title'),$filename ,Input::post('overview'), time(), time()));
				if ($query->execute('user_db'))
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

		$contents = Model_Content::query()->connection('user_db')->where('id', $id)->get();
		if ( ! $contents )
		{
			Session::set_flash('error', '更新するデータが見つかりませんでした #'.$id);
			Response::redirect('users/content');
		}
		
		// バリデーション
		$val = Model_Content::validate('edit');

		if ($val->run())
		{
			$filename = '';

			// 元のファイル名を取得
			$sql = 'SELECT filename FROM cm_contents WHERE id = '.$id;
			$data = DB::query($sql)->execute('user_db')->current();
			
			if (Upload::is_valid() && !empty($contents->filename))
			{
				// 保存先よろファイル名を取得
				$image_path = \File::get(DOCROOT.'/uploads/'.$data['filename']);
				$url = $image_path->get_path();
				// ファイルの削除
				File::delete($url);
			}

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
			if (Upload::is_valid())
			{
				// アップロードファイルを保存
				Upload::save();

				foreach (Upload::get_files() as $file)
				{
					$filename = $file['saved_as'];
				}				
			} else {
				$filename = Input::post('filename');
			}
			$query = DB::update('contents');
			$query->set(array(
							'title' => Input::post('title'),
							'filename' => $filename,
							'overview' => Input::post('overview'),
						)
			);
			$ret = $query->execute('user_db');
			if(0 <= $ret)
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
				$contents[$id]['title'] = $val->validated('title');
				$contents[$id]['filename'] = $val->validated('filename');
				$contents[$id]['overview'] = $val->validated('overview');

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

		$contents = Model_Content::query()->connection('user_db')->where('id', $id)->get();
		if ( $contents )
		{
			// ファイル名を取得
			$sql = 'SELECT filename FROM cm_contents WHERE id = '.$id;
			$data = DB::query($sql)->execute('user_db')->current();
			
			if ($contents[$id]['filename'])
			{
				// 保存先よろファイル名を取得
				$image_path = \File::get(DOCROOT.'/uploads/'.$data['filename']);
				$url = $image_path->get_path();
				// ファイルの削除
				File::delete($url);
			}
			// データの削除
			$query = DB::delete('contents')->and_where('id', $id);
			$query->execute('user_db');

			Session::set_flash('success', '広告情報を削除しました。');
		}

		else
		{
			Session::set_flash('error', '広告情報の削除に失敗しました。');
		}

		Response::redirect('users/content');

	}

	public function action_image_delete($id = null)
	{
		is_null($id) and Response::redirect('users/content');
		
		$sql = 'SELECT filename FROM cm_contents WHERE id = '.$id;
		$data = DB::query($sql)->execute('user_db')->current();
		
		$contents = Model_Content::query()->connection('user_db')->where('id', $id)->get();
		if ($contents[$id]['filename'])
		{
			// 保存先よろファイル名を取得
			$image_path = \File::get(DOCROOT.'/uploads/'.$data['filename']);
			$url = $image_path->get_path();
			// ファイルの削除
			File::delete($url);
			// ファイル名を空白へ更新
			$query = DB::update('contents');
			$query->set(array(
							'filename' => '',
						)
			);
			$ret = $query->execute('user_db');
			if(1 <= $ret)
			{
				Session::set_flash('success', 'ファイルを削除しました。');				
			} else {
				Session::set_flash('error', '更新に失敗しました。');				
			}
		}

		else
		{
			Session::set_flash('error', 'ファイルの削除に失敗しました');
		}

		Response::redirect('users/content/edit/'.$id);

	}
	public function action_mainflg()
	{
		$id = Input::post('request');
		Response::redirect('users/content');

	}
	
}
