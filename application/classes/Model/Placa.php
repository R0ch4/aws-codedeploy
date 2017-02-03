<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Placa extends ORM
{
	protected $_primary_key = 'pla_id';
	public function rules()
	{
		return array(
			'pla_placa' => array(
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 10)),
			),
		);
	}

  protected $_belongs_to = array(
    'modelo' => array(
        'model'       => 'Modelo',
        'foreign_key' => 'mod_id',
    ),
  );
}

?>
