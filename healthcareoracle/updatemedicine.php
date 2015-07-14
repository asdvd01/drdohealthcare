<?php
include("include.php");
require 'connect.php';
include'message.php';
if(!isset($_SESSION["name"])|| $_SESSION['type']!=3)
{
  header('location:'.'home.php');
}
$query="SELECT distinct mname FROM medstock";
$stmt=$con->prepare($query);
$stmt->execute();
$r1=$stmt->fetchAll(PDO::FETCH_NUM);
$ar1=array();
foreach($r1 as $c1)
$ar1[]=$c1[0];
$query="SELECT distinct bno FROM medstock";
$stmt=$con->prepare($query);
$stmt->execute();
$r2=$stmt->fetchAll(PDO::FETCH_NUM);
$ar2=array();
foreach($r2 as $c2)
$ar2[]=$c2[0];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/upmedstyle.css">
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/ajax.js"></script>
  
  <script>
  $(function() {
    var availableMeds = [
     <?php echo '"'.implode('","',$ar1).'"'; ?>
    ];
	var availableBnos = [
     <?php echo '"'.implode('","',$ar2).'"'; ?>
    ];
    $( "#meds" ).autocomplete({
      source: availableMeds
    });
	$( "#bnos" ).autocomplete({
      source: availableBnos
    });
	 $( "#meds1" ).autocomplete({
      source: availableMeds
    });
	$( "#bnos1" ).autocomplete({
      source: availableBnos
    });
	 $( "#meds2" ).autocomplete({
      source: availableMeds
    });
	$( "#bnos2" ).autocomplete({
      source: availableBnos
    });
	 $( "#meds3" ).autocomplete({
      source: availableMeds
    });
	$( "#bnos3" ).autocomplete({
      source: availableBnos
    });
	$( "#meds4" ).autocomplete({
      source: availableMeds
    });
	$( "#bnos4" ).autocomplete({
      source: availableBnos
    });
	$( "#meds5" ).autocomplete({
      source: availableMeds
    });
	$( "#bnos5" ).autocomplete({
      source: availableBnos
    });
  });
 $(document).ready(function() {
    $('#selectall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.check').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.check').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});
function confirm_delete()
{
	     $('#confirmdiv').show(00);
		 $("#overlay").children(':not(#confirmdiv)').css('opacity','0.5');
}
function hideconfirmdiv()
{
    $('#confirmdiv').hide();
	$("#overlay").children(':not(#confirmdiv)').css('opacity','1'  );
}
function hidemessage()
{
    $('#messageboxdiv').hide();
}
function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="checkbox"))  {return false;} 
} 

document.onkeypress = stopRKey; 
  function validateForm()
    {
     var a=document.forms["Form"]["mname"].value;
     var b=document.forms["Form"]["bno"].value;
     var c=document.forms["Form"]["quant"].value;
	 var a1=document.forms["Form"]["mname1"].value;
     var b1=document.forms["Form"]["bno1"].value;
     var c1=document.forms["Form"]["quant1"].value;
	 var a2=document.forms["Form"]["mname2"].value;
     var b2=document.forms["Form"]["bno2"].value;
     var c2=document.forms["Form"]["quant2"].value;
	 var a3=document.forms["Form"]["mname3"].value;
     var b3=document.forms["Form"]["bno3"].value;
     var c3=document.forms["Form"]["quant3"].value;
	 var a4=document.forms["Form"]["mname4"].value;
     var b4=document.forms["Form"]["bno4"].value;
     var c4=document.forms["Form"]["quant4"].value;
	 var a5=document.forms["Form"]["mname5"].value;
     var b5=document.forms["Form"]["bno5"].value;
     var c5=document.forms["Form"]["quant5"].value;
    if ((a!='' && (b=='' || c=='') )|| a=='')  
      {
      alert("Please Fill All Required Field");
      return false;
      }
	 else
	if ((a1!='' && (b1=='' || c1=='') )||(a1=='' && (b1!='' || c1!='')))  
      {
      alert("Please Fill All Required Field");
      return false;
      }
	  else
	if ((a2!='' && (b2=='' || c2=='') )||(a2=='' && (b2!='' || c2!='')))
      { 
      alert("Please Fill All Required Field");
      return false;
      }
	  else
	if ((a3!='' && (b3=='' || c3=='') )||(a3=='' && (b3!='' || c3!=''))) 
      {
      alert("Please Fill All Required Field");
      return false;
      }
	  else
	  if ((a4!='' && (b4=='' || c4=='') )||(a4=='' && (b4!='' || c4!='')))
      {
      alert("Please Fill All Required Field");
      return false;
      }
	  else
	  if ((a5!='' && (b5=='' || c5=='') )||(a5=='' && (b5!='' || c5!='')))
      {
      alert("Please Fill All Required Field");
      return false;
      }
    }
  </script>
