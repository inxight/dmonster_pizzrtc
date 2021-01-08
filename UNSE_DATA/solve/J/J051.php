<?

$jumsa = $_REQUEST['jumsa'];

$intstick1 = $_REQUEST['intstick1'];
$intstick2 = $_REQUEST['intstick2'];
$intstick3 = $_REQUEST['intstick3'];
$intstick4 = $_REQUEST['intstick4'];
$intstick5 = $_REQUEST['intstick5'];
$intstick6 = $_REQUEST['intstick6'];

$sql = "select DB_data from J051 where DB_express = '".rand(1, 14)."'";

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
			$result_num = stripslashes($row[DB_data]);
		 }

}

$result_num = str_replace("◐", "▣", $result_num);

$today =date("Ymd");
$to_year = substr($today,0,4)."년";
$to_month = substr($today,4,2)."월";
$to_day = substr($today,6,2)."일";


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
			$jeol = stripslashes($row[jeol]);
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


$lday_he = $lday_h.$lday_e;

if ($lday_he == '甲子') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}
if ($lday_he == '乙丑') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}
if ($lday_he == '丙寅') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}
if ($lday_he == '丁卯') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}
if ($lday_he == '戊辰') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}
if ($lday_he == '己巳') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}
if ($lday_he == '庚午') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}
if ($lday_he == '辛未') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}
if ($lday_he == '壬申') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}
if ($lday_he == '癸酉') {$gongmang1 = '戌';$gongmang2 = '亥';$chulgong = '甲戌';}

if ($lday_he == '甲戌') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}
if ($lday_he == '乙亥') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}
if ($lday_he == '丙子') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}
if ($lday_he == '丁丑') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}
if ($lday_he == '戊寅') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}
if ($lday_he == '己卯') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}
if ($lday_he == '庚辰') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}
if ($lday_he == '辛巳') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}
if ($lday_he == '壬午') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}
if ($lday_he == '癸未') {$gongmang1 = '申';$gongmang2 = '酉';$chulgong = '甲申';}

if ($lday_he == '甲申') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}
if ($lday_he == '乙酉') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}
if ($lday_he == '丙戌') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}
if ($lday_he == '丁亥') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}
if ($lday_he == '戊子') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}
if ($lday_he == '己丑') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}
if ($lday_he == '庚寅') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}
if ($lday_he == '辛卯') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}
if ($lday_he == '壬辰') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}
if ($lday_he == '癸巳') {$gongmang1 = '午';$gongmang2 = '未';$chulgong = '甲午';}

if ($lday_he == '甲午') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}
if ($lday_he == '乙未') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}
if ($lday_he == '丙申') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}
if ($lday_he == '丁酉') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}
if ($lday_he == '戊戌') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}
if ($lday_he == '己亥') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}
if ($lday_he == '庚子') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}
if ($lday_he == '辛丑') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}
if ($lday_he == '壬寅') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}
if ($lday_he == '癸卯') {$gongmang1 = '辰';$gongmang2 = '巳';$chulgong = '甲辰';}

if ($lday_he == '甲辰') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}
if ($lday_he == '乙巳') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}
if ($lday_he == '丙午') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}
if ($lday_he == '丁未') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}
if ($lday_he == '戊申') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}
if ($lday_he == '己酉') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}
if ($lday_he == '庚戌') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}
if ($lday_he == '辛亥') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}
if ($lday_he == '壬子') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}
if ($lday_he == '癸丑') {$gongmang1 = '寅';$gongmang2 = '卯';$chulgong = '甲寅';}

if ($lday_he == '甲寅') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
if ($lday_he == '乙卯') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
if ($lday_he == '丙辰') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
if ($lday_he == '丁巳') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
if ($lday_he == '戊午') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
if ($lday_he == '己未') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
if ($lday_he == '庚申') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
if ($lday_he == '辛酉') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
if ($lday_he == '壬戌') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
if ($lday_he == '癸亥') {$gongmang1 = '子';$gongmang2 = '丑';$chulgong = '甲子';}
 
###################################################################
if ($intstick1 == 1) {$intstick1_org = 1;$jigue1_org = 1;}
if ($intstick2 == 1) {$intstick2_org = 1;$jigue2_org = 1;}
if ($intstick3 == 1) {$intstick3_org = 1;$jigue3_org = 1;}
if ($intstick4 == 1) {$intstick4_org = 1;$jigue4_org = 1;}
if ($intstick5 == 1) {$intstick5_org = 1;$jigue5_org = 1;}
if ($intstick6 == 1) {$intstick6_org = 1;$jigue6_org = 1;}

if ($intstick1 == 2) {$intstick1_org = 2;$jigue1_org = 2;}
if ($intstick2 == 2) {$intstick2_org = 2;$jigue2_org = 2;}
if ($intstick3 == 2) {$intstick3_org = 2;$jigue3_org = 2;}
if ($intstick4 == 2) {$intstick4_org = 2;$jigue4_org = 2;}
if ($intstick5 == 2) {$intstick5_org = 2;$jigue5_org = 2;}
if ($intstick6 == 2) {$intstick6_org = 2;$jigue6_org = 2;}

if ($intstick1 == 3) {$intstick1_org = 1;$jigue1_org = 2;$byunhyo1 = '동효';}
if ($intstick2 == 3) {$intstick2_org = 1;$jigue2_org = 2;$byunhyo2 = '동효';}
if ($intstick3 == 3) {$intstick3_org = 1;$jigue3_org = 2;$byunhyo3 = '동효';}
if ($intstick4 == 3) {$intstick4_org = 1;$jigue4_org = 2;$byunhyo4 = '동효';}
if ($intstick5 == 3) {$intstick5_org = 1;$jigue5_org = 2;$byunhyo5 = '동효';}
if ($intstick6 == 3) {$intstick6_org = 1;$jigue6_org = 2;$byunhyo6 = '동효';}

if ($intstick1 == 0) {$intstick1_org = 2;$jigue1_org = 1;$byunhyo1 = '동효';}
if ($intstick2 == 0) {$intstick2_org = 2;$jigue2_org = 1;$byunhyo2 = '동효';}
if ($intstick3 == 0) {$intstick3_org = 2;$jigue3_org = 1;$byunhyo3 = '동효';}
if ($intstick4 == 0) {$intstick4_org = 2;$jigue4_org = 1;$byunhyo4 = '동효';}
if ($intstick5 == 0) {$intstick5_org = 2;$jigue5_org = 1;$byunhyo5 = '동효';}
if ($intstick6 == 0) {$intstick6_org = 2;$jigue6_org = 1;$byunhyo6 = '동효';}


if ($intstick1 == 2) {$intstick1_img = 'bar0.gif ';$jigue1_img = 'bar0.gif';}
if ($intstick2 == 2) {$intstick2_img = 'bar0.gif ';$jigue2_img = 'bar0.gif';}
if ($intstick3 == 2) {$intstick3_img = 'bar0.gif ';$jigue3_img = 'bar0.gif';}
if ($intstick4 == 2) {$intstick4_img = 'bar0.gif ';$jigue4_img = 'bar0.gif';}
if ($intstick5 == 2) {$intstick5_img = 'bar0.gif ';$jigue5_img = 'bar0.gif';}
if ($intstick6 == 2) {$intstick6_img = 'bar0.gif ';$jigue6_img = 'bar0.gif';}

