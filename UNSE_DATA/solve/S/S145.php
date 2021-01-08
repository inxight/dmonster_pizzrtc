<?
$express_var = F_gabza_str($my_month_h);

If(strLen($express_var) == 1){$express_var = "0".$express_var;}Else{$express_var = $express_var;}

$sql = "Select DB_data from S145 where DB_express = '".$express_var."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S145 = stripslashes($row[DB_data]);
}

$Tb_S145 = str_replace(chr(10), "<br>", $Tb_S145);
?>