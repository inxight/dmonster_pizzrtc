<?
$what = $_REQUEST['what'];

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
			$current_year_h = stripslashes($row[year_h]);
			$current_year_e = stripslashes($row[year_e]);
			$current_month_h = stripslashes($row[month_h]);
			$current_month_e = stripslashes($row[month_e]);
			$current_day_h = stripslashes($row[day_h]);
			$current_day_e = stripslashes($row[day_e]);
			$umdate = stripslashes($row[umdate]);
	                $special_youn = stripslashes($row[youn]);
			$jeol = stripslashes($row[jeol]);
			$woljang = stripslashes($row[woljang]);
		 }

}


if ($current_year_h == 'A') {$lyear_h = '甲';}
if ($current_year_h == 'B') {$lyear_h = '乙';}
if ($current_year_h == 'C') {$lyear_h = '丙';}
if ($current_year_h == 'D') {$lyear_h = '丁';}
if ($current_year_h == 'E') {$lyear_h = '戊';}
if ($current_year_h == 'F') {$lyear_h = '己';}
if ($current_year_h == 'G') {$lyear_h = '庚';}
if ($current_year_h == 'H') {$lyear_h = '辛';}
if ($current_year_h == 'I') {$lyear_h = '壬';}
if ($current_year_h == 'J') {$lyear_h = '癸';}

if ($current_month_h == 'A') {$lmonth_h = '甲';}
if ($current_month_h == 'B') {$lmonth_h = '乙';}
if ($current_month_h == 'C') {$lmonth_h = '丙';}
if ($current_month_h == 'D') {$lmonth_h = '丁';}
if ($current_month_h == 'E') {$lmonth_h = '戊';}
if ($current_month_h == 'F') {$lmonth_h = '己';}
if ($current_month_h == 'G') {$lmonth_h = '庚';}
if ($current_month_h == 'H') {$lmonth_h = '辛';}
if ($current_month_h == 'I') {$lmonth_h = '壬';}
if ($current_month_h == 'J') {$lmonth_h = '癸';}

if ($current_day_h == 'A') {$lday_h = '甲';}
if ($current_day_h == 'B') {$lday_h = '乙';}
if ($current_day_h == 'C') {$lday_h = '丙';}
if ($current_day_h == 'D') {$lday_h = '丁';}
if ($current_day_h == 'E') {$lday_h = '戊';}
if ($current_day_h == 'F') {$lday_h = '己';}
if ($current_day_h == 'G') {$lday_h = '庚';}
if ($current_day_h == 'H') {$lday_h = '辛';}
if ($current_day_h == 'I') {$lday_h = '壬';}
if ($current_day_h == 'J') {$lday_h = '癸';}

if ($current_year_e == '11') {$lyear_e = '子';}
if ($current_year_e == '12') {$lyear_e = '丑';}
if ($current_year_e == '01') {$lyear_e = '寅';}
if ($current_year_e == '02') {$lyear_e = '卯';}
if ($current_year_e == '03') {$lyear_e = '辰';}
if ($current_year_e == '04') {$lyear_e = '巳';}
if ($current_year_e == '05') {$lyear_e = '午';}
if ($current_year_e == '06') {$lyear_e = '未';}
if ($current_year_e == '07') {$lyear_e = '申';}
if ($current_year_e == '08') {$lyear_e = '酉';}
if ($current_year_e == '09') {$lyear_e = '戌';}
if ($current_year_e == '10') {$lyear_e = '亥';}

if ($current_month_e == '11') {$lmonth_e = '子';}
if ($current_month_e == '12') {$lmonth_e = '丑';}
if ($current_month_e == '01') {$lmonth_e = '寅';}
if ($current_month_e == '02') {$lmonth_e = '卯';}
if ($current_month_e == '03') {$lmonth_e = '辰';}
if ($current_month_e == '04') {$lmonth_e = '巳';}
if ($current_month_e == '05') {$lmonth_e = '午';}
if ($current_month_e == '06') {$lmonth_e = '未';}
if ($current_month_e == '07') {$lmonth_e = '申';}
if ($current_month_e == '08') {$lmonth_e = '酉';}
if ($current_month_e == '09') {$lmonth_e = '戌';}
if ($current_month_e == '10') {$lmonth_e = '亥';}