if ($intstick1 == 0) {$intstick1_img = 'bar0_noum.gif ';$jigue1_img = 'bar1.gif';}
if ($intstick2 == 0) {$intstick2_img = 'bar0_noum.gif ';$jigue2_img = 'bar1.gif';}
if ($intstick3 == 0) {$intstick3_img = 'bar0_noum.gif ';$jigue3_img = 'bar1.gif';}
if ($intstick4 == 0) {$intstick4_img = 'bar0_noum.gif ';$jigue4_img = 'bar1.gif';}
if ($intstick5 == 0) {$intstick5_img = 'bar0_noum.gif ';$jigue5_img = 'bar1.gif';}
if ($intstick6 == 0) {$intstick6_img = 'bar0_noum.gif ';$jigue6_img = 'bar1.gif';}


if ($intstick1 == 1) {$intstick1_img = 'bar1.gif ';$jigue1_img = 'bar1.gif';}
if ($intstick2 == 1) {$intstick2_img = 'bar1.gif ';$jigue2_img = 'bar1.gif';}
if ($intstick3 == 1) {$intstick3_img = 'bar1.gif ';$jigue3_img = 'bar1.gif';}
if ($intstick4 == 1) {$intstick4_img = 'bar1.gif ';$jigue4_img = 'bar1.gif';}
if ($intstick5 == 1) {$intstick5_img = 'bar1.gif ';$jigue5_img = 'bar1.gif';}
if ($intstick6 == 1) {$intstick6_img = 'bar1.gif ';$jigue6_img = 'bar1.gif';}

if ($intstick1 == 3) {$intstick1_img = 'bar1_noyang.gif ';$jigue1_img = 'bar0.gif';}
if ($intstick2 == 3) {$intstick2_img = 'bar1_noyang.gif ';$jigue2_img = 'bar0.gif';}
if ($intstick3 == 3) {$intstick3_img = 'bar1_noyang.gif ';$jigue3_img = 'bar0.gif';}
if ($intstick4 == 3) {$intstick4_img = 'bar1_noyang.gif ';$jigue4_img = 'bar0.gif';}
if ($intstick5 == 3) {$intstick5_img = 'bar1_noyang.gif ';$jigue5_img = 'bar0.gif';}
if ($intstick6 == 3) {$intstick6_img = 'bar1_noyang.gif ';$jigue6_img = 'bar0.gif';}


$num_tot_half1 = $intstick1_org.$intstick2_org.$intstick3_org;
$num_tot_half2 = $intstick4_org.$intstick5_org.$intstick6_org;
$num_tot =  $num_tot_half1.$num_tot_half2;
$num_tot_jigue = $jigue1_org.$jigue2_org.$jigue3_org.$jigue4_org.$jigue5_org.$jigue6_org;

//echo "$num_tot";
//echo "<br>$num_tot_jigue";
##############################################################################

$sql = "SELECT * FROM juyek_6hyo WHERE juyek like  '$num_tot'";


if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$title = stripslashes($row[title]);
			$gung = stripslashes($row[gung]);
			$jiji_01 = stripslashes($row[jiji_01]);
			$jiji_02 = stripslashes($row[jiji_02]);
			$jiji_03 = stripslashes($row[jiji_03]);
			$jiji_04 = stripslashes($row[jiji_04]);
			$jiji_05 = stripslashes($row[jiji_05]);
			$jiji_06 = stripslashes($row[jiji_06]);
			$boksin_01 = stripslashes($row[boksin_01]);
			$boksin_02 = stripslashes($row[boksin_02]);
			$boksin_03 = stripslashes($row[boksin_03]);
			$boksin_04 = stripslashes($row[boksin_04]);
			$boksin_05 = stripslashes($row[boksin_05]);
			$boksin_06 = stripslashes($row[boksin_06]);
			$sehyo = stripslashes($row[sehyo]);
			$ychin_01 = stripslashes($row[ychin_01]);
			$ychin_02 = stripslashes($row[ychin_02]);
			$ychin_03 = stripslashes($row[ychin_03]);
			$ychin_04 = stripslashes($row[ychin_04]);
			$ychin_05 = stripslashes($row[ychin_05]);
			$ychin_06 = stripslashes($row[ychin_06]);
			$boksin_ychin_01 = stripslashes($row[boksin_ychin_01]);
			$boksin_ychin_02 = stripslashes($row[boksin_ychin_02]);
			$boksin_ychin_03 = stripslashes($row[boksin_ychin_03]);
			$boksin_ychin_04 = stripslashes($row[boksin_ychin_04]);
			$boksin_ychin_05 = stripslashes($row[boksin_ychin_05]);
			$boksin_ychin_06 = stripslashes($row[boksin_ychin_06]);
			$hapchung = stripslashes($row[hapchung]);
}

##############################################################################
##############################################################################

$sql = "SELECT * FROM juyek_6hyo WHERE juyek like  '$num_tot_jigue'";


if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$jigue_title = stripslashes($row[title]);
			$jigue_gung = stripslashes($row[gung]);
			$jigue_jiji_01 = stripslashes($row[jiji_01]);
			$jigue_jiji_02 = stripslashes($row[jiji_02]);
			$jigue_jiji_03 = stripslashes($row[jiji_03]);
			$jigue_jiji_04 = stripslashes($row[jiji_04]);
			$jigue_jiji_05 = stripslashes($row[jiji_05]);
			$jigue_jiji_06 = stripslashes($row[jiji_06]);
			$jigue_hapchung = stripslashes($row[hapchung]);
          }
