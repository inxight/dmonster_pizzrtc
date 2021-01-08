<?
$what = $_REQUEST['what'];

if ($Opt02) {    
    $k = explode("|","$Opt02");
    $what =  $k[0];
    $day =  $k[1];
    $jumc_org =  $k[2];
}

$jumc = $jumc_org;


if ($what == '01') {$what_dis =  '사업사';}
if ($what == '02') {$what_dis =  '취직사';}
if ($what == '03') {$what_dis =  '이혼사';}
if ($what == '04') {$what_dis =  '가출사';}
if ($what == '05') {$what_dis =  '질병사';}
if ($what == '06') {$what_dis =  '구재사';}
if ($what == '07') {$what_dis =  '주식투자사';}
if ($what == '08') {$what_dis =  '시험선거사';}
if ($what == '09') {$what_dis =  '임신출산사';}
if ($what == '10') {$what_dis =  '대인관계사';}
if ($what == '11') {$what_dis =  '도난실물사';}
if ($what == '12') {$what_dis =  '길흉예측사';}
if ($what == '13') {$what_dis =  '소송승패사';}
if ($what == '14') {$what_dis =  '매매사';}
if ($what == '15') {$what_dis =  '가택이동사';}
if ($what == '16') {$what_dis =  '혼인사';}

$today =date("Ymd");
$day = $today;

###############################
$sql = "SELECT * FROM mansedata WHERE no like  '$day'";

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

echo "<table align='center' cellpadding='0' cellspacing='0'><tr><td>";
echo "<font color=CC0000><b>[</b></font>음력<font color=CC0000><b>]</b></font> $lyear $lmonth $lday ($umyear $special_youn_disp $ummonth $umday $jeol)";
echo "<br>오늘의 일진(日辰) : <font color=blue>$lday</font>";
echo "<br>오늘의 월장(月將) : <font color=blue>$woljang</font>";
echo "</td></tr></table>";

if ($woljang == '子') {
  $woljang_1 = '丑';
  $woljang_2 = '寅';
  $woljang_3 = '卯';
  $woljang_4 = '辰';
  $woljang_5 = '巳';
  $woljang_6 = '午';
  $woljang_7 = '未';
  $woljang_8 = '申';
  $woljang_9 = '酉';
  $woljang_10 = '戌';
  $woljang_11 = '亥';
}
if ($woljang == '丑') {
  $woljang_1 = '寅';
  $woljang_2 = '卯';
  $woljang_3 = '辰';
  $woljang_4 = '巳';
  $woljang_5 = '午';
  $woljang_6 = '未';
  $woljang_7 = '申';
  $woljang_8 = '酉';
  $woljang_9 = '戌';
  $woljang_10 = '亥';
  $woljang_11 = '子';
}
if ($woljang == '寅') {
  $woljang_1 = '卯';
  $woljang_2 = '辰';
  $woljang_3 = '巳';
  $woljang_4 = '午';
  $woljang_5 = '未';
  $woljang_6 = '申';
  $woljang_7 = '酉';
  $woljang_8 = '戌';
  $woljang_9 = '亥';
  $woljang_10 = '子';
  $woljang_11 = '丑';
}
if ($woljang == '卯') {
  $woljang_1 = '辰';
  $woljang_2 = '巳';
  $woljang_3 = '午';
  $woljang_4 = '未';
  $woljang_5 = '申';
  $woljang_6 = '酉';
  $woljang_7 = '戌';
  $woljang_8 = '亥';
  $woljang_9 = '子';
  $woljang_10 = '丑';
  $woljang_11 = '寅';
}

if ($woljang == '辰') {
  $woljang_1 = '巳';
  $woljang_2 = '午';
  $woljang_3 = '未';
  $woljang_4 = '申';
  $woljang_5 = '酉';
  $woljang_6 = '戌';
  $woljang_7 = '亥';
  $woljang_8 = '子';
  $woljang_9 = '丑';
  $woljang_10 = '寅';
  $woljang_11 = '卯';
}

if ($woljang == '巳') {
  $woljang_1 = '午';
  $woljang_2 = '未';
  $woljang_3 = '申';
  $woljang_4 = '酉';
  $woljang_5 = '戌';
  $woljang_6 = '亥';
  $woljang_7 = '子';
  $woljang_8 = '丑';
  $woljang_9 = '寅';
  $woljang_10 = '卯';
  $woljang_11 = '辰';
}

