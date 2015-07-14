<?php

include'include.php';
include'message.php';
if(!isset($_SESSION["name"])|| $_SESSION['type']!=1)
{
	header('location:'.'home.php');
}
?>
<html>
       <head>
	   <link rel="stylesheet" href="css/changepassstyle.css">
	   </head>
<body>
<form method="POST" action="processaddnewuser.php" id="changepassformid">
      <label id="uname"> FULL NAME :</label>
	                   <input type="text" id="uidinput" name="uname" required /><br/><br/>
      <label id="uid"> USER ID :</label>
	                   <input type="text" id="uidinput" name="uid" required title="3 characters minimum" /><br/><br/>
	  <label id="p" > PASSWORD :</label>
	                   <input type="password" id="uidinput" name="p" required title="3 characters minimum" /><br/><br/>
	  <label id="cnp">COMFIRM PASSWORD :</label>
	                   <input type="password" id="uidinput" name="cnp" required title="3 characters minimum" /><br/><br/>
	  <label id="mobid"> MOBILE NUMBER :</label>
	                   <input type="tel" pattern="[0-9]{10}" id="uidinput" name="mob" maxlength="10" required title="Please enter valid 10 digit mobile number" /><br/><br/>
	  <label id="previledge">TYPE OF USER :</label>
	   <select id="prevselect" name="previlege">
	                   <option value="3">Pharmacist</option>
					   <option value="2">Doctor</option>
					   <option value="1">Database Manager</option>
	  </select>	   <br/><br/>
	  <input type="submit" id="cpsubb" />
</form>
</body>
</html>