<?
$db_sibsin = substr(F_re_yukchin($daygi, 12, $daygan),5,4);
$db_sibsin = F_re_yukchin($daygi, 12, $daygan);
$daww=explode("(",$db_sibsin,2);
$daww=explode(")",$daww[1],-1);
$db_sibsin =$daww[0];

switch($db_sibsin){
    case "比肩" : $serial_no = "01"; break;
    case "劫財" : $serial_no = "02"; break;
    case "食神" : $serial_no = "03"; break;
    case "傷官" : $serial_no = "04"; break;
    case "偏財" : $serial_no = "05"; break;
    case "正財" : $serial_no = "06"; break;
    case "偏官" : $serial_no = "07"; break;
    case "正官" : $serial_no = "08"; break;
    case "偏印" : $serial_no = "09"; break;
    case "正印" : $serial_no = "10"; break;
}

$sql = "Select DB_data from S030 where DB_express = '".$serial_no."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S030 = stripslashes($row[DB_data]);
}
?>