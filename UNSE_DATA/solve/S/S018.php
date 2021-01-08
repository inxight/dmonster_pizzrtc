<?
$dang1 = (int)$my_year_e_org;

if($dang1 == 0){$dang1 = 1;}

$sql = "select DB_data, DB_numerical from S018 where DB_express = '".$dang1."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S018 = stripslashes($row[DB_data]);
	$Tb_S018_numerical = stripslashes($row[DB_numerical]);
}
?> 