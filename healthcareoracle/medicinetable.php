<?php
require 'connect.php';

$query="create table medstock(sno int AUTO_INCREMENT ,mname varchar(100) not null,type varchar(20), vol int, quant int,mdate varchar(100),edate varchar(100),cmp varchar(100),bno varchar(20),price float ,primary key(sno))";
$sth=$con->prepare($query);
if($sth->execute())
{
  echo "medicine table successfully created ";
 
}
else
  echo " failed to create the medicine table ";
?>