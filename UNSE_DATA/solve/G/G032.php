<?
$express_my_var = F_Oheng($my_year_h);
$express_your_var = F_Oheng($your_year_h);

$express_var = $express_my_var.$express_your_var;

$express_var = str_Replace("+", "", $express_var);
$express_var = str_Replace("-", "", $express_var);

$sql ="select DB_data from G032 where DB_express like '%".$express_var."%'";

$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G032 = stripslashes($row[DB_data]);
}
?>