<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Motorista extends ORM
{
	protected $_primary_key = 'mot_id';
	public function rules()
	{
		return array(
			'mot_nome' => array(
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 60)),
			),
		);
	}
}

?>
