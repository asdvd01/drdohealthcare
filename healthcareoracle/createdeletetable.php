<?php
require 'connect.php';
$date=date('M');
$table=$date.'status';
$temp=$con->prepare("create table $table (sno int AUTO_INCREMENT ,mname varchar(100) not null,type varchar(20), vol int, quant int,price float,primary key(sno))");  
$temp->execute();
$date=strtolower(date('M', strtotime(date('Y-m')." -2 month")));
$table=$date.'status';
$temp=$con->prepare("drop table $table");  
$temp->execute();


?>