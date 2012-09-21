<?php

$first = array( "Neo", "Morpheus", "Trinity", "Cypher", "Tank" );
$sur = array( "art", "mac", "john", "vipe", "bull" );
$desig = array( "manager", "tester", "programmer", "designer" );

$first_name = array_rand( $first, 5 );
$sur_name = array_rand( $sur, 5 );
$desig_name = array_rand( $desig, 4 );
$num = rand( 20, 99 );


$employee = array( );
for ( $i = 0; $i <= 99; $i++ ) {

	$employee[$i] = array(
		'emp_no' => $num,
		'firstname' => 'tank',
		'surname' => 'me',
		'dob' => array(
			'date' => 10,
			'month' => 'may',
			'year' => 1983
		),
		'age' => $i,
		'mobile' => '+91-9765544344',
		'email' => 'sewdfew@xyz.com',
		'address' => array(
			'street no' => '3434',
			'state' => 'New Delhi',
			'country' => 'India',
			'postal' => 116535
		),
		'designation' => 'desg',
		'salary' => '10k'
	);
}

//print_r( $data );

$youth = array( );
$retired = array( );

foreach ( $employee as $data ) {

	if ( $data['age'] >= 20 && $data['age'] <= 25 ) {

		$youth[$data['age']] = $data;
	} elseif ( $data['age'] >= 50 && $data['age'] <= 70 ) {
		$retired[$data['age']] = $data;
	}
}

$sections = array(
	'youth' => $youth,
	'retired' => $retired
);

print_r( $sections );