if ($current_day_e == '11') {$lday_e = '子';}
if ($current_day_e == '12') {$lday_e = '丑';}
if ($current_day_e == '01') {$lday_e = '寅';}
if ($current_day_e == '02') {$lday_e = '卯';}
if ($current_day_e == '03') {$lday_e = '辰';}
if ($current_day_e == '04') {$lday_e = '巳';}
if ($current_day_e == '05') {$lday_e = '午';}
if ($current_day_e == '06') {$lday_e = '未';}
if ($current_day_e == '07') {$lday_e = '申';}
if ($current_day_e == '08') {$lday_e = '酉';}
if ($current_day_e == '09') {$lday_e = '戌';}
if ($current_day_e == '10') {$lday_e = '亥';}



$lyear = $lyear_h.$lyear_e."年";
$lmonth = $lmonth_h.$lmonth_e."月";
$lday = $lday_h.$lday_e."日";

$llyear = $lyear_h.$lyear_e;
$llmonth = $lmonth_h.$lmonth_e;
$llday = $lday_h.$lday_e;


$umyear = substr($umdate,0,4)."年";
$ummonth = substr($umdate,4,2)."月";
$umday = substr($umdate,6,2)."日";

$il_dis = '日';
$guk_dis1 = '第';
$guk_dis2 = '局';


if ($special_youn == '1') {$special_youn_disp = '윤';} 


//echo "<font color=CC0000><b>[</b></font>음력<font color=CC0000><b>]</b></font> $lyear $lmonth $lday ($umyear $special_youn_disp $ummonth $umday $jeol)";
//echo "<br>오늘의 일진(日辰) : <font color=blue>$lday</font>";
//echo "<br>오늘의 월장(月將) : <font color=blue>$woljang</font>";
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

$si = '時';
//$jumc = '辰';
//echo "<br>현재의 문점시각(占時) : <font color=blue>$jumc 時</font>";
$today_umyear = substr($umdate,0,4);
$today_ummonth = substr($umdate,4,2);
$today_umday = substr($umdate,6,2);


##########################################


