<?php
$year=date('Y');
$yearlytable=$year.'status';
$temp=$con->prepare("SELECT * FROM information_schema.tables WHERE table_schema ='drdohc' AND table_name = ? LIMIT 1");
$temp->execute(array($yearlytable));
$r=$temp->fetchAll(PDO::FETCH_NUM );
if(count($r)==1)
$exists=1;
else
include'createdeletetableyearly.php';
?>