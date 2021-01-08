<?

$sql ="SELECT DB_data FROM S131 WHERE DB_express = '02". $total_to ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S131 = stripslashes($row[DB_data]);
}

?> 