##############################################################################
##############################################################################
if ($byunhyo1 == '동효') {$dong_jiji_01 = $jigue_jiji_01;}
if ($byunhyo2 == '동효') {$dong_jiji_02 = $jigue_jiji_02;}
if ($byunhyo3 == '동효') {$dong_jiji_03 = $jigue_jiji_03;}
if ($byunhyo4 == '동효') {$dong_jiji_04 = $jigue_jiji_04;}
if ($byunhyo5 == '동효') {$dong_jiji_05 = $jigue_jiji_05;}
if ($byunhyo6 == '동효') {$dong_jiji_06 = $jigue_jiji_06;}
##############################################################################
if (($gung == '震木宮')||($gung == '巽木宮')) {
  if (($dong_jiji_01 == '寅')||($dong_jiji_01 == '卯')) {$yychin_01 = '兄';} 
  if (($dong_jiji_01 == '巳')||($dong_jiji_01 == '午')) {$yychin_01 = '孫';} 
  if (($dong_jiji_01 == '申')||($dong_jiji_01 == '酉')) {$yychin_01 = '官';} 
  if (($dong_jiji_01 == '子')||($dong_jiji_01 == '亥')) {$yychin_01 = '父';} 
  if (($dong_jiji_01 == '辰')||($dong_jiji_01 == '戌')||($dong_jiji_01 == '丑')||($dong_jiji_01 == '未')) {$yychin_01 = '財';} 

  if (($dong_jiji_02 == '寅')||($dong_jiji_02 == '卯')) {$yychin_02 = '兄';} 
  if (($dong_jiji_02 == '巳')||($dong_jiji_02 == '午')) {$yychin_02 = '孫';} 
  if (($dong_jiji_02 == '申')||($dong_jiji_02 == '酉')) {$yychin_02 = '官';} 
  if (($dong_jiji_02 == '子')||($dong_jiji_02 == '亥')) {$yychin_02 = '父';} 
  if (($dong_jiji_02 == '辰')||($dong_jiji_02 == '戌')||($dong_jiji_02 == '丑')||($dong_jiji_02 == '未')) {$yychin_02 = '財';} 
  
  if (($dong_jiji_03 == '寅')||($dong_jiji_03 == '卯')) {$yychin_03 = '兄';} 
  if (($dong_jiji_03 == '巳')||($dong_jiji_03 == '午')) {$yychin_03 = '孫';} 
  if (($dong_jiji_03 == '申')||($dong_jiji_03 == '酉')) {$yychin_03 = '官';} 
  if (($dong_jiji_03 == '子')||($dong_jiji_03 == '亥')) {$yychin_03 = '父';} 
  if (($dong_jiji_03 == '辰')||($dong_jiji_03 == '戌')||($dong_jiji_03 == '丑')||($dong_jiji_03 == '未')) {$yychin_03 = '財';} 

  if (($dong_jiji_04 == '寅')||($dong_jiji_04 == '卯')) {$yychin_04 = '兄';} 
  if (($dong_jiji_04 == '巳')||($dong_jiji_04 == '午')) {$yychin_04 = '孫';} 
  if (($dong_jiji_04 == '申')||($dong_jiji_04 == '酉')) {$yychin_04 = '官';} 
  if (($dong_jiji_04 == '子')||($dong_jiji_04 == '亥')) {$yychin_04 = '父';} 
  if (($dong_jiji_04 == '辰')||($dong_jiji_04 == '戌')||($dong_jiji_04 == '丑')||($dong_jiji_04 == '未')) {$yychin_04 = '財';} 

  if (($dong_jiji_05 == '寅')||($dong_jiji_05 == '卯')) {$yychin_05 = '兄';} 
  if (($dong_jiji_05 == '巳')||($dong_jiji_05 == '午')) {$yychin_05 = '孫';} 
  if (($dong_jiji_05 == '申')||($dong_jiji_05 == '酉')) {$yychin_05 = '官';} 
  if (($dong_jiji_05 == '子')||($dong_jiji_05 == '亥')) {$yychin_05 = '父';} 
  if (($dong_jiji_05 == '辰')||($dong_jiji_05 == '戌')||($dong_jiji_05 == '丑')||($dong_jiji_05 == '未')) {$yychin_05 = '財';} 

  if (($dong_jiji_06 == '寅')||($dong_jiji_06 == '卯')) {$yychin_06 = '兄';} 
  if (($dong_jiji_06 == '巳')||($dong_jiji_06 == '午')) {$yychin_06 = '孫';} 
  if (($dong_jiji_06 == '申')||($dong_jiji_06 == '酉')) {$yychin_06 = '官';} 
  if (($dong_jiji_06 == '子')||($dong_jiji_06 == '亥')) {$yychin_06 = '父';} 
  if (($dong_jiji_06 == '辰')||($dong_jiji_06 == '戌')||($dong_jiji_06 == '丑')||($dong_jiji_06 == '未')) {$yychin_06 = '財';} 
}

if ($gung == '離火宮') {
  if (($dong_jiji_01 == '寅')||($dong_jiji_01 == '卯')) {$yychin_01 = '父';} 
  if (($dong_jiji_01 == '巳')||($dong_jiji_01 == '午')) {$yychin_01 = '兄';} 
  if (($dong_jiji_01 == '申')||($dong_jiji_01 == '酉')) {$yychin_01 = '財';} 
  if (($dong_jiji_01 == '子')||($dong_jiji_01 == '亥')) {$yychin_01 = '官';} 
  if (($dong_jiji_01 == '辰')||($dong_jiji_01 == '戌')||($dong_jiji_01 == '丑')||($dong_jiji_01 == '未')) {$yychin_01 = '孫';} 

  if (($dong_jiji_02 == '寅')||($dong_jiji_02 == '卯')) {$yychin_02 = '父';} 
  if (($dong_jiji_02 == '巳')||($dong_jiji_02 == '午')) {$yychin_02 = '兄';} 
  if (($dong_jiji_02 == '申')||($dong_jiji_02 == '酉')) {$yychin_02 = '財';} 
  if (($dong_jiji_02 == '子')||($dong_jiji_02 == '亥')) {$yychin_02 = '官';} 
  if (($dong_jiji_02 == '辰')||($dong_jiji_02 == '戌')||($dong_jiji_02 == '丑')||($dong_jiji_02 == '未')) {$yychin_02 = '孫';} 
  
  if (($dong_jiji_03 == '寅')||($dong_jiji_03 == '卯')) {$yychin_03 = '父';} 
  if (($dong_jiji_03 == '巳')||($dong_jiji_03 == '午')) {$yychin_03 = '兄';} 
  if (($dong_jiji_03 == '申')||($dong_jiji_03 == '酉')) {$yychin_03 = '財';} 
  if (($dong_jiji_03 == '子')||($dong_jiji_03 == '亥')) {$yychin_03 = '官';} 
  if (($dong_jiji_03 == '辰')||($dong_jiji_03 == '戌')||($dong_jiji_03 == '丑')||($dong_jiji_03 == '未')) {$yychin_03 = '孫';} 

  if (($dong_jiji_04 == '寅')||($dong_jiji_04 == '卯')) {$yychin_04 = '父';} 
  if (($dong_jiji_04 == '巳')||($dong_jiji_04 == '午')) {$yychin_04 = '兄';} 
  if (($dong_jiji_04 == '申')||($dong_jiji_04 == '酉')) {$yychin_04 = '財';} 
  if (($dong_jiji_04 == '子')||($dong_jiji_04 == '亥')) {$yychin_04 = '官';} 
  if (($dong_jiji_04 == '辰')||($dong_jiji_04 == '戌')||($dong_jiji_04 == '丑')||($dong_jiji_04 == '未')) {$yychin_04 = '孫';} 

  if (($dong_jiji_05 == '寅')||($dong_jiji_05 == '卯')) {$yychin_05 = '父';} 
  if (($dong_jiji_05 == '巳')||($dong_jiji_05 == '午')) {$yychin_05 = '兄';} 
  if (($dong_jiji_05 == '申')||($dong_jiji_05 == '酉')) {$yychin_05 = '財';} 
  if (($dong_jiji_05 == '子')||($dong_jiji_05 == '亥')) {$yychin_05 = '官';} 
  if (($dong_jiji_05 == '辰')||($dong_jiji_05 == '戌')||($dong_jiji_05 == '丑')||($dong_jiji_05 == '未')) {$yychin_05 = '孫';} 

  if (($dong_jiji_06 == '寅')||($dong_jiji_06 == '卯')) {$yychin_06 = '父';} 
  if (($dong_jiji_06 == '巳')||($dong_jiji_06 == '午')) {$yychin_06 = '兄';} 
  if (($dong_jiji_06 == '申')||($dong_jiji_06 == '酉')) {$yychin_06 = '財';} 
  if (($dong_jiji_06 == '子')||($dong_jiji_06 == '亥')) {$yychin_06 = '官';} 
  if (($dong_jiji_06 == '辰')||($dong_jiji_06 == '戌')||($dong_jiji_06 == '丑')||($dong_jiji_06 == '未')) {$yychin_06 = '孫';} 
}