if ($woljang == '午') {
  $woljang_1 = '未';
  $woljang_2 = '申';
  $woljang_3 = '酉';
  $woljang_4 = '戌';
  $woljang_5 = '亥';
  $woljang_6 = '子';
  $woljang_7 = '丑';
  $woljang_8 = '寅';
  $woljang_9 = '卯';
  $woljang_10 = '辰';
  $woljang_11 = '巳';
}

if ($woljang == '未') {
  $woljang_1 = '申';
  $woljang_2 = '酉';
  $woljang_3 = '戌';
  $woljang_4 = '亥';
  $woljang_5 = '子';
  $woljang_6 = '丑';
  $woljang_7 = '寅';
  $woljang_8 = '卯';
  $woljang_9 = '辰';
  $woljang_10 = '巳';
  $woljang_11 = '午';
}

if ($woljang == '申') {
  $woljang_1 = '酉';
  $woljang_2 = '戌';
  $woljang_3 = '亥';
  $woljang_4 = '子';
  $woljang_5 = '丑';
  $woljang_6 = '寅';
  $woljang_7 = '卯';
  $woljang_8 = '辰';
  $woljang_9 = '巳';
  $woljang_10 = '午';
  $woljang_11 = '未';
}

if ($woljang == '酉') {
  $woljang_1 = '戌';
  $woljang_2 = '亥';
  $woljang_3 = '子';
  $woljang_4 = '丑';
  $woljang_5 = '寅';
  $woljang_6 = '卯';
  $woljang_7 = '辰';
  $woljang_8 = '巳';
  $woljang_9 = '午';
  $woljang_10 = '未';
  $woljang_11 = '申';
}

if ($woljang == '戌') {
  $woljang_1 = '亥';
  $woljang_2 = '子';
  $woljang_3 = '丑';
  $woljang_4 = '寅';
  $woljang_5 = '卯';
  $woljang_6 = '辰';
  $woljang_7 = '巳';
  $woljang_8 = '午';
  $woljang_9 = '未';
  $woljang_10 = '申';
  $woljang_11 = '酉';
}

if ($woljang == '亥') {
  $woljang_1 = '子';
  $woljang_2 = '丑';
  $woljang_3 = '寅';
  $woljang_4 = '卯';
  $woljang_5 = '辰';
  $woljang_6 = '巳';
  $woljang_7 = '午';
  $woljang_8 = '未';
  $woljang_9 = '申';
  $woljang_10 = '酉';
  $woljang_11 = '戌';
}

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

######################오리지날 점시를 저장...
$jumc_org = $jumc;
##########################



$visit_na = rand(0,11);



############################양전4위 음후6위하여 차객법을 적용하여 점시를 수정하여 도출###############
if ($jumc == '子') {
   if ($visit_na == '2') {$jumc_temp = '卯';}
   if ($visit_na == '3') {$jumc_temp = '戌';}
   if ($visit_na == '4') {$jumc_temp = '丑';}
   if ($visit_na == '5') {$jumc_temp = '申';}
   if ($visit_na == '6') {$jumc_temp = '亥';}
   if ($visit_na == '7') {$jumc_temp = '午';}
   if ($visit_na == '8') {$jumc_temp = '酉';}
   if ($visit_na == '9') {$jumc_temp = '辰';}
   if ($visit_na == '10') {$jumc_temp = '未';}
   if ($visit_na == '11') {$jumc_temp = '寅';}
   if ($visit_na == '0') {$jumc_temp = '巳';}
   if ($visit_na == '1') {$jumc_temp = '子';}
}

if ($jumc == '丑') {
   if ($visit_na == '2') {$jumc_temp = '申';}
   if ($visit_na == '3') {$jumc_temp = '亥';}
   if ($visit_na == '4') {$jumc_temp = '午';}
   if ($visit_na == '5') {$jumc_temp = '酉';}
   if ($visit_na == '6') {$jumc_temp = '辰';}
   if ($visit_na == '7') {$jumc_temp = '未';}
   if ($visit_na == '8') {$jumc_temp = '寅';}
   if ($visit_na == '9') {$jumc_temp = '巳';}
   if ($visit_na == '10') {$jumc_temp = '子';}
   if ($visit_na == '11') {$jumc_temp = '卯';}
   if ($visit_na == '0') {$jumc_temp = '戌';}
   if ($visit_na == '1') {$jumc_temp = '丑';}
}

