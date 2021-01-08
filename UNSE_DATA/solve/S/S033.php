<?

$aabs = ($request_day + $MtDay) - (date("Y-m-d", strtotime(date("Y-m-d")."+1 month"))."-01");

If($aabs < 0){$aabs = $aabs * (-1);}

If($aabs > 31){$aabs = $aabs % 31;}
If($aabs == 0){$aabs = 1;}

$sql = "select DB_data, DB_numerical from S033 where DB_express = '". $aabs ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S033 = stripslashes($row[DB_data]);
	$Tb_S033_numerical = stripslashes($row[DB_numerical]);
}
?>