<?



$dang3 = (int)$my_year_e_org + $Tmonth;

if($dang3>12){$dang3 = ((int)$my_year_e_org + $Tmonth) % 12;

	if($dang3==0){$dang3 =1;}
}

$sql ="select DB_data, DB_numerical from S020 where DB_express = '". $dang3 ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S020 = stripslashes($row[DB_data]);
	$Tb_S020_numerical = stripslashes($row[DB_numerical]);
}


?> 