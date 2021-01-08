<?
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


$sql ="SELECT DB_data,DB_data_1 FROM S066 WHERE DB_express = '". $result_var ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S066aa = stripslashes($row[DB_data]);
	$Tb_S066bb = stripslashes($row[DB_data_1]);

}

$Tb_S066=$Tb_S066aa."<br><br>".$Tb_S066bb

?>