<?
//$mb_sibsin = substr(F_re_yukchin($monthgi, 12, $daygan), 5, 4);
$mb_sibsin = F_re_yukchin($monthgi, 12, $daygan);
$daww=explode("(",$mb_sibsin,2);
$daww=explode(")",$daww[1],-1);
$mb_sibsin =$daww[0];

$serial_no = F_mb_sibsin($mb_sibsin);

$sql = "Select DB_data from S031 where DB_express = '".$serial_no."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S031 = stripslashes($row[DB_data]);
}

$Tb_S031 = str_replace(chr(10), "<br>", $Tb_S031);
?>