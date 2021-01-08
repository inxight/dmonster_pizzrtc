<?
//$mb_sibsin = substr(F_re_yukchin($monthgi, 12, $daygan), 1, 2);
$mb_sibsin = F_re_yukchin($monthgi, 12, $daygan);
$daww=explode("(",$mb_sibsin,2);
$daww=explode(")",$daww[1],-1);
$mb_sibsin =$daww[0];

echo $monthgi .",".$daygan;

$serial_no = F_mb_sibsin($mb_sibsin);

$sql = "Select DB_data, DB_numerical from S027 where DB_express = '".$serial_no."'";



$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S027 = stripslashes($row[DB_data]);
	$Tb_S027_numerical = stripslashes($row[DB_numerical]);
}
?>
