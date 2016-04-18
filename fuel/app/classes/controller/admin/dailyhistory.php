<?php
class Controller_Admin_Dailyhistory extends Controller_Admin
{

	public function action_index()
	{	
		$dailys = array();
		// 検索条件の取得
		$searchdate = Input::post('searchdate');
		// 担当者が選択　かつ　顧客性と顧客名が入力
		if (!empty($searchdate)) {
			// 設定された日付でデータを取得
			$val = str_replace ("/", "", "$searchdate");
			$daily_query = DB::select()->from('dailys')->where('today', $val)->order_by('no', 'desc');
			$dailys = $daily_query->execute()->as_array();			
			$this->template->set_global('searchdate', $searchdate, false); // 画面にデータを設定
		} else {
			$today = date('Ymd');
			// 日別のデータを取得
			$daily_query = DB::select()->from('dailys')->where('today', $today)->order_by('no', 'desc');
			$dailys = $daily_query->execute()->as_array();			
			$this->template->set_global('searchdate', date('Y/m/d', strtotime($today)), false); // 画面にデータを設定
		}


		$daily_data = Model_Daily::to_grid_table_data($dailys);
		$this->template->set_global('daily_data', $daily_data, false); // 画面にデータを設定
		
		// 担当者のデータを取得
		$person_query = DB::select()->from('persons');
		$persons = $person_query->execute()->as_array();
		// 担当者データを連結
		$person_data = Model_Daily::to_grid_list_data($persons, 'personname');
		$this->template->set_global('person_data', $person_data, false); // 画面にデータを設定

		// 商品のデータを取得
		$item_query = DB::select()->from('items');
		$items = $item_query->execute()->as_array();
		// 商品データを連結
		$item_data = Model_Daily::to_grid_list_data($items, 'itemname');
		$this->template->set_global('item_data', $item_data, false); // 画面にデータを設定

		$this->template->title = "日別履歴管理";
		$this->template->content = View::forge('admin/dailyhistory/index');
	}

	public function action_create()
	{
		$param = Input::post('param');
		if (Input::method() == 'POST')
		{
			// 追加ボタン押下時の処理
			if ($param == 'add') {
					// noを取得して１加算する。
					$arraymaxno = DB::query('select MAX(no) as no FROM cm_dailys where today = '.date('Ymd'))->execute()->current();
					$maxno = 1;
					if (!is_null($arraymaxno['no'])) {
						$maxno = (Int) $arraymaxno['no'] + 1;
					}
					// 時間を取得をする。
					$datetime = Input::post('datetime');
					if (!empty($datetime)) {
	//					$datetime = Input::post('date')->format("%Y/%m/%d").Input::post('datetime');			
						$datetime =Input::post('datetime');			
					}
					
					// 担当者マスタより担当者を取得
					$personname = DB::select('personname')->from('persons')->where('id', '=', Input::post('personname'))->execute()->current();
					// 商品マスタより商品名、単価を取得
					$items = DB::select('itemname', 'unit')->from('items')->where('id', '=', Input::post('itemname'))->execute()->current();
					
					$daily = Model_Daily::forge(array(
						'no' => $maxno,
						'customername' => Input::post('customername'),
						'personname' => $personname,
						'datetime' => $datetime,
						'itemname' => $items['itemname'],
						'amount' => $items['unit'],
						'biko' => Input::post('biko'),
						'today' => date('Ymd',strtotime(Input::post('date'))),
					));

					if ($daily and $daily->save())
					{
						Session::set_flash('success', e('新しい予約 '.Input::post('itemname').' を追加しました。'));

						Response::redirect('admin/daily');
					}

					else
					{
						Session::set_flash('error', e('予約の追加に失敗しました。'));
					}
			// 更新ボタンが押下時の処理
			} else if ($param == 'edit') {

				$id = Input::post('id');
				$daily = Model_Daily::find($id);

				// 時間の編集をする。
				$datetime = Input::post('datetime');
				if (!empty($datetime)) {
					$datetime = Input::post('datetime');			
				}
				// 担当者マスタより担当者を取得
				$personname = DB::select('personname')->from('persons')->where('id', '=', Input::post('personname'))->execute()->current();
				// 商品マスタより商品名、単価を取得
				$items = DB::select('itemname', 'unit')->from('items')->where('id', '=', Input::post('itemname'))->execute()->current();

				$daily->customername = Input::post('customername');
				$daily->personname = $personname;
				$daily->datetime = $datetime;
				$daily->itemname = $items['itemname'];
				$daily->amount = $items['unit'];
				$daily->biko = Input::post('biko');
				$daily->today = date('Ymd',strtotime(Input::post('date')));

				if ($daily->save())
				{
					Session::set_flash('success', e('更新しました。'));

					Response::redirect('admin/daily');
				}

				else
				{
					Session::set_flash('error', e('更新に失敗しました。'));
				}
			// 削除ボタン押下時の処理
			} else {
				$id = Input::post('id');
				if ($daily = Model_Daily::find($id))
				{
					$daily->delete();

					Session::set_flash('success', e('予約情報を削除しました。'));
				}

				else
				{
					Session::set_flash('error', e('予約情報の削除に失敗しました。'));
				}

			}
		}

		$this->template->title = "日別管理";
		$this->template->content = View::forge('admin/daily/index');
	}

