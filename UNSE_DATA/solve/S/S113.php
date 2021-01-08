
<?
$expressVar = $lunar_month;

If(strLen($expressVar) == 1){$expressVar = "0".$expressVar;}

$sql = "select DB_data from S113 where DB_express = '". $expressVar ."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S113 = stripslashes($row[DB_data]);
}

?>