if ($jumc == '寅') {
   if ($visit_na == '2') {$jumc_temp = '巳';}
   if ($visit_na == '3') {$jumc_temp = '子';}
   if ($visit_na == '4') {$jumc_temp = '卯';}
   if ($visit_na == '5') {$jumc_temp = '戌';}
   if ($visit_na == '6') {$jumc_temp = '丑';}
   if ($visit_na == '7') {$jumc_temp = '申';}
   if ($visit_na == '8') {$jumc_temp = '亥';}
   if ($visit_na == '9') {$jumc_temp = '午';}
   if ($visit_na == '10') {$jumc_temp = '酉';}
   if ($visit_na == '11') {$jumc_temp = '辰';}
   if ($visit_na == '0') {$jumc_temp = '未';}
   if ($visit_na == '1') {$jumc_temp = '寅';}
}

if ($jumc == '卯') {
   if ($visit_na == '2') {$jumc_temp = '戌';}
   if ($visit_na == '3') {$jumc_temp = '丑';}
   if ($visit_na == '4') {$jumc_temp = '申';}
   if ($visit_na == '5') {$jumc_temp = '亥';}
   if ($visit_na == '6') {$jumc_temp = '午';}
   if ($visit_na == '7') {$jumc_temp = '酉';}
   if ($visit_na == '8') {$jumc_temp = '辰';}
   if ($visit_na == '9') {$jumc_temp = '未';}
   if ($visit_na == '10') {$jumc_temp = '寅';}
   if ($visit_na == '11') {$jumc_temp = '巳';}
   if ($visit_na == '0') {$jumc_temp = '子';}
   if ($visit_na == '1') {$jumc_temp = '卯';}
}

if ($jumc == '辰') {
   if ($visit_na == '2') {$jumc_temp = '未';}
   if ($visit_na == '3') {$jumc_temp = '寅';}
   if ($visit_na == '4') {$jumc_temp = '巳';}
   if ($visit_na == '5') {$jumc_temp = '子';}
   if ($visit_na == '6') {$jumc_temp = '卯';}
   if ($visit_na == '7') {$jumc_temp = '戌';}
   if ($visit_na == '8') {$jumc_temp = '丑';}
   if ($visit_na == '9') {$jumc_temp = '申';}
   if ($visit_na == '10') {$jumc_temp = '亥';}
   if ($visit_na == '11') {$jumc_temp = '午';}
   if ($visit_na == '0') {$jumc_temp = '酉';}
   if ($visit_na == '1') {$jumc_temp = '辰';}
}

if ($jumc == '巳') {
   if ($visit_na == '2') {$jumc_temp = '子';}
   if ($visit_na == '3') {$jumc_temp = '卯';}
   if ($visit_na == '4') {$jumc_temp = '戌';}
   if ($visit_na == '5') {$jumc_temp = '丑';}
   if ($visit_na == '6') {$jumc_temp = '申';}
   if ($visit_na == '7') {$jumc_temp = '亥';}
   if ($visit_na == '8') {$jumc_temp = '午';}
   if ($visit_na == '9') {$jumc_temp = '酉';}
   if ($visit_na == '10') {$jumc_temp = '辰';}
   if ($visit_na == '11') {$jumc_temp = '未';}
   if ($visit_na == '0') {$jumc_temp = '寅';}
   if ($visit_na == '1') {$jumc_temp = '巳';}
}

if ($jumc == '午') {
   if ($visit_na == '2') {$jumc_temp = '酉';}
   if ($visit_na == '3') {$jumc_temp = '辰';}
   if ($visit_na == '4') {$jumc_temp = '未';}
   if ($visit_na == '5') {$jumc_temp = '寅';}
   if ($visit_na == '6') {$jumc_temp = '巳';}
   if ($visit_na == '7') {$jumc_temp = '子';}
   if ($visit_na == '8') {$jumc_temp = '卯';}
   if ($visit_na == '9') {$jumc_temp = '戌';}
   if ($visit_na == '10') {$jumc_temp = '丑';}
   if ($visit_na == '11') {$jumc_temp = '申';}
   if ($visit_na == '0') {$jumc_temp = '亥';}
   if ($visit_na == '1') {$jumc_temp = '午';}
}

if ($jumc == '未') {
   if ($visit_na == '2') {$jumc_temp = '寅';}
   if ($visit_na == '3') {$jumc_temp = '巳';}
   if ($visit_na == '4') {$jumc_temp = '子';}
   if ($visit_na == '5') {$jumc_temp = '卯';}
   if ($visit_na == '6') {$jumc_temp = '戌';}
   if ($visit_na == '7') {$jumc_temp = '丑';}
   if ($visit_na == '8') {$jumc_temp = '申';}
   if ($visit_na == '9') {$jumc_temp = '亥';}
   if ($visit_na == '10') {$jumc_temp = '午';}
   if ($visit_na == '11') {$jumc_temp = '酉';}
   if ($visit_na == '0') {$jumc_temp = '辰';}
   if ($visit_na == '1') {$jumc_temp = '未';}
}

