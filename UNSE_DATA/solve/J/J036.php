<?
$guesu = rand(1, 100);
$no = $guesu;
//substr($guesu,2,3);

$sql = "SELECT DB_title, DB_title_1, DB_data, DB_data_1 FROM J036 WHERE DB_num = '".$no."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$DB_title = stripslashes($row[DB_title]);
	$DB_title_1 = stripslashes($row[DB_title_1]);
	$DB_data = stripslashes($row[DB_data]);
	$DB_data_1 = stripslashes($row[DB_data_1]);
}

$Tb_J036 = $DB_title."<br><BR>".$DB_title_1."<br><BR>".$DB_data."<br><BR>".str_replace("<BR>", "", $DB_data_1);




?>