if (($gung == '艮土宮')||($gung == '坤土宮')) {
  if (($dong_jiji_01 == '寅')||($dong_jiji_01 == '卯')) {$yychin_01 = '官';} 
  if (($dong_jiji_01 == '巳')||($dong_jiji_01 == '午')) {$yychin_01 = '父';} 
  if (($dong_jiji_01 == '申')||($dong_jiji_01 == '酉')) {$yychin_01 = '孫';} 
  if (($dong_jiji_01 == '子')||($dong_jiji_01 == '亥')) {$yychin_01 = '財';} 
  if (($dong_jiji_01 == '辰')||($dong_jiji_01 == '戌')||($dong_jiji_01 == '丑')||($dong_jiji_01 == '未')) {$yychin_01 = '兄';} 

  if (($dong_jiji_02 == '寅')||($dong_jiji_02 == '卯')) {$yychin_02 = '官';} 
  if (($dong_jiji_02 == '巳')||($dong_jiji_02 == '午')) {$yychin_02 = '父';} 
  if (($dong_jiji_02 == '申')||($dong_jiji_02 == '酉')) {$yychin_02 = '孫';} 
  if (($dong_jiji_02 == '子')||($dong_jiji_02 == '亥')) {$yychin_02 = '財';} 
  if (($dong_jiji_02 == '辰')||($dong_jiji_02 == '戌')||($dong_jiji_02 == '丑')||($dong_jiji_02 == '未')) {$yychin_02 = '兄';} 
  
  if (($dong_jiji_03 == '寅')||($dong_jiji_03 == '卯')) {$yychin_03 = '官';} 
  if (($dong_jiji_03 == '巳')||($dong_jiji_03 == '午')) {$yychin_03 = '父';} 
  if (($dong_jiji_03 == '申')||($dong_jiji_03 == '酉')) {$yychin_03 = '孫';} 
  if (($dong_jiji_03 == '子')||($dong_jiji_03 == '亥')) {$yychin_03 = '財';} 
  if (($dong_jiji_03 == '辰')||($dong_jiji_03 == '戌')||($dong_jiji_03 == '丑')||($dong_jiji_03 == '未')) {$yychin_03 = '兄';} 

  if (($dong_jiji_04 == '寅')||($dong_jiji_04 == '卯')) {$yychin_04 = '官';} 
  if (($dong_jiji_04 == '巳')||($dong_jiji_04 == '午')) {$yychin_04 = '父';} 
  if (($dong_jiji_04 == '申')||($dong_jiji_04 == '酉')) {$yychin_04 = '孫';} 
  if (($dong_jiji_04 == '子')||($dong_jiji_04 == '亥')) {$yychin_04 = '財';} 
  if (($dong_jiji_04 == '辰')||($dong_jiji_04 == '戌')||($dong_jiji_04 == '丑')||($dong_jiji_04 == '未')) {$yychin_04 = '兄';} 

  if (($dong_jiji_05 == '寅')||($dong_jiji_05 == '卯')) {$yychin_05 = '官';} 
  if (($dong_jiji_05 == '巳')||($dong_jiji_05 == '午')) {$yychin_05 = '父';} 
  if (($dong_jiji_05 == '申')||($dong_jiji_05 == '酉')) {$yychin_05 = '孫';} 
  if (($dong_jiji_05 == '子')||($dong_jiji_05 == '亥')) {$yychin_05 = '財';} 
  if (($dong_jiji_05 == '辰')||($dong_jiji_05 == '戌')||($dong_jiji_05 == '丑')||($dong_jiji_05 == '未')) {$yychin_05 = '兄';} 

  if (($dong_jiji_06 == '寅')||($dong_jiji_06 == '卯')) {$yychin_06 = '官';} 
  if (($dong_jiji_06 == '巳')||($dong_jiji_06 == '午')) {$yychin_06 = '父';} 
  if (($dong_jiji_06 == '申')||($dong_jiji_06 == '酉')) {$yychin_06 = '孫';} 
  if (($dong_jiji_06 == '子')||($dong_jiji_06 == '亥')) {$yychin_06 = '財';} 
  if (($dong_jiji_06 == '辰')||($dong_jiji_06 == '戌')||($dong_jiji_06 == '丑')||($dong_jiji_06 == '未')) {$yychin_06 = '兄';} 
}

if (($gung == '乾金宮')||($gung == '兌金宮')) {
  if (($dong_jiji_01 == '寅')||($dong_jiji_01 == '卯')) {$yychin_01 = '財';} 
  if (($dong_jiji_01 == '巳')||($dong_jiji_01 == '午')) {$yychin_01 = '官';} 
  if (($dong_jiji_01 == '申')||($dong_jiji_01 == '酉')) {$yychin_01 = '兄';} 
  if (($dong_jiji_01 == '子')||($dong_jiji_01 == '亥')) {$yychin_01 = '孫';} 
  if (($dong_jiji_01 == '辰')||($dong_jiji_01 == '戌')||($dong_jiji_01 == '丑')||($dong_jiji_01 == '未')) {$yychin_01 = '父';} 

  if (($dong_jiji_02 == '寅')||($dong_jiji_02 == '卯')) {$yychin_02 = '財';} 
  if (($dong_jiji_02 == '巳')||($dong_jiji_02 == '午')) {$yychin_02 = '官';} 
  if (($dong_jiji_02 == '申')||($dong_jiji_02 == '酉')) {$yychin_02 = '兄';} 
  if (($dong_jiji_02 == '子')||($dong_jiji_02 == '亥')) {$yychin_02 = '孫';} 
  if (($dong_jiji_02 == '辰')||($dong_jiji_02 == '戌')||($dong_jiji_02 == '丑')||($dong_jiji_02 == '未')) {$yychin_02 = '父';} 
  
  if (($dong_jiji_03 == '寅')||($dong_jiji_03 == '卯')) {$yychin_03 = '財';} 
  if (($dong_jiji_03 == '巳')||($dong_jiji_03 == '午')) {$yychin_03 = '官';} 
  if (($dong_jiji_03 == '申')||($dong_jiji_03 == '酉')) {$yychin_03 = '兄';} 
  if (($dong_jiji_03 == '子')||($dong_jiji_03 == '亥')) {$yychin_03 = '孫';} 
  if (($dong_jiji_03 == '辰')||($dong_jiji_03 == '戌')||($dong_jiji_03 == '丑')||($dong_jiji_03 == '未')) {$yychin_03 = '父';} 

  if (($dong_jiji_04 == '寅')||($dong_jiji_04 == '卯')) {$yychin_04 = '財';} 
  if (($dong_jiji_04 == '巳')||($dong_jiji_04 == '午')) {$yychin_04 = '官';} 
  if (($dong_jiji_04 == '申')||($dong_jiji_04 == '酉')) {$yychin_04 = '兄';} 
  if (($dong_jiji_04 == '子')||($dong_jiji_04 == '亥')) {$yychin_04 = '孫';} 
  if (($dong_jiji_04 == '辰')||($dong_jiji_04 == '戌')||($dong_jiji_04 == '丑')||($dong_jiji_04 == '未')) {$yychin_04 = '父';} 

  if (($dong_jiji_05 == '寅')||($dong_jiji_05 == '卯')) {$yychin_05 = '財';} 
  if (($dong_jiji_05 == '巳')||($dong_jiji_05 == '午')) {$yychin_05 = '官';} 
  if (($dong_jiji_05 == '申')||($dong_jiji_05 == '酉')) {$yychin_05 = '兄';} 
  if (($dong_jiji_05 == '子')||($dong_jiji_05 == '亥')) {$yychin_05 = '孫';} 
  if (($dong_jiji_05 == '辰')||($dong_jiji_05 == '戌')||($dong_jiji_05 == '丑')||($dong_jiji_05 == '未')) {$yychin_05 = '父';} 

  if (($dong_jiji_06 == '寅')||($dong_jiji_06 == '卯')) {$yychin_06 = '財';} 
  if (($dong_jiji_06 == '巳')||($dong_jiji_06 == '午')) {$yychin_06 = '官';} 
  if (($dong_jiji_06 == '申')||($dong_jiji_06 == '酉')) {$yychin_06 = '兄';} 
  if (($dong_jiji_06 == '子')||($dong_jiji_06 == '亥')) {$yychin_06 = '孫';} 
  if (($dong_jiji_06 == '辰')||($dong_jiji_06 == '戌')||($dong_jiji_06 == '丑')||($dong_jiji_06 == '未')) {$yychin_06 = '父';} 
}

