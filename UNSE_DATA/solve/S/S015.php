<?
$star_year=str_replace("쇄","쇠",$star_year);
$explodeVar = explode("(",$star_year);

$sql ="SELECT DB_data FROM S015 WHERE DB_express_1 = '".$explodeVar[0]."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S015 = stripslashes($row[DB_data]);
}

?> 

