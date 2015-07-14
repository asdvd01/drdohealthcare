
<html>
<head>
           <link rel="stylesheet" type="text/css" href="css/delexpmedstyle.css" />
           
</head>
<body>
<?php
include'connect.php';
include("include.php");
include'message.php';
if(!isset($_SESSION["name"])|| $_SESSION['type']!=3)
{
	header('location:'.'home.php');
}
?>

<div id="bigdivcaseb" >
<div id="bigdiv" >
   <div id="tablediv"><table id="usertable" border="1">
	  <th id="th2" class="th1">SERIAL NO</th>
	  <th id="th2"class="th2"> MEDICINE NAME</th>
	  <th id="th2"class="th3"> COMPANY NAME</th>
	  <th id="th2"class="th4">BATCH NO</th>
	  <th id="th2"class="th5">EXPIRY DATE</th>
	  <th id="th2"class="th6">SELECT<br>all<input type="checkbox" id="selectall" onclick="hidemessage()"></th>
<?php
      $count=1;
	  $dt = date("Y-m-d");
      $date= date( "Y-m-d", strtotime( "$dt +10 day" ) );
	  echo'<form method="POST" action="expiremedicineprocess.php">';
	  $sql=$con->prepare("select * from medstock where edate<= ? ");
	  $sql->execute(array($date));
	  $r=$sql->fetchAll(PDO::FETCH_NUM );
	  $n=count($r);
	  for($i=0;$i<$n;$i++)
	  {  
         echo'<tr id="tr">';
	     echo '<td id="td1">'.$count++.'</td>';
      	 echo "<td id='td1'>".$r[$i][1]."</td>";
		 echo '<td id="td1">'.$r[$i][7].'</td>';
		 echo '<td id="td1">'.$r[$i][8].'</td>';
		 echo '<td id="td1"'; 
		 if($r[$i][6]<=$dt)
		 {
			 echo'style="color:red;"';
		 }
		 else
		 {
			 echo'style="color:green;"';
		 }
		 echo '/>'.$r[$i][6].'</td>';
		 echo'<td id="td1"><div id="checkboxdiv">
		 <input type="checkbox" name="check_ed[]"  onclick="hidemessage()" value="'.$r[$i][0].'" class="check" id="check" /></div></td>';
		 echo'</tr>';
		}
		?>
		<tr>
		<td colspan="6"id="dbut">
		<input type="button" onclick="confirm_delete()" id="delete_button" value="Delete" />
		</tr>
		</td>
		</table>
		
	         <div id="confirmdiv">
		                    <div id="mainquotedelete"> <h2>Delete Confirmation</h2><hr id="hrid"/></div>
		                    <p id="confirm_quote"> Are you sure you want to delete?</p>
							<input type="button" onclick="hideconfirmdiv()" value="No" id="nobutton"/>
							<input type="submit" value="Yes" id="yesbutton" />
			 </div>
		</form>
		<div id="messageboxdiv" >
		         <p> you have not selected any medicine</p>
				 </div>
		 </div></div>
		 </div>
</body>
</html>	 
<script type="text/javascript" >
$(document).ready(function() {
    $('#selectall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.check').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.check').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});
function confirm_delete()
{
	
     if($('input[name="check_ed[]"]:checked').length)
    {
	     $('#confirmdiv').show(00);
		 $("#overlay").children(':not(#confirmdiv)').css('opacity','0.5');
         
        
	}
	else
	{
	    $('#messageboxdiv').show();
	}
}
function hideconfirmdiv()
{
    $('#confirmdiv').hide();
	$("#overlay").children(':not(#confirmdiv)').css('opacity','1'  );
}
function hidemessage()
{
    $('#messageboxdiv').hide();
}
function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="checkbox"))  {return false;} 
} 

document.onkeypress = stopRKey; 
</script>