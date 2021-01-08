
<?
$total = $my_day_h_org . $my_day_e_org;

$sql = "SELECT DB_data, DB_numerical FROM T060 WHERE DB_express = '". $total ."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T060 = stripslashes($row[DB_data]);
	$Tb_T060_numerical = stripslashes($row[DB_numerical]);
	
}
?>
