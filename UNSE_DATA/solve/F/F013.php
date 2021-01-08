<?
if($sex == "남"){ 
	$choie_data = "DB_data_m";
}Else{
	$choie_data = "DB_data_w";
}

$sql = "select ".$choie_data." as result_var from F013 where DB_express = '".$star_name."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_F013 = stripslashes($row[result_var]);
}

$Tb_F013 = str_replace("◐", "▣", $Tb_F013)
?>