</head>
<body>
<?php

?>
<div id="indiv">
 <form method="POST" onsubmit="return validateForm()" name="Form" action="medicinesellprocess.php">
<div id="upd">Generate Receipt</div><br/>
<div id="r1">
<span class="ui-widget" >
  <label for="meds" >Medicine Name: </label>
  <input id="meds" class="input1"name="mname" >
</span>
<span>
<label>Quantity:</label>
<input type="number" id="quant"name="quant">
</span>
<span class="ui-widget">
  <label for="bnos" >Batch No: </label>
  <select id="bnos"class="bnos" name="bno">
  </select>
</span>

</div>

<div id="r2">
<span class="ui-widget">
  <label for="meds1" >Medicine Name: </label>
  <input id="meds1"class="input1" name="mname1">
</span>
<span>
<label>Quantity:</label>
<input type="number" id="quant1"name="quant1">
</span>
<span class="ui-widget">
  <label for="bnos1" >Batch No: </label>
  <select id="bnos1"class="bnos" name="bno1">
  </select>
</span>
</div>
<div id="r3">
<span class="ui-widget">
  <label for="meds"  >Medicine Name: </label>
  <input id="meds2" class="input1"name="mname2">
</span>
<span>
<label>Quantity:</label>
<input type="number" id="quant2"name="quant2">
</span>
<span class="ui-widget">
  <label for="bnos"  >Batch No: </label>
  <select id="bnos2" class="bnos"name="bno2">
  </select>
</span>
</div>

<div id="r4">
<span class="ui-widget">
  <label for="meds" >Medicine Name: </label>
  <input id="meds3" class="input1"name="mname3">
</span>
<span>
<label>Quantity:</label>
<input type="number" id="quant3"name="quant3">
</span>
<span class="ui-widget">
  <label for="bnos" >Batch No: </label>
  <select id="bnos3"class="bnos" name="bno3">
  </select>
</span>
</div>

<div id="r5">
<span class="ui-widget" >
  <label for="meds" >Medicine Name: </label>
  <input id="meds4" class="input1"name="mname4" >
</span>
<span>
<label>Quantity:</label>
<input type="number" id="quant4"name="quant4">
</span>
<span class="ui-widget">
  <label for="bnos" >Batch No: </label>
  <select id="bnos4" class="bnos"name="bno4">
  </select>
</span>
</div>

<div id="r6">
<span class="ui-widget" >
  <label for="meds" >Medicine Name: </label>
  <input id="meds5"class="input1"name="mname5" >
</span>
<span>
<label>Quantity:</label>
<input type="number"id="quant5" name="quant5">
</span>
<span class="ui-widget">
  <label for="bnos" >Batch No: </label>
  <select id="bnos5" class="bnos"name="bno5">
  </select>
</span>
</div> 
<div id="confirmdiv">
		                    <div id="mainquotedelete"> <h2>Generating Reciept</h2><hr id="hrid"/></div>
		                    <p id="confirm_quote"> Are you sure you want to Proceed?</p>
							<input type="button" onclick="hideconfirmdiv()" value="No" id="nobutton"/>
							<input type="submit" value="Yes" id="yesbutton" />
</div>
<input type="button" onclick="confirm_delete()" id="decbutton"value="Generate Receipt">
 </form>
 </div>
</body>
</html>