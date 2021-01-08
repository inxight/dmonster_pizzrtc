<?
$sql = "select day_e from mansedata where no = '".date('Ymd')."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$day_e = stripslashes($row[day_e]);
}

switch($my_day_h_org){
	Case "A" : $werewf1 = "갑"; break;
	Case "B" : $werewf1 = "을"; break;
	Case "C" : $werewf1 = "병"; break;
	Case "D" : $werewf1 = "정"; break;
	Case "E" : $werewf1 = "무"; break;
	Case "F" : $werewf1 = "기"; break;
	Case "G" : $werewf1 = "경"; break;
	Case "H" : $werewf1 = "신"; break;
	Case "I" : $werewf1 = "임"; break;
	default : $werewf1 = "계"; break;
}

switch($day_e){
	Case "01" : $werewf2 = "자"; break;
	Case "02" : $werewf2 = "축"; break;
	Case "03" : $werewf2 = "인"; break;
	Case "04" : $werewf2 = "묘"; break;
	Case "05" : $werewf2 = "진"; break;
	Case "06" : $werewf2 = "사"; break;
	Case "07" : $werewf2 = "오"; break;
	Case "08" : $werewf2 = "미"; break;
	Case "09" : $werewf2 = "신"; break;
	Case "10" : $werewf2 = "유"; break;
	Case "11" : $werewf2 = "술"; break;
	default : $werewf2 = "해"; break;
}

switch($my_day_e_org){
	Case "01" : $selectVar = "자"; break;
	Case "02" : $selectVar = "축"; break;
	Case "03" : $selectVar = "인"; break;
	Case "04" : $selectVar = "묘"; break;
	Case "05" : $selectVar = "진"; break;
	Case "06" : $selectVar = "사"; break;
	Case "07" : $selectVar = "오"; break;
	Case "08" : $selectVar = "미"; break;
	Case "09" : $selectVar = "신"; break;
	Case "10" : $selectVar = "유"; break;
	Case "11" : $selectVar = "술"; break;
	default : $selectVar = "해"; break;
}

$resultVar = F_Juyeok_trigram("Gan", $werewf1, $werewf2);		
$StrVar1111 = F_Juyeok_trigram("Ji", $selectVar, $werewf2);		

switch($resultVar){
	Case "건" : $serial = 1; break;
	Case "태" : $serial = 2; break;
	Case "이" : $serial = 3; break;
	Case "진" : $serial = 4; break;
	Case "손" : $serial = 5; break;
	Case "감" : $serial = 6; break;
	Case "간" : $serial = 7; break;
	default : $serial = 8; break;
} 

switch($StrVar1111){
	Case "건" : $serial_no = 1; break;
	Case "태" : $serial_no = 2; break;
	Case "이" : $serial_no = 3; break;
	Case "진" : $serial_no = 4; break;
	Case "손" : $serial_no = 5; break;
	Case "감" : $serial_no = 6; break;
	Case "간" : $serial_no = 7; break;
	default : $serial_no = 8; break;
}

$gue_all = $serial.$serial_no;

$sql ="select DB_data from J010 where DB_express = '". $gue_all ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_J010 = stripslashes($row[DB_data]);
     
}


$Tb_J010 = str_replace(chr(10),"<BR>",$Tb_J010);


?>