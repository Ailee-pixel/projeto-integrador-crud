<?php
session_start();

$DBHOST = 'localhost';
$DBUSR = 'root';
$DBPASS = '';
$DB = 'dbpipizzaria';

$con = mysqli_connect($DBHOST, $DBUSR, $DBPASS, $DB);
if ( mysqli_connect_errno() ) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
