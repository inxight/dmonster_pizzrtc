<?
$sql ="SELECT DB_data FROM S060 WHERE DB_express = '". $star_name ."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S060 = stripslashes($row[DB_data]);
	
}


?>
