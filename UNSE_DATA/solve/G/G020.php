<?
switch($sex){
	Case "남" :
		$result_man = $my_day_h;
		$result_woman = $your_day_h;
		break;
	Case "여" :
		$result_woman = $my_day_h;
		$result_man = $your_day_h;
		break;
}

$sql = "SELECT DB_data_m, DB_numerical FROM G020 WHERE DB_express = '".F_gabza_str($result_man)."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G020 = stripslashes($row[DB_data_m]);
       $Tb_G020_numerical = stripslashes($row[DB_numerical]);
}

$sql = "SELECT DB_data, DB_data_w FROM G020 WHERE DB_express = '".F_gabza_str($result_woman)."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $DB_data = stripslashes($row[DB_data]);
       $DB_data_w = stripslashes($row[DB_data_w]);
}


$Tb_G020 = $DB_data."<BR><BR>".$Tb_G020."<BR><BR>".$DB_data_w;
?>