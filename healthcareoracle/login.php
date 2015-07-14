<?php
require 'connect.php';

session_start();
if(isset($_POST["uname"]) && isset($_POST["pass"]))
{
	$uname = $_POST["uname"];
	$pass = sha1($_POST["pass"]);
	$query="select uname,pass,name,privilege from users where uname = ? and pass = ?";
	$stmt=$con->prepare($query);
	$stmt->execute(array($uname,$pass));
	if($r=$stmt->fetch(PDO::FETCH_NUM))
	{
	$_SESSION["name"]=$r[0];
	$_SESSION["type"]=$r[3];
	header("location:home.php");
	}
	else
	{
		$_SESSION["err"]="Wrong Username and/or Password";
	}
}
else if(isset($_SESSION["name"])&&isset($_SESSION["type"]))
header("location:home.php");
	echo '<html>
<head>
 <link rel="stylesheet" href="css/loginstyle.css">

 <link rel="stylesheet" href="css/fontvarela/familyvarelaround.css">
</head>
<body>';
include 'message.php';
echo '
<div class="container">

      <div id="login">
<h2><span class="fontawesome-lock"></span>Sign In</h2>
<form action="#" method="post" >
<fieldset>
<p><label for="email">User Name</label></p>
<p><input type="text"  name="uname" placeholder="username" required  /></p>
<p><label for="password">Password</label></p>
<p><input type="password"  name="pass" placeholder="password" required /></p>
<p><input type="submit" value="submit" /></p>
</fieldset>
</form>
</div>
</div>
</body>
</html>';


?>