if ($jumc == '申') {
   if ($visit_na == '2') {$jumc_temp = '亥';}
   if ($visit_na == '3') {$jumc_temp = '午';}
   if ($visit_na == '4') {$jumc_temp = '酉';}
   if ($visit_na == '5') {$jumc_temp = '辰';}
   if ($visit_na == '6') {$jumc_temp = '未';}
   if ($visit_na == '7') {$jumc_temp = '寅';}
   if ($visit_na == '8') {$jumc_temp = '巳';}
   if ($visit_na == '9') {$jumc_temp = '子';}
   if ($visit_na == '10') {$jumc_temp = '卯';}
   if ($visit_na == '11') {$jumc_temp = '戌';}
   if ($visit_na == '0') {$jumc_temp = '丑';}
   if ($visit_na == '1') {$jumc_temp = '申';}
}

if ($jumc == '酉') {
   if ($visit_na == '2') {$jumc_temp = '辰';}
   if ($visit_na == '3') {$jumc_temp = '未';}
   if ($visit_na == '4') {$jumc_temp = '寅';}
   if ($visit_na == '5') {$jumc_temp = '巳';}
   if ($visit_na == '6') {$jumc_temp = '子';}
   if ($visit_na == '7') {$jumc_temp = '卯';}
   if ($visit_na == '8') {$jumc_temp = '戌';}
   if ($visit_na == '9') {$jumc_temp = '丑';}
   if ($visit_na == '10') {$jumc_temp = '申';}
   if ($visit_na == '11') {$jumc_temp = '亥';}
   if ($visit_na == '0') {$jumc_temp = '午';}
   if ($visit_na == '1') {$jumc_temp = '酉';}
}

if ($jumc == '戌') {
   if ($visit_na == '2') {$jumc_temp = '丑';}
   if ($visit_na == '3') {$jumc_temp = '申';}
   if ($visit_na == '4') {$jumc_temp = '亥';}
   if ($visit_na == '5') {$jumc_temp = '午';}
   if ($visit_na == '6') {$jumc_temp = '酉';}
   if ($visit_na == '7') {$jumc_temp = '辰';}
   if ($visit_na == '8') {$jumc_temp = '未';}
   if ($visit_na == '9') {$jumc_temp = '寅';}
   if ($visit_na == '10') {$jumc_temp = '巳';}
   if ($visit_na == '11') {$jumc_temp = '子';}
   if ($visit_na == '0') {$jumc_temp = '卯';}
   if ($visit_na == '1') {$jumc_temp = '戌';}
}

if ($jumc == '亥') {
   if ($visit_na == '2') {$jumc_temp = '午';}
   if ($visit_na == '3') {$jumc_temp = '酉';}
   if ($visit_na == '4') {$jumc_temp = '辰';}
   if ($visit_na == '5') {$jumc_temp = '未';}
   if ($visit_na == '6') {$jumc_temp = '寅';}
   if ($visit_na == '7') {$jumc_temp = '巳';}
   if ($visit_na == '8') {$jumc_temp = '子';}
   if ($visit_na == '9') {$jumc_temp = '卯';}
   if ($visit_na == '10') {$jumc_temp = '戌';}
   if ($visit_na == '11') {$jumc_temp = '丑';}
   if ($visit_na == '0') {$jumc_temp = '申';}
   if ($visit_na == '1') {$jumc_temp = '亥';}
}



//echo "$jumc_temp";

###############################################################점시가 정해졌을때 월장으로 천반을 정하는 과정

if ($jumc_temp == '子') {
  $chenban_11 = $woljang;
  $chenban_12 = $woljang_1;
  $chenban_01 = $woljang_2;
  $chenban_02 = $woljang_3;
  $chenban_03 = $woljang_4;
  $chenban_04 = $woljang_5;
  $chenban_05 = $woljang_6;
  $chenban_06 = $woljang_7;
  $chenban_07 = $woljang_8;
  $chenban_08 = $woljang_9;
  $chenban_09 = $woljang_10;
  $chenban_10 = $woljang_11;
} 

