<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

	//Template para logado.
	public $template = 'templateadmin';

	//Método que chama os usuários cadastrados no sistema.
	public function action_index()
	{
		$content = View::Factory('user/index');
    	$content->users = ORM::factory('User')->find_all();

		$this->template->content = $content;
	}

	//Método que cadastrar usuários do sistema.
	public function action_add()
	{
		$errors = (array)null;

		$id = $this->request->param('id');

		if($_POST)
		{

			$user_data = $_POST;
			if( isset($user_data["password"]) && $user_data["password"] != "" ) {
				$user_data["password"] = md5($user_data["password"]);
			} else {
				unset($user_data["password"]);
			}
			$user->values($user_data);
			$user->created_at = date('Y-m-d H:i:s');
			$user->updated_at = date('Y-m-d H:i:s');

			try {
				$user->save();
				$this->redirect('user/index/');
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}
		
		$session = Session::instance()->get('name');
		$this->template->session = $session;
		$content = View::factory('user/manage');
		$this->template->content = $content;					
									
					
	}


	//Método que editar os usuários do sistema.
	public function action_edit()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('user');
		}

		$errors = (array)null;
		$user = ORM::factory('User', $id);

		if( !isset($user) || $user->id == null ) {
			$this->redirect('user');
		}

		if($_POST)
		{
			$user_data = $_POST;
			if( isset($user_data["password"]) && $user_data["password"] != "" ) {
				$user_data["password"] = md5($user_data["password"]);
			} else {
				unset($user_data["password"]);
			}
			$user->values($user_data);
			$user->updated_at = date('Y-m-d H:i:s');

			try {
				$user->save();
				$this->redirect('user/index/');
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}

		$content = View::Factory('user/manage');
		$content->errors = $errors;
		$content->user = $user;
		$this->template->content = $content;
	}

	//Metodo que deleta usuários do sistema.
	public function action_delete()
	{
		$id = $this->request->param('id');

		if( !isset($id) || $id <= 0 ) {
			$this->redirect('user');
		}

		$errors = (array)null;
		$user = ORM::factory('User', $id);

		if( !isset($user) || $user->id == null ) {
			$this->redirect('user');
		}
		$user->delete();
		$this->redirect('user/index');
	}

} // End Welcome
