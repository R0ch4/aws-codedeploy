<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Placa extends Controller_Template {

	public $template = 'templateadmin';
	public function action_index()
	{
		$content = View::Factory('placa/index');
    $content->placas = ORM::factory('Placa')->find_all();
		$this->template->content = $content;
	}

	public function action_add()
	{
		$errors = (array)null;
		$placa = ORM::factory('Placa');
		if($_POST)
		{
			$placa_data = $_POST;
			$placa->values($placa_data);
			$placa->created_at = date('Y-m-d H:i:s');
			$placa->updated_at = date('Y-m-d H:i:s');

			try {
				$placa->save();
				$this->redirect('placa/index/'.$placa->pla_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('placa/manage');
		$content->errors = $errors;
		$content->placa = $placa;
		$content->modelos = ORM::factory('Modelo')->find_all();
		$this->template->content = $content;
	}

	public function action_edit()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('placa');
		}

		$errors = (array)null;
		$placa = ORM::factory('Placa', $id);

		if( !isset($placa) || $placa->pla_id == null ) {
			$this->redirect('placa');
		}

		if($_POST)
		{
			$placa_data = $_POST;
			$placa->values($placa_data);
			$placa->updated_at = date('Y-m-d H:i:s');

			try {
				$placa->save();
				$this->redirect('placa/index/'.$placa->pla_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('placa/manage');
		$content->errors = $errors;
		$content->placa = $placa;
		$content->modelos = ORM::factory('Modelo')->find_all();
		$this->template->content = $content;
	}

	public function action_delete()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('placa');
		}

		$errors = (array)null;
		$placa = ORM::factory('Placa', $id);

		if( !isset($placa) || $placa->pla_id == null ) {
			$this->redirect('placa');
		}
		$placa->delete();
		$this->redirect('placa/');
	}

} // End Welcome
