<?php
require'connect.php';
if(isset($_POST['check_ed'])&&!empty($_POST['check_ed']))
{
   $x=$_POST['check_ed'];
   $N=count($x);
   for($i=0;$i<$N;$i++)
   {
      echo $sno=$x[$i];
      $delet=$con->prepare("delete from medstock where sno='$sno'");
	  if($delet->execute())
	  {
		  session_start();
		  $_SESSION['suc']=2;
		  header('location:'.'expiremedicine.php');
	  }
   }
}