	public function action_search()
	{
		// 担当者リストを取得
		$person_selects = Model_Customer::get_PersonList('担当者');	
		$this->template->set_global('person_selects', $person_selects, false);

		// 検索条件の取得
		$person = Input::post('search_person');
		$last_name = Input::post('search_last_name');
		$firs_tname = Input::post('search_firs_tname');
		// 担当者が選択　かつ　顧客性と顧客名が入力
		if (!empty($person) and (!empty($last_name) and !empty($firs_tname))) {
			$data['customers'] = Model_Customer::query()
				->where('person_id', $person)
				->and_where_open()
					->where('last_name', 'like', '%'.$last_name.'%')
					->where('firs_tname', 'like', '%'.$firs_tname.'%')
				->and_where_close()
				->order_by('updated_at', 'DESC')->get();
		// 担当者が選択　かつ　顧客性が入力
		} else if (!empty($person) and !empty($last_name)) {
			$data['customers'] = Model_Customer::query()
				->where('person_id', $person)
				->where('last_name', 'like', '%'.$last_name.'%')
				->order_by('updated_at', 'DESC')->get();
		// 担当者が選択　かつ　顧客名が入力
		} else if (!empty($person) and !empty($firs_tname)) {
			$data['customers'] = Model_Customer::query()
				->where('person_id', $person)
				->where('firs_tname', 'like', '%'.$firs_tname.'%')
				->order_by('updated_at', 'DESC')->get();
		// 顧客性と顧客名が入力
		} else if (!empty($last_name) and !empty($firs_tname)) {
			$data['customers'] = Model_Customer::query()
				->where('last_name', 'like', '%'.$last_name.'%')
				->where('firs_tname', 'like', '%'.$firs_tname.'%')
				->order_by('updated_at', 'DESC')->get();
		// 顧客性が入力
		} else if (!empty($last_name)) {
			$data['customers'] = Model_Customer::query()
				->where('last_name', 'like', '%'.$last_name.'%')
				->order_by('updated_at', 'DESC')->get();
		// 顧客名が入力
		} else if (!empty($firs_tname)) {
			$data['customers'] = Model_Customer::query()
				->where('firs_tname', 'like', '%'.$firs_tname.'%')
				->order_by('updated_at', 'DESC')->get();
		// 担当者が入力
		} else if (!empty($person)) {
			$data['customers'] = Model_Customer::query()
				->where('person_id', $person)
				->order_by('updated_at', 'DESC')->get();
		// 検索条件なし
		} else {
			$_perpage = 10;
			$data = array();
			$data['page'] = Input::get('page');
			$cnt = DB::select()->from('customers')->execute()->count();

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

			$data['customers'] = Model_Customer::query()
				->order_by('updated_at', 'DESC')
				->rows_offset($data['offset'])
				->rows_limit($_perpage)
			->get();			
	
			$this->template->set_global('total_customers', $pagination->total_items, false);
		}


		$this->template->title = "日別管理"; //default
		$this->template->content = View::forge('admin/daily/search', $data);//default
	}
	
	public function action_reflec($id = null)
	{
		if ( ! $customer = Model_Customer::find($id))
		{
			Session::set_flash('error', '顧客データが見つかりませんでした #'.$id);
			Response::redirect('admin/customer');
		} else {
			$customername = $customer['last_name'].'  '.$customer['firs_tname'];
			$personname = $customer['personname'];

		}

		// noを取得して１加算する。
		$arraymaxno = DB::query('select MAX(no) as no FROM cm_dailys where today = '.date('Ymd'))->execute()->current();
		$maxno = 1;
		if (!is_null($arraymaxno['no'])) {
			$maxno = (Int) $arraymaxno['no'] + 1;
		}

		$daily = Model_Daily::forge(array(
			'no' => $maxno,
			'customername' => $customername,
			'personname' => $personname,
			'amount' => 0,
			'today' => date('Ymd'),
		));

		if ($daily and $daily->save())
		{
			Session::set_flash('success', e('新しい予約 '.Input::post('itemname').' を追加しました。'));

			Response::redirect('admin/daily');
		}

		else
		{
			Session::set_flash('error', e('予約の追加に失敗しました。'));
		}

		$this->template->title = "日別管理";
		$this->template->content = View::forge('admin/daily/index');
	}

}
