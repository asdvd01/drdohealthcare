<?php
include 'include.php';
if(!isset($_SESSION["name"]))
{
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
</head>
<body>
    <div id="sliderFrame" style="margin-top:50px;">
        <div id="slider">
            
            <img src="images/31--.jpg"alt="" />
            <img src="images/26-.jpg" alt="" />
            <img src="images/image-slider-3.jpg" alt="" />
            <img src="images/34--.jpg" alt="" />
            <img src="images/37-.jpg" />
        </div>
    </div>
</body>
</html>
