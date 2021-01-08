<?
$sql ="SELECT DB_data, DB_numerical FROM S047 WHERE DB_express = '". $total_03 ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S047 = stripslashes($row[DB_data]);
	$Tb_S047_numerical = stripslashes($row[DB_numerical]);
}
?>

