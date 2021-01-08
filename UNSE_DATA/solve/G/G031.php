<?

$sin_array_var = str_Replace("<font color=blue>", "", $sin_array[$temp_i]);
$sin_array_var = str_Replace("<font color=CC0000>", "", $sin_array_var);
$sin_array_var = str_Replace("</font>", "", $sin_array_var);

$my_day_eee = str_Replace("<font color=blue>", "", $my_day_eee);
$my_day_eee = str_Replace("<font color=CC0000>", "", $my_day_eee);
$my_day_eee = str_Replace("</font>", "", $my_day_eee);

$sql ="select DB_data from G031 where DB_express = '".$sin_array_var."' and DB_express_1 = '".$my_day_eee."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G031 = stripslashes($row[DB_data]);
}
?>

