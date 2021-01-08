<?

$sql ="SELECT DB_data, DB_numerical FROM S068 WHERE DB_express = '". $my_day_h_org . $my_day_e_org ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S068 = stripslashes($row[DB_data]);
	$Tb_S068_numerical = stripslashes($row[DB_numerical]);

}

?>