<?
$sql ="select DB_data, DB_numerical from S063 where DB_express = '". $my_year_h_org . $my_year_e_org ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S063 = stripslashes($row[DB_data]);
	$Tb_S063_numerical = stripslashes($row[DB_numerical]);
	
}
?>