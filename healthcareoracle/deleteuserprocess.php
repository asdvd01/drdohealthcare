<?php
session_start();
if(!isset($_SESSION["name"])|| $_SESSION['type']!=1)
{
	header('location:'.'index.php');
}
require'connect.php';
if(isset($_POST['uid']))
{
	    $uid=$_POST['uid'];
		$sql=$con->prepare("delete from users where id= ? ");
		$sql->execute(array($uid));
		$result=$sql->fetchAll(PDO::FETCH_NUM );
		$_SESSION['suc']="USER SUCCESSFULLY DELETED";
		header('location:'.'viewuser.php');
}
?>