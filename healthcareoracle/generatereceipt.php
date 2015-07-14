<?php $count=1;?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\genratereceiptstyle.css">
<script>
function myFunction() {
    window.print();
}
</script>
</head>
<body>
     <span id="head"> <h1 id="head"> DRDO HEALTH CENTER RECEIPT</h1></span>
	 <span id="date">Date:    <?php echo date('d-M-Y');?></span>
	 <hr id="hrid"/>
	 <div id="div1">
	 <table id="table1">
	       <div id="tableheader">
 		    <th id="th1">S.NO.</th>
			<th id="th2">MEDICINE</th>
			<th id="th3">QUANTITY</th>
			<th id="th4">PRICE(PER MEDICINE)</TH>
			<th id="th5">AMOUNT</TH>
			</div>
			<?php
			if($price1)
			{
				echo'<tr>';
				echo'<td id="sno">'.$count++.'</td>';
				echo'<td id="medname">'.$_POST['mname'].' '.$vol1;
				if($type1=='syrup' || $type1='gel')
					echo 'ml';
				else
					echo'mg';
				echo'</td>';
				echo'<td id="medq">'.$_POST['quant'].'</td>';
				echo'<td id="medp">'.$price1.'</td>';
				echo'<td id="meda">'.$price1*$_POST['quant'].'</td>';
				echo'</tr>';
			}
			if($price2)
			{
				echo'<tr>';
				echo'<td id="sno">'.$count++.'</td>';
				echo'<td id="medname">'.$_POST['mname1'].' '.$vol2;
				if($type2=='syrup' || $type2='gel')
					echo 'ml';
				else
					echo'mg';
				echo'</td>';
				echo'<td id="medq">'.$_POST['quant1'].'</td>';
				echo'<td id="medp">'.$price2.'</td>';
				echo'<td id="meda">'.$price2*$_POST['quant1'].'</td>';
				echo'</tr>';
			}
			if($price3)
			{
				echo'<tr>';
				echo'<td id="sno">'.$count++.'</td>';
				echo'<td id="medname">'.$_POST['mname2'].' '.$vol3;
				if($type3=='syrup' || $type3='gel')
					echo 'ml';
				else
					echo'mg';
				echo'</td>';
				echo'<td id="medq">'.$_POST['quant2'].'</td>';
				echo'<td id="medp">'.$price3.'</td>';
				echo'<td id="meda">'.$price3*$_POST['quant2'].'</td>';
				echo'</tr>';
			}
			if($price4)
			{
				echo'<tr>';
				echo'<td id="sno">'.$count++.'</td>';
				echo'<td id="medname">'.$_POST['mname3'].' '.$vol4;
				if($type4=='syrup' || $type4='gel')
					echo 'ml';
				else
					echo'mg';
				echo'</td>';
				echo'<td id="medq">'.$_POST['quant3'].'</td>';
				echo'<td id="medp">'.$price4.'</td>';
				echo'<td id="meda">'.$price4*$_POST['quant3'].'</td>';
				echo'</tr>';
			}
			if($price5)
			{
				echo'<tr>';
				echo'<td id="sno">'.$count++.'</td>';
				echo'<td id="medname">'.$_POST['mname4'].' '.$vol5;
				if($type5=='syrup' || $type5='gel')
					echo 'ml';
				else
					echo'mg';
				echo'</td>';
				echo'<td id="medq">'.$_POST['quant4'].'</td>';
				echo'<td id="medp">'.$price5.'</td>';
				echo'<td id="meda">'.$price5*$_POST['quant4'].'</td>';
				echo'</tr>';
			}
			if($price6)
			{
				echo'<tr>';
				echo'<td id="sno">'.$count++.'</td>';
				echo'<td id="medname">'.$_POST['mname5'].' '.$vol6;
				if($type6=='syrup' || $type6='gel')
					echo 'ml';
				else
					echo'mg';
				echo'</td>';
				echo'<td id="medq">'.$_POST['quant5'].'</td>';
				echo'<td id="medp">'.$price6.'</td>';
				echo'<td id="meda">'.$price6*$_POST['quant5'].'</td>';
				echo'</tr>';
			}
			?>
	 </table>
	 </div>
	 <br/>
	 <br/>
	 <label id="sign" >Signature of pharmacist :</label><br/>
	 <span id="totalid">Total Amount :  <?php ;echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'."\x20\x20\x20".($price6*$_POST['quant5']+$price5*$_POST['quant4']+$price4*$_POST['quant3']+$price3*$_POST['quant2']+$price2*$_POST['quant1']+$price1*$_POST['quant']);?>
	                 </span>
					 <br/>
	 <label id="sign">Signature of receiver : </label>
	 <a id="cancelbutton" href="home.php">Cancel</a>
	 <button onclick="myFunction()" id="printbutton">Print this page</button>
	 
</body>
</html>