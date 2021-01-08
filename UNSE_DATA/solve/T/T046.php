<?
switch($my_hour_h_org){
	Case "A" : $unmyung = 1; break;
	Case "B" : $unmyung = 2; break;
	Case "C" : $unmyung = 3; break;
	Case "D" : $unmyung = 4; break;
	Case "E" : $unmyung = 5; break;
	Case "F" : $unmyung = 6; break;
	Case "G" : $unmyung = 7; break;
	Case "H" : $unmyung = 8; break;
	Case "I" : $unmyung = 9; break;
	default : $unmyung = 10; break;
}

$sql = "select DB_data from T046 where DB_express = '".$unmyung."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T046 = stripslashes($row[DB_data]);
}

$Tb_T046 =  str_replace("◐","▣", $Tb_T046);
?>