############국수구하기############
if ($woljang == '子') {
                               if ($jumc == '子') {$temp_guk = '1';}
			       if ($jumc == '丑') {$temp_guk = '2';}
			       if ($jumc == '寅') {$temp_guk = '3';}
			       if ($jumc == '卯') {$temp_guk = '4';}
			       if ($jumc == '辰') {$temp_guk = '5';}
			       if ($jumc == '巳') {$temp_guk = '6';}
			       if ($jumc == '午') {$temp_guk = '7';}
			       if ($jumc == '未') {$temp_guk = '8';}
			       if ($jumc == '申') {$temp_guk = '9';}
			       if ($jumc == '酉') {$temp_guk = '10';}
			       if ($jumc == '戌') {$temp_guk = '11';}
			       if ($jumc == '亥') {$temp_guk = '12';}
}
if ($woljang == '丑') {
                               if ($jumc == '子') {$temp_guk = '12';}
			       if ($jumc == '丑') {$temp_guk = '1';}
			       if ($jumc == '寅') {$temp_guk = '2';}
			       if ($jumc == '卯') {$temp_guk = '3';}
			       if ($jumc == '辰') {$temp_guk = '4';}
			       if ($jumc == '巳') {$temp_guk = '5';}
			       if ($jumc == '午') {$temp_guk = '6';}
			       if ($jumc == '未') {$temp_guk = '7';}
			       if ($jumc == '申') {$temp_guk = '8';}
			       if ($jumc == '酉') {$temp_guk = '9';}
			       if ($jumc == '戌') {$temp_guk = '10';}
			       if ($jumc == '亥') {$temp_guk = '11';}
}
if ($woljang == '寅') {
                               if ($jumc == '子') {$temp_guk = '11';}
			       if ($jumc == '丑') {$temp_guk = '12';}
			       if ($jumc == '寅') {$temp_guk = '1';}
			       if ($jumc == '卯') {$temp_guk = '2';}
			       if ($jumc == '辰') {$temp_guk = '3';}
			       if ($jumc == '巳') {$temp_guk = '4';}
			       if ($jumc == '午') {$temp_guk = '5';}
			       if ($jumc == '未') {$temp_guk = '6';}
			       if ($jumc == '申') {$temp_guk = '7';}
			       if ($jumc == '酉') {$temp_guk = '8';}
			       if ($jumc == '戌') {$temp_guk = '9';}
			       if ($jumc == '亥') {$temp_guk = '10';}
}
if ($woljang == '卯') {
                               if ($jumc == '子') {$temp_guk = '10';}
			       if ($jumc == '丑') {$temp_guk = '11';}
			       if ($jumc == '寅') {$temp_guk = '12';}
			       if ($jumc == '卯') {$temp_guk = '1';}
			       if ($jumc == '辰') {$temp_guk = '2';}
			       if ($jumc == '巳') {$temp_guk = '3';}
			       if ($jumc == '午') {$temp_guk = '4';}
			       if ($jumc == '未') {$temp_guk = '5';}
			       if ($jumc == '申') {$temp_guk = '6';}
			       if ($jumc == '酉') {$temp_guk = '7';}
			       if ($jumc == '戌') {$temp_guk = '8';}
			       if ($jumc == '亥') {$temp_guk = '9';}
}
if ($woljang == '辰') {
                               if ($jumc == '子') {$temp_guk = '9';}
			       if ($jumc == '丑') {$temp_guk = '10';}
			       if ($jumc == '寅') {$temp_guk = '11';}
			       if ($jumc == '卯') {$temp_guk = '12';}
			       if ($jumc == '辰') {$temp_guk = '1';}
			       if ($jumc == '巳') {$temp_guk = '2';}
			       if ($jumc == '午') {$temp_guk = '3';}
			       if ($jumc == '未') {$temp_guk = '4';}
			       if ($jumc == '申') {$temp_guk = '5';}
			       if ($jumc == '酉') {$temp_guk = '6';}
			       if ($jumc == '戌') {$temp_guk = '7';}
			       if ($jumc == '亥') {$temp_guk = '8';}
}
if ($woljang == '巳') {
                               if ($jumc == '子') {$temp_guk = '8';}
			       if ($jumc == '丑') {$temp_guk = '9';}
			       if ($jumc == '寅') {$temp_guk = '10';}
			       if ($jumc == '卯') {$temp_guk = '11';}
			       if ($jumc == '辰') {$temp_guk = '12';}
			       if ($jumc == '巳') {$temp_guk = '1';}
			       if ($jumc == '午') {$temp_guk = '2';}
			       if ($jumc == '未') {$temp_guk = '3';}
			       if ($jumc == '申') {$temp_guk = '4';}
			       if ($jumc == '酉') {$temp_guk = '5';}
			       if ($jumc == '戌') {$temp_guk = '6';}
			       if ($jumc == '亥') {$temp_guk = '7';}
}
if ($woljang == '午') {
                               if ($jumc == '子') {$temp_guk = '7';}
			       if ($jumc == '丑') {$temp_guk = '8';}
			       if ($jumc == '寅') {$temp_guk = '9';}
			       if ($jumc == '卯') {$temp_guk = '10';}
			       if ($jumc == '辰') {$temp_guk = '11';}
			       if ($jumc == '巳') {$temp_guk = '12';}
			       if ($jumc == '午') {$temp_guk = '1';}
			       if ($jumc == '未') {$temp_guk = '2';}
			       if ($jumc == '申') {$temp_guk = '3';}
			       if ($jumc == '酉') {$temp_guk = '4';}
			       if ($jumc == '戌') {$temp_guk = '5';}
			       if ($jumc == '亥') {$temp_guk = '6';}
}
if ($woljang == '未') {
                               if ($jumc == '子') {$temp_guk = '6';}
			       if ($jumc == '丑') {$temp_guk = '7';}
			       if ($jumc == '寅') {$temp_guk = '6';}
			       if ($jumc == '卯') {$temp_guk = '5';}
			       if ($jumc == '辰') {$temp_guk = '10';}
			       if ($jumc == '巳') {$temp_guk = '11';}
			       if ($jumc == '午') {$temp_guk = '12';}
			       if ($jumc == '未') {$temp_guk = '1';}
			       if ($jumc == '申') {$temp_guk = '2';}
			       if ($jumc == '酉') {$temp_guk = '3';}
			       if ($jumc == '戌') {$temp_guk = '4';}
			       if ($jumc == '亥') {$temp_guk = '5';}
}
if ($woljang == '申') {
                               if ($jumc == '子') {$temp_guk = '5';}
			       if ($jumc == '丑') {$temp_guk = '6';}
			       if ($jumc == '寅') {$temp_guk = '7';}
			       if ($jumc == '卯') {$temp_guk = '8';}
			       if ($jumc == '辰') {$temp_guk = '9';}
			       if ($jumc == '巳') {$temp_guk = '10';}
			       if ($jumc == '午') {$temp_guk = '11';}
			       if ($jumc == '未') {$temp_guk = '12';}
			       if ($jumc == '申') {$temp_guk = '1';}
			       if ($jumc == '酉') {$temp_guk = '2';}
			       if ($jumc == '戌') {$temp_guk = '3';}
			       if ($jumc == '亥') {$temp_guk = '4';}
}
if ($woljang == '酉') {
                               if ($jumc == '子') {$temp_guk = '4';}
			       if ($jumc == '丑') {$temp_guk = '5';}
			       if ($jumc == '寅') {$temp_guk = '6';}
			       if ($jumc == '卯') {$temp_guk = '7';}
			       if ($jumc == '辰') {$temp_guk = '8';}
			       if ($jumc == '巳') {$temp_guk = '9';}
			       if ($jumc == '午') {$temp_guk = '10';}
			       if ($jumc == '未') {$temp_guk = '11';}
			       if ($jumc == '申') {$temp_guk = '12';}
			       if ($jumc == '酉') {$temp_guk = '1';}
			       if ($jumc == '戌') {$temp_guk = '2';}
			       if ($jumc == '亥') {$temp_guk = '3';}
}
if ($woljang == '戌') {
                               if ($jumc == '子') {$temp_guk = '3';}
			       if ($jumc == '丑') {$temp_guk = '4';}
			       if ($jumc == '寅') {$temp_guk = '5';}
			       if ($jumc == '卯') {$temp_guk = '6';}
			       if ($jumc == '辰') {$temp_guk = '7';}
			       if ($jumc == '巳') {$temp_guk = '8';}
			       if ($jumc == '午') {$temp_guk = '9';}
			       if ($jumc == '未') {$temp_guk = '10';}
			       if ($jumc == '申') {$temp_guk = '11';}
			       if ($jumc == '酉') {$temp_guk = '12';}
			       if ($jumc == '戌') {$temp_guk = '1';}
			       if ($jumc == '亥') {$temp_guk = '2';}
}
if ($woljang == '亥') {
                               if ($jumc == '子') {$temp_guk = '2';}
			       if ($jumc == '丑') {$temp_guk = '3';}
			       if ($jumc == '寅') {$temp_guk = '4';}
			       if ($jumc == '卯') {$temp_guk = '5';}
			       if ($jumc == '辰') {$temp_guk = '6';}
			       if ($jumc == '巳') {$temp_guk = '7';}
			       if ($jumc == '午') {$temp_guk = '8';}
			       if ($jumc == '未') {$temp_guk = '9';}
			       if ($jumc == '申') {$temp_guk = '10';}
			       if ($jumc == '酉') {$temp_guk = '11';}
			       if ($jumc == '戌') {$temp_guk = '12';}
			       if ($jumc == '亥') {$temp_guk = '1';}
}
#####################국수구하기 끝###################

