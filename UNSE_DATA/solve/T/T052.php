<?
$sql = "Select DB_data from T052 where DB_express = '".intval($request_month)."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T052 = stripslashes($row[DB_data]);
}



?>