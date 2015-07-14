<?php
$server='mysql:host=localhost';
$database='drdohc';
$username='root';
$password='t1ger';
$con = new PDO($server, $username, $password);
if(!$con)
	echo 'error in connecting';
$query="create database drdohc";
$sth = $con->prepare($query);
if($sth->execute())
{
  echo"database successfully created ";
}
else
  echo" faild to create the database ";
 
?>