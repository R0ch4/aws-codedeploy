<?php defined('SYSPATH') OR die('No direct script access.');

return array(
    'native' => array(
        'name' => 'session_native',
        'lifetime' => 43200
    ),
    'cookie' => array(
        'name' => 'session_cookie',
        'encrypted' => TRUE,
        'lifetime' => 43200
    ),
    'database' => array(
        'name' => 'session_database',
        'encrypted' => FALSE,
        'lifetime' => 43200,
        'group' => 'default',
        'table' => 'sessions',
        'columns' => array(
            'session_id'  => 'session_id',
            'user_name'     => 'user_name',
            'last_active' => 'last_active',
            'contents'    => 'contents'
        ),
        'gc' => 500
    )
);
