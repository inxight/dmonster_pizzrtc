<?

if($sex == "남"){
	$choie_data = "DB_data_m";
}Else{
	$choie_data = "DB_data_w";
}

switch($blood){
	Case "blood_01" : $blood = "A"; break;
	Case "blood_02" : $blood = "B"; break;
	Case "blood_03" : $blood = "O"; break;
	Case "blood_04" : $blood = "AB"; break;
}

$sql = "Select DB_data, ".$choie_data." as result_var from F033 where DB_express = '".$blood."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_F033 = stripslashes($row[result_var]);
}
?>