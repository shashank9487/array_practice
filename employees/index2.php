<?php

$first = array( "Neo", "Morpheus", "Trinity", "Cypher", "Tank" );
$sur = array( "art", "mac", "john", "vipe", "bull" );
$desig = array( "manager", "tester", "programmer", "designer" );

$age = range( 20, 80 );
$date = range( (date( "d" ) - 20 ), ((date( "d" ) - 20) + 31 ) );
$month = range( (date( "m" ) - 8 ), ((date( "m" ) - 8) + 11 ) );
$year = range( 1900, 2000 );
$emp_num = range( 100, 200 );

$employee = array( );

for ( $i = 0; $i <= 99; $i++ ) {

	$emp_age = array_rand( $age );
	$get_age = $age[$emp_age];

	$emp_id = array_rand( $emp_num );
	$get_id = $emp_num[$emp_id];

	$first_name = array_rand( $first );
	$name = $first[$first_name];

	$sur_name = array_rand( $sur );
	$sname = $sur[$sur_name];

	$desig_name = array_rand( $desig );
	$get_desig = $desig[$desig_name];

	$dt = array_rand( $date );
	$get_date = $date[$dt];

	$mth = array_rand( $month );
	$get_month = $month[$mth];

	$yr = array_rand( $year );
	$get_year = $year[$yr];

	$employee[$i] = array(
		'emp_id' => $get_id,
		'firstname' => $name,
		'surname' => $sname,
		'dob' => array(
			'date' => $get_date,
			'month' => $get_month,
			'year' => $get_year
		),
		'age' => $get_age,
		'mobile' => '+91-9765544344',
		'email' => 'sewdfew@xyz.com',
		'address' => array(
			'street no' => '3434',
			'state' => 'New Delhi',
			'country' => 'India',
			'postal' => 116535
		),
		'designation' => $get_desig,
		'salary' => '10k'
	);
}

//print_r( $employee );

$youth = array( );
$experience = array( );
$retired = array( );
$sections = array( );

foreach ( $employee as $data ) {

	if ( $data['age'] >= 20 && $data['age'] <= 30 ) {

		$youth[$data['age']][] = $data;
	} elseif ( $data['age'] >= 30 && $data['age'] <= 50 ) {
		$experience[$data['age']][] = $data;
	} elseif ( $data['age'] >= 50 && $data['age'] <= 80 ) {
		$retired[$data['age']][] = $data;
	}
}

$sections = array(
	'youth' => $youth,
	'experience' => $experience,
	'retired' => $retired
);

print_r( $sections );