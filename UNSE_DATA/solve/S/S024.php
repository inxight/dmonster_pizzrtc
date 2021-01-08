<?




$mb_sibsin = substr(F_re_yukchin($monthgi, 12, $daygan), 5, 4);
$serial_no = F_mb_sibsin($mb_sibsin) ;

$sql ="select DB_data from S024 where DB_express = '".$serial_no."'";


$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S024 = stripslashes($row[DB_data]);
}


?> 