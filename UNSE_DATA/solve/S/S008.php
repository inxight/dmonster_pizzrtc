<?
$sql = "select day_e from mansedata where no = '".date('Ymd')."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$day_e = stripslashes($row[day_e]);
}

$oheng_1 = F_ohengSearch($my_day_e_org);
$oheng_2 = F_ohengSearch($day_e);

$P = $oheng_1 * $oheng_2;

$Tb_S008_split = explode("|", F_woonday("S008", $P, $Xyeargi));

$Tb_S008 = $Tb_S008_split[0];
$Tb_S008_numerical = $Tb_S008_split[1];

$S008_img_var = $P;

$S008_img_var = str_replace(".jpg", "", $S008_img_var);

?>