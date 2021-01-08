<?
$guesu = rand(1, 100);
$no = $guesu;

$sql = "SELECT * FROM J039 WHERE DB_num = '".$no."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_J039 = stripslashes($row[DB_data]);
}

?>