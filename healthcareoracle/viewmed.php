<?php
require 'connect.php';
include'include.php';
include'message.php';
if(!isset($_SESSION["name"])||( $_SESSION['type']!=3 && $_SESSION['type']!=1))
{
	header('location:'.'home.php');
}
if(isset($_POST["skey"]))
{
 $mname=$_POST["skey"];
 $query="SELECT * FROM medstock WHERE mname= ? ";
 $stmt=$con->prepare($query);
 $stmt->execute(array($mname));
 $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
}
else

{
 $query="SELECT * FROM medstock ";
 $stmt=$con->prepare($query);
 $stmt->execute();
 $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
 
}

?>
<html>
<head>
	<!--<link rel="stylesheet" type="text/css" href="css/normalize.css" />-->
	<!--	<link rel="stylesheet" type="text/css" href="css/demo.css" />-->
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/viewmedstyle.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
<script src="js/jquery.stickyheader.js"></script>
<script type="text/javascript">
function del(sno)
{
	var id="#".concat(sno)
	$.ajax
				({
					type: "POST",
					url: "delete.php",
					data: {"sno":sno},
					cache: false,
					success: function(html)
									{
										
										$(id).html(html);
									} 
				});
}
</script>
</head>
<body>
<div >
<?php
?>
<form action="#" method="post" id="searchformid">
<input type="search" name="skey" id="searchbinput" required/>
<input type="submit"  value="SEARCH" id="searchb"/>
</form><?php
if(isset($row))
{
echo '<table >
<thead>
<th>name</th>
<th>type</th>
<th>vol</th>
<th>quantity</th>
<th>mfg date</th>
<th>expiry date</th>
<th>company</th>
<th>batch no.</th>
<th>price</th>
<th>Edit</th>
<th>Delete</th>
</thead>';
foreach ($row as $key ) {
 	# code...
 	$sno=$key["SNO"];
 	array_shift($key);
 	echo '<tr id="'.$sno.'">';
 	foreach ($key as $col ) {
 	echo '<td>'.$col.'</td>';
 	}
 	echo '<td><form action="edit.php" method="post"><input type="hidden" name="sno" value="'.$sno.'" /><input type="submit" value="Edit" /></form></td><td><button onclick=del('.$sno.')>Delete</button></td>';
 	echo "</tr>";
 }
 echo "</table>";
}
?>
</div>
</body>
</html>