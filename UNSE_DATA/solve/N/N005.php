<?

$malun_no = $hanjano1 + $hanjano2 + $hanjano3 + $hanjano4;

if($malun_no >= 82 ){$malun_no = $malun_no - 80;}


$sql = "SELECT DB_num, DB_data, DB_express, DB_express_1 FROM N005 WHERE DB_num = '".$malun_no."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$no = stripslashes($row[DB_num]);
	$mangh = stripslashes($row[DB_express]);
	$womangh = stripslashes($row[DB_express_1]);
	$malunse = stripslashes($row[DB_data]);
}
	
	if($sex == "남"){ 
		$mal_gh = $mangh;
	}else{
		$mal_gh = $womangh;
	} 
	
	if($mal_gh = "吉"){
		$maljumsu = 100; 
		$maltitle = "上格";
	} 

	if($mal_gh = "中吉"){
		$maljumsu = 80; 
		$maltitle = "中上格";
	}

	if($mal_gh = "中凶"){
		$maljumsu = 60;
		$maltitle = "中下格";
	}

	if($mal_gh = "凶"){
		$maljumsu = 40;
		$maltitle = "下格";
	}

$Tb_N005 = $malunse;

?>