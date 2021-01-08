<?
$sql = "select DB_data from T017 where DB_express = '".$star_name."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T017 = stripslashes($row[DB_data]);
}

$Tb_T017= str_replace(chr(10), "<BR>", $Tb_T017);

?>