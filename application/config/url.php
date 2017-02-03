<?php defined('SYSPATH') OR die('No direct script access.');

return array(

	'trusted_hosts' => array(
		// Set up your hostnames here
		//
		// Example:
		//
		//        'example\.org',
		//        '.*\.example\.org',
		//
		// Do not forget to escape your dots (.) as these are regex patterns.
		// These patterns should always fully match,
		// as they are prepended with `^` and appended with `$`
		'localhost',
		'54.186.77.50',
		'.*\.ec2-54-149-125-141\.us-west-2\.compute\.amazonaws\.com',
	),

);
