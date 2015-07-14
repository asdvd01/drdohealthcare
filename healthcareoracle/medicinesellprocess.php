<?php
session_start();
$price1=0;$vol2=0;$type1=0;
$price2=0;$vol2=0;$type2=0;
$price3=0;$vol3=0;$type3=0;
$price4=0;$vol4=0;$type4=0;
$price5=0;$vol5=0;$type5=0;
$price6=0;$vol6=0;$type6=0;
require 'connect.php';
include'checkmonthlytable.php';
include'checkyearlytable.php';
if(isset($_POST['bno']) && !empty($_POST['bno']) && isset($_POST['mname']) &&!empty($_POST['mname']) && isset($_POST['quant']) && ! empty($_POST['quant']))
{
	$mname=$_POST['mname'];
	$bno=$_POST['bno'];
	$reqquant=$_POST['quant'];
   	$temp=$con->prepare('select quant,vol,price,type from medstock where bno=? and mname=?' );
	$temp->execute(array($bno,$mname));
	$r=$temp->fetchAll(PDO::FETCH_NUM );
	if(count($r)==1)
	{
		$price1=$r[0][2];
		$vol1=$r[0][1];
		$type1=$r[0][3];
		if($r[0][0]>$reqquant)
		{
			$quantity=$r[0][0]-$reqquant;
			$temp=$con->prepare('update medstock set quant= ? where bno=? and mname=?');
	        $temp->execute(array($quantity,$bno,$mname));
			
		    
		}
		else 
		if($r[0][0]==$reqquant)
		{
			
			$temp=$con->prepare('delete * from medstock where bno=? and mname=?');
	        $temp->execute(array($bno,$mname));
			
		}
        if($r[0][0]>=$reqquant)
        {
			include'updatecurrentmonthtable.php';
			include'updatecurrentyeartable.php';
		}			
	}
	else
	{
		$_SESSION['err']="inconsistent database";
		header('location:'.'updatemedicine.php');
	}
}
if(isset($_POST['bno1']) && !empty($_POST['bno1']) && isset($_POST['mname1']) &&!empty($_POST['mname1']) && isset($_POST['quant1']) && ! empty($_POST['quant1']))
{
	$mname=$_POST['mname1'];
	$bno=$_POST['bno1'];
	$reqquant=$_POST['quant1'];
   	$temp=$con->prepare('select quant,vol,price,type from medstock where bno=? and mname=?' );
	$temp->execute(array($bno,$mname));
	$r=$temp->fetchAll(PDO::FETCH_NUM );
	if(count($r)==1)
	{
		$price2=$r[0][2];
		$vol2=$r[0][1];
		$type2=$r[0][3];
		if($r[0][0]>$reqquant)
		{
			$quantity=$r[0][0]-$reqquant;
			$temp=$con->prepare('update medstock set quant= ? where bno=? and mname=?');
	        $temp->execute(array($quantity,$bno,$mname));
		}
		else 
		if($r[0][0]==$reqquant)
		{
			
			$temp=$con->prepare('delete * from medstock where bno=? and mname=?');
	        $temp->execute(array($bno,$mname));
		}
        if($r[0][0]>=$reqquant)
        {
			include'updatecurrentmonthtable.php';
			include'updatecurrentyeartable.php';
		}			
	}
	else
	{
		$_SESSION['err']="inconsistent database";
		header('location:'.'updatemedicine.php');
	}
}
if(isset($_POST['bno2']) && !empty($_POST['bno2']) && isset($_POST['mname2']) &&!empty($_POST['mname2']) && isset($_POST['quant2']) && ! empty($_POST['quant2']))
{
	$mname=$_POST['mname2'];
	$bno=$_POST['bno2'];
	$reqquant=$_POST['quant2'];
   	$temp=$con->prepare('select quant,vol,price,type from medstock where bno=? and mname=?' );
	$temp->execute(array($bno,$mname));
	$r=$temp->fetchAll(PDO::FETCH_NUM );
	if(count($r)==1)
	{
		$price3=$r[0][1];
		$vol3=$r[0][1];
		$type3=$r[0][3];
		if($r[0][0]>$reqquant)
		{
			$price3=$r[0][2];
			$quantity=$r[0][0]-$reqquant;
			$temp=$con->prepare('update medstock set quant= ? where bno=? and mname=?');
	        $temp->execute(array($quantity,$bno,$mname));
			
		    
		}
		else 
		if($r[0][0]==$reqquant)
		{
			
			$temp=$con->prepare('delete * from medstock where bno=? and mname=?');
	        $temp->execute(array($bno,$mname));
		}
        if($r[0][0]>=$reqquant)
        {
			include'updatecurrentmonthtable.php';
			include'updatecurrentyeartable.php';
		}			
	}
	else
	{
		$_SESSION['err']="inconsistent database";
		header('location:'.'updatemedicine.php');
	}
}
if(isset($_POST['bno3']) && !empty($_POST['bno3']) && isset($_POST['mname3']) &&!empty($_POST['mname3']) && isset($_POST['quant3']) && ! empty($_POST['quant3']))
{
	$mname=$_POST['mname3'];
	$bno=$_POST['bno3'];
	$reqquant=$_POST['quant3'];
   	$temp=$con->prepare('select quant,vol,price,type from medstock where bno=? and mname=?' );
	$temp->execute(array($bno,$mname));
	$r=$temp->fetchAll(PDO::FETCH_NUM );
	if(count($r)==1)
	{
		$price4=$r[0][2];
		$vol4=$r[0][1];
		$type4=$r[0][3];
		if($r[0][0]>$reqquant)
		{
			$quantity=$r[0][0]-$reqquant;
			$temp=$con->prepare('update medstock set quant= ? where bno=? and mname=?');
	        $temp->execute(array($quantity,$bno,$mname));
		}
		else 
		if($r[0][0]==$reqquant)
		{
			
			$temp=$con->prepare('delete * from medstock where bno=? and mname=?');
	        $temp->execute(array($bno,$mname));
		}
        if($r[0][0]>=$reqquant)
        {
			include'updatecurrentmonthtable.php';
			include'updatecurrentyeartable.php';
		}			
	}
	else
	{
		$_SESSION['err']="inconsistent database";
		header('location:'.'updatemedicine.php');
	}
}
if(isset($_POST['bno4']) && !empty($_POST['bno4']) && isset($_POST['mname4']) &&!empty($_POST['mname4']) && isset($_POST['quant4']) && ! empty($_POST['quant4']))
{
	$mname=$_POST['mname4'];
	$bno=$_POST['bno4'];
	$reqquant=$_POST['quant4'];
   	$temp=$con->prepare('select quant,vol,price,type from medstock where bno=? and mname=?' );
	$temp->execute(array($bno,$mname));
	$r=$temp->fetchAll(PDO::FETCH_NUM );
	if(count($r)==1)
	{
		$price5=$r[0][2];
		$vol5=$r[0][1];
		$type5=$r[0][3];
		if($r[0][0]>$reqquant)
		{
			$quantity=$r[0][0]-$reqquant;
			$temp=$con->prepare('update medstock set quant= ? where bno=? and mname=?');
	        $temp->execute(array($quantity,$bno,$mname));
			
		    
		}
		else 
		if($r[0][0]==$reqquant)
		{
			
			$temp=$con->prepare('delete * from medstock where bno=? and mname=?');
	        $temp->execute(array($bno,$mname));
			
		}
        if($r[0][0]>=$reqquant)
        {
			include'updatecurrentmonthtable.php';
			include'updatecurrentyeartable.php';
		}			
	}
	else
	{
		$_SESSION['err']="inconsistent database";
		header('location:'.'updatemedicine.php');
	}
}
if(isset($_POST['bno5']) && !empty($_POST['bno5']) && isset($_POST['mname5']) &&!empty($_POST['mname5']) && isset($_POST['quant5']) && ! empty($_POST['quant5']))
{
	$mname=$_POST['mname5'];
	$bno=$_POST['bno5'];
	$reqquant=$_POST['quant5'];
   	$temp=$con->prepare('select quant,vol,price,type from medstock where bno=? and mname=?' );
	$temp->execute(array($bno,$mname));
	$r=$temp->fetchAll(PDO::FETCH_NUM );
	if(count($r)==1)
	{
		$price6=$r[0][2];
		$vol6=$r[0][1];
		$type6=$r[0][3];
		if($r[0][0]>$reqquant)
		{
			$quantity=$r[0][0]-$reqquant;
			$temp=$con->prepare('update medstock set quant= ? where bno=? and mname=?');
	        $temp->execute(array($quantity,$bno,$mname));
			
		    
		}
		else 
		if($r[0][0]==$reqquant)
		{
			
			$temp=$con->prepare('delete * from medstock where bno=? and mname=?');
	        $temp->execute(array($bno,$mname));
			
		}
        if($r[0][0]>=$reqquant)
        {
			include'updatecurrentmonthtable.php';
			include'updatecurrentyeartable.php';
		}			
	}
	else
	{
		$_SESSION['err']="inconsistent database";$_SESSION['err']="inconsistent database";
		header('location:'.'updatemedicine.php');
	}
}
include'generatereceipt.php';
?>