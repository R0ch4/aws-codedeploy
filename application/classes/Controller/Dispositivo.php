<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dispositivo extends Controller_Template {

	public $template = 'templateadmin';
	public function action_index()
	{
		$content = View::Factory('dispositivo/index');
    	$content->dispositivos = ORM::factory('Dispositivo')->find_all();
		$this->template->content = $content;
	}

	public function action_add()
	{
		$errors = (array)null;
		$dispositivo = ORM::factory('Dispositivo');
		if($_POST)
		{
			$dispositivo_data = $_POST;
			$dispositivo->values($dispositivo_data);
			$dispositivo->created_at = date('Y-m-d H:i:s');
			$dispositivo->updated_at = date('Y-m-d H:i:s');

			try {
				$dispositivo->save();
				$this->redirect('dispositivo/index/'.$dispositivo->dis_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('dispositivo/manage');
		$content->errors = $errors;
		$content->dispositivo = $dispositivo;
		$this->template->content = $content;
	}

	public function action_edit()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('dispositivo');
		}

		$errors = (array)null;
		$dispositivo = ORM::factory('Dispositivo', $id);

		if( !isset($dispositivo) || $dispositivo->dis_id == null ) {
			$this->redirect('dispositivo');
		}

		if($_POST)
		{
			$dispositivo_data = $_POST;
			$dispositivo->values($dispositivo_data);
			$dispositivo->updated_at = date('Y-m-d H:i:s');

			try {
				$dispositivo->save();
				$this->redirect('dispositivo/index/'.$dispositivo->dis_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('dispositivo/manage');
		$content->errors = $errors;
		$content->dispositivo = $dispositivo;
		$this->template->content = $content;
	}

	public function action_delete()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('user');
		}

		$errors = (array)null;
		$dispositivo = ORM::factory('Dispositivo', $id);

		if( !isset($dispositivo) || $dispositivo->dis_id == null ) {
			$this->redirect('dispositivo');
		}
		$dispositivo->delete();
		$this->redirect('dispositivo/');
	}

} // End Welcome