if ($gung == '坎水宮') {
  if (($dong_jiji_01 == '寅')||($dong_jiji_01 == '卯')) {$yychin_01 = '孫';} 
  if (($dong_jiji_01 == '巳')||($dong_jiji_01 == '午')) {$yychin_01 = '財';} 
  if (($dong_jiji_01 == '申')||($dong_jiji_01 == '酉')) {$yychin_01 = '父';} 
  if (($dong_jiji_01 == '子')||($dong_jiji_01 == '亥')) {$yychin_01 = '兄';} 
  if (($dong_jiji_01 == '辰')||($dong_jiji_01 == '戌')||($dong_jiji_01 == '丑')||($dong_jiji_01 == '未')) {$yychin_01 = '官';} 

  if (($dong_jiji_02 == '寅')||($dong_jiji_02 == '卯')) {$yychin_02 = '孫';} 
  if (($dong_jiji_02 == '巳')||($dong_jiji_02 == '午')) {$yychin_02 = '財';} 
  if (($dong_jiji_02 == '申')||($dong_jiji_02 == '酉')) {$yychin_02 = '父';} 
  if (($dong_jiji_02 == '子')||($dong_jiji_02 == '亥')) {$yychin_02 = '兄';} 
  if (($dong_jiji_02 == '辰')||($dong_jiji_02 == '戌')||($dong_jiji_02 == '丑')||($dong_jiji_02 == '未')) {$yychin_02 = '官';} 
  
  if (($dong_jiji_03 == '寅')||($dong_jiji_03 == '卯')) {$yychin_03 = '孫';} 
  if (($dong_jiji_03 == '巳')||($dong_jiji_03 == '午')) {$yychin_03 = '財';} 
  if (($dong_jiji_03 == '申')||($dong_jiji_03 == '酉')) {$yychin_03 = '父';} 
  if (($dong_jiji_03 == '子')||($dong_jiji_03 == '亥')) {$yychin_03 = '兄';} 
  if (($dong_jiji_03 == '辰')||($dong_jiji_03 == '戌')||($dong_jiji_03 == '丑')||($dong_jiji_03 == '未')) {$yychin_03 = '官';} 

  if (($dong_jiji_04 == '寅')||($dong_jiji_04 == '卯')) {$yychin_04 = '孫';} 
  if (($dong_jiji_04 == '巳')||($dong_jiji_04 == '午')) {$yychin_04 = '財';} 
  if (($dong_jiji_04 == '申')||($dong_jiji_04 == '酉')) {$yychin_04 = '父';} 
  if (($dong_jiji_04 == '子')||($dong_jiji_04 == '亥')) {$yychin_04 = '兄';} 
  if (($dong_jiji_04 == '辰')||($dong_jiji_04 == '戌')||($dong_jiji_04 == '丑')||($dong_jiji_04 == '未')) {$yychin_04 = '官';} 

  if (($dong_jiji_05 == '寅')||($dong_jiji_05 == '卯')) {$yychin_05 = '孫';} 
  if (($dong_jiji_05 == '巳')||($dong_jiji_05 == '午')) {$yychin_05 = '財';} 
  if (($dong_jiji_05 == '申')||($dong_jiji_05 == '酉')) {$yychin_05 = '父';} 
  if (($dong_jiji_05 == '子')||($dong_jiji_05 == '亥')) {$yychin_05 = '兄';} 
  if (($dong_jiji_05 == '辰')||($dong_jiji_05 == '戌')||($dong_jiji_05 == '丑')||($dong_jiji_05 == '未')) {$yychin_05 = '官';} 

  if (($dong_jiji_06 == '寅')||($dong_jiji_06 == '卯')) {$yychin_06 = '孫';} 
  if (($dong_jiji_06 == '巳')||($dong_jiji_06 == '午')) {$yychin_06 = '財';} 
  if (($dong_jiji_06 == '申')||($dong_jiji_06 == '酉')) {$yychin_06 = '父';} 
  if (($dong_jiji_06 == '子')||($dong_jiji_06 == '亥')) {$yychin_06 = '兄';} 
  if (($dong_jiji_06 == '辰')||($dong_jiji_06 == '戌')||($dong_jiji_06 == '丑')||($dong_jiji_06 == '未')) {$yychin_06 = '官';} 
}

##############################################################################
if ($sehyo == '1') {$se_01 = '世';$ye_04 = '應';}
if ($sehyo == '2') {$se_02 = '世';$ye_05 = '應';}
if ($sehyo == '3') {$se_03 = '世';$ye_06 = '應';}
if ($sehyo == '4') {$se_04 = '世';$ye_01 = '應';}
if ($sehyo == '5') {$se_05 = '世';$ye_02 = '應';}
if ($sehyo == '6') {$se_06 = '世';$ye_03 = '應';}


if ($se_01 == '世') {if ($intstick1_org == '1') {$guesin = '子';}
                           if ($intstick1_org == '2') {$guesin = '午';}
}
if ($se_02 == '世') {if ($intstick2_org == '1') {$guesin = '丑';}
                           if ($intstick2_org == '2') {$guesin = '未';}
}
if ($se_03 == '世') {if ($intstick3_org == '1') {$guesin = '寅';}
                           if ($intstick3_org == '2') {$guesin = '申';}
}
if ($se_04 == '世') {if ($intstick4_org == '1') {$guesin = '卯';}
                           if ($intstick4_org == '2') {$guesin = '酉';}
}
if ($se_05 == '世') {if ($intstick5_org == '1') {$guesin = '辰';}
                           if ($intstick5_org == '2') {$guesin = '戌';}
}
if ($se_06 == '世') {if ($intstick6_org == '1') {$guesin = '巳';}
                           if ($intstick6_org == '2') {$guesin = '亥';}
}

