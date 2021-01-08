

<?

$sql ="SELECT DB_data, DB_numerical FROM S067 WHERE DB_express = '". $my_hour_e_org ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S067 = stripslashes($row[DB_data]);
	$Tb_S067_numerical = stripslashes($row[DB_numerical]);

}

?>