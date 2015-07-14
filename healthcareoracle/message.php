<script src="js/jquery.js"></script>
<script type="text/javascript">
   $(document).ready(function(){$("#top_message1").slideDown(1000).delay(3000).slideUp(1000);
                                   });
   $(document).ready(function(){$("#top_message2").slideDown(1000).delay(3000).slideUp(1000);
                                   });
	 </script>
<?php

if(isset($_SESSION['suc']))
{
	echo'<div id="top_message1" style="display:none;position:absolute; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(28,232,48,0.6),rgba(39,255,133,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:300px; margin-right:auto;">';
	if($_SESSION['suc']==1)
	{
		echo 'Uploaded successfully';
	}
	else
		if($_SESSION['suc']==2)
		{
			echo 'selected medicine removed';
		}
		else
	{
		echo $_SESSION['suc'];
	}
	unset($_SESSION['suc']);
	echo'</div>';
}
else
	if(isset($_SESSION['err']))
{
	echo '<div id="top_message2" style="display:none;position:absolute; border-radius:7px; width:700px; background: -webkit-linear-gradient(rgba(255,0,0,0.6),rgba(232,44,12,0.6)); padding:10px; text-align:center; font-size:20px; color:#fff; margin-left:300px; margin-right:auto;">';
    if($_SESSION['err']==1)
	{
		echo 'please fill all the fields';
	}
	else
	{
		echo $_SESSION['err'];
	}
	unset($_SESSION['err']);
	echo'</div>';
}
?>

