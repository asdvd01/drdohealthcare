<?php
require 'connect.php';
session_start();
$name= $_SESSION["name"];
$type= $_SESSION["type"];
?>
<head>
<title>Health Care</title>
  
  <link rel="stylesheet" type="text/css" href="css/homestyle.css" />
  
 



</head>
<body>
<header id="header">
        <div id="logo"><h1><img src="images/hc1.png"height="150px"width="400px"></h1></div>
		
        <nav>
          <ul class="lavaLampWithImage" id="lava_menu">
          <?php
          echo 
            '
            <li ><a href="home.php">Home</a></li>
            
            ';
            if($type==1)
            echo
            '
            
            
            <li  id="dropdown"><a href="#">Reports</a>
            <ul id="ddown" >
            <li><a id="lidropdown" href="currentmonthreport.php">Curr Month</a></li>
            <li><a id="lidropdown" href="previousmonthreport.php">Prev Month</a></li>
            <li><a id="lidropdown" href="currentyearreport.php">Curr Year</a></li>
            <li><a id="lidropdown" href="previousyearreport.php">Prev Year</a></li>
            </ul>
            </li>
            <li id="dropdown"onmouseover="onhover()"><a href="#">Update User</a>
            <ul id="ddown" class="insidelava">
            <li><a id="lidropdown" href="addnewuser.php">Add User</a></li>
            <li><a id="lidropdown" href="viewuser.php">Remove User</a></li>
            <li><a id="lidropdown" href="changepass.php">Change Password</a></li>
            </ul>
            </li>
            <li><a href="viewmed.php">View Med</a></li>
            ';
            if($type==2)
          echo 
            '
            <li><a href="prescriptionform.php">Prescription</a></li>
            ';
            if($type==3)
            echo
            '
            <li  id="dropdown"><a href="#">Medicine Updates</a>
            <ul id="ddown" >
            
            <li><a id="lidropdown" href="expiremedicine.php">Expired Medicine</a></li>
            <li><a id="lidropdown" href="viewmed.php">View Medicines</a></li>
            <li><a id="lidropdown" href="addmedicine.php">Add medicines</a></li>
			      <li><a id="lidropdown" href="updatemedicine.php">Sell</a></li>

            
            </ul>
            </li>
             <li  id="dropdown"><a href="#">Reports</a>
            <ul id="ddown" >
            <li><a id="lidropdown" href="currentmonthreport.php">Curr Month</a></li>
            <li><a id="lidropdown" href="previousmonthreport.php">Prev Month</a></li>
            <li><a id="lidropdown" href="currentyearreport.php">Curr Year</a></li>
            <li><a id="lidropdown" href="previousyearreport.php">Prev Year</a></li>
            </ul>
            </li>
            ';
            echo 
            '
            
			      <li><a href="logout.php">Log Out</a></li>
            ';
			     ?>
          </ul>
        </nav>
      
</header>
<!--
<div id="sidemenu">
<span id="upl1"class="upl">
<a href="home.php">Home</a>
</span>
<span id="upl2"class="upl">
<a href="prescriptionform.php">Prescription</a>
</span>

<span id="upl3"class="upl">
<a href="index.php">Add Medicine</a>
</span>

<span id="upl4"class="upl">
<a href="expiremedicine.php">Expire </a>
</span>
</div>-->

  

</body>
