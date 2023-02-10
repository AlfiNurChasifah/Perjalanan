<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = ' ';
$dbname =  'votes';

$connect = new mysqli($dbhost, $dbbuser, $dbpass, $dbname);

if ($connect->connect_error) {
	die('Error Koneksi : ' . $connect->connect_error);
}
	