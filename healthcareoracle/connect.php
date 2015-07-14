<?php
$server='localhost';
$database='drdohc';

$username='root';
$password='t1ger';
$constring ='mysql:host='.$server.';dbname='.$database;
//oracle
$usernameo='drdohcroot';
$oconstring='oci:dbname=//'.$server.'/XE;';
$con = new PDO($oconstring, $usernameo, $password);
if(!$con)
	echo 'error in connecting';
?>