//$llday = '甲子';
//$temp_guk = '1';



$sql = "SELECT * FROM yukim_720 WHERE ganji like  '$llday' and guk like  '$temp_guk'";


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
                        
			$day_gui = stripslashes($row[day_gui]);
			$night_gui = stripslashes($row[night_gui]);

			$gongmang_01 = stripslashes($row[gongmang_01]);
			$gongmang_02 = stripslashes($row[gongmang_02]);
			
			$day_gui_t = stripslashes($row[day_gui_t]);
			$night_gui_t = stripslashes($row[night_gui_t]);

			$sun_yek_day = stripslashes($row[sun_yek_day]);
                        $sun_yek_night = stripslashes($row[sun_yek_night]);
		 }

}




if (($jumc == '卯') || ($jumc == '辰') || ($jumc == '巳') ||  ($jumc == '午') || ($jumc == '未') || ($jumc == '申')) {$today_gui = $day_gui; $today_gui_t = $day_gui_t;}
if (($jumc == '酉') || ($jumc == '戌') || ($jumc == '亥') || ($jumc == '子') ||  ($jumc == '丑') || ($jumc == '寅')) {$today_gui = $night_gui; $today_gui_t = $night_gui_t;}

//echo "<br>
//$llday$il_dis $guk_dis1$temp_guk$guk_dis2";
//echo "<br>공망 $gongmang_01/$gongmang_02";

