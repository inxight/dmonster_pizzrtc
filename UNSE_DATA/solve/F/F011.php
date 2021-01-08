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

$resultVar = F_Juyeok_trigram("Gan", $werewf1, $werewf2);

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

$sql = "select DB_data from F011 where DB_express = '".$serial."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_F011 = stripslashes($row[DB_data]);
}


$Tb_F011 = str_replace("◐", "▣", $Tb_F011);
$Tb_F011 = str_Replace("&nbsp;", "<font style='font-size:11px;'> </font>", $Tb_F011);

?>