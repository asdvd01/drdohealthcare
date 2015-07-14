<?php
require 'connect.php';
if(isset($_POST["sno"]))
{
 $sno=$_POST["sno"];
 $query="DELETE FROM medstock WHERE sno = ?";
 $stmt=$con->prepare($query);
 if($stmt->execute(array($sno)))
 	echo '<td colspan=11 style="background:#66FF99;"><center style="color:#009900;">deleted successfully</center></td>';
}
else
header("location:home.php");
?>