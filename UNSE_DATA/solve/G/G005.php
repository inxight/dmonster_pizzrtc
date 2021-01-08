<?
$sql = "select month_h from mansedata where no = '".date('Ymd')."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$month_h = stripslashes($row[month_h]);
}

switch($month_h.$my_year_e_org){
	case "A01" : $resultVar = 1; break;
	case "B02" : $resultVar = 2; break;
	case "C03" : $resultVar = 3; break;
	case "D04" : $resultVar = 4; break;
	case "E05" : $resultVar = 5; break;
	case "F06" : $resultVar = 6; break;
	case "G07" : $resultVar = 7; break;
	case "H08" : $resultVar = 8; break;
	case "I09" : $resultVar = 9; break;
	case "J10" : $resultVar = 10; break;
	case "A11" : $resultVar = 11; break;
	case "B12" : $resultVar = 12; break;
	case "C01" : $resultVar = 13; break;
	case "D02" : $resultVar = 14; break;
	case "E03" : $resultVar = 15; break;
	case "F04" : $resultVar = 16; break;
	case "G05" : $resultVar = 17; break;
	case "H06" : $resultVar = 18; break;
	case "I07" : $resultVar = 19; break;
	case "J08" : $resultVar = 20; break;
	case "A09" : $resultVar = 21; break;
	case "B10" : $resultVar = 22; break;
	case "C11" : $resultVar = 23; break;
	case "D12" : $resultVar = 24; break;
	case "E01" : $resultVar = 25; break;
	case "F02" : $resultVar = 26; break;
	case "G03" : $resultVar = 27; break;
	case "H04" : $resultVar = 28; break;
	case "I05" : $resultVar = 29; break;
	case "J06" : $resultVar = 30; break;
	case "A07" : $resultVar = 31; break;
	case "B08" : $resultVar = 32; break;
	case "C09" : $resultVar = 33; break;
	case "D10" : $resultVar = 34; break;
	case "E11" : $resultVar = 35; break;
	case "F12" : $resultVar = 36; break;
	case "G01" : $resultVar = 37; break;
	case "H02" : $resultVar = 38; break;
	case "I03" : $resultVar = 39; break;
	case "J04" : $resultVar = 40; break;
	case "A05" : $resultVar = 41; break;
	case "B06" : $resultVar = 42; break;
	case "C07" : $resultVar = 43; break;
	case "D08" : $resultVar = 44; break;
	case "E09" : $resultVar = 45; break;
	case "F10" : $resultVar = 46; break;
	case "G11" : $resultVar = 47; break;
	case "H12" : $resultVar = 48; break;
	case "I01" : $resultVar = 49; break;
	case "J02" : $resultVar = 50; break;
	case "A03" : $resultVar = 51; break;
	case "B04" : $resultVar = 52; break;
	case "C05" : $resultVar = 53; break;
	case "D06" : $resultVar = 54; break;
	case "E07" : $resultVar = 55; break;
	case "F08" : $resultVar = 56; break;
	case "G09" : $resultVar = 57; break;
	case "H10" : $resultVar = 58; break;
	case "I11" : $resultVar = 59; break;
	default : $resultVar = 60; break;
}

If($request_day == date("d")){
	switch($my_year_e_org){
		Case "01" :
		case "03" :
		case "05" : $werewf1 = 1; break;
		Case "06" :
		case "07" :
		case "11" : $werewf1 = 2; break;
		Case "02" :
		case "04" :
		case "09" : $werewf1 = 1; break;
		default : $werewf1 = 2; break;
	}

	$serial = $resultVar + ($my_day_e_org * $werewf1);
}Else{
	$serial = $resultVar;
}

If ($serial == 0) {$serial = 1;}

If($sex == "남"){
	$serial = $serial;
}Else{
	$serial = $serial + 80;
} 

If($serial > 160){$serial = 1;}

$sql ="select DB_data from G005 where DB_num = '". $serial ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G005 = stripslashes($row[DB_data]);

}


?>