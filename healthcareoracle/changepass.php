<html>
       <head>
	  
	   <script type="text/javascript" src="js/jquery.js"></script>
	   
	   </head>
<?php
include'include.php';
include'message.php';
if(!isset($_SESSION["name"])|| $_SESSION['type']!=1)
{
	header('location:'.'home.php');
}

?>
 <link rel="stylesheet" href="css/changepassstyle.css">
<body>
<form method="POST" action="processchangepass.php" id="changepassformid">
      <label id="uid"> USER ID :</label>
	                   <input type="text" id="uidinput" name="uid" required title="3 characters minimum" /><br/><br/>
	  <label id="np" > NEW PASSWORD :</label>
	                   <input type="password" id="uidinput" name="np" required title="3 characters minimum" /><br/><br/>
	  <label id="cnp">COMFIRM PASSWORD :</label>
	                   <input type="password" id="uidinput" name="cnp" required title="3 characters minimum" /><br/><br/>
	  <input type="submit" id="cpsubb" />
</form>
</body>
</html>