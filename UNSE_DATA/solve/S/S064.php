<?
/*switch($my_day_h_org){
		case "A" : $my_day_h_org_var = 1;
		case "B" : $my_day_h_org_var = 2;
		case "C" : $my_day_h_org_var = 3;
		case "D" : $my_day_h_org_var = 4;
		case "E" : $my_day_h_org_var = 5;
		case "F" : $my_day_h_org_var = 6;
		case "G" : $my_day_h_org_var = 7;
		case "H" : $my_day_h_org_var = 8;
		case "I" : $my_day_h_org_var = 9;
		case "J" : $my_day_h_org_var = 10;
}*/
$my_month_e_org*=1;
switch($my_day_h_org){
	case "A": case "C": case "E": case "G": case "I":
		if($my_month_e_org % 2==0){$my_month_e_org++;};
	case "B": case "D": case "F": case "H": case "J" :
		if($my_month_e_org % 2==1){$my_month_e_org++;};
}

if ($my_month_e_org>12){$my_month_e_org="01";};
if($my_month_e_org<10){$my_month_e_org="0".$my_month_e_org;};


$result_var = $my_day_h_org . $my_day_e_org;
//$result_var = $result_var % 60;

$sql ="SELECT DB_data_1, DB_numerical, DB_data FROM S064 WHERE DB_express = '". $result_var ."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S064aa = stripslashes($row[DB_data_1]);
	$Tb_S064bb = stripslashes($row[DB_data]);
	$Tb_S064_numerical = stripslashes($row[DB_numerical]);
}

$Tb_S064= $Tb_S064aa."<BR><BR>".$Tb_S064bb


?>