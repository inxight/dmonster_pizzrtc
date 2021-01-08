<?
$sql = "select year_e from mansedata where no = '".date('Ymd')."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$year_e = stripslashes($row[year_e]);
}

$current_ymd = $my_year_e_org + $year_e;

If($my_year_e_org == $year_e){
	$current_ymd = 1;
} 

$sql = "Select DB_data from S143 where DB_express = '".$current_ymd."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S143 = stripslashes($row[DB_data]);
}
?>