if (($jumc == '卯') || ($jumc == '辰') || ($jumc == '巳') ||  ($jumc == '午') || ($jumc == '未') || ($jumc == '申')) {$k=$today_gui.'<font color=000000>(주)</font>  '.$night_gui.'<font color=000000>(염)</font>';}
if (($jumc == '酉') || ($jumc == '戌') || ($jumc == '亥') || ($jumc == '子') ||  ($jumc == '丑') || ($jumc == '寅')) {$k=$today_gui.'<font color=000000>(야)</font>  '.$day_gui.'<font color=000000>(염)</font>';}






//include "yukim_gongmang.php";

//include "yukim_12jang.php";


#######################################################################################################지두법

if ($temp_guk == '1') {
 $a11 =  '11';
 $a12 =  '12';
 $a01 =  '01';
 $a02 =  '02';
 $a03 =  '03';
 $a04 =  '04';
 $a05 =  '05';
 $a06 =  '06';
 $a07 =  '07';
 $a08 =  '08';
 $a09 =  '09';
 $a10 =  '10';
 $jinha = '辰'; $jaha = '子'; $myoha = '卯'; 
}

if ($temp_guk == '2') {
 $a11 =  '10';
 $a12 =  '11';
 $a01 =  '12';
 $a02 =  '01';
 $a03 =  '02';
 $a04 =  '03'; 
 $a05 =  '04';
 $a06 =  '05';
 $a07 =  '06';
 $a08 =  '07';
 $a09 =  '08';
 $a10 =  '09';
 $jinha = '巳'; $jaha = '丑';$myoha = '辰'; 
  }

if ($temp_guk == '3') {
 $a11 =  '09';
 $a12 =  '10';
 $a01 =  '11';
 $a02 =  '12';
 $a03 =  '01';
 $a04 =  '02';
 $a05 =  '03'; 
 $a06 =  '04';
 $a07 =  '05';
 $a08 =  '06';
 $a09 =  '07';
 $a10 =  '08';
 $jinha = '午'; $jaha = '寅';$myoha = '巳'; 
}

if ($temp_guk == '4') {
 $a11 =  '08';
 $a12 =  '09';
 $a01 =  '10';
 $a02 =  '11';
 $a03 =  '12';
 $a04 =  '01';
 $a05 =  '02';
 $a06 =  '03'; 
 $a07 =  '04';
 $a08 =  '05';
 $a09 =  '06';
 $a10 =  '07';
 $jinha = '未';  $jaha = '卯';$myoha = '午'; 
}

if ($temp_guk == '5') {
 $a11 =  '07';
 $a12 =  '08';
 $a01 =  '09';
 $a02 =  '10';
 $a03 =  '11';
 $a04 =  '12';
 $a05 =  '01';
 $a06 =  '02';
 $a07 =  '03'; 
 $a08 =  '04';
 $a09 =  '05';
 $a10 =  '06';
 $jinha = '申';  $jaha = '辰';$myoha = '未'; 
}

if ($temp_guk == '6') {
 $a11 =  '06';
 $a12 =  '07';
 $a01 =  '08';
 $a02 =  '09';
 $a03 =  '10';
 $a04 =  '11';
 $a05 =  '12';
 $a06 =  '01';
 $a07 =  '02';
 $a08 =  '03';
 $a09 =  '04';
 $a10 =  '05';
 $jinha = '酉';  $jaha = '巳';$myoha = '申'; 
}