##############################################################################
if ($boksin_01) {$boksin_01 = '伏'. $boksin_01;}
if ($boksin_02) {$boksin_02 = '伏'. $boksin_02;}
if ($boksin_03) {$boksin_03 = '伏'. $boksin_03;}
if ($boksin_04) {$boksin_04 = '伏'. $boksin_04;}
if ($boksin_05) {$boksin_05 = '伏'. $boksin_05;}
if ($boksin_06) {$boksin_06 = '伏'. $boksin_06;}
##############################################################################
if (($lday_h == '甲')||($lday_h == '乙')) {
    $yuksu_01 = '靑';
    $yuksu_02 = '朱';
    $yuksu_03 = '句';
    $yuksu_04 = '蛇';
    $yuksu_05 = '白';
    $yuksu_06 = '玄';
}
if (($lday_h == '丙')||($lday_h == '丁')) {
    $yuksu_01 = '朱';
    $yuksu_02 = '句';
    $yuksu_03 = '蛇';
    $yuksu_04 = '白';
    $yuksu_05 = '玄';
    $yuksu_06 = '靑';
}
if ($lday_h == '戊') {
    $yuksu_01 = '句';
    $yuksu_02 = '蛇';
    $yuksu_03 = '白';
    $yuksu_04 = '玄';
    $yuksu_05 = '靑';
    $yuksu_06 = '朱';
}
if ($lday_h == '己') {
    $yuksu_01 = '蛇';
    $yuksu_02 = '白';
    $yuksu_03 = '玄';
    $yuksu_04 = '靑';
    $yuksu_05 = '朱';
    $yuksu_06 = '句';
}
if (($lday_h == '庚')||($lday_h == '辛')) {
    $yuksu_01 = '白';
    $yuksu_02 = '玄';
    $yuksu_03 = '靑';
    $yuksu_04 = '朱';
    $yuksu_05 = '句';
    $yuksu_06 = '蛇';
}
if (($lday_h == '壬')||($lday_h == '癸')) {
    $yuksu_01 = '玄';
    $yuksu_02 = '靑';
    $yuksu_03 = '朱';
    $yuksu_04 = '句';
    $yuksu_05 = '蛇';
    $yuksu_06 = '白';
}
##############################################################################
if ($lday_h == '甲') {$grok = '寅';$yangin = '卯';$chungue = '丑未';}
if ($lday_h == '乙') {$grok = '卯';$yangin = '辰';$chungue = '子申';}
if ($lday_h == '丙') {$grok = '巳';$yangin = '午';$chungue = '亥酉';}
if ($lday_h == '丁') {$grok = '午';$yangin = '未';$chungue = '亥酉';}
if ($lday_h == '戊') {$grok = '巳';$yangin = '午';$chungue = '丑未';}
if ($lday_h == '己') {$grok = '午';$yangin = '未';$chungue = '子申';}
if ($lday_h == '庚') {$grok = '申';$yangin = '酉';$chungue = '丑未';}
if ($lday_h == '辛') {$grok = '酉';$yangin = '戌';$chungue = '寅午';}
if ($lday_h == '壬') {$grok = '亥';$yangin = '子';$chungue = '卯巳';}
if ($lday_h == '癸') {$grok = '子';$yangin = '丑';$chungue = '卯巳';}

##############################################################################
if ($jumsa == '천시') {$yongsin = '官';}
if ($jumsa == '구직') {$yongsin = '父';}
if ($jumsa == '애정') {$yongsin = '財';}
if ($jumsa == '재물') {$yongsin = '財';}
if ($jumsa == '사업') {$yongsin = '財世';}
if ($jumsa == '시험') {$yongsin = '父世應';}
if ($jumsa == '승패') {$yongsin = '世應';}
if ($jumsa == '우환') {$yongsin = '官世應';}
if ($jumsa == '질병') {$yongsin = '官世應';}
if ($jumsa == '출행') {$yongsin = '世應';}
if ($jumsa == '매매') {$yongsin = '父';}
if ($jumsa == '가택') {$yongsin = '父';}
if ($jumsa == '기타') {$yongsin = '';}
##############################################################################육합/육충
if (($hapchung == '육합괘')&&($jigue_hapchung == '육합괘')){$red_01 = 0; $blue_01 = 90;}  
if (($hapchung == '')&&($jigue_hapchung == '육합괘')){$red_01 = 0; $blue_01 = 80;}  
if (($hapchung == '육합괘')&&($jigue_hapchung == '')){$red_01 = 0; $blue_01 = 70;}  
if (($hapchung == '')&&($jigue_hapchung == '')){$red_01 = 0; $blue_01 = 0;}  
if (($hapchung == '육충괘')&&($jigue_hapchung == '')){$red_01 = 50; $blue_01 = 0;}  
if (($hapchung == '')&&($jigue_hapchung == '육충괘')){$red_01 = 60; $blue_01 = 0;}  
if (($hapchung == '육합괘')&&($jigue_hapchung == '육충괘')){$red_01 = 70; $blue_01 = 0;}  
if (($hapchung == '육충괘')&&($jigue_hapchung == '육합괘')){$red_01 = 80; $blue_01 = 0;}  
if (($hapchung == '육충괘')&&($jigue_hapchung == '육충괘')){$red_01 = 90; $blue_01 = 0;}  
##############################################################################
##############################################################################세응/공망

if ($sehyo == '1') {if ((($jiji_01 == $gongmang1)&&($jiji_04 == $gongmang2))||(($jiji_01 == $gongmang2)&&($jiji_04 == $gongmang1))){$red_02 = 190; $blue_02 = 0;}}  
if ($sehyo == '1') {if ((($jiji_01 == $gongmang1)&&($jiji_04 <> $gongmang2))||(($jiji_01 <> $gongmang2)&&($jiji_04 == $gongmang1))||(($jiji_01 == $gongmang2)&&($jiji_04 <> $gongmang1))||(($jiji_01 <> $gongmang1)&&($jiji_04 == $gongmang2))){$red_02 = 100; $blue_02 = 0;}}  
if ($sehyo == '1') {if (($jiji_01 <> $gongmang1)&&($jiji_04 <> $gongmang1)&&($jiji_01 <> $gongmang2)&&($jiji_04 <> $gongmang2)){$red_02 = 0; $blue_02 = 0;}}  

if ($sehyo == '2') {if ((($jiji_02 == $gongmang1)&&($jiji_05 == $gongmang2))||(($jiji_02 == $gongmang2)&&($jiji_05 == $gongmang1))){$red_02 = 190; $blue_02 = 0;}}  
if ($sehyo == '2') {if ((($jiji_02 == $gongmang1)&&($jiji_05 <> $gongmang2))||(($jiji_02 <> $gongmang2)&&($jiji_05 == $gongmang1))||(($jiji_02 == $gongmang2)&&($jiji_05 <> $gongmang1))||(($jiji_02 <> $gongmang1)&&($jiji_05 == $gongmang2))){$red_02 = 100; $blue_02 = 0;}}  
if ($sehyo == '2') {if (($jiji_02 <> $gongmang1)&&($jiji_05 <> $gongmang1)&&($jiji_02 <> $gongmang2)&&($jiji_05 <> $gongmang2)){$red_02 = 0; $blue_02 = 0;}}  

if ($sehyo == '3') {if ((($jiji_03 == $gongmang1)&&($jiji_06 == $gongmang2))||(($jiji_03 == $gongmang2)&&($jiji_06 == $gongmang1))){$red_02 = 190; $blue_02 = 0;}}  
if ($sehyo == '3') {if ((($jiji_03 == $gongmang1)&&($jiji_06 <> $gongmang2))||(($jiji_03 <> $gongmang2)&&($jiji_06 == $gongmang1))||(($jiji_03 == $gongmang2)&&($jiji_06 <> $gongmang1))||(($jiji_03 <> $gongmang1)&&($jiji_05 == $gongmang2))){$red_02 = 100; $blue_02 = 0;}}  
if ($sehyo == '3') {if (($jiji_03 <> $gongmang1)&&($jiji_06 <> $gongmang1)&&($jiji_03 <> $gongmang2)&&($jiji_06 <> $gongmang2)){$red_02 = 0; $blue_02 = 0;}}  

