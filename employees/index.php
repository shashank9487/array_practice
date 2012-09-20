<?php

$employee = array('shawn' => array(
	'emp_no' => 0001,
	'firstname' => 'Shawn',
	'surname' => 'wrangler',
	'dob' => array(
		'date' => 9,
		'month' => 'april',
		'year' => 1988 ),
	'age' => 24,
	'mobile' => '+91-9767544344',
	'email' => 'shawn@xyz.com',
	'address' => array(
		'street no' => '',
		'state' => 'New Delhi',
		'country' => 'India',
		'postal' => 116375 ) ));

print_r($employee);