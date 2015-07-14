
<head>
<link rel="stylesheet" href="css/prescriptionformstyle.css" type="stylesheet/css">
<script src="js/jquery.js"></script>
<script type="text/javascript">

function printform(){
  
	document.getElementById("pbox").style.width="1000px";
	document.getElementById("pbox").style.height="auto";
	document.getElementById("pbox").style.marginLeft="0px";
	document.getElementById("pbox").style.marginTop="-105px";
	document.getElementById("pbox").style.position="absolute";
	document.getElementById("pbox").style.zIndex="100";
	document.getElementById("pbox").style.background="white";
	document.getElementById("pbox").style.border="0px";
	$(".ind").css("borderTop","none");
	$(".ind").css("borderLeft","none");
	$(".ind").css("borderRight","none");
	$(".inpu").css("borderTop","none");
	$(".inpu").css("borderLeft","none");
	$(".inpu").css("borderRight","none");
	$(".buttonx").hide();
	
	window.print();
	
	document.getElementById("pbox").style.width="1000px";
	document.getElementById("pbox").style.height="auto";
	document.getElementById("pbox").style.marginLeft="180px";
	document.getElementById("pbox").style.marginTop="";
	document.getElementById("pbox").style.position="";
	document.getElementById("pbox").style.zIndex="1";
	document.getElementById("pbox").style.background="";
	document.getElementById("pbox").style.border="1px";
	$(".buttonx").show();
		$(".ind").css("borderTop","2px solid grey");
	$(".ind").css("borderLeft","2px solid grey");
	$(".inpu").css("borderTop","2px solid grey");
	$(".inpu").css("borderLeft","2px solid grey");
	
}
function addrow() {
    var table = document.getElementById("table");
    var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
			
    var cell1 = row.insertCell(0);
	cell1.innerHTML=rowCount;
	var cell2 = row.insertCell(1);
	var element2 = document.createElement("input");
            element2.type = "text";
			element2.style.width="310px";
			element2.style.height="30px";
			element2.style.borderBottom="none";
			element2.className="inpu";
			cell2.appendChild(element2);
    var cell3 = row.insertCell(2);
	var element3 = document.createElement("input");
            element3.type = "text";
			element3.name="quant";
			element3.style.width="60px";
			element3.style.height="30px";
			element3.style.borderBottom="none";
			element3.className="inpu";
			cell3.appendChild(element3);
	var cell4 = row.insertCell(3);
	var element4 = document.createElement("input");
            element4.type = "text";
			element4.name="type";
			
			element4.style.height="30px";
			cell4.appendChild(element4);
			element4.style.borderBottom="none";
			element4.className="inpu";
    var cell5 = row.insertCell(4);
	var element5 = document.createElement("input");
            element5.type = "text";
			element5.name="dose";
			element5.style.width="50px";
			element5.style.height="30px";
			element5.style.borderBottom="none";
			element5.className="inpu";
			cell5.appendChild(element5);
    var cell6 = row.insertCell(5);
	var element6 = document.createElement("input");
            element6.type = "text";
			element6.name="billgq";
			element6.style.width="120px";
			element6.style.height="30px";
			element6.style.borderBottom="none";
			element6.className="inpu";
			cell6.appendChild(element6);
	 
             
	
}

</script>

</head>
<body>
<?php
include("include.php");
if(!isset($_SESSION["name"])|| $_SESSION['type']!=2)
{
	header('location:'.'home.php');
}
?>
<div id="pbox">
<form action="" method=""id="ff">
<div id="inform"><br/><br/>
<h3><lable id="ob">Health Center</lable></h3>
<h3><lable id="ob1">Defence And Reasearch Developement Organization</lable></h3><br/><hr/>
<lable id="ppl">Prescription (Patient copy)</lable><br/><hr/>
<?php

echo "<span id='dat'>Date-".date("d M Y").'</span><br/>';
?>
<br/>
<lable id="dd">Disease Detail</lable><br/><br/>
<div id="names">
<lable id="lpat">Patient :</lable>
<input type="text" name="patient"class="ind" id="pat">
<lable id="lpb">Prescribed By :</lable>
<input type="text" name="presby"class="ind" id="presby">
</div>
<br/>
<div id="det">

<lable id="l">Complaint</lable>
<input type="text" name="compl" class="ind"id="comp"><br/><br/>
<lable id="l">Provisinal Diagonistics</lable>
<input type="text" name="provi" class="ind"id="pd"><br/><br/>
<lable id="l">Diagonistics</lable>
<input type="text" name="diagon" class="ind"id="diago"><br/><br/>
<lable id="l">Investigation</lable>
<input type="text" name="invest" class="ind"id="inv"><br/><br/>
<lable id="l">Advise</lable>
<input type="text" name="advise" class="ind"id="adv"><br/><br/>
<lable id="l">Remarks</lable>
<input type="text" name="remark"class="ind" id="rem">
</div>
<br/><br/>


<br/><br/>
<table border="1" id="table">
<tr>
<th><lable id="lmn">S no.</lable></th>
<th><lable id="lmn">Medicine Name</lable></th>
<th><lable id="lq">Quantity</lable></th>
<th><lable id="lty">type</lable></th>
<th><lable id="ldose">Dose</lable></th>
<th><lable id="lpat">billing quantity</lable></th>

</tr>
<tr>
<td>1</td>
<td><input type="text" name="medi" class="inpu"id="medic"oninput="search()"></td>
<td><input type="text" name="quant"class="inpu" id="quanti"></td>
<td><input type="text" name="type" class="inpu"id="typ"></td>
<td><input type="text" name="dose"class="inpu" id="dos"></td>
<td><input type="text" name="billgq"class="inpu" id="billiq"></td>

</tr>
<tr>
<td>2</td>
<td><input type="text" name="medi" class="inpu"id="medic"oninput="search()"></td>
<td><input type="text" name="quant" class="inpu"id="quanti"></td>
<td><input type="text" name="type"class="inpu" id="typ"></td>
<td><input type="text" name="dose"class="inpu" id="dos"></td>
<td><input type="text" name="billgq"class="inpu" id="billiq"></td>

</tr>
<tr>
<td>3</td>
<td><input type="text" name="medi" class="inpu"id="medic"oninput="search()"></td>
<td><input type="text" name="quant"class="inpu" id="quanti"></td>
<td><input type="text" name="type"class="inpu" id="typ"></td>
<td><input type="text" name="dose"class="inpu" id="dos"></td>
<td><input type="text" name="billgq"class="inpu" id="billiq"></td>

</tr>
<tr>
<td id="sn">4</td>
<td><input type="text" name="medi"class="inpu" id="medic"oninput="search()"></td>
<td><input type="text" name="quant"class="inpu" id="quanti"></td>
<td><input type="text" name="type"class="inpu" id="typ"></td>
<td><input type="text" name="dose"class="inpu" id="dos"></td>
<td><input type="text" name="billgq"class="inpu" id="billiq"></td>
</tr>
</table>
</div>
</form>
<INPUT type="button"class="buttonx" id="bppl"value="Add Row" onclick="addrow()" />
<INPUT type="button" class="buttonx"id="bpbut"value="Print" onclick="printform()" />
</div>

</body>