if ($sehyo == '4') {if ((($jiji_04 == $gongmang1)&&($jiji_01 == $gongmang2))||(($jiji_04 == $gongmang2)&&($jiji_01 == $gongmang1))){$red_02 = 190; $blue_02 = 0;}}  
if ($sehyo == '4') {if ((($jiji_04 == $gongmang1)&&($jiji_01 <> $gongmang2))||(($jiji_04 <> $gongmang2)&&($jiji_01 == $gongmang1))||(($jiji_04 == $gongmang2)&&($jiji_01 <> $gongmang1))||(($jiji_04 <> $gongmang1)&&($jiji_01 == $gongmang2))){$red_02 = 100; $blue_02 = 0;}}  
if ($sehyo == '4') {if (($jiji_04 <> $gongmang1)&&($jiji_01 <> $gongmang1)&&($jiji_04 <> $gongmang2)&&($jiji_01 <> $gongmang2)){$red_02 = 0; $blue_02 = 0;}}  

if ($sehyo == '5') {if ((($jiji_05 == $gongmang1)&&($jiji_02 == $gongmang2))||(($jiji_05 == $gongmang2)&&($jiji_02 == $gongmang1))){$red_02 = 190; $blue_02 = 0;}}  
if ($sehyo == '5') {if ((($jiji_05 == $gongmang1)&&($jiji_02 <> $gongmang2))||(($jiji_05 <> $gongmang2)&&($jiji_02 == $gongmang1))||(($jiji_05 == $gongmang2)&&($jiji_02 <> $gongmang1))||(($jiji_05 <> $gongmang1)&&($jiji_02 == $gongmang2))){$red_02 = 100; $blue_02 = 0;}}  
if ($sehyo == '5') {if (($jiji_05 <> $gongmang1)&&($jiji_02 <> $gongmang1)&&($jiji_05 <> $gongmang2)&&($jiji_02 <> $gongmang2)){$red_02 = 0; $blue_02 = 0;}}  

if ($sehyo == '6') {if ((($jiji_06 == $gongmang1)&&($jiji_03 == $gongmang2))||(($jiji_06 == $gongmang2)&&($jiji_03 == $gongmang1))){$red_02 = 190; $blue_02 = 0;}}  
if ($sehyo == '6') {if ((($jiji_06 == $gongmang1)&&($jiji_03 <> $gongmang2))||(($jiji_06 <> $gongmang2)&&($jiji_03 == $gongmang1))||(($jiji_06 == $gongmang2)&&($jiji_03 <> $gongmang1))||(($jiji_06 <> $gongmang1)&&($jiji_03 == $gongmang2))){$red_02 = 100; $blue_02 = 0;}}  
if ($sehyo == '6') {if (($jiji_06 <> $gongmang1)&&($jiji_03 <> $gongmang1)&&($jiji_06 <> $gongmang2)&&($jiji_03 <> $gongmang2)){$red_02 = 0; $blue_02 = 0;}}  

##############################################################################월일공망

if (($lmonth_e == $gongmang1)||($lmonth_e == $gongmang2)) {$red_03_01 = 80; $blue_03 = 0;}
if (($lday_e == $gongmang1)||($lday_e == $gongmang2)) {$red_03_02 = 80; $blue_03 = 0;}
$red_03 = $red_03_01 + $red_03_02; 

##############################################################################재성공망

if ($ychin_01 == '財') {if (($jiji_01 == $gongmang1)||($jiji_01 == $gongmang2)){$red_04 = 100; $blue_04 = 0;}}
if ($ychin_02 == '財') {if (($jiji_02 == $gongmang1)||($jiji_02 == $gongmang2)){$red_04 = 100; $blue_04 = 0;}}
if ($ychin_03 == '財') {if (($jiji_03 == $gongmang1)||($jiji_03 == $gongmang2)){$red_04 = 100; $blue_04 = 0;}}
if ($ychin_04 == '財') {if (($jiji_04 == $gongmang1)||($jiji_04 == $gongmang2)){$red_04 = 100; $blue_04 = 0;}}
if ($ychin_05 == '財') {if (($jiji_05 == $gongmang1)||($jiji_05 == $gongmang2)){$red_04 = 100; $blue_04 = 0;}}
if ($ychin_06 == '財') {if (($jiji_06 == $gongmang1)||($jiji_06 == $gongmang2)){$red_04 = 100; $blue_04 = 0;}}

if (($ychin_01 <> '財')&&($ychin_02 <> '財')&&($ychin_03 <> '財')&&($ychin_04 <> '財')&&($ychin_05 <> '財')&&($ychin_06 <> '財')) {$red_04 = 0; $blue_04 = 0;}

##############################################################################재성의복장

if ($boksin_ychin_01 == '財') {$red_05_01 = 50; $blue_05 = 0;}
if ($boksin_ychin_02 == '財') {$red_05_02 = 50; $blue_05 = 0;}
if ($boksin_ychin_03 == '財') {$red_05_03 = 50; $blue_05 = 0;}
if ($boksin_ychin_04 == '財') {$red_05_04 = 50; $blue_05 = 0;}
if ($boksin_ychin_05 == '財') {$red_05_05 = 50; $blue_05 = 0;}
if ($boksin_ychin_06 == '財') {$red_05_06 = 50; $blue_05 = 0;}

$red_05 = $red_05_01+$red_05_02+$red_05_03+$red_05_04+$red_05_05+$red_05_06;

if (($boksin_ychin_01 <> '財')&&($boksin_ychin_02 <> '財')&&($boksin_ychin_03 <> '財')&&($boksin_ychin_04 <> '財')&&($boksin_ychin_05 <> '財')&&($boksin_ychin_06 <> '財')) {$red_05 = 0; $blue_05 = 0;}
##############################################################################재성입묘
if (($lmonth_e == '寅')||($lmonth_e == '卯')||($lmonth_e == '辰')) {$season1 = '春';}
if (($lmonth_e == '巳')||($lmonth_e == '午')||($lmonth_e == '未')) {$season1 = '夏';}
if (($lmonth_e == '申')||($lmonth_e == '酉')||($lmonth_e == '戌')) {$season1 = '秋';}
if (($lmonth_e == '亥')||($lmonth_e == '子')||($lmonth_e == '丑')) {$season1 = '冬';}

