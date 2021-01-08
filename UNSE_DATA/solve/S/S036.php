<?
$sql = "Select DB_data from S036 where DB_express = '".$serial_no."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S036 = stripslashes($row[DB_data]);
}

$Tb_S036 = str_replace(chr(10), "<br>", $Tb_S036);
?>