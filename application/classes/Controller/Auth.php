<?php defined('SYSPATH') or die('No direct script access.');

session_start();

class Controller_Auth extends Controller_Template{

	public $template = "templateLoginRegister";
	private $session;

	public function before()
	{
		parent::before();
		Session::$default = "database";
		$this->session = Session::instance();
	}

	
	public function action_login()
	{
		// Template
		$this->template->title = "Login";
		$content = View::factory('login/logar');

		$errors = (array)null;
		$content->msg = "";
		// POST
		if ($_POST)
		{

			$email = $this->request->post('email');
			$password = $this->request->post('password');
			$username = '';
			$user = ORM::factory('User')->where("email", "=", $email)->and_where("password", "=", md5($password))->find_all();
			foreach ($user as $info) {
				$username = $info->name;
			};

			try
			{
				if ($username)
				{

					$session = Session::instance();
					$name = $username;
					Session::instance()->set('name', $name);
					$this->template = View::factory('templateadmin')->bind('name', $name);
					$content = View::factory('index/home');
					$this->template->content = $content;					
					
				}
				else
				{
					$content->msg = "usuário e/ou senha inválidos";
				}
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors('models');
			}

		}
		$this->template->content = $content;
	}

	public function action_logout()
	{
		//Deletando a Sessão.
		$session = Session::instance();
		$session->destroy();
		$this->template = View::factory('templateLoginRegister');
		$content = View::factory('login/logar');
		$this->redirect('auth/login');	

	}
}// End Auth.
