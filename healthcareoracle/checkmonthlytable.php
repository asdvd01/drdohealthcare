<?php
$date=date('M'); 
$tabname=$date.'status';
$temp=$con->prepare("SELECT * FROM information_schema.tables WHERE table_schema ='drdohc' AND table_name = ? LIMIT 1");
$temp->execute(array($tabname));
$r=$temp->fetchAll(PDO::FETCH_NUM );
if(count($r)==1)
$exists=1;
else
include'createdeletetable.php';
?>