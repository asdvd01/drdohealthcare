<?php
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Health Care</title>
  <link rel="stylesheet" type="text/css" href="css/style_index.css" />
  <link rel="icon"  type="image/png"   href="favicon.png" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min_i.js"></script>
</head>

<body>
  
  <div id="main">
    <div id="top_container">
	  <header>
        <div id="logo"><h1>Health<a href="#">Care</a></h1></div>
        <nav>
          <ul class="lavaLampWithImage" id="lava_menu">
            <li class="current"><a href="index.php">home</a></li>
           <!-- <li><a href="index.php">Prescription</a></li>
            <li><a href="home.php">Add medicines</a></li>
            <li><a href="search.php">Expire</a></li> -->
			<li><a href="login.php"> Login</a><li>
          </ul>
        </nav>
      </header>
      <div class="slideshow">
        <ul class="slideshow">
          <li class="show"><img width="950" height="350" src="images/3.jpg" alt="&quot;Time And health are two precious assets that we don’t recognize and appreciate until they have been depleted.&quot;" /></li>
          <li><img width="950" height="350" src="images/2.jpg" alt="&quot;Physical fitness is not only one of the most important keys to a healthy body, it is the basis of dynamic and creative intellectual activity.&quot;" /></li>
          <li><img width="950" height="350" src="images/10.jpg" alt="&quot;Body and soul cannot be separated for purposes of treatment, for they are one and indivisible. Sick minds must be healed as well as sick bodies.&quot;" /></li>
                    <li><img width="950" height="350" src="images/1.jpg"  alt="&quot;Treasure the love you receive above all. It will survive long after your good health has vanished.&quot"/></li>

		</ul>
	  </div>		
    </div>	  

    <div id="site_content">
      <div id="content">
        <h1>why Health and Fitness should matter to EVERYONE.?</h1>
        <p>The higher your energy level, the more efficient your body. The more efficient your body, the better you feel and the more you will use your talent to produce outstanding results..</p>
       <!-- <h2>HEALTH BENEFITS OF DONATING BLOOD</h2>
        
        <ul>
          <li>IMPROVES HEART HEALTH</li>
          <li>ENHANCES THE PRODUCTION OF NEW BLOOD CELLS</li>
          <li>BURNS CALORIES</li>
          <li>ENHANCES FEELING OF WELL BEING IN ELDERLY PEOPLE</li>
		  <li>REDUCES CANCER RISK</li>
		  <li>FREE HEALTH SCREENING DONE</li>
		  <li>SAVES LIVES</li>
		  <li>It feels Good</li>
		  
        </ul>-->
      </div>
    </div> 
    
  <footer>
      <p>Copyright &copy; 2015. All Rights Reserved.</p>
      
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min_i.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min_i.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min_i.js"></script>
  <script type="text/javascript" src="js/image_fade_i.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
</body>
</html>
