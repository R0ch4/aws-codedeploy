<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Modelo extends Controller_Template {

	public $template = 'templateadmin';
	public function action_index()
	{
		$content = View::Factory('modelo/index');
    	$content->modelos = ORM::factory('Modelo')->find_all();
		$this->template->content = $content;

	}

	public function action_add()
	{
		$errors = (array)null;
		$modelo = ORM::factory('Modelo');
		if($_POST)
		{
			$modelo_data = $_POST;
			$modelo->values($modelo_data);
			$modelo->created_at = date('Y-m-d H:i:s');
			$modelo->updated_at = date('Y-m-d H:i:s');

			try {
				$modelo->save();
				$this->redirect('modelo/index/'.$modelo->mod_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('modelo/manage');
		$content->errors = $errors;
		$content->modelo = $modelo;
		$this->template->content = $content;
	}

	public function action_edit()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('modelo');
		}

		$errors = (array)null;
		$modelo = ORM::factory('Modelo', $id);

		if( !isset($modelo) || $modelo->mod_id == null ) {
			$this->redirect('modelo');
		}

		if($_POST)
		{
			$modelo_data = $_POST;
			$modelo->values($modelo_data);
			$modelo->updated_at = date('Y-m-d H:i:s');

			try {
				$modelo->save();
				$this->redirect('modelo/index/'.$modelo->mod_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('modelo/manage');
		$content->errors = $errors;
		$content->modelo = $modelo;
		$this->template->content = $content;
	}

	public function action_delete()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('user');
		}

		$errors = (array)null;
		$modelo = ORM::factory('Modelo', $id);

		if( !isset($modelo) || $modelo->mod_id == null ) {
			$this->redirect('modelo');
		}
		$modelo->delete();
		$this->redirect('modelo/');
	}

} // End Welcome
