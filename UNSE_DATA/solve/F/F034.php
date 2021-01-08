<?
switch($bloodm){
	Case "bloodm_01" : $bloodm = "A"; break;
	Case "bloodm_02" : $bloodm = "B"; break;
	Case "bloodm_03" : $bloodm = "O"; break;
	Case "bloodm_04" : $bloodm = "AB"; break;
}

switch($bloodw){
	Case "bloodw_01" : $bloodw = "A"; break;
	Case "bloodw_02" : $bloodw = "B"; break;
	Case "bloodw_03" : $bloodw = "O"; break;
	Case "bloodw_04" : $bloodw = "AB"; break;
}

$sql = "Select DB_data from F034 where DB_express = '".$bloodm."' and DB_express_1 = '".$bloodw."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_F034 = stripslashes($row[DB_data]);
}


?>