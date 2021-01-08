<?
If ($my_month_e == "" ){$my_month_e = "ìÙ";};
$sql ="SELECT DB_data FROM T058 WHERE DB_express = '".$my_month_e."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T058 = stripslashes($row[DB_data]);
}

?>