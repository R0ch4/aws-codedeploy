<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Periferico extends ORM
{
	protected $_primary_key = 'per_id';
	public function rules()
	{
		return array(
			'per_nome' => array(
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 60)),
			),
		);
	}
}

?>