if ($jumc_temp == '丑') {
  $chenban_11 = $woljang_11;
  $chenban_12 = $woljang;
  $chenban_01 = $woljang_1;
  $chenban_02 = $woljang_2;
  $chenban_03 = $woljang_3;
  $chenban_04 = $woljang_4;
  $chenban_05 = $woljang_5;
  $chenban_06 = $woljang_6;
  $chenban_07 = $woljang_7;
  $chenban_08 = $woljang_8;
  $chenban_09 = $woljang_9;
  $chenban_10 = $woljang_10;
} 

if ($jumc_temp == '寅') {
  $chenban_11 = $woljang_10;
  $chenban_12 = $woljang_11;
  $chenban_01 = $woljang;
  $chenban_02 = $woljang_1;
  $chenban_03 = $woljang_2;
  $chenban_04 = $woljang_3;
  $chenban_05 = $woljang_4;
  $chenban_06 = $woljang_5;
  $chenban_07 = $woljang_6;
  $chenban_08 = $woljang_7;
  $chenban_09 = $woljang_8;
  $chenban_10 = $woljang_9;
} 

if ($jumc_temp == '卯') {
  $chenban_11 = $woljang_9;
  $chenban_12 = $woljang_10;
  $chenban_01 = $woljang_11;
  $chenban_02 = $woljang;
  $chenban_03 = $woljang_1;
  $chenban_04 = $woljang_2;
  $chenban_05 = $woljang_3;
  $chenban_06 = $woljang_4;
  $chenban_07 = $woljang_5;
  $chenban_08 = $woljang_6;
  $chenban_09 = $woljang_7;
  $chenban_10 = $woljang_8;
} 

if ($jumc_temp == '辰') {
  $chenban_11 = $woljang_8;
  $chenban_12 = $woljang_9;
  $chenban_01 = $woljang_10;
  $chenban_02 = $woljang_11;
  $chenban_03 = $woljang;
  $chenban_04 = $woljang_1;
  $chenban_05 = $woljang_2;
  $chenban_06 = $woljang_3;
  $chenban_07 = $woljang_4;
  $chenban_08 = $woljang_5;
  $chenban_09 = $woljang_6;
  $chenban_10 = $woljang_7;
} 
   

if ($jumc_temp == '巳') {
  $chenban_11 = $woljang_7;
  $chenban_12 = $woljang_8;
  $chenban_01 = $woljang_9;
  $chenban_02 = $woljang_10;
  $chenban_03 = $woljang_11;
  $chenban_04 = $woljang;
  $chenban_05 = $woljang_1;
  $chenban_06 = $woljang_2;
  $chenban_07 = $woljang_3;
  $chenban_08 = $woljang_4;
  $chenban_09 = $woljang_5;
  $chenban_10 = $woljang_6;
} 


if ($jumc_temp == '午') {
  $chenban_11 = $woljang_6;
  $chenban_12 = $woljang_7;
  $chenban_01 = $woljang_8;
  $chenban_02 = $woljang_9;
  $chenban_03 = $woljang_10;
  $chenban_04 = $woljang_11;
  $chenban_05 = $woljang;
  $chenban_06 = $woljang_1;
  $chenban_07 = $woljang_2;
  $chenban_08 = $woljang_3;
  $chenban_09 = $woljang_4;
  $chenban_10 = $woljang_5;
} 



if ($jumc_temp == '未') {
  $chenban_11 = $woljang_5;
  $chenban_12 = $woljang_6;
  $chenban_01 = $woljang_7;
  $chenban_02 = $woljang_8;
  $chenban_03 = $woljang_9;
  $chenban_04 = $woljang_10;
  $chenban_05 = $woljang_11;
  $chenban_06 = $woljang;
  $chenban_07 = $woljang_1;
  $chenban_08 = $woljang_2;
  $chenban_09 = $woljang_3;
  $chenban_10 = $woljang_4;
} 



if ($jumc_temp == '申') {
  $chenban_11 = $woljang_4;
  $chenban_12 = $woljang_5;
  $chenban_01 = $woljang_6;
  $chenban_02 = $woljang_7;
  $chenban_03 = $woljang_8;
  $chenban_04 = $woljang_9;
  $chenban_05 = $woljang_10;
  $chenban_06 = $woljang_11;
  $chenban_07 = $woljang;
  $chenban_08 = $woljang_1;
  $chenban_09 = $woljang_2;
  $chenban_10 = $woljang_3;
} 



