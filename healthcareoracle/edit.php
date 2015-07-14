<?php

require 'connect.php';
?>
<head>
       <link rel="stylesheet" type="text/css" href="css/editstyle.css">
	   <script type="text/javascript" src="js/jquery.js"></script>
</head>
<?php
include'include.php';
if(isset($_POST["sno"]))
{
 $sno=$_POST["sno"];
 $query="SELECT * FROM medstock WHERE sno= ? ";
 $stmt=$con->prepare($query);
 $stmt->execute(array($sno));
 $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
 //print_r($row[0]);
 echo '<form action="#" method="post" id="editform">
            <input type="hidden" value='.$row[0]["SNO"].' name="sn" />
                                                             <br />
 <label id="mname" >Name</label>
            <input type="text" value='.$row[0]["MNAME"].' name="mname" id="xid" required/><br/>
 <label id="vol" >Volume </label>
            <input type="number" value='.$row[0]["VOL"].' name="vol" id="xid"required /><br />
  <label id="quant" >Quantity </label> 
            <input type="number" value='.$row[0]["QUANT"].' name="quant" id="xid" required /><br />
  <label id="mdate" >Manufactured Date  </label>
            <input type="date" value='.$row[0]["MDATE"].' name="mdate" id="xid" required /><br />
  <label id="edate">Expiry Date </label>
            <input type="date" value='.$row[0]["EDATE"].' name="edate" id="xid" rquired /><br />
 <label id="cmp">Company</label> 
            <input type="text" value='.$row[0]["CMP"].' name="cmp" id="xid" rquired /><br />
 <label id="bno">Batch Number</label> 
            <input type="text" value='.$row[0]["BNO"].' name="bno" id="xid" rquired /><br />
 <label id="price">Price</label> 
            <input type="float" value='.$row[0]["PRICE"].' name="price" id="xid" rquired /><br />
 <input type="submit" value="Edit" id="editbuttonid"/>
 </form>';

}
else if(isset($_POST["sn"]) &&isset($_POST["mname"]) &&isset($_POST["vol"]) &&isset($_POST["quant"]) &&isset($_POST["mdate"]) &&isset($_POST["edate"]) &&isset($_POST["cmp"]) &&isset($_POST["bno"]) &&isset($_POST["price"]))
{
	$sno=$_POST["sn"];
	$mname=$_POST["mname"];
	$vol=$_POST["vol"];
	$quant=$_POST["quant"];
	$mdate=$_POST["mdate"];
	$edate=$_POST["edate"];
	$cmp=$_POST["cmp"];
	$bno=$_POST["bno"];
	$price=$_POST["price"];
	$query="UPDATE medstock SET mname=?,vol=?,quant=?,mdate=?,edate=?,cmp=?,bno=?,price=? WHERE sno= ?";
 	$stmt=$con->prepare($query);
 	if($stmt->execute(array($mname,$vol,$quant,$mdate,$edate,$cmp,$bno,$price,$sno)))
 	{
    $_SESSION["suc"]="Successfully Updated";
    header("location:viewmed.php");
  }

}
else
header("location:home.php");

?>