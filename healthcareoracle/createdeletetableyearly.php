<?php
require 'connect.php';
$date=date('Y');
$table=$date.'status';
$temp=$con->prepare("create table $table (sno int AUTO_INCREMENT ,mname varchar(100) not null,type varchar(20), vol int, quant int,price float,primary key(sno))");  
$temp->execute();
$date=strtolower(date('Y', strtotime(date('Y-m')." -2 year")));
 $table=$date.'status';
$temp=$con->prepare("drop table $table");  
$temp->execute();
?>