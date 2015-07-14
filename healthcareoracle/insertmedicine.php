<?php
require 'connect.php';
if(isset($_POST['medname']) && !empty($_POST['medname']) && isset($_POST['type']) && !empty($_POST['type'])&&
   isset($_POST['volume']) && !empty($_POST['volume']) && isset($_POST['quantity']) && !empty($_POST['quantity'])&&
   isset($_POST['mdate']) && !empty($_POST['mdate']) && isset($_POST['edate']) && !empty($_POST['edate']) &&
   isset($_POST['cmp']) && !empty($_POST['cmp'])&&isset($_POST['bno']) && !empty($_POST['bno'])&&isset($_POST['price']) && !empty($_POST['price']))
{
  session_start();
  $medname=$_POST['medname'];
  $type=$_POST['type'];
  $volume=$_POST['volume'];
  $quantity=$_POST['quantity'];
  $cmp=$_POST['cmp'];
  $mdate=$_POST['mdate'];
  $edate=$_POST['edate'];
  $bno =$_POST['bno'];
  $price=$_POST['price'];
	$query="SELECT sno FROM medstock WHERE mname=? and bno=? and edate=?";
	$stmt=$con->prepare($query);
	$stmt->execute(array($medname,$bno,$edate));
	$r=$stmt->fetchAll(PDO::FETCH_NUM);
	if(count($r)==1)
	$sno = $r[0][0];
	if(count($r)==0)
	{
    $query="INSERT INTO medstock(mname, type, vol, quant, mdate, edate, cmp, bno, price) VALUES(?,?,?,?,?,?,?,?,?)";
	$stmt=$con->prepare($query);
	if($stmt->execute(array($medname,$type,$volume,$quantity,$mdate,$edate,$cmp,$bno,$price)))
	{
			   $_SESSION['suc']="medicine successfully inserted into database";
			   header('location:'.'addmedicine.php');
	}
	else
		print_r($con->errorInfo());
	}
	else if(count($r)==1)
	{
	$query="UPDATE medstock SET quant=quant+ ? WHERE sno= ?";
	$stmt=$con->prepare($query);
	if($stmt->execute(array($quantity,$sno)))
	{
		$_SESSION['suc']="medicine quantity successfully updated ";
		header('location:'.'addmedicine.php');
	}
	else
		
		print_r($con->errorInfo());
		
	}
	
}
else
		echo 'not posted'.count($_POST).$_POST['price'];
   
?>