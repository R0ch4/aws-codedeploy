<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Chip extends ORM
{
	protected $_primary_key = 'chi_id';
	protected $_table_name = 'chip';
	public function rules()
	{
		return array(
			'chi_codigo' => array(
				array('not_empty'),
			),
		);
	}

  protected $_belongs_to = array(
    'device' => array(
        'model'       => 'Device',
        'foreign_key' => 'dev_id',
    ),
  );
}

?>
