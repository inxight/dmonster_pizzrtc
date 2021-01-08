
<?

if ($my_day_h=="甲"||$my_day_h=="乙"){$disp_content2 = "mok";}
if ($my_day_h=="丙"||$my_day_h=="丁"){$disp_content2 = "wha";}
if ($my_day_h=="戊"||$my_day_h=="己"){$disp_content2 = "to";}
if ($my_day_h=="庚"||$my_day_h=="辛"){$disp_content2 = "gum";}
if ($my_day_h=="壬"||$my_day_h=="癸"){$disp_content2 = "su";}

$sql ="SELECT DB_data FROM S078 WHERE DB_express = '". $disp_content2 ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S078 = stripslashes($row[DB_data]);


}

?>