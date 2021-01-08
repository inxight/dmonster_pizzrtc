<?
if($sex=="남"){$choie_data = "DB_data_m";}else{$choie_data = "DB_data_w";}


$sql ="select ". $choie_data ." as result_var from S085 where DB_express = '". F_gabza_str($my_day_h) ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S085 = stripslashes($row[result_var]);
}
?>


