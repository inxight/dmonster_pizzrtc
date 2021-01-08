<?

$jangun_no = $hanjano1 + $hanjano2 + $hanjano3;

if($jangun_no >= 82){$jangun_no = $jangun_no - 80;}

if($sex == "남"){ 
	$choie_data = "DB_data_m";
}Else{
	$choie_data = "DB_data_w";
} 

$sql = "SELECT DB_num, DB_data as result_var, DB_express, DB_express_1 FROM N003 WHERE DB_num = '".$jangun_no."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$no = stripslashes($row[DB_num]);
	$mangh = stripslashes($row[DB_express]);
	$womangh = stripslashes($row[DB_express_1]);
	$jangunse = stripslashes($row[result_var]);
}

	if($sex == "남"){ 
		$jang_gh = $mangh;
	}else{
		$jang_gh = $womangh;
	} 

    if($jang_gh == "吉"){
		$jangjumsu = 100;
		$jangtitle = "上格";
	} 

	if($jang_gh == "中吉"){ 
		$jangjumsu = 80;
		$jangtitle = "中上格";
	} 

	if($jang_gh == "中凶"){ 
		$jangjumsu = 60 ;
		$jangtitle = "中下格";
	} 

	if($jang_gh == "凶"){
		$jangjumsu = 40 ;
		$jangtitle = "下格";
	} 
	


$Tb_N003 = $jangunse;

?>