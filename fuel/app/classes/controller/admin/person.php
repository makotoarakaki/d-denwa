<?php
class Controller_Admin_Person extends Controller_Admin
{

	public function action_index()
	{
		$data['persons'] = Model_Person::find('all');
		$this->template->title = "担当者管理";
		$this->template->content = View::forge('admin/person/index', $data);

	}

	public function action_view($id = null)
	{
		$data['person'] = Model_Person::find($id);

		$this->template->title = "ユーザー管理";
		$this->template->content = View::forge('admin/person/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Person::validate('create');
		    
			if ($val->run())
			{
				$person = Model_Person::forge(array(
					'personname' => Input::post('personname'),
					'email' => Input::post('email'),
					'comment' => Input::post('comment'),
				));

				if ($person and $person->save())
				{
					Session::set_flash('success', e('新しい担当者 '.Input::post('personname').' さんを追加しました。'));

					Response::redirect('admin/person');
				}

				else
				{
					Session::set_flash('error', e('担当者の追加に失敗しました。'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "担当者管理";
		$this->template->content = View::forge('admin/person/create');

	}

	public function action_edit($id = null)
	{
		$person = Model_Person::find($id);
		$val = Model_Person::validate('edit');

		if ($val->run())
		{
			$person->personname = Input::post('personname');
			$person->email = Input::post('email');
			$person->comment = Input::post('comment');

			if ($person->save())
			{
				Session::set_flash('success', e('更新しました。'));

				Response::redirect('admin/person');
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
				$person->personname = $val->validated('personname');
				$person->email = $val->validated('email');
				$person->comment = $val->validated('comment');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('person', $person, false);
		}

		$this->template->title = "担当者管理";
		$this->template->content = View::forge('admin/person/edit');

	}

	public function action_delete($id = null)
	{
		if ($person = Model_Person::find($id))
		{
			$person->delete();

			Session::set_flash('success', e('商品 '.$person->personname. ' を削除しました。'));
		}

		else
		{
			Session::set_flash('error', e('削除に失敗しました。'));
		}

		Response::redirect('admin/person');

	}

}
