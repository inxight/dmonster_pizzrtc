<?
$dang5 = (int)$my_year_e_org;

$sql = "Select DB_data, DB_numerical from S022 where DB_express = '".$dang5."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S022 = stripslashes($row[DB_data]);
	$Tb_S022_numerical = stripslashes($row[DB_numerical]);
}
?>