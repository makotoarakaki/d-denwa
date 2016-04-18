<?php
class Controller_Admin_Item extends Controller_Admin
{

	public function action_index()
	{
		$data['items'] = Model_Item::find('all');
		$this->template->title = "商品管理";
		$this->template->content = View::forge('admin/item/index', $data);

	}

	public function action_view($id = null)
	{
		$data['item'] = Model_Item::find($id);

		$this->template->title = "ユーザー管理";
		$this->template->content = View::forge('admin/item/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Item::validate('create');
		    
			if ($val->run())
			{
				$item = Model_Item::forge(array(
					'itemname' => Input::post('itemname'),
					'unit' => Input::post('unit'),
					'comment' => Input::post('comment'),
				));

				if ($item and $item->save())
				{
					Session::set_flash('success', e('新しい商品 '.Input::post('itemname').' を追加しました。'));

					Response::redirect('admin/item');
				}

				else
				{
					Session::set_flash('error', e('商品の追加に失敗しました。'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "商品管理";
		$this->template->content = View::forge('admin/item/create');

	}

	public function action_edit($id = null)
	{
		$item = Model_Item::find($id);
		$val = Model_Item::validate('edit');

		if ($val->run())
		{
			$item->itemname = Input::post('itemname');
			$item->unit = Input::post('unit');
			$item->comment = Input::post('comment');

			if ($item->save())
			{
				Session::set_flash('success', e('更新しました。'));

				Response::redirect('admin/item');
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
				$item->itemname = $val->validated('itemname');
				$item->unit = $val->validated('unit');
				$item->comment = $val->validated('comment');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('item', $item, false);
		}

		$this->template->title = "商品管理";
		$this->template->content = View::forge('admin/item/edit');

	}

	public function action_delete($id = null)
	{
		if ($item = Model_Item::find($id))
		{
			$item->delete();

			Session::set_flash('success', e('商品 '.$item->itemname. ' を削除しました。'));
		}

		else
		{
			Session::set_flash('error', e('削除に失敗しました。'));
		}

		Response::redirect('admin/item');

	}

}
