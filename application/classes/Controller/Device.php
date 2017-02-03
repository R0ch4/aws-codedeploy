<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Device extends Controller_Template {

	public $template = 'templateadmin';
	public function action_index()
	{
		$content = View::Factory('device/index');
    $content->devices = ORM::factory('Device')->find_all();
		$this->template->content = $content;

	}

	public function action_add()
	{
		$errors = (array)null;
		$device = ORM::factory('Device');
		if($_POST)
		{
			$device_data = $_POST;
			$device->values($device_data);
			$device->created_at = date('Y-m-d H:i:s');
			$device->updated_at = date('Y-m-d H:i:s');

			try {
				$device->save();
				$this->redirect('device/index/'.$device->dev_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('device/manage');
		$content->errors = $errors;
		$content->device = $device;
		$this->template->content = $content;
	}

	public function action_edit()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('device');
		}

		$errors = (array)null;
		$device = ORM::factory('Device', $id);

		if( !isset($device) || $device->dev_id == null ) {
			$this->redirect('device');
		}

		if($_POST)
		{
			$device_data = $_POST;
			$device->values($device_data);
			$device->updated_at = date('Y-m-d H:i:s');

			try {
				$device->save();
				$this->redirect('device/index/'.$device->dev_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('device/manage');
		$content->errors = $errors;
		$content->device = $device;
		$this->template->content = $content;
	}

	public function action_delete()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('motorista');
		}

		$errors = (array)null;
		$device = ORM::factory('Device', $id);

		if( !isset($device) || $device->dev_id == null ) {
			$this->redirect('device');
		}
		$device->delete();
		$this->redirect('device/');
	}

} // End Welcome
