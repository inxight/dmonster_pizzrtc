<?

$sql = "SELECT DB_data, DB_numerical FROM N014 WHERE DB_express = '".$number_var."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_N014 = stripslashes($row[DB_data]);
	$Tb_N014_numerical = stripslashes($row[DB_numerical]);
}

?>