if ($jumc_temp == '酉') {
  $chenban_11 = $woljang_3;
  $chenban_12 = $woljang_4;
  $chenban_01 = $woljang_5;
  $chenban_02 = $woljang_6;
  $chenban_03 = $woljang_7;
  $chenban_04 = $woljang_8;
  $chenban_05 = $woljang_9;
  $chenban_06 = $woljang_10;
  $chenban_07 = $woljang_11;
  $chenban_08 = $woljang;
  $chenban_09 = $woljang_1;
  $chenban_10 = $woljang_2;
} 



if ($jumc_temp == '戌') {
  $chenban_11 = $woljang_2;
  $chenban_12 = $woljang_3;
  $chenban_01 = $woljang_4;
  $chenban_02 = $woljang_5;
  $chenban_03 = $woljang_6;
  $chenban_04 = $woljang_7;
  $chenban_05 = $woljang_8;
  $chenban_06 = $woljang_9;
  $chenban_07 = $woljang_10;
  $chenban_08 = $woljang_11;
  $chenban_09 = $woljang;
  $chenban_10 = $woljang_1;
} 


if ($jumc_temp == '亥') {
  $chenban_11 = $woljang_1;
  $chenban_12 = $woljang_2;
  $chenban_01 = $woljang_3;
  $chenban_02 = $woljang_4;
  $chenban_03 = $woljang_5;
  $chenban_04 = $woljang_6;
  $chenban_05 = $woljang_7;
  $chenban_06 = $woljang_8;
  $chenban_07 = $woljang_9;
  $chenban_08 = $woljang_10;
  $chenban_09 = $woljang_11;
  $chenban_10 = $woljang;
} 

####################################
if ($chenban_11 == '子') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
}
if ($chenban_11 == '丑') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
}
if ($chenban_11 == '寅') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
}
if ($chenban_11 == '卯') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
}
if ($chenban_11 == '辰') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
}
if ($chenban_11 == '巳') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
}
if ($chenban_11 == '午') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
}
if ($chenban_11 == '未') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
}
if ($chenban_11 == '申') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
}
if ($chenban_11 == '酉') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
}
if ($chenban_11 == '戌') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
}
if ($chenban_11 == '亥') {
    $chenban_11_img = '<img src=http://60gabja.com/21C_img/21C_ji_10.gif>';
    $chenban_12_img = '<img src=http://60gabja.com/21C_img/21C_ji_11.gif>';
    $chenban_01_img = '<img src=http://60gabja.com/21C_img/21C_ji_12.gif>';
    $chenban_02_img = '<img src=http://60gabja.com/21C_img/21C_ji_01.gif>';
    $chenban_03_img = '<img src=http://60gabja.com/21C_img/21C_ji_02.gif>';
    $chenban_04_img = '<img src=http://60gabja.com/21C_img/21C_ji_03.gif>';
    $chenban_05_img = '<img src=http://60gabja.com/21C_img/21C_ji_04.gif>';
    $chenban_06_img = '<img src=http://60gabja.com/21C_img/21C_ji_05.gif>';
    $chenban_07_img = '<img src=http://60gabja.com/21C_img/21C_ji_06.gif>';
    $chenban_08_img = '<img src=http://60gabja.com/21C_img/21C_ji_07.gif>';
    $chenban_09_img = '<img src=http://60gabja.com/21C_img/21C_ji_08.gif>';
    $chenban_10_img = '<img src=http://60gabja.com/21C_img/21C_ji_09.gif>';
}

switch($what){
	Case "01" : $data_var = "DB_data_1"; break;
	Case "02" : $data_var = "DB_data_2"; break;
	Case "03" : $data_var = "DB_data_3"; break;
	Case "04" : $data_var = "DB_data_4"; break;
	Case "05" : $data_var = "DB_data_5"; break;
	Case "06" : $data_var = "DB_data_6"; break;
	Case "07" : $data_var = "DB_data_7"; break;
	Case "08" : $data_var = "DB_data_8"; break;
	Case "09" : $data_var = "DB_data_9"; break;
	Case "10" : $data_var = "DB_data_10"; break;
	Case "11" : $data_var = "DB_data_11"; break;
	Case "12" : $data_var = "DB_data_12"; break;
	Case "13" : $data_var = "DB_data_13"; break;
	Case "14" : $data_var = "DB_data_14"; break;
	Case "15" : $data_var = "DB_data_15"; break;
	Case "16" : $data_var = "DB_data_16"; break;
}

$sql = "SELECT ".$data_var." as result_var FROM J045 WHERE DB_express_1 = '".$chenban_05."' AND DB_express = '".$lday_h."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_J045 = stripslashes($row[result_var]);
}
?>