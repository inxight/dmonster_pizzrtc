<?
$sql = "SELECT DB_data FROM F012 WHERE DB_express = '".$my_month_e."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_F012 = stripslashes($row[DB_data]);
}
?>

