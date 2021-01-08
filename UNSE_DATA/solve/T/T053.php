<?


$intSuja = rand(1,21);
$suho = rand(1,8);

$sql = "Select DB_data from T053 where DB_express = ".$intSuja.".0";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$intro_1 = stripslashes($row[DB_data]);
}


$sql = "Select DB_data_1 from T053 where DB_express = ".$suho.".0";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$intro_2 = stripslashes($row[DB_data_1]);
}

//$Cards = "<TABLE width='100%'><TR><TD align=Center><IMG SRC='/UNSE_DATA/images/T003_img/my".($intSuja - 1).".jpg'></TD><TD align=Center><IMG SRC='/UNSE_DATA/images/T053_img/mj".$suho.".jpg' ></TD></TR></TABLE>";

$Cards = "/UNSE_DATA/images/T053_img/my".($intSuja - 1).".jpg";
$Cardss = "/UNSE_DATA/images/T043_img/mj".($suho - 1).".jpg";



$Tb_T053 = "";
?> 



<table cellpadding="0" cellspacing="0">
	<tR>
		<td style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src="<?=$Cards?>" align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$intro_1?></td>
	</tr>
</table>
<table cellpadding="0" cellspacing="0">
	<tR>
		<td style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src="<?=$Cardss?>" align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$intro_2?></td>
	</tr>
</table>
