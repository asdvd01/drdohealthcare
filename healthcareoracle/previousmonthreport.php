<?php
session_start();
if(!isset($_SESSION["name"])|| ($_SESSION['type']!=1 && $_SESSION['type']!=3))
{
	header('location:'.'home.php');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\reportstyle.css">
<script>
function myFunction() {
    window.print();
}
</script>
</head>
<body>

     <span id="head"> <h1 id="head"> DRDO HEALTH CENTER REPORT</h1></span>
<?php $count=1;
include "connect.php";
$date=strtolower(date('M', strtotime(date('Y-m')." -1 month")));
 $datetoprint=date('F', strtotime(date('Y-m')." -1 month"));
echo '<h2 id="cm">Report For '.$datetoprint.'-'.date('Y').'</h2>';
$table=$date.'status';
$sql=$con->prepare("select * from $table");
$sql->execute();
$r=$sql->fetchAll(PDO::FETCH_NUM );
if(count($r))
{

?>


	 <span id="date">Date:    <?php echo date('d-M-Y');?></span>
	 <hr id="hrid"/>
	 <div id="div1">
	 <table id="table1">
	 <tr>
	       <div id="tableheader">
		   
 		    <th id="th1">S.NO.</th>
			<th id="th2">MEDICINE</th>
			<th id="th2">TYPE</th>		
			<th id="th3">QUANTITY</th>
			<th id="th4">PRICE(PER MEDICINE in Rs)</TH>
			<th id="th5">AMOUNT(in Rs)</TH>
			</div>
			</tr>
			<?php 
			$x=0;
			for($i=0;$i<count($r);$i++)
				{
				echo'<tr>';
				echo'<td id="sno">'.$count++.'</td>';
				echo'<td id="medname">'.$r[$i][1].'('.$r[$i][3];
				if($r[$i][2]=='syrup'||$r[$i][2]=='gel')
					echo 'ml';
				else
					echo'mg';
				
				echo')</td>';
				echo'<td id="medq">'.$r[$i][2].'</td>';
				
				
				echo'<td id="meda">'.$r[$i][4].'</td>';
				echo'<td id="meda">'.$r[$i][5].'</td>';
				echo'<td id="medam">'.$r[$i][5]*$r[$i][4].'</td>';
				echo'</tr>';
				$x=$r[$i][5]*$r[$i][4]+$x;
			}
			
			?>
	 </table>
	 </div>
	 <br/>
	 <br/>
	 <label id="sign" >Signature of pharmacist :</label><br/>
	 <span id="totalid">Total Amount :  <?php ;echo $x;?>
	                 </span>
					 <br/>
	 <label id="sign">Signature of receiver : </label>
	<div id="buttons">
	 <button onclick="myFunction()" id="printbutton">Print this page</button>
	 <a id="cancelbutton" href="home.php">Cancel</a>
	 </div>
<?php
}else
echo '<a id="cancelbuttonempty" href="home.php">Cancel</a>';
?>
</body>

</html>