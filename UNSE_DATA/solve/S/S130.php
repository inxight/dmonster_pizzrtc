
<?

$sql ="SELECT DB_data FROM S130 WHERE DB_express = '01". $my_year_e_org ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S130 = stripslashes($row[DB_data]);
}

?> 