if ($temp_guk == '7') {
 $a11 =  '05';
 $a12 =  '06';
 $a01 =  '07';
 $a02 =  '08';
 $a03 =  '09';
 $a04 =  '10';
 $a05 =  '11';
 $a06 =  '12';
 $a07 =  '01';
 $a08 =  '02';
 $a09 =  '03'; 
 $a10 =  '04';
 $jinha = '戌';  $jaha = '午';$myoha = '酉'; 
}



if ($temp_guk == '8') {
 $a11 =  '04';
 $a12 =  '05';
 $a01 =  '06';
 $a02 =  '07';
 $a03 =  '08';
 $a04 =  '09';
 $a05 =  '10';
 $a06 =  '11';
 $a07 =  '12';
 $a08 =  '01';
 $a09 =  '02';
 $a10 =  '03'; 
 $jinha = '亥';  $jaha = '未';$myoha = '戌'; 
}



if ($temp_guk == '9') {
 $a11 =  '03'; 
 $a12 =  '04';
 $a01 =  '05';
 $a02 =  '06';
 $a03 =  '07';
 $a04 =  '08';
 $a05 =  '09';
 $a06 =  '10';
 $a07 =  '11';
 $a08 =  '12';
 $a09 =  '01';
 $a10 =  '02';
 $jinha = '子';  $jaha = '申';$myoha = '亥'; 
}

if ($temp_guk == '10') {
 $a11 =  '02';
 $a12 =  '03'; 
 $a01 =  '04';
 $a02 =  '05';
 $a03 =  '06';
 $a04 =  '07';
 $a05 =  '08';
 $a06 =  '09';
 $a07 =  '10';
 $a08 =  '11';
 $a09 =  '12';
 $a10 =  '01';
 $jinha = '丑';  $jaha = '酉';$myoha = '子'; 
}

if ($temp_guk == '11') {
 $a11 =  '01';
 $a12 =  '02';
 $a01 =  '03'; 
 $a02 =  '04';
 $a03 =  '05';
 $a04 =  '06';
 $a05 =  '07';
 $a06 =  '08';
 $a07 =  '09';
 $a08 =  '10';
 $a09 =  '11';
 $a10 =  '12';
 $jinha = '寅';  $jaha = '戌';$myoha = '丑'; 
}

if ($temp_guk == '12') {
 $a11 =  '12';
 $a12 =  '01';
 $a01 =  '02';
 $a02 =  '03';
 $a03 =  '04';
 $a04 =  '05';
 $a05 =  '06';
 $a06 =  '07';
 $a07 =  '08';
 $a08 =  '09';
 $a09 =  '10';
 $a10 =  '11';
 $jinha = '卯';  $jaha = '亥';$myoha = '寅'; 
}

if($what != "기타"){
	switch($what){
		Case "계획사" : $express_var = "momang";break;
		Case "구재,구물사" : $express_var = "gujae";break;
		Case "매매사" : $express_var = "maemae";break;
		Case "태아성별사" : $express_var = "children";break;
		Case "질병사" : $express_var = "dese";break;
		Case "내방여부사" : $express_var = "app";break;
		Case "방문부재사" : $express_var = "visit";break;
		Case "여행,레저길흉사" : $express_var = "trival";break;
		Case "미로탈출사" : $express_var = "miro";break;
		Case "길흉예측사" : $express_var = "gil";break;
		Case "도난실물사" : $express_var = "donan";break;
		Case "위탁성부사" : $express_var = "tak";break;
		Case "승부(필승좌법)" : $express_var = "sbu";break;
		Case "진위파악사" : $express_var = "true";break;
		Case "도망,피신사" : $express_var = "escape";break;
	}

	$sql = "select DB_data_".F_DDI_str($jinha)." as cnt from J052 where DB_express = '".$express_var."'";

	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		mysql_data_seek($query,$i);
		$row = mysql_fetch_array($query);
		$Tb_J052 = stripslashes($row[cnt]);
	} 
}
?>