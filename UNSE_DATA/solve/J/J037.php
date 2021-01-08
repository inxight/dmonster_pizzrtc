<?
/*$guesu = rand(90011, 91001);
$no = substr($guesu,2,3);*/

$guesu = rand(1, 100);
$no = $guesu;

$sql = "SELECT * FROM J037 WHERE DB_num = '".$no."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_J037 = stripslashes($row[DB_data]);
}

?>