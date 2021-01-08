<?
$sql ="SELECT DB_data, DB_numerical FROM S046 WHERE DB_express = '". $total_02 ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S046 = stripslashes($row[DB_data]);
	$Tb_S046_numerical = stripslashes($row[DB_numerical]);
}
?>