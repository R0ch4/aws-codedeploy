<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Periferico extends Controller_Template {

	public $template = 'templateadmin';

	public function action_index()
	{
		$content = View::Factory('periferico/index');
    	$content->perifericos = ORM::factory('periferico')->find_all();
		$this->template->content = $content;
	}

	public function action_add()
	{
		$errors = (array)null;
		$periferico = ORM::factory('Periferico');
		if($_POST)
		{
			$periferico_data = $_POST;
			$periferico->values($periferico_data);
			$periferico->created_at = date('Y-m-d H:i:s');
			$periferico->updated_at = date('Y-m-d H:i:s');

			try {
				$periferico->save();
				$this->redirect('periferico/index/'.$periferico->per_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('periferico/manage');
		$content->errors = $errors;
		$content->periferico = $periferico;
		$this->template->content = $content;
	}

	public function action_edit()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('periferico');
		}

		$errors = (array)null;
		$periferico = ORM::factory('Periferico', $id);

		if( !isset($periferico) || $periferico->per_id == null ) {
			$this->redirect('periferico');
		}

		if($_POST)
		{
			$periferico_data = $_POST;
			$periferico->values($periferico_data);
			$periferico->updated_at = date('Y-m-d H:i:s');

			try {
				$periferico->save();
				$this->redirect('periferico/index/'.$periferico->per_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('periferico/manage');
		$content->errors = $errors;
		$content->periferico = $periferico;
		$this->template->content = $content;
	}

	public function action_delete()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('user');
		}

		$errors = (array)null;
		$periferico = ORM::factory('Periferico', $id);

		if( !isset($periferico) || $periferico->per_id == null ) {
			$this->redirect('periferico');
		}
		$periferico->delete();
		$this->redirect('periferico/');
	}

} // End Welcome
