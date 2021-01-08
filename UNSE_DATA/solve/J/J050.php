<?
$time =date("Hi");
			if ($time < '0131'){$jumc = '子';}
			if ($time >= '2331'){$jumc = '子';}
			if (($time >='0131') && ($time < '0331')) {$jumc = '丑';}
                        if (($time >='0331') && ($time < '0531')) {$jumc = '寅';}
                        if (($time >='0531') && ($time < '0731')) {$jumc = '卯';}
                        if (($time >='0731') && ($time < '0931')) {$jumc = '辰';}
                        if (($time >='0931') && ($time < '1131')) {$jumc = '巳';}
                        if (($time >='1131') && ($time < '1331')) {$jumc = '午';}
                        if (($time >='1331') && ($time < '1531')) {$jumc = '未';}
                        if (($time >='1531') && ($time < '1731')) {$jumc = '申';}
                        if (($time >='1731') && ($time < '1931')) {$jumc = '酉';}
                        if (($time >='1931') && ($time < '2131')) {$jumc = '戌';}
                        if (($time >='2131') && ($time < '2331')) {$jumc = '亥';}


$today =date("Ymd");
$no = $today;

###############################
$sql = "SELECT * FROM mansedata WHERE no like  '$no'";

if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {
 echo("ERROR");
 exit;
}else{  

		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$current_day_h = stripslashes($row[day_h]);
		 }

}


if ($sex == '남') {

   if (($my_year_h_org == 'A') || ($my_year_h_org == 'F')) {$a = '9';} 
   if (($my_year_h_org == 'B') || ($my_year_h_org == 'G')) {$a = '8';} 
   if (($my_year_h_org == 'C') || ($my_year_h_org == 'H')) {$a = '7';} 
   if (($my_year_h_org == 'D') || ($my_year_h_org == 'I')) {$a = '6';} 
   if (($my_year_h_org == 'E') || ($my_year_h_org == 'J')) {$a = '5';} 

   if (($current_day_h == 'A') || ($current_day_h == 'F')) {$b = '9';} 
   if (($current_day_h == 'B') || ($current_day_h == 'G')) {$b = '8';} 
   if (($current_day_h == 'C') || ($current_day_h == 'H')) {$b = '7';} 
   if (($current_day_h == 'D') || ($current_day_h == 'I')) {$b = '6';} 
   if (($current_day_h == 'E') || ($current_day_h == 'J')) {$b = '5';} 

   if (($jumc == '子') || ($jumc == '午')) {$c = '9';} 
   if (($jumc == '丑') || ($jumc == '未')) {$c = '8';} 
   if (($jumc == '寅') || ($jumc == '申')) {$c = '7';} 
   if (($jumc == '卯') || ($jumc == '酉')) {$c = '6';} 
   if (($jumc == '辰') || ($jumc == '戌')) {$c = '5';} 
   if (($jumc == '巳') || ($jumc == '亥')) {$c = '4';} 

}else{


   if (($my_year_e_org == '11') || ($my_year_e_org == '05')) {$a = '9';} 
   if (($my_year_e_org == '12') || ($my_year_e_org == '06')) {$a = '8';} 
   if (($my_year_e_org == '01') || ($my_year_e_org == '07')) {$a = '7';} 
   if (($my_year_e_org == '02') || ($my_year_e_org == '08')) {$a = '6';} 
   if (($my_year_e_org == '03') || ($my_year_e_org == '09')) {$a = '5';} 
   if (($my_year_e_org == '04') || ($my_year_e_org == '10')) {$a = '4';} 

   if (($current_day_h == 'A') || ($current_day_h == 'F')) {$b = '9';} 
   if (($current_day_h == 'B') || ($current_day_h == 'G')) {$b = '8';} 
   if (($current_day_h == 'C') || ($current_day_h == 'H')) {$b = '7';} 
   if (($current_day_h == 'D') || ($current_day_h == 'I')) {$b = '6';} 
   if (($current_day_h == 'E') || ($current_day_h == 'J')) {$b = '5';} 

   if (($jumc == '子') || ($jumc == '午')) {$c = '9';} 
   if (($jumc == '丑') || ($jumc == '未')) {$c = '8';} 
   if (($jumc == '寅') || ($jumc == '申')) {$c = '7';} 
   if (($jumc == '卯') || ($jumc == '酉')) {$c = '6';} 
   if (($jumc == '辰') || ($jumc == '戌')) {$c = '5';} 
   if (($jumc == '巳') || ($jumc == '亥')) {$c = '4';} 

}


$k = $a+$b+$c;
?>


<?


$sql = "select DB_data from J050 where DB_express = '".$k."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_J050 = stripslashes($row[DB_data]);
}

$Tb_J050 = str_Replace("◐", "▣", $Tb_J050);

?>

<center><img src="/UNSE_DATA/images/T050_img/<?=$k?>.jpg" ></center>