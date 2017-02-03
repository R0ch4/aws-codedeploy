<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Device extends ORM
{
	protected $_primary_key = 'dev_id';
	public function rules()
	{
		return array(
			'dev_imei' => array(
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 60)),
			),
		);
	}
}

?>
