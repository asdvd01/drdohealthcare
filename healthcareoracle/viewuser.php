
<link rel="stylesheet" type="text/css" href="css/viewuserstyle.css" />
<?php
include'include.php';
include'message.php';
if(!isset($_SESSION["name"])|| $_SESSION['type']!=1)
{
	header('location:'.'home.php');
}
include'connect.php';
$uname=$_SESSION["name"];
$sql=$con->prepare("select * from users where uname!= ? ");
$sql->execute(array($uname));
$r=$sql->fetchAll(PDO::FETCH_NUM );
?>
      <div id="bigdiv">
      <table id="usertable">
      <th id="th2" class="th1">SERIAL NO</th>
	  <th id="th2"class="th2">USER NAME</th>
	  <th id="th2"class="th3">TYPE</th>
	  <th id="th2"class="th4">MOBILE NUMBER</th>
	  <th id="th2"class="th5">DELETE</th>
<?php
      $count=1;
      for($i=0;$i<count($r);$i++)
	  {
		  echo'<tr >';
		  echo'<td id="td1">'.$count++.'</td>';
		  echo'<td id="td1">'.$r[$i][3].'</td>';
		  echo'<td id="td1">';
		  if($r[$i][5]==1)
		  echo'Admin';
	      else
		  if($r[$i][5]==2)
	      echo'Doctor';
	      else
	      if($r[$i][5]==3)
		  echo'Pharmacist';
	      echo'</td>';
		  echo'<td id="td1">'.$r[$i][4].'</td>';	
		  echo'<td id="td1"><form action="deleteuserprocess.php" method="post"><input type="hidden" name="uid" value="'.$r[$i][0].'" /><input type="submit" value="Delete" /></form>';
          echo'</tr>';		  
	  }
?>
	  </table>
	  </div>