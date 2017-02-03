<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Chip extends Controller_Template {

	public $template = 'templateadmin';
	
	public function action_index()
	{
		$content = View::Factory('chip/index');
    	$content->chips = ORM::factory('Chip')->find_all();
		$this->template->content = $content;
	}

	public function action_add()
	{
		$errors = (array)null;
		$chip = ORM::factory('Chip');

		if($_POST)
		{
			$chip_data = $_POST;
			$chip->values($chip_data);
			$chip->created_at = date('Y-m-d H:i:s');
			$chip->updated_at = date('Y-m-d H:i:s');

			try {
				$chip->save();
				$this->redirect('chip/index/'.$chip->chi_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}
		$username = "";
		$session = Session::instance();
		$name = $session->get('username');
		$this->template = View::factory('templateadmin')->bind('name', $name);
	
		$content = View::Factory('chip/manage');
		$content->errors = $errors;
		$content->chip = $chip;
		$content->devices = ORM::factory('Device')->find_all();
		$this->template->content = $content;
	}

	public function action_edit()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('chip');
		}

		$errors = (array)null;
		$chip = ORM::factory('Chip', $id);

		if( !isset($chip) || $chip->chi_id == null ) {
			$this->redirect('chip');
		}

		if($_POST)
		{
			$chip_data = $_POST;
			$chip->values($chip_data);
			$chip->updated_at = date('Y-m-d H:i:s');

			try {
				$chip->save();
				$this->redirect('chip/index/'.$chip->chi_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('chip/manage');
		$content->errors = $errors;
		$content->chip = $chip;
		$content->devices = ORM::factory('Device')->find_all();
		$this->template->content = $content;
	}

	public function action_delete()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('placa');
		}

		$errors = (array)null;
		$chip = ORM::factory('Chip', $id);

		if( !isset($chip) || $chip->chi_id == null ) {
			$this->redirect('chip');
		}
		$chip->delete();
		$this->redirect('chip/');
	}

} // End Welcome
