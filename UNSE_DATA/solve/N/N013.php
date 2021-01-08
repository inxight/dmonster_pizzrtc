<?

$sql = "SELECT DB_data, DB_numerical FROM N013 WHERE DB_express = '".$number_var."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_N013 = stripslashes($row[DB_data]);
	$Tb_N013_numerical = stripslashes($row[DB_numerical]);
}

?>