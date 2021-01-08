<?

$num = $_REQUEST["a0"].$_REQUEST["a1"].$_REQUEST["a2"].$_REQUEST["a3"];
if($num ==""){
	$a1 = rand(1, 2);
	$a2 = rand(1, 2);
	$a3 = rand(1, 2);
	$a4 = rand(1, 2);
	$num = $a1 . $a2 . $a3 . $a4;
}



$sql = "Select DB_data from T048 where DB_express = '". $num ."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T048 = stripslashes($row[DB_data]);
}

?>

<table cellpadding="0" cellspacing="0" align="center">
	<tR>
		<tD width="100" align="Center"><img src="/UNSE_DATA/images/T048_img/<?=substr($num,0,1)?>.gif"></tD>
		<tD width="100" align="Center"><img src="/UNSE_DATA/images/T048_img/<?=substr($num,1,1)?>.gif"></tD>
		<tD width="100" align="Center"><img src="/UNSE_DATA/images/T048_img/<?=substr($num,2,1)?>.gif"></tD>
		<tD width="100" align="Center"><img src="/UNSE_DATA/images/T048_img/<?=substr($num,3,1)?>.gif"></tD>
	</tR>
	<tR>
		<tD height="15" colspan="2"></tD>
	</tr>
</table>