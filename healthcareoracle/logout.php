<?php
session_start();
if(isset($_SESSION["name"])&&isset($_SESSION["type"]))
{
	unset($_SESSION["name"]);
	unset($_SESSION["type"]);

}
header("location:index.php");
?>