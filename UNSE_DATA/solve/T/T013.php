<?
$sql = "select DB_data, DB_express from T013 where DB_express like '%".$kword."%'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T013 = stripslashes($row[DB_data]);
	$Tb_T013_express = stripslashes($row[DB_express]);
}

$Tb_T013 = str_replace("◑", "▣", $Tb_T013);
?>