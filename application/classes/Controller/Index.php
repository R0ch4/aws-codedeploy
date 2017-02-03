<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template{

	public $template = 'templateadmin';
	private $session;

	public function before()
	{
		parent::before();
		Session::$default = "database";
		$this->session = Session::instance();

		if($this->is_logged_in() != true)
		{
			$this->$template = View::factory('templatelogin');
			$content = View::Factory('index/home');
			$this->template->content = $content;			
		}
	}

	public function action_home()
	{
		$content = View::Factory('index/home');
		$this->template->content = $content;
	}

	private function is_logged_in()
	{
		return $this->session->get("logged_in");
	}
}