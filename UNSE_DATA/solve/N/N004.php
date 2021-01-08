<?

$jungun_no = $hanjano1 + $hanjano2 + $hanjano4;

if($jungun_no >= 82){$jungun_no = $jungun_no - 80;}


$sql = "SELECT DB_num, DB_data, DB_express, DB_express_1 FROM N004 WHERE DB_num = '".$jungun_no."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$no = stripslashes($row[DB_num]);
	$mangh = stripslashes($row[DB_express]);
	$womangh = stripslashes($row[DB_express_1]);
	$jungunse = stripslashes($row[DB_data]);
}

	if($sex == "남"){ 
		$jung_gh = $mangh;
	}else{
		$jung_gh = $womangh;
	} 
	
	if($jung_gh == "吉"){
		$jungjumsu = 100;
		$jungtitle = "上格";
	} 

	if($jung_gh == "中吉"){ 
		$jungjumsu = 80;
		$jungtitle = "中上格";
	} 
    
	if($jung_gh == "中凶"){
		$jungjumsu = 60;
		$jungtitle = "中下格";
	} 

	if($jung_gh == "凶"){ 
		$jungjumsu = 40;
		$jungtitle = "下格";
	} 
	


$Tb_N004 = $jungunse;

?>