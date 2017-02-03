<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Motorista extends Controller_Template {

	public $template = 'templateadmin';
	public function action_index()
	{
		$content = View::Factory('motorista/index');
    $content->motoristas = ORM::factory('Motorista')->find_all();
		$this->template->content = $content;

	}

	public function action_add()
	{
		$errors = (array)null;
		$motorista = ORM::factory('Motorista');
		if($_POST)
		{
			$motorista_data = $_POST;
			$motorista->values($motorista_data);
			$motorista->created_at = date('Y-m-d H:i:s');
			$motorista->updated_at = date('Y-m-d H:i:s');

			try {
				$motorista->save();
				$this->redirect('motorista/index/'.$motorista->mot_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('motorista/manage');
		$content->errors = $errors;
		$content->motorista = $motorista;
		$this->template->content = $content;
	}

	public function action_edit()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('motorista');
		}

		$errors = (array)null;
		$motorista = ORM::factory('Motorista', $id);

		if( !isset($motorista) || $motorista->mot_id == null ) {
			$this->redirect('motorista');
		}

		if($_POST)
		{
			$motorista_data = $_POST;
			$motorista->values($motorista_data);
			$motorista->updated_at = date('Y-m-d H:i:s');

			try {
				$motorista->save();
				$this->redirect('motorista/index/'.$motorista->mot_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('motorista/manage');
		$content->errors = $errors;
		$content->motorista = $motorista;
		$this->template->content = $content;
	}

	public function action_delete()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('motorista');
		}

		$errors = (array)null;
		$motorista = ORM::factory('Motorista', $id);

		if( !isset($motorista) || $motorista->mot_id == null ) {
			$this->redirect('motorista');
		}
		$motorista->delete();
		$this->redirect('motorista/');
	}

} // End Welcome
