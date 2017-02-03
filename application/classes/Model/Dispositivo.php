<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Dispositivo extends ORM
{
	protected $_primary_key = 'dis_id';
	public function rules()
	{
		return array(
			'dis_macaddress' => array(
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 60)),
			),
		);
	}
}

?>
