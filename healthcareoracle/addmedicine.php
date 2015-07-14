<html>
<head>
<link rel="stylesheet" type="text/css" href="css/addmedicinestyle.css">
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<?php
include("include.php");
include('message.php');
if(!isset($_SESSION["name"])|| $_SESSION['type']!=3)
{
	header('location:'.'home.php');
}
?>
<div id="fbox"><h3 id="h">Add Medicine</h3><br/>
    
     <form action="insertmedicine.php" id="form"method="POST">
	 <div id="inform">
	       <div id="r1"><lable id="ln1">Medicine Name</lable>
 		               <span id="in1"> <input type="text" name="medname" id="in2" required /></span>
		   </div>
		   <br />
		   
	       <div id="r1"><lable id="ln1">Medicine type</lable>
		 		               <span id="in1" class="select">	<select id="selects" name="type" >
	                    <option value="tablet" name="type">Tablet </option>
	                    <option value="syrup" name="type">Syrup</option>
	                    <option value="gel"  name="type" >Gel</option>
						<option value="ointment"  name="type" >Ointment</option>
	        </select></span>
			</div><br />
			
			 <div id="r1"><lable id="ln1">Volume(ml/mg)</lable>
 		     <span id="in1">      <input type="number" name="volume" id="in2" required /></span>
			 </div><br />
			 
		    <div id="r1">	<lable id="ln1">Quantity</lable>
 		      <span id="in1">     <input type="number" name="quantity" id="in2" required /></span>
		    </div><br />
			
			 <div id="r1"><lable id="ln1">Manufacture Date</lable>
 		      <span id="in1">    <input type="date" name="mdate" id="in2" required/></span>
			  </div><br />
			  
			 <div id="r1"><lable id="ln1">Expiry Date</lable>
 		     <span id="in1">   <input type="date" name="edate" id="in2" required /></span>
			 </div><br />
			 
		    <div id="r1">	<lable id="ln1">Company Name</lable>
 		     <span id="in1">  <input type="text" name="cmp" id="in2" required /></span>
			 </div><br />
			 <div id="r1">	<lable id="ln1">Price(Per Unit)</lable>
 		     <span id="in1">  <input type="float" name="price" id="in2" required /></span>
			 </div><br />
			 <div id="r1">	<lable id="ln1">Batch No.</lable>
 		     <span id="in1">  <input type="text" name="bno" id="in2" required /></span>
			 </div><br />
			 </div>
            <span id="in3"> <input type="submit" value="submit"	id="sub"/>	</span>				
	 </form>
	 </div>
</body>