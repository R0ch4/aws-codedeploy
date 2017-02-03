<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Modelo extends ORM
{
	protected $_primary_key = 'mod_id';
	public function rules()
	{
		return array(
			'mod_modelo' => array(
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 60)),
			),
		);
	}
}

?>
