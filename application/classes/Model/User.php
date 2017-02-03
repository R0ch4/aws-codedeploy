<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends ORM
{
	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 150)),
			),
		);
	}
}

?>
