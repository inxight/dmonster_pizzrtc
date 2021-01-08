
<?
$sql = "SELECT DB_data FROM T056 WHERE DB_express = '". $my_day_h ."' AND DB_express_1 = '". $my_month_e ."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T056 = stripslashes($row[DB_data]);
}

?>