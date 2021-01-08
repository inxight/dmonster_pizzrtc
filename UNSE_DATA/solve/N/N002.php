<?

$all = 0;

If($sel = "1"){ 
	$choun_no = $hanjano2 + $hanjano3;
}Else{
	$choun_no = $hanjano3 + $hanjano4;
} 

if($choun_no >= 82){$choun_no = $choun_no - 80;}


$sql = "SELECT DB_num, DB_data, DB_express, DB_express_1 FROM N002 WHERE DB_num = '".$choun_no."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$no = stripslashes($row[DB_num]);
	$mangh = stripslashes($row[DB_express]);
	$womangh = stripslashes($row[DB_express_1]);
	$chounse = stripslashes($row[DB_data]);
}


	if($sex == "남"){
		$cho_gh = $mangh;
    }Else{ 
		$cho_gh = $womangh;
    } 
	
	if($cho_gh == "吉"){ 
		$chojumsu = 100;
		$chotitle = "上格";
	} 

	if($cho_gh == "中吉"){ 
		$chojumsu = 80; 
		$chotitle = "中上格";
	} 

	if($cho_gh == "中凶"){
		$chojumsu = 60;
		$chotitle = "中下格";
	} 

	if($cho_gh == "凶"){
		$chojumsu = 40;
		$chotitle = "下格";
	} 


$Tb_N002 = $chounse;

?>