<?php
session_start();
require'connect.php';
if(isset($_POST['uid']) && isset($_POST['np']) && isset($_POST['cnp']))
{
	$uid=$_POST['uid'];
	if($_POST['np']==$_POST['cnp'])
	{
		$np=SHA1($_POST['np']);
		$sql=$con->prepare("select * from users where uname= ? ");
		$sql->execute(array($uid));
		$result=$sql->fetchAll(PDO::FETCH_NUM );
		if(count($result)==1)
		{
			$sql=$con->prepare("update users set pass= ? where uname= ? ");
		    $sql->execute(array($np,$uid));
			$_SESSION['suc']="PASSWORD SUCCESSFULLY CHANGED";
			header('location:'.'changepass.php');
		}
		else
		{
			$_SESSION['err']="THIS USERNAME DOES NOT EXIST";
			header('location:'.'changepass.php');
		}
	}
	else
	{
		$_SESSION['err']="PASSWORD DID NOT MATCH";
		header('location:'.'changepass.php');
	}
	
}
else
{
	header("location:"."changepass.php");
}
?>