if ($season1 == '春') {
  if (($ychin_01 == '財')&&(($jiji_01 == '寅')||($jiji_01 == '卯'))) {$red_06 = 0; $blue_06 = 100; $k='旺';}
  if (($ychin_01 == '財')&&(($jiji_01 == '巳')||($jiji_01 == '午'))) {$red_06 = 0; $blue_06 = 50; $k='相';}
  if (($ychin_01 == '財')&&(($jiji_01 == '申')||($jiji_01 == '酉'))) {$red_06 = 100; $blue_06 = 0; $k='囚';}
  if (($ychin_01 == '財')&&(($jiji_01 == '亥')||($jiji_01 == '子'))) {$red_06 = 50; $blue_06 = 0; $k='休';}
  if (($ychin_01 == '財')&&(($jiji_01 == '辰')||($jiji_01 == '戌')||($jiji_01 == '丑')||($jiji_01 == '未'))) {$red_06 = 100; $blue_06 = 0; $k='死';}

  if (($ychin_02 == '財')&&(($jiji_02 == '寅')||($jiji_02 == '卯'))) {$red_06 = 0; $blue_06 = 100; $k='旺';}
  if (($ychin_02 == '財')&&(($jiji_02 == '巳')||($jiji_02 == '午'))) {$red_06 = 0; $blue_06 = 50; $k='相';}
  if (($ychin_02 == '財')&&(($jiji_02 == '申')||($jiji_02 == '酉'))) {$red_06 = 100; $blue_06 = 0; $k='囚';}
  if (($ychin_02 == '財')&&(($jiji_02 == '亥')||($jiji_02 == '子'))) {$red_06 = 50; $blue_06 = 0; $k='休';}
  if (($ychin_02 == '財')&&(($jiji_02 == '辰')||($jiji_02 == '戌')||($jiji_02 == '丑')||($jiji_02 == '未'))) {$red_06 = 100; $blue_06 = 0; $k='死';}

  if (($ychin_03 == '財')&&(($jiji_03 == '寅')||($jiji_03 == '卯'))) {$red_06 = 0; $blue_06 = 100; $k='旺';}
  if (($ychin_03 == '財')&&(($jiji_03 == '巳')||($jiji_03 == '午'))) {$red_06 = 0; $blue_06 = 50; $k='相';}
  if (($ychin_03 == '財')&&(($jiji_03 == '申')||($jiji_03 == '酉'))) {$red_06 = 100; $blue_06 = 0; $k='囚';}
  if (($ychin_03 == '財')&&(($jiji_03 == '亥')||($jiji_03 == '子'))) {$red_06 = 50; $blue_06 = 0; $k='休';}
  if (($ychin_03 == '財')&&(($jiji_03 == '辰')||($jiji_03 == '戌')||($jiji_03 == '丑')||($jiji_03 == '未'))) {$red_06 = 100; $blue_06 = 0; $k='死';}

  if (($ychin_04 == '財')&&(($jiji_04 == '寅')||($jiji_04 == '卯'))) {$red_06 = 0; $blue_06 = 100; $k='旺';}
  if (($ychin_04 == '財')&&(($jiji_04 == '巳')||($jiji_04 == '午'))) {$red_06 = 0; $blue_06 = 50; $k='相';}
  if (($ychin_04 == '財')&&(($jiji_04 == '申')||($jiji_04 == '酉'))) {$red_06 = 100; $blue_06 = 0; $k='囚';}
  if (($ychin_04 == '財')&&(($jiji_04 == '亥')||($jiji_04 == '子'))) {$red_06 = 50; $blue_06 = 0; $k='休';}
  if (($ychin_04 == '財')&&(($jiji_04 == '辰')||($jiji_04 == '戌')||($jiji_04 == '丑')||($jiji_04 == '未'))) {$red_06 = 100; $blue_06 = 0; $k='死';}

  if (($ychin_05 == '財')&&(($jiji_05 == '寅')||($jiji_05 == '卯'))) {$red_06 = 0; $blue_06 = 100; $k='旺';}
  if (($ychin_05 == '財')&&(($jiji_05 == '巳')||($jiji_05 == '午'))) {$red_06 = 0; $blue_06 = 50; $k='相';}
  if (($ychin_05 == '財')&&(($jiji_05 == '申')||($jiji_05 == '酉'))) {$red_06 = 100; $blue_06 = 0; $k='囚';}
  if (($ychin_05 == '財')&&(($jiji_05 == '亥')||($jiji_05 == '子'))) {$red_06 = 50; $blue_06 = 0; $k='休';}
  if (($ychin_05 == '財')&&(($jiji_05 == '辰')||($jiji_05 == '戌')||($jiji_05 == '丑')||($jiji_05 == '未'))) {$red_06 = 100; $blue_06 = 0; $k='死';}

  if (($ychin_06 == '財')&&(($jiji_06 == '寅')||($jiji_06 == '卯'))) {$red_06 = 0; $blue_06 = 100; $k='旺';}
  if (($ychin_06 == '財')&&(($jiji_06 == '巳')||($jiji_06 == '午'))) {$red_06 = 0; $blue_06 = 50; $k='相';}
  if (($ychin_06 == '財')&&(($jiji_06 == '申')||($jiji_06 == '酉'))) {$red_06 = 100; $blue_06 = 0; $k='囚';}
  if (($ychin_06 == '財')&&(($jiji_06 == '亥')||($jiji_06 == '子'))) {$red_06 = 50; $blue_06 = 0; $k='休';}
  if (($ychin_06 == '財')&&(($jiji_06 == '辰')||($jiji_06 == '戌')||($jiji_06 == '丑')||($jiji_06 == '未'))) {$red_06 = 100; $blue_06 = 0; $k='死';}

}

if($jumsa == "천시"){$yongsin = "官";}
if($jumsa == "구직"){$yongsin = "父";}
if($jumsa == "애정"){$yongsin = "財";}
if($jumsa == "재물"){$yongsin = "財";}
if($jumsa == "사업"){$yongsin = "財世";}
if($jumsa == "시험"){$yongsin = "父世應";}
if($jumsa == "승패"){$yongsin = "世應";}
if($jumsa == "우환"){$yongsin = "官世應";}
if($jumsa == "질병"){$yongsin = "官世應";}
if($jumsa == "출행"){$yongsin = "世應";}
if($jumsa == "매매"){$yongsin = "父";}
if($jumsa == "가택"){$yongsin = "父";}
if($jumsa == "기타"){$yongsin = "";}

?>


                  <table width=400 b||der=0 cellpadding=5 cellspacing=1 align=center bgcolor=CCCCCC>
		     <tr bgcolor=f8f8f8>
		           <td colspan=4 align=center><font color=green><?=$title;?>(<?=$gung?>)<font color=red><?=$hapchung;?></font> 변 <?=$jigue_title?>(<?=$jigue_gung?>)<font color=red><?=$jigue_hapchung?></font></font></td>
		     </tr>   
			   
		     <tr bgcolor=f8f8f8>
		           <td width=100><font color=blue>점사 :</font> <?=$jumsa?> </td>
			   <td width=100><font color=blue>태세 :</font> <?=$lyear_h?><?=$lyear_e?></td>
			   <td width=100><font color=blue>월건 :</font> <?=$lmonth_h?><?=$lmonth_e?></td>
			   <td width=100><font color=blue>일진 :</font> <?=$lday_h?><?=$lday_e?></td>			   
		     </tr>   
			   
		     <tr bgcolor=f8f8f8>
		           <td><font color=blue>공망 :</font> <?=$gongmang1?><?=$gongmang2?></td>
			   <td><font color=blue>건록 :</font>  <?=$grok?></td>
			   <td><font color=blue>양인 :</font>  <?=$yangin?></td>
			   <td><font color=blue>천을 :</font>  <?=$chungue?></td>			   
		     </tr>   
			   
		     <tr bgcolor=f8f8f8>
		           <td><font color=blue>괘신 :</font>  <?=$guesin?> 월신</td>
			   <td><font color=blue>出空 :</font>  <?=$chulgong?></td>
			   <td><font color=blue>용신 :</font>  <?=$yongsin?></td>
			   <td>&nbsp;</td>			   
		     </tr>   
                  </table>

		     <br>

	<table width="500" b||der="0" cellpadding="0" cellspacing="0" align="CenteR">
		<tR>
			<tD><?=$result_num;?></tD>
		</tR>
	</tablE>