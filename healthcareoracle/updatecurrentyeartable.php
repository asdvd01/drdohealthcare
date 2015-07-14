<?php
$date=date('Y');
$vol=$r[0][1];
$price=$r[0][2];
$type=$r[0][3];
$table=$date.'status';
$temp1=$con->prepare("select sno from $table where vol= ? and mname= ? " );
$temp1->execute(array($vol,$mname));
$r1=$temp1->fetchAll(PDO::FETCH_NUM );
if(count($r1)==1)
{
	$reqquant2=2;
	$sno=$r1[0][0];
	$temp1=$con->prepare("update $table set quant=quant+ ? where sno= ?");
    $temp1->execute(array($reqquant,$sno));
}
else
{
	$temp1=$con->prepare("INSERT INTO $table (mname, type, vol, quant, price) VALUES ( ? , ? , ? , ? , ? )");
    $temp1->execute(array($mname,$type,$vol,$reqquant,$price));
}
	
?>
		
