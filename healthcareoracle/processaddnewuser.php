<?php
session_start();
require'connect.php';
if(isset($_POST['mob']))
{
	$uid=$_POST['uid'];
	$mob=$_POST['mob'];
	$name=$_POST['uname'];
	$prevl=$_POST['previlege'];
	if($_POST['p']==$_POST['cnp'])
	{
		$name=$_POST['uname'];
		$p=SHA1($_POST['p']);
		$sql=$con->prepare("select * from users where uname= ? ");
		$sql->execute(array($uid));
		$result=$sql->fetchAll(PDO::FETCH_NUM );
		if(count($result)==0)
		{
			$sql=$con->prepare("INSERT INTO users ( uname, pass, name, phone, privilege) VALUES ('$uid', '$p', '$name', $mob,$prevl) ");
		   if( $sql->execute())
		   {
				$_SESSION['suc']="NEW USER ADDED";
				header('location:'.'addnewuser.php');
			}
			else
			{
				$_SESSION['err']="Error in Inserting";
				header('location:'.'addnewuser.php');
			}

		}
		else
		{
			$_SESSION['err']="THIS (".$uid.")USERNAME ALREADY  EXIST";
			header('location:'.'addnewuser.php');
		}
	}
	else
	{
		$_SESSION['err']="PASSWORD DID NOT MATCH";
		header('location:'.'addnewuser.php');
	}
	
}
else
{
	header("location:"."addnewuser.php");
}
?>