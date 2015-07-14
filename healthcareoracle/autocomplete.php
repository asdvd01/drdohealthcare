<?php
require 'connect.php';
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
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
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
  });
  </script>
</head>
<body>
 <form>
<div>
<span class="ui-widget" >
  <label for="meds" name="mname">Medicine Name: </label>
  <input id="meds" >
</span>

<span class="ui-widget">
  <label for="bnos" name="bno">Batch No: </label>
  <select id="bnos">
  </select>
</span>
<span>
<label>Quantity:</label>
<input type="number" name="quant">
</span>
</div>
<div>
<span class="ui-widget">
  <label for="meds1" name="mname">Medicine Name: </label>
  <input id="meds1">
</span>

<span class="ui-widget">
  <label for="bnos1" name="bno">Batch No: </label>
  <select id="bnos1">
  </select>
</span>
<span>
<label>Quantity:</label>
<input type="number" name="quant1">
</span>
</div><div>
<span class="ui-widget">
  <label for="meds" name="mname">Medicine Name: </label>
  <input id="meds2">
</span>

<span class="ui-widget">
  <label for="bnos" name="bno">Batch No: </label>
  <select id="bnos2">
  </select>
</span>
<span>
<label>Quantity:</label>
<input type="number" name="quant2">
</span>
</div><div>
<span class="ui-widget">
  <label for="meds" name="mname">Medicine Name: </label>
  <input id="meds3">
</span>

<span class="ui-widget">
  <label for="bnos" name="bno">Batch No: </label>
  <select id="bnos3">
  </select>
</span>
<span>
<label>Quantity:</label>
<input type="number" name="quant3">
</span>
</div>
<input type="submit" value="decrease">
 </form>
 
</body>
</html>