<?	 

$dang2 = $my_year_e_org + $Tmonth;

if($dang2>12){$dang2 = (($my_year_e_org + $Tmonth) % 12) ;

	if($dang2==0){$dang2 =1;}
}


$sql ="select DB_data, DB_numerical from S019 where DB_express = '". $dang2 ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S019 = stripslashes($row[DB_data]);
	$Tb_S019_numerical = stripslashes($row[DB_numerical]);
}

?> 