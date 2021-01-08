
<?
$sql = "SELECT DB_data FROM T057 WHERE DB_express = '". $my_day_h ."' AND DB_express_1 = '". $my_day_e ."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T057 = stripslashes($row[DB_data]);
}

?>