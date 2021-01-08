
<?


$sql ="SELECT DB_data FROM S096 WHERE DB_express = '". $my_day_h_org .$temp_03."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S096 = stripslashes($row[DB_data]);
}
?>


