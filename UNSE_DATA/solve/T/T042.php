<?
switch($request_hour){
	Case "00" : $serial = "자"; break;
	Case "01" : If($request_min > 31){$serial = "축";}Else{$serial = "자";} break;
	Case "02" : $serial = "축"; break;
	Case "03" : If($request_min > 31){$serial = "인";}Else{$serial = "축";} break;
	Case "04" : $serial = "인"; break;
	Case "05" : If($request_min > 31){$serial = "묘";}Else{$serial = "인";} break;
	Case "06" : $serial = "묘"; break;
	Case "07" : If($request_min > 31){$serial = "진";}Else{$serial = "묘";} break;
	Case "08" : $serial = "진"; break;
	Case "09" : If($request_min > 31){$serial = "사";}Else{$serial = "진";} break;
	Case "10" : $serial = "사"; break;
	Case "11" : If($request_min > 31){$serial = "오";}Else{$serial = "사";} break;
	Case "12" : $serial = "오"; break;
	Case "13" : If($request_min > 31){$serial = "미";}Else{$serial = "오";} break;
	Case "14" : $serial = "미"; break;
	Case "15" : If($request_min > 31){$serial = "신";}Else{$serial = "미";} break;
	Case "16" : $serial = "신"; break;
	Case "17" : If($request_min > 31){$serial = "유";}Else{$serial = "신";} break;
	Case "18" : $serial = "유"; break;
	Case "19" : If($request_min > 31){$serial = "술";}Else{$serial = "유";} break;
	Case "20" : $serial = "술"; break;
	Case "21" : If($request_min > 31){$serial = "해";}Else{$serial = "술";} break;
	Case "22" : $serial = "해"; break;
	Case "23" : If($request_min > 31){$serial = "자";}Else{$serial = "해";} break;
}

If($serial == "진"){$serial = "사";}

$sql = "select DB_data from T042 where DB_express like '%".$serial."%'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T042 = stripslashes($row[DB_data]);
}

$Tb_T042 =  str_replace(chr(10),"<br>", $Tb_T042);
?>