<?php
require 'connect.php';
if(isset($_POST['mname']))
{
	$mname=$_POST['mname'];
	$query="SELECT bno FROM medstock WHERE mname = ? ";
	$stmt=$con->prepare($query);
	$stmt->execute(array($mname));
	$r=$stmt->fetchAll(PDO::FETCH_NUM);
	foreach($r as $i)
	{	
		foreach($i as $j)
		{	
				echo '<option>'.$j.'</option>';
		}
	
	}
}
