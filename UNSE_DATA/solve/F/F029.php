<?
//echo "//$my_hour_h_org $my_day_h_org $my_month_h_org $my_year_h_org<BR>$my_hour_e_org $my_day_e_org $my_month_e_org $my_year_e_org";
   
$current_ymd = date("Ymd");
$current_y = date("Y");

//$current_y = $current_y-1;

//$my_age = $current_y - $solar_year +2 ;

$td_y1 = $current_y-2;
$td_y2 = $current_y-1;
$td_y3 = $current_y;
$td_y4 = $current_y+1;
$td_y5 = $current_y+2;
$td_y6 = $current_y+3;
$td_y7 = $current_y+4;
$td_y8 = $current_y+5;
$td_y9 = $current_y+6;
$td_y10 = $current_y+7;

$sql = "SELECT * FROM mansedata WHERE no = '$current_ymd'";
if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {
  error("QUERY_ERROR");
}

		for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$umyear_h = stripslashes($row[umyear_h]);
			$umyear_e = stripslashes($row[umyear_e]);
			}


#############################################
if ($umyear_h == '甲') {$td1_umyear_h = '壬';
                                 $td2_umyear_h = '癸';
				 $td3_umyear_h = '甲';
				 $td4_umyear_h = '乙';
				 $td5_umyear_h = '丙';
				 $td6_umyear_h = '丁';
				 $td7_umyear_h = '戊';
				 $td8_umyear_h = '己';
				 $td9_umyear_h = '庚';
				 $td10_umyear_h = '辛';}
if ($umyear_h == '乙') {$td1_umyear_h = '癸';
                                 $td2_umyear_h = '甲';
				 $td3_umyear_h = '乙';
				 $td4_umyear_h = '丙';
				 $td5_umyear_h = '丁';
				 $td6_umyear_h = '戊';
				 $td7_umyear_h = '己';
				 $td8_umyear_h = '庚';
				 $td9_umyear_h = '辛';
				 $td10_umyear_h = '壬';}
if ($umyear_h == '丙') {$td1_umyear_h = '甲';
                                 $td2_umyear_h = '乙';
				 $td3_umyear_h = '丙';
				 $td4_umyear_h = '丁';
				 $td5_umyear_h = '戊';
				 $td6_umyear_h = '己';
				 $td7_umyear_h = '庚';
				 $td8_umyear_h = '辛';
				 $td9_umyear_h = '壬';
				 $td10_umyear_h = '癸';}
if ($umyear_h == '丁') {$td1_umyear_h = '乙';
                                 $td2_umyear_h = '丙';
				 $td3_umyear_h = '丁';
				 $td4_umyear_h = '戊';
				 $td5_umyear_h = '己';
				 $td6_umyear_h = '庚';
				 $td7_umyear_h = '辛';
				 $td8_umyear_h = '壬';
				 $td9_umyear_h = '癸';
				 $td10_umyear_h = '甲';}
if ($umyear_h == '戊') {$td1_umyear_h = '丙';
                                 $td2_umyear_h = '丁';
				 $td3_umyear_h = '戊';
				 $td4_umyear_h = '己';
				 $td5_umyear_h = '庚';
				 $td6_umyear_h = '辛';
				 $td7_umyear_h = '壬';
				 $td8_umyear_h = '癸';
				 $td9_umyear_h = '甲';
				 $td10_umyear_h = '乙';}
if ($umyear_h == '己') {$td1_umyear_h = '丁';
                                 $td2_umyear_h = '戊';
				 $td3_umyear_h = '己';
				 $td4_umyear_h = '庚';
				 $td5_umyear_h = '辛';
				 $td6_umyear_h = '壬';
				 $td7_umyear_h = '癸';
				 $td8_umyear_h = '甲';
				 $td9_umyear_h = '乙';
				 $td10_umyear_h = '丙';}
if ($umyear_h == '庚') {$td1_umyear_h = '戊';
                                 $td2_umyear_h = '己';
				 $td3_umyear_h = '庚';
				 $td4_umyear_h = '辛';
				 $td5_umyear_h = '壬';
				 $td6_umyear_h = '癸';
				 $td7_umyear_h = '甲';
				 $td8_umyear_h = '乙';
				 $td9_umyear_h = '丙';
				 $td10_umyear_h = '丁';}
if ($umyear_h == '辛') {$td1_umyear_h = '己';
                                 $td2_umyear_h = '庚';
				 $td3_umyear_h = '辛';
				 $td4_umyear_h = '壬';
				 $td5_umyear_h = '癸';
				 $td6_umyear_h = '甲';
				 $td7_umyear_h = '乙';
				 $td8_umyear_h = '丙';
				 $td9_umyear_h = '丁';
				 $td10_umyear_h = '戊';}
if ($umyear_h == '壬') {$td1_umyear_h = '庚';
                                 $td2_umyear_h = '辛';
				 $td3_umyear_h = '壬';
				 $td4_umyear_h = '癸';
				 $td5_umyear_h = '甲';
				 $td6_umyear_h = '乙';
				 $td7_umyear_h = '丙';
				 $td8_umyear_h = '丁';
				 $td9_umyear_h = '戊';
				 $td10_umyear_h = '己';}
if ($umyear_h == '癸') {$td1_umyear_h = '辛';
                                 $td2_umyear_h = '壬';
				 $td3_umyear_h = '癸';
				 $td4_umyear_h = '甲';
				 $td5_umyear_h = '乙';
				 $td6_umyear_h = '丙';
				 $td7_umyear_h = '丁';
				 $td8_umyear_h = '戊';
				 $td9_umyear_h = '己';
				 $td10_umyear_h = '庚';}

################################################
if ($umyear_e == '子') {$td1_umyear_e = '戌';
                                 $td2_umyear_e = '亥';
				 $td3_umyear_e = '子';
				 $td4_umyear_e = '丑';
				 $td5_umyear_e = '寅';
				 $td6_umyear_e = '卯';
				 $td7_umyear_e = '辰';
				 $td8_umyear_e = '巳';
				 $td9_umyear_e = '午';
				 $td10_umyear_e = '未';}
if ($umyear_e == '丑') {$td1_umyear_e = '亥';
                                 $td2_umyear_e = '子';
				 $td3_umyear_e = '丑';
				 $td4_umyear_e = '寅';
				 $td5_umyear_e = '卯';
				 $td6_umyear_e = '辰';
				 $td7_umyear_e = '巳';
				 $td8_umyear_e = '午';
				 $td9_umyear_e = '未';
				 $td10_umyear_e = '申';}
if ($umyear_e == '寅') {$td1_umyear_e = '子';
                                 $td2_umyear_e = '丑';
				 $td3_umyear_e = '寅';
				 $td4_umyear_e = '卯';
				 $td5_umyear_e = '辰';
				 $td6_umyear_e = '巳';
				 $td7_umyear_e = '午';
				 $td8_umyear_e = '未';
				 $td9_umyear_e = '申';
				 $td10_umyear_e = '酉';}
if ($umyear_e == '卯') {$td1_umyear_e = '丑';
                                 $td2_umyear_e = '寅';
				 $td3_umyear_e = '卯';
				 $td4_umyear_e = '辰';
				 $td5_umyear_e = '巳';
				 $td6_umyear_e = '午';
				 $td7_umyear_e = '未';
				 $td8_umyear_e = '申';
				 $td9_umyear_e = '酉';
				 $td10_umyear_e = '戌';}
if ($umyear_e == '辰') {$td1_umyear_e = '寅';
                                 $td2_umyear_e = '卯';
				 $td3_umyear_e = '辰';
				 $td4_umyear_e = '巳';
				 $td5_umyear_e = '午';
				 $td6_umyear_e = '未';
				 $td7_umyear_e = '申';
				 $td8_umyear_e = '酉';
				 $td9_umyear_e = '戌';
				 $td10_umyear_e = '亥';}
if ($umyear_e == '巳') {$td1_umyear_e = '卯';
                                 $td2_umyear_e = '辰';
				 $td3_umyear_e = '巳';
				 $td4_umyear_e = '午';
				 $td5_umyear_e = '未';
				 $td6_umyear_e = '申';
				 $td7_umyear_e = '酉';
				 $td8_umyear_e = '戌';
				 $td9_umyear_e = '亥';
				 $td10_umyear_e = '子';}
if ($umyear_e == '午') {$td1_umyear_e = '辰';
                                 $td2_umyear_e = '巳';
				 $td3_umyear_e = '午';
				 $td4_umyear_e = '未';
				 $td5_umyear_e = '申';
				 $td6_umyear_e = '酉';
				 $td7_umyear_e = '戌';
				 $td8_umyear_e = '亥';
				 $td9_umyear_e = '子';
				 $td10_umyear_e = '丑';}
if ($umyear_e == '未') {$td1_umyear_e = '巳';
                                 $td2_umyear_e = '午';
				 $td3_umyear_e = '未';
				 $td4_umyear_e = '申';
				 $td5_umyear_e = '酉';
				 $td6_umyear_e = '戌';
				 $td7_umyear_e = '亥';
				 $td8_umyear_e = '子';
				 $td9_umyear_e = '丑';
				 $td10_umyear_e = '寅';}
if ($umyear_e == '申') {$td1_umyear_e = '午';
                                 $td2_umyear_e = '未';
				 $td3_umyear_e = '申';
				 $td4_umyear_e = '酉';
				 $td5_umyear_e = '戌';
				 $td6_umyear_e = '亥';
				 $td7_umyear_e = '子';
				 $td8_umyear_e = '丑';
				 $td9_umyear_e = '寅';
				 $td10_umyear_e = '卯';}
if ($umyear_e == '酉') {$td1_umyear_e = '未';
                                 $td2_umyear_e = '申';
				 $td3_umyear_e = '酉';
				 $td4_umyear_e = '戌';
				 $td5_umyear_e = '亥';
				 $td6_umyear_e = '子';
				 $td7_umyear_e = '丑';
				 $td8_umyear_e = '寅';
				 $td9_umyear_e = '卯';
				 $td10_umyear_e = '辰';}
if ($umyear_e == '戌') {$td1_umyear_e = '申';
                                 $td2_umyear_e = '酉';
				 $td3_umyear_e = '戌';
				 $td4_umyear_e = '亥';
				 $td5_umyear_e = '子';
				 $td6_umyear_e = '丑';
				 $td7_umyear_e = '寅';
				 $td8_umyear_e = '卯';
				 $td9_umyear_e = '辰';
				 $td10_umyear_e = '巳';}
if ($umyear_e == '亥') {$td1_umyear_e = '酉';
                                 $td2_umyear_e = '戌';
				 $td3_umyear_e = '亥';
				 $td4_umyear_e = '子';
				 $td5_umyear_e = '丑';
				 $td6_umyear_e = '寅';
				 $td7_umyear_e = '卯';
				 $td8_umyear_e = '辰';
				 $td9_umyear_e = '巳';
				 $td10_umyear_e = '午';}


//echo "$my_year_h/$my_year_e/$my_month_h/$my_month_e/$my_day_h/$my_day_e/$my_hour_h/$my_hour_e/";echo "$tot_power/$tot_power_title";
###################################################################################################################
$ilgan_chengan = array(
'甲甲','甲乙','甲丙','甲丁','甲戊','甲己','甲庚','甲辛','甲壬','甲癸',
'乙甲','乙乙','乙丙','乙丁','乙戊','乙己','乙庚','乙辛','乙壬','乙癸',
'丙甲','丙乙','丙丙','丙丁','丙戊','丙己','丙庚','丙辛','丙壬','丙癸',
'丁甲','丁乙','丁丙','丁丁','丁戊','丁己','丁庚','丁辛','丁壬','丁癸',
'戊甲','戊乙','戊丙','戊丁','戊戊','戊己','戊庚','戊辛','戊壬','戊癸',
'己甲','己乙','己丙','己丁','己戊','己己','己庚','己辛','己壬','己癸',
'庚甲','庚乙','庚丙','庚丁','庚戊','庚己','庚庚','庚辛','庚壬','庚癸',
'辛甲','辛乙','辛丙','辛丁','辛戊','辛己','辛庚','辛辛','辛壬','辛癸',
'壬甲','壬乙','壬丙','壬丁','壬戊','壬己','壬庚','壬辛','壬壬','壬癸',
'癸甲','癸乙','癸丙','癸丁','癸戊','癸己','癸庚','癸辛','癸壬','癸癸'
);

$ilgan_chengan_sipsin = array(
'비견','겁재','식신','상관','편재','정재','편관','정관','편인','정인',
'겁재','비견','상관','식신','정재','편재','정관','편관','정인','편인',
'편인','정인','비견','겁재','식신','상관','편재','정재','편관','정관',
'정인','편인','겁재','비견','상관','식신','정재','편재','정관','편관',
'편관','정관','편인','정인','비견','겁재','식신','상관','편재','정재',
'정관','편관','정인','편인','겁재','비견','상관','식신','정재','편재',
'편재','정재','편관','정관','편인','정인','비견','겁재','식신','상관',
'정재','편재','정관','편관','정인','편인','겁재','비견','상관','식신',
'식신','상관','편재','정재','편관','정관','편인','정인','비견','겁재',
'상관','식신','정재','편재','정관','편관','정인','편인','겁재','비견'
);

$ilgan_jiji = array(
'甲子','甲丑','甲寅','甲卯','甲辰','甲巳','甲午','甲未','甲申','甲酉','甲戌','甲亥',
'乙子','乙丑','乙寅','乙卯','乙辰','乙巳','乙午','乙未','乙申','乙酉','乙戌','乙亥',
'丙子','丙丑','丙寅','丙卯','丙辰','丙巳','丙午','丙未','丙申','丙酉','丙戌','丙亥',
'丁子','丁丑','丁寅','丁卯','丁辰','丁巳','丁午','丁未','丁申','丁酉','丁戌','丁亥',
'戊子','戊丑','戊寅','戊卯','戊辰','戊巳','戊午','戊未','戊申','戊酉','戊戌','戊亥',
'己子','己丑','己寅','己卯','己辰','己巳','己午','己未','己申','己酉','己戌','己亥',
'庚子','庚丑','庚寅','庚卯','庚辰','庚巳','庚午','庚未','庚申','庚酉','庚戌','庚亥',
'辛子','辛丑','辛寅','辛卯','辛辰','辛巳','辛午','辛未','辛申','辛酉','辛戌','辛亥',
'壬子','壬丑','壬寅','壬卯','壬辰','壬巳','壬午','壬未','壬申','壬酉','壬戌','壬亥',
'癸子','癸丑','癸寅','癸卯','癸辰','癸巳','癸午','癸未','癸申','癸酉','癸戌','癸亥'
);

$ilgan_jiji_sipsin = array(
'정인','정재','비견','겁재','편재','식신','상관','정재','편관','정관','편재','편인',
'편인','편재','겁재','비견','정재','상관','식신','편재','정관','편관','정재','정인',
'정관','상관','편인','정인','식신','비견','겁재','상관','편재','정재','식신','편관',
'편관','식신','정인','편인','상관','겁재','비견','식신','정재','편재','상관','정관',
'정재','겁재','편관','정관','비견','편인','정인','겁재','식신','상관','비견','편재',
'편재','비견','정관','편관','겁재','정인','편인','비견','상관','식신','겁재','정재',
'상관','정인','편재','정재','편인','편관','정관','정인','비견','겁재','편인','식신',
'식신','편인','정재','편재','정인','정관','편관','편인','겁재','비견','정인','상관',
'겁재','정관','식신','상관','편관','편재','정재','정관','편인','정인','편관','비견',
'비견','편관','상관','식신','정관','정재','편재','편관','정인','편인','정관','겁재'
);

/*
$ilgan_jiji_12un = array(
'목욕','관대','건록','제왕','쇄','병','사','묘','절','태','양','장생',
'병','쇄','제왕','건록','관대','목욕','장생','양','태','절','묘','사',
'태','양','장생','목욕','관대','건록','제왕','쇄','병','사','묘','절',
'절','묘','사','병','쇄','제왕','건록','관대','목욕','장생','양','태',
'태','양','장생','목욕','관대','건록','제왕','쇄','병','사','묘','절',
'절','묘','사','병','쇄','제왕','건록','관대','목욕','장생','양','태',
'사','묘','절','태','양','장생','목욕','관대','건록','제왕','쇄','병',
'장생','양','태','절','묘','사','병','쇄','제왕','건록','관대','목욕',
'제왕','쇄','병','사','묘','절','태','양','장생','목욕','관대','건록',
'건록','관대','목욕','장생','양','태','절','묘','사','병','쇄','제왕'
);
*/
///////////////////////일간$my_day_h : 년도별 천간십신 구하기

$td_umyear_h[1] = $td1_umyear_h;
$td_umyear_h[2] = $td2_umyear_h;
$td_umyear_h[3] = $td3_umyear_h;
$td_umyear_h[4] = $td4_umyear_h;
$td_umyear_h[5] = $td5_umyear_h;
$td_umyear_h[6] = $td6_umyear_h;
$td_umyear_h[7] = $td7_umyear_h;
$td_umyear_h[8] = $td8_umyear_h;
$td_umyear_h[9] = $td9_umyear_h;
$td_umyear_h[10] = $td10_umyear_h;

for ($j = 1 ; $j<11; $j++) {
$temp_yh_search[$j] = $my_day_h.$td_umyear_h[$j];
		for ($i = 0 ; $i<99; $i++) {
			if ($ilgan_chengan[$i] == $temp_yh_search[$j])
			     {$k = $i;}
         		}
$td_sipsin_h[$j] = $ilgan_chengan_sipsin[$k];
}

/////////////////////일간$my_day_h : 년도별 지지십신 구하기
$td_umyear_e[1] = $td1_umyear_e;
$td_umyear_e[2] = $td2_umyear_e;
$td_umyear_e[3] = $td3_umyear_e;
$td_umyear_e[4] = $td4_umyear_e;
$td_umyear_e[5] = $td5_umyear_e;
$td_umyear_e[6] = $td6_umyear_e;
$td_umyear_e[7] = $td7_umyear_e;
$td_umyear_e[8] = $td8_umyear_e;
$td_umyear_e[9] = $td9_umyear_e;
$td_umyear_e[10] = $td10_umyear_e;

for ($j = 1 ; $j<11; $j++) {
$temp_ye_search[$j] = $my_day_h.$td_umyear_e[$j];
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_ye_search[$j])
			     {$k = $i;}
         		}
$td_sipsin_e[$j] = $ilgan_jiji_sipsin[$k];
}

/*
//////////////////////////////////////년도별 12운성 구하기   틀림

for ($j = 1 ; $j<11; $j++) {
$temp_unsung_search[$j] = $my_day_h.$td_umyear_e[$j];
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_unsung_search[$j])
			     {$k = $i;}
         		}
$td_unsung[$j] = $ilgan_jiji_12un[$k];
}
/////////////////////////////////////////////////////////
*/
#####################################################################
$td1_my_age = $my_age - 2;
$td2_my_age = $my_age - 1;
$td3_my_age = $my_age - 0;
$td4_my_age = $my_age + 1;
$td5_my_age = $my_age + 2;
$td6_my_age = $my_age + 3;
$td7_my_age = $my_age + 4;
$td8_my_age = $my_age + 5;
$td9_my_age = $my_age + 6;
$td10_my_age = $my_age + 7;

if ($daeun1_u == 'A') {$daeun1_u = '甲';}
if ($daeun1_u == 'B') {$daeun1_u = '乙';}
if ($daeun1_u == 'C') {$daeun1_u = '丙';}
if ($daeun1_u == 'D') {$daeun1_u = '丁';}
if ($daeun1_u == 'E') {$daeun1_u = '戊';}
if ($daeun1_u == 'F') {$daeun1_u = '己';}
if ($daeun1_u == 'G') {$daeun1_u = '庚';}
if ($daeun1_u == 'H') {$daeun1_u = '辛';}
if ($daeun1_u == 'I') {$daeun1_u = '壬';}
if ($daeun1_u == 'J') {$daeun1_u = '癸';}

if ($daeun2_u == 'A') {$daeun2_u = '甲';}
if ($daeun2_u == 'B') {$daeun2_u = '乙';}
if ($daeun2_u == 'C') {$daeun2_u = '丙';}
if ($daeun2_u == 'D') {$daeun2_u = '丁';}
if ($daeun2_u == 'E') {$daeun2_u = '戊';}
if ($daeun2_u == 'F') {$daeun2_u = '己';}
if ($daeun2_u == 'G') {$daeun2_u = '庚';}
if ($daeun2_u == 'H') {$daeun2_u = '辛';}
if ($daeun2_u == 'I') {$daeun2_u = '壬';}
if ($daeun2_u == 'J') {$daeun2_u = '癸';}

if ($daeun3_u == 'A') {$daeun3_u = '甲';}
if ($daeun3_u == 'B') {$daeun3_u = '乙';}
if ($daeun3_u == 'C') {$daeun3_u = '丙';}
if ($daeun3_u == 'D') {$daeun3_u = '丁';}
if ($daeun3_u == 'E') {$daeun3_u = '戊';}
if ($daeun3_u == 'F') {$daeun3_u = '己';}
if ($daeun3_u == 'G') {$daeun3_u = '庚';}
if ($daeun3_u == 'H') {$daeun3_u = '辛';}
if ($daeun3_u == 'I') {$daeun3_u = '壬';}
if ($daeun3_u == 'J') {$daeun3_u = '癸';}

if ($daeun4_u == 'A') {$daeun4_u = '甲';}
if ($daeun4_u == 'B') {$daeun4_u = '乙';}
if ($daeun4_u == 'C') {$daeun4_u = '丙';}
if ($daeun4_u == 'D') {$daeun4_u = '丁';}
if ($daeun4_u == 'E') {$daeun4_u = '戊';}
if ($daeun4_u == 'F') {$daeun4_u = '己';}
if ($daeun4_u == 'G') {$daeun4_u = '庚';}
if ($daeun4_u == 'H') {$daeun4_u = '辛';}
if ($daeun4_u == 'I') {$daeun4_u = '壬';}
if ($daeun4_u == 'J') {$daeun4_u = '癸';}

if ($daeun5_u == 'A') {$daeun5_u = '甲';}
if ($daeun5_u == 'B') {$daeun5_u = '乙';}
if ($daeun5_u == 'C') {$daeun5_u = '丙';}
if ($daeun5_u == 'D') {$daeun5_u = '丁';}
if ($daeun5_u == 'E') {$daeun5_u = '戊';}
if ($daeun5_u == 'F') {$daeun5_u = '己';}
if ($daeun5_u == 'G') {$daeun5_u = '庚';}
if ($daeun5_u == 'H') {$daeun5_u = '辛';}
if ($daeun5_u == 'I') {$daeun5_u = '壬';}
if ($daeun5_u == 'J') {$daeun5_u = '癸';}

if ($daeun6_u == 'A') {$daeun6_u = '甲';}
if ($daeun6_u == 'B') {$daeun6_u = '乙';}
if ($daeun6_u == 'C') {$daeun6_u = '丙';}
if ($daeun6_u == 'D') {$daeun6_u = '丁';}
if ($daeun6_u == 'E') {$daeun6_u = '戊';}
if ($daeun6_u == 'F') {$daeun6_u = '己';}
if ($daeun6_u == 'G') {$daeun6_u = '庚';}
if ($daeun6_u == 'H') {$daeun6_u = '辛';}
if ($daeun6_u == 'I') {$daeun6_u = '壬';}
if ($daeun6_u == 'J') {$daeun6_u = '癸';}

if ($daeun7_u == 'A') {$daeun7_u = '甲';}
if ($daeun7_u == 'B') {$daeun7_u = '乙';}
if ($daeun7_u == 'C') {$daeun7_u = '丙';}
if ($daeun7_u == 'D') {$daeun7_u = '丁';}
if ($daeun7_u == 'E') {$daeun7_u = '戊';}
if ($daeun7_u == 'F') {$daeun7_u = '己';}
if ($daeun7_u == 'G') {$daeun7_u = '庚';}
if ($daeun7_u == 'H') {$daeun7_u = '辛';}
if ($daeun7_u == 'I') {$daeun7_u = '壬';}
if ($daeun7_u == 'J') {$daeun7_u = '癸';}

if ($daeun8_u == 'A') {$daeun8_u = '甲';}
if ($daeun8_u == 'B') {$daeun8_u = '乙';}
if ($daeun8_u == 'C') {$daeun8_u = '丙';}
if ($daeun8_u == 'D') {$daeun8_u = '丁';}
if ($daeun8_u == 'E') {$daeun8_u = '戊';}
if ($daeun8_u == 'F') {$daeun8_u = '己';}
if ($daeun8_u == 'G') {$daeun8_u = '庚';}
if ($daeun8_u == 'H') {$daeun8_u = '辛';}
if ($daeun8_u == 'I') {$daeun8_u = '壬';}
if ($daeun8_u == 'J') {$daeun8_u = '癸';}

if ($daeun9_u == 'A') {$daeun9_u = '甲';}
if ($daeun9_u == 'B') {$daeun9_u = '乙';}
if ($daeun9_u == 'C') {$daeun9_u = '丙';}
if ($daeun9_u == 'D') {$daeun9_u = '丁';}
if ($daeun9_u == 'E') {$daeun9_u = '戊';}
if ($daeun9_u == 'F') {$daeun9_u = '己';}
if ($daeun9_u == 'G') {$daeun9_u = '庚';}
if ($daeun9_u == 'H') {$daeun9_u = '辛';}
if ($daeun9_u == 'I') {$daeun9_u = '壬';}
if ($daeun9_u == 'J') {$daeun9_u = '癸';}

if ($daeun10_u == 'A') {$daeun10_u = '甲';}
if ($daeun10_u == 'B') {$daeun10_u = '乙';}
if ($daeun10_u == 'C') {$daeun10_u = '丙';}
if ($daeun10_u == 'D') {$daeun10_u = '丁';}
if ($daeun10_u == 'E') {$daeun10_u = '戊';}
if ($daeun10_u == 'F') {$daeun10_u = '己';}
if ($daeun10_u == 'G') {$daeun10_u = '庚';}
if ($daeun10_u == 'H') {$daeun10_u = '辛';}
if ($daeun10_u == 'I') {$daeun10_u = '壬';}
if ($daeun10_u == 'J') {$daeun10_u = '癸';}
#####################################
if ($daeun1_l == '01') {$daeun1_l = '寅';}
if ($daeun1_l == '02') {$daeun1_l = '卯';}
if ($daeun1_l == '03') {$daeun1_l = '辰';}
if ($daeun1_l == '04') {$daeun1_l = '巳';}
if ($daeun1_l == '05') {$daeun1_l = '午';}
if ($daeun1_l == '06') {$daeun1_l = '未';}
if ($daeun1_l == '07') {$daeun1_l = '申';}
if ($daeun1_l == '08') {$daeun1_l = '酉';}
if ($daeun1_l == '09') {$daeun1_l = '戌';}
if ($daeun1_l == '10') {$daeun1_l = '亥';}
if ($daeun1_l == '11') {$daeun1_l = '子';}
if ($daeun1_l == '12') {$daeun1_l = '丑';}

if ($daeun2_l == '01') {$daeun2_l = '寅';}
if ($daeun2_l == '02') {$daeun2_l = '卯';}
if ($daeun2_l == '03') {$daeun2_l = '辰';}
if ($daeun2_l == '04') {$daeun2_l = '巳';}
if ($daeun2_l == '05') {$daeun2_l = '午';}
if ($daeun2_l == '06') {$daeun2_l = '未';}
if ($daeun2_l == '07') {$daeun2_l = '申';}
if ($daeun2_l == '08') {$daeun2_l = '酉';}
if ($daeun2_l == '09') {$daeun2_l = '戌';}
if ($daeun2_l == '10') {$daeun2_l = '亥';}
if ($daeun2_l == '11') {$daeun2_l = '子';}
if ($daeun2_l == '12') {$daeun2_l = '丑';}

if ($daeun3_l == '01') {$daeun3_l = '寅';}
if ($daeun3_l == '02') {$daeun3_l = '卯';}
if ($daeun3_l == '03') {$daeun3_l = '辰';}
if ($daeun3_l == '04') {$daeun3_l = '巳';}
if ($daeun3_l == '05') {$daeun3_l = '午';}
if ($daeun3_l == '06') {$daeun3_l = '未';}
if ($daeun3_l == '07') {$daeun3_l = '申';}
if ($daeun3_l == '08') {$daeun3_l = '酉';}
if ($daeun3_l == '09') {$daeun3_l = '戌';}
if ($daeun3_l == '10') {$daeun3_l = '亥';}
if ($daeun3_l == '11') {$daeun3_l = '子';}
if ($daeun3_l == '12') {$daeun3_l = '丑';}

if ($daeun4_l == '01') {$daeun4_l = '寅';}
if ($daeun4_l == '02') {$daeun4_l = '卯';}
if ($daeun4_l == '03') {$daeun4_l = '辰';}
if ($daeun4_l == '04') {$daeun4_l = '巳';}
if ($daeun4_l == '05') {$daeun4_l = '午';}
if ($daeun4_l == '06') {$daeun4_l = '未';}
if ($daeun4_l == '07') {$daeun4_l = '申';}
if ($daeun4_l == '08') {$daeun4_l = '酉';}
if ($daeun4_l == '09') {$daeun4_l = '戌';}
if ($daeun4_l == '10') {$daeun4_l = '亥';}
if ($daeun4_l == '11') {$daeun4_l = '子';}
if ($daeun4_l == '12') {$daeun4_l = '丑';}

if ($daeun5_l == '01') {$daeun5_l = '寅';}
if ($daeun5_l == '02') {$daeun5_l = '卯';}
if ($daeun5_l == '03') {$daeun5_l = '辰';}
if ($daeun5_l == '04') {$daeun5_l = '巳';}
if ($daeun5_l == '05') {$daeun5_l = '午';}
if ($daeun5_l == '06') {$daeun5_l = '未';}
if ($daeun5_l == '07') {$daeun5_l = '申';}
if ($daeun5_l == '08') {$daeun5_l = '酉';}
if ($daeun5_l == '09') {$daeun5_l = '戌';}
if ($daeun5_l == '10') {$daeun5_l = '亥';}
if ($daeun5_l == '11') {$daeun5_l = '子';}
if ($daeun5_l == '12') {$daeun5_l = '丑';}

if ($daeun6_l == '01') {$daeun6_l = '寅';}
if ($daeun6_l == '02') {$daeun6_l = '卯';}
if ($daeun6_l == '03') {$daeun6_l = '辰';}
if ($daeun6_l == '04') {$daeun6_l = '巳';}
if ($daeun6_l == '05') {$daeun6_l = '午';}
if ($daeun6_l == '06') {$daeun6_l = '未';}
if ($daeun6_l == '07') {$daeun6_l = '申';}
if ($daeun6_l == '08') {$daeun6_l = '酉';}
if ($daeun6_l == '09') {$daeun6_l = '戌';}
if ($daeun6_l == '10') {$daeun6_l = '亥';}
if ($daeun6_l == '11') {$daeun6_l = '子';}
if ($daeun6_l == '12') {$daeun6_l = '丑';}

if ($daeun7_l == '01') {$daeun7_l = '寅';}
if ($daeun7_l == '02') {$daeun7_l = '卯';}
if ($daeun7_l == '03') {$daeun7_l = '辰';}
if ($daeun7_l == '04') {$daeun7_l = '巳';}
if ($daeun7_l == '05') {$daeun7_l = '午';}
if ($daeun7_l == '06') {$daeun7_l = '未';}
if ($daeun7_l == '07') {$daeun7_l = '申';}
if ($daeun7_l == '08') {$daeun7_l = '酉';}
if ($daeun7_l == '09') {$daeun7_l = '戌';}
if ($daeun7_l == '10') {$daeun7_l = '亥';}
if ($daeun7_l == '11') {$daeun7_l = '子';}
if ($daeun7_l == '12') {$daeun7_l = '丑';}

if ($daeun8_l == '01') {$daeun8_l = '寅';}
if ($daeun8_l == '02') {$daeun8_l = '卯';}
if ($daeun8_l == '03') {$daeun8_l = '辰';}
if ($daeun8_l == '04') {$daeun8_l = '巳';}
if ($daeun8_l == '05') {$daeun8_l = '午';}
if ($daeun8_l == '06') {$daeun8_l = '未';}
if ($daeun8_l == '07') {$daeun8_l = '申';}
if ($daeun8_l == '08') {$daeun8_l = '酉';}
if ($daeun8_l == '09') {$daeun8_l = '戌';}
if ($daeun8_l == '10') {$daeun8_l = '亥';}
if ($daeun8_l == '11') {$daeun8_l = '子';}
if ($daeun8_l == '12') {$daeun8_l = '丑';}

if ($daeun9_l == '01') {$daeun9_l = '寅';}
if ($daeun9_l == '02') {$daeun9_l = '卯';}
if ($daeun9_l == '03') {$daeun9_l = '辰';}
if ($daeun9_l == '04') {$daeun9_l = '巳';}
if ($daeun9_l == '05') {$daeun9_l = '午';}
if ($daeun9_l == '06') {$daeun9_l = '未';}
if ($daeun9_l == '07') {$daeun9_l = '申';}
if ($daeun9_l == '08') {$daeun9_l = '酉';}
if ($daeun9_l == '09') {$daeun9_l = '戌';}
if ($daeun9_l == '10') {$daeun9_l = '亥';}
if ($daeun9_l == '11') {$daeun9_l = '子';}
if ($daeun9_l == '12') {$daeun9_l = '丑';}

if ($daeun10_l == '01') {$daeun10_l = '寅';}
if ($daeun10_l == '02') {$daeun10_l = '卯';}
if ($daeun10_l == '03') {$daeun10_l = '辰';}
if ($daeun10_l == '04') {$daeun10_l = '巳';}
if ($daeun10_l == '05') {$daeun10_l = '午';}
if ($daeun10_l == '06') {$daeun10_l = '未';}
if ($daeun10_l == '07') {$daeun10_l = '申';}
if ($daeun10_l == '08') {$daeun10_l = '酉';}
if ($daeun10_l == '09') {$daeun10_l = '戌';}
if ($daeun10_l == '10') {$daeun10_l = '亥';}
if ($daeun10_l == '11') {$daeun10_l = '子';}
if ($daeun10_l == '12') {$daeun10_l = '丑';}

//echo "$daeun5_u $daeun5_l /<br>$td1_my_age /<br>$daeun1_no";

#########################################################################
//if ($daeun1_no > $td1_my_age) {$td1_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td1_my_age) && ($td1_my_age >= $daeun1_no)) {$td1_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td1_my_age) && ($td1_my_age >= $daeun2_no)) {$td1_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td1_my_age) && ($td1_my_age >= $daeun3_no)) {$td1_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td1_my_age) && ($td1_my_age >= $daeun4_no)) {$td1_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td1_my_age) && ($td1_my_age >= $daeun5_no)) {$td1_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td1_my_age) && ($td1_my_age >= $daeun6_no)) {$td1_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td1_my_age) && ($td1_my_age >= $daeun7_no)) {$td1_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td1_my_age) && ($td1_my_age >= $daeun8_no)) {$td1_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td1_my_age) && ($td1_my_age >= $daeun9_no)) {$td1_daeun = $daeun9_u.$daeun9_l;}
if ($td1_my_age >= $daeun10_no) {$td1_daeun = $daeun10_u.$daeun10_l;}

//if ($daeun1_no > $td2_my_age) {$td2_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td2_my_age) && ($td2_my_age >= $daeun1_no)) {$td2_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td2_my_age) && ($td2_my_age >= $daeun2_no)) {$td2_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td2_my_age) && ($td2_my_age >= $daeun3_no)) {$td2_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td2_my_age) && ($td2_my_age >= $daeun4_no)) {$td2_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td2_my_age) && ($td2_my_age >= $daeun5_no)) {$td2_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td2_my_age) && ($td2_my_age >= $daeun6_no)) {$td2_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td2_my_age) && ($td2_my_age >= $daeun7_no)) {$td2_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td2_my_age) && ($td2_my_age >= $daeun8_no)) {$td2_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td2_my_age) && ($td2_my_age >= $daeun9_no)) {$td2_daeun = $daeun9_u.$daeun9_l;}
if ($td2_my_age >= $daeun10_no) {$td2_daeun = $daeun10_u.$daeun10_l;}

//if ($daeun1_no > $td3_my_age) {$td3_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td3_my_age) && ($td3_my_age >= $daeun1_no)) {$td3_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td3_my_age) && ($td3_my_age >= $daeun2_no)) {$td3_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td3_my_age) && ($td3_my_age >= $daeun3_no)) {$td3_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td3_my_age) && ($td3_my_age >= $daeun4_no)) {$td3_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td3_my_age) && ($td3_my_age >= $daeun5_no)) {$td3_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td3_my_age) && ($td3_my_age >= $daeun6_no)) {$td3_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td3_my_age) && ($td3_my_age >= $daeun7_no)) {$td3_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td3_my_age) && ($td3_my_age >= $daeun8_no)) {$td3_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td3_my_age) && ($td3_my_age >= $daeun9_no)) {$td3_daeun = $daeun9_u.$daeun9_l;}
if ($td3_my_age >= $daeun10_no) {$td3_daeun = $daeun10_u.$daeun10_l;}

//if ($daeun1_no > $td4_my_age) {$td4_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td4_my_age) && ($td4_my_age >= $daeun1_no)) {$td4_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td4_my_age) && ($td4_my_age >= $daeun2_no)) {$td4_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td4_my_age) && ($td4_my_age >= $daeun3_no)) {$td4_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td4_my_age) && ($td4_my_age >= $daeun4_no)) {$td4_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td4_my_age) && ($td4_my_age >= $daeun5_no)) {$td4_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td4_my_age) && ($td4_my_age >= $daeun6_no)) {$td4_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td4_my_age) && ($td4_my_age >= $daeun7_no)) {$td4_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td4_my_age) && ($td4_my_age >= $daeun8_no)) {$td4_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td4_my_age) && ($td4_my_age >= $daeun9_no)) {$td4_daeun = $daeun9_u.$daeun9_l;}
if ($td4_my_age >= $daeun10_no) {$td4_daeun = $daeun10_u.$daeun10_l;}

//if ($daeun1_no > $td5_my_age) {$td5_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td5_my_age) && ($td5_my_age >= $daeun1_no)) {$td5_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td5_my_age) && ($td5_my_age >= $daeun2_no)) {$td5_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td5_my_age) && ($td5_my_age >= $daeun3_no)) {$td5_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td5_my_age) && ($td5_my_age >= $daeun4_no)) {$td5_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td5_my_age) && ($td5_my_age >= $daeun5_no)) {$td5_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td5_my_age) && ($td5_my_age >= $daeun6_no)) {$td5_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td5_my_age) && ($td5_my_age >= $daeun7_no)) {$td5_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td5_my_age) && ($td5_my_age >= $daeun8_no)) {$td5_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td5_my_age) && ($td5_my_age >= $daeun9_no)) {$td5_daeun = $daeun9_u.$daeun9_l;}
if ($td5_my_age >= $daeun10_no) {$td5_daeun = $daeun10_u.$daeun10_l;}

//if ($daeun1_no > $td6_my_age) {$td6_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td6_my_age) && ($td6_my_age >= $daeun1_no)) {$td6_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td6_my_age) && ($td6_my_age >= $daeun2_no)) {$td6_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td6_my_age) && ($td6_my_age >= $daeun3_no)) {$td6_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td6_my_age) && ($td6_my_age >= $daeun4_no)) {$td6_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td6_my_age) && ($td6_my_age >= $daeun5_no)) {$td6_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td6_my_age) && ($td6_my_age >= $daeun6_no)) {$td6_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td6_my_age) && ($td6_my_age >= $daeun7_no)) {$td6_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td6_my_age) && ($td6_my_age >= $daeun8_no)) {$td6_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td6_my_age) && ($td6_my_age >= $daeun9_no)) {$td6_daeun = $daeun9_u.$daeun9_l;}
if ($td6_my_age >= $daeun10_no) {$td6_daeun = $daeun10_u.$daeun10_l;}

//if ($daeun1_no > $td7_my_age) {$td7_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td7_my_age) && ($td7_my_age >= $daeun1_no)) {$td7_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td7_my_age) && ($td7_my_age >= $daeun2_no)) {$td7_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td7_my_age) && ($td7_my_age >= $daeun3_no)) {$td7_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td7_my_age) && ($td7_my_age >= $daeun4_no)) {$td7_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td7_my_age) && ($td7_my_age >= $daeun5_no)) {$td7_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td7_my_age) && ($td7_my_age >= $daeun6_no)) {$td7_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td7_my_age) && ($td7_my_age >= $daeun7_no)) {$td7_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td7_my_age) && ($td7_my_age >= $daeun8_no)) {$td7_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td7_my_age) && ($td7_my_age >= $daeun9_no)) {$td7_daeun = $daeun9_u.$daeun9_l;}
if ($td7_my_age >= $daeun10_no) {$td7_daeun = $daeun10_u.$daeun10_l;}

//if ($daeun1_no > $td8_my_age) {$td8_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td8_my_age) && ($td8_my_age >= $daeun1_no)) {$td8_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td8_my_age) && ($td8_my_age >= $daeun2_no)) {$td8_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td8_my_age) && ($td8_my_age >= $daeun3_no)) {$td8_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td8_my_age) && ($td8_my_age >= $daeun4_no)) {$td8_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td8_my_age) && ($td8_my_age >= $daeun5_no)) {$td8_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td8_my_age) && ($td8_my_age >= $daeun6_no)) {$td8_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td8_my_age) && ($td8_my_age >= $daeun7_no)) {$td8_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td8_my_age) && ($td8_my_age >= $daeun8_no)) {$td8_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td8_my_age) && ($td8_my_age >= $daeun9_no)) {$td8_daeun = $daeun9_u.$daeun9_l;}
if ($td8_my_age >= $daeun10_no) {$td8_daeun = $daeun10_u.$daeun10_l;}

//if ($daeun1_no > $td9_my_age) {$td9_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td9_my_age) && ($td9_my_age >= $daeun1_no)) {$td9_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td9_my_age) && ($td9_my_age >= $daeun2_no)) {$td9_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td9_my_age) && ($td9_my_age >= $daeun3_no)) {$td9_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td9_my_age) && ($td9_my_age >= $daeun4_no)) {$td9_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td9_my_age) && ($td9_my_age >= $daeun5_no)) {$td9_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td9_my_age) && ($td9_my_age >= $daeun6_no)) {$td9_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td9_my_age) && ($td9_my_age >= $daeun7_no)) {$td9_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td9_my_age) && ($td9_my_age >= $daeun8_no)) {$td9_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td9_my_age) && ($td9_my_age >= $daeun9_no)) {$td9_daeun = $daeun9_u.$daeun9_l;}
if ($td9_my_age >= $daeun10_no) {$td9_daeun = $daeun10_u.$daeun10_l;}

//if ($daeun1_no > $td10_my_age) {$td10_daeun = $daeun1_u.$daeun1_l;}
if (($daeun2_no > $td10_my_age) && ($td10_my_age >= $daeun1_no)) {$td10_daeun = $daeun1_u.$daeun1_l;}
if (($daeun3_no > $td10_my_age) && ($td10_my_age >= $daeun2_no)) {$td10_daeun = $daeun2_u.$daeun2_l;}
if (($daeun4_no > $td10_my_age) && ($td10_my_age >= $daeun3_no)) {$td10_daeun = $daeun3_u.$daeun3_l;}
if (($daeun5_no > $td10_my_age) && ($td10_my_age >= $daeun4_no)) {$td10_daeun = $daeun4_u.$daeun4_l;}
if (($daeun6_no > $td10_my_age) && ($td10_my_age >= $daeun5_no)) {$td10_daeun = $daeun5_u.$daeun5_l;}
if (($daeun7_no > $td10_my_age) && ($td10_my_age >= $daeun6_no)) {$td10_daeun = $daeun6_u.$daeun6_l;}
if (($daeun8_no > $td10_my_age) && ($td10_my_age >= $daeun7_no)) {$td10_daeun = $daeun7_u.$daeun7_l;}
if (($daeun9_no > $td10_my_age) && ($td10_my_age >= $daeun8_no)) {$td10_daeun = $daeun8_u.$daeun8_l;}
if (($daeun10_no > $td10_my_age) && ($td10_my_age >= $daeun9_no)) {$td10_daeun = $daeun9_u.$daeun9_l;}
if ($td10_my_age >= $daeun10_no) {$td10_daeun = $daeun10_u.$daeun10_l;}

##########################################################################################################

####################################################################################################12신살

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "寅")){
$td1_sal = "겁살";$td_unsung1 = '절';
$td2_sal = "재살";$td_unsung2 = '태';
$td3_sal = "천살";$td_unsung3 = '양';
$td4_sal = "지살";$td_unsung4 = '장생';
$td5_sal = "도화";$td_unsung5 = '목욕';
$td6_sal = "월살";$td_unsung6 = '관대';
$td7_sal = "망신";$td_unsung7 = '건록';
$td8_sal = "장성";$td_unsung8 = '제왕';
$td9_sal = "반안";$td_unsung9 = '쇄';
$td10_sal = "역마";$td_unsung10 = '병';}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "卯")){
$td1_sal = "재살";$td_unsung1 = '태';
$td2_sal = "천살";$td_unsung2 = '양';
$td3_sal = "지살";$td_unsung3 = '장생';
$td4_sal = "도화";$td_unsung4 = '목욕';
$td5_sal = "월살";$td_unsung5 = '관대';
$td6_sal = "망신";$td_unsung6 = '건록';
$td7_sal = "장성";$td_unsung7 = '제왕';
$td8_sal = "반안";$td_unsung8 = '쇄';
$td9_sal = "역마";$td_unsung9 = '병';
$td10_sal = "육해";$td_unsung10 = '사';}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "辰")){
$td1_sal = "천살";$td_unsung1 = '양';
$td2_sal = "지살";$td_unsung2 = '장생';
$td3_sal = "도화";$td_unsung3 = '목욕';
$td4_sal = "월살";$td_unsung4 = '관대';
$td5_sal = "망신";$td_unsung5 = '건록';
$td6_sal = "장성";$td_unsung6 = '제왕';
$td7_sal = "반안";$td_unsung7 = '쇄';
$td8_sal = "역마";$td_unsung8 = '병';
$td9_sal = "육해";$td_unsung9 = '사';
$td10_sal = "화개";$td_unsung10 = '묘';}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "巳")){

$td1_sal = "지살";$td_unsung1 = '장생';
$td2_sal = "도화";$td_unsung2 = '목욕';
$td3_sal = "월살";$td_unsung3 = '관대';
$td4_sal = "망신";$td_unsung4 = '건록';
$td5_sal = "장성";$td_unsung5 = '제왕';
$td6_sal = "반안";$td_unsung6 = '쇄';
$td7_sal = "역마";$td_unsung7 = '병';
$td8_sal = "육해";$td_unsung8 = '사';
$td9_sal = "화개";$td_unsung9 = '묘';
$td10_sal = "겁살";$td_unsung10 = '절';}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "午")){
$td1_sal = "도화";$td_unsung1 = '목욕';
$td2_sal = "월살";$td_unsung2 = '관대';
$td3_sal = "망신";$td_unsung3 = '건록';
$td4_sal = "장성";$td_unsung4 = '제왕';
$td5_sal = "반안";$td_unsung5 = '쇄';
$td6_sal = "역마";$td_unsung6 = '병';
$td7_sal = "육해";$td_unsung7 = '사';
$td8_sal = "화개";$td_unsung8 = '묘';
$td9_sal = "겁살";$td_unsung9 = '절';
$td10_sal = "재살";$td_unsung10 = '태';}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "未")){
$td1_sal = "월살";$td_unsung1 = '관대';
$td2_sal = "망신";$td_unsung2 = '건록';
$td3_sal = "장성";$td_unsung3 = '제왕';
$td4_sal = "반안";$td_unsung4 = '쇄';
$td5_sal = "역마";$td_unsung5 = '병';
$td6_sal = "육해";$td_unsung6 = '사';
$td7_sal = "화개";$td_unsung7 = '묘';
$td8_sal = "겁살";$td_unsung8 = '절';
$td9_sal = "재살";$td_unsung9 = '태';
$td10_sal = "천살";$td_unsung10 = '양';}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "申")){
$td1_sal = "망신";$td_unsung1 = '건록';
$td2_sal = "장성";$td_unsung2 = '제왕';
$td3_sal = "반안";$td_unsung3 = '쇄';
$td4_sal = "역마";$td_unsung4 = '병';
$td5_sal = "육해";$td_unsung5 = '사';
$td6_sal = "화개";$td_unsung6 = '묘';
$td7_sal = "겁살";$td_unsung7 = '절';
$td8_sal = "재살";$td_unsung8 = '태';
$td9_sal = "천살";$td_unsung9 = '양';
$td10_sal = "지살";$td_unsung10 = '장생';}


if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "酉")){
$td1_sal = "장성";$td_unsung1 = '제왕';
$td2_sal = "반안";$td_unsung2 = '쇄';
$td3_sal = "역마";$td_unsung3 = '병';
$td4_sal = "육해";$td_unsung4 = '사';
$td5_sal = "화개";$td_unsung5 = '묘';
$td6_sal = "겁살";$td_unsung6 = '절';
$td7_sal = "재살";$td_unsung7 = '태';
$td8_sal = "천살";$td_unsung8 = '양';
$td9_sal = "지살";$td_unsung9 = '장생';
$td10_sal = "도화";$td_unsung10 = '목욕';}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "戌")){
$td1_sal = "반안";$td_unsung1 = '쇄';
$td2_sal = "역마";$td_unsung2 = '병';
$td3_sal = "육해";$td_unsung3 = '사';
$td4_sal = "화개";$td_unsung4 = '묘';
$td5_sal = "겁살";$td_unsung5 = '절';
$td6_sal = "재살";$td_unsung6 = '태';
$td7_sal = "천살";$td_unsung7 = '양';
$td8_sal = "지살";$td_unsung8 = '장생';
$td9_sal = "도화";$td_unsung9 = '목욕';
$td10_sal = "월살";$td_unsung10 = '관대';}


if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "亥")){
$td1_sal = "역마";$td_unsung1 = '병';
$td2_sal = "육해";$td_unsung2 = '사';
$td3_sal = "화개";$td_unsung3 = '묘';
$td4_sal = "겁살";$td_unsung4 = '절';
$td5_sal = "재살";$td_unsung5 = '태';
$td6_sal = "천살";$td_unsung6 = '양';
$td7_sal = "지살";$td_unsung7 = '장생';
$td8_sal = "도화";$td_unsung8 = '목욕';
$td9_sal = "월살";$td_unsung9 = '관대';
$td10_sal = "망신";$td_unsung10 = '건록';}


if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "子")){
$td1_sal = "육해";$td_unsung1 = '사';
$td2_sal = "화개";$td_unsung2 = '묘';
$td3_sal = "겁살";$td_unsung3 = '절';
$td4_sal = "재살";$td_unsung4 = '태';
$td5_sal = "천살";$td_unsung5 = '양';
$td6_sal = "지살";$td_unsung6 = '장생';
$td7_sal = "도화";$td_unsung7 = '목욕';
$td8_sal = "월살";$td_unsung8 = '관대';
$td9_sal = "망신";$td_unsung9 = '건록';
$td10_sal = "장성";$td_unsung10 = '제왕';}


if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_umyear_e == "丑")){
$td1_sal = "화개";$td_unsung1 = '묘';
$td2_sal = "겁살";$td_unsung2 = '절';
$td3_sal = "재살";$td_unsung3 = '태';
$td4_sal = "천살";$td_unsung4 = '양';
$td5_sal = "지살";$td_unsung5 = '장생';
$td6_sal = "도화";$td_unsung6 = '목욕';
$td7_sal = "월살";$td_unsung7 = '관대';
$td8_sal = "망신";$td_unsung8 = '건록';
$td9_sal = "장성";$td_unsung9 = '제왕';
$td10_sal = "반안";$td_unsung10 = '쇄';}


if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "寅")){
$td1_sal = "역마";$td_unsung1 = '병';
$td2_sal = "육해";$td_unsung2 = '사';
$td3_sal = "화개";$td_unsung3 = '묘';
$td4_sal = "겁살";$td_unsung4 = '절';
$td5_sal = "재살";$td_unsung5 = '태';
$td6_sal = "천살";$td_unsung6 = '양';
$td7_sal = "지살";$td_unsung7 = '장생';
$td8_sal = "도화";$td_unsung8 = '목욕';
$td9_sal = "월살";$td_unsung9 = '관대';
$td10_sal = "망신";$td_unsung10 = '건록';}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "卯")){
$td1_sal = "육해";$td_unsung1 = '사';
$td2_sal = "화개";$td_unsung2 = '묘';
$td3_sal = "겁살";$td_unsung3 = '절';
$td4_sal = "재살";$td_unsung4 = '태';
$td5_sal = "천살";$td_unsung5 = '양';
$td6_sal = "지살";$td_unsung6 = '장생';
$td7_sal = "도화";$td_unsung7 = '목욕';
$td8_sal = "월살";$td_unsung8 = '관대';
$td9_sal = "망신";$td_unsung9 = '건록';
$td10_sal = "장성";$td_unsung10 = '제왕';}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "辰")){
$td1_sal = "화개";$td_unsung1 = '묘';
$td2_sal = "겁살";$td_unsung2 = '절';
$td3_sal = "재살";$td_unsung3 = '태';
$td4_sal = "천살";$td_unsung4 = '양';
$td5_sal = "지살";$td_unsung5 = '장생';
$td6_sal = "도화";$td_unsung6 = '목욕';
$td7_sal = "월살";$td_unsung7 = '관대';
$td8_sal = "망신";$td_unsung8 = '건록';
$td9_sal = "장성";$td_unsung9 = '제왕';
$td10_sal = "반안";$td_unsung10 = '쇄';}


if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "巳")){
$td1_sal = "겁살";$td_unsung1 = '절';
$td2_sal = "재살";$td_unsung2 = '태';
$td3_sal = "천살";$td_unsung3 = '양';
$td4_sal = "지살";$td_unsung4 = '장생';
$td5_sal = "도화";$td_unsung5 = '목욕';
$td6_sal = "월살";$td_unsung6 = '관대';
$td7_sal = "망신";$td_unsung7 = '건록';
$td8_sal = "장성";$td_unsung8 = '제왕';
$td9_sal = "반안";$td_unsung9 = '쇄';
$td10_sal = "역마";$td_unsung10 = '병';}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "午")){
$td1_sal = "재살";$td_unsung1 = '태';
$td2_sal = "천살";$td_unsung2 = '양';
$td3_sal = "지살";$td_unsung3 = '장생';
$td4_sal = "도화";$td_unsung4 = '목욕';
$td5_sal = "월살";$td_unsung5 = '관대';
$td6_sal = "망신";$td_unsung6 = '건록';
$td7_sal = "장성";$td_unsung7 = '제왕';
$td8_sal = "반안";$td_unsung8 = '쇄';
$td9_sal = "역마";$td_unsung9 = '병';
$td10_sal = "육해";$td_unsung10 = '사';}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "未")){
$td1_sal = "천살";$td_unsung1 = '양';
$td2_sal = "지살";$td_unsung2 = '장생';
$td3_sal = "도화";$td_unsung3 = '목욕';
$td4_sal = "월살";$td_unsung4 = '관대';
$td5_sal = "망신";$td_unsung5 = '건록';
$td6_sal = "장성";$td_unsung6 = '제왕';
$td7_sal = "반안";$td_unsung7 = '쇄';
$td8_sal = "역마";$td_unsung8 = '병';
$td9_sal = "육해";$td_unsung9 = '사';
$td10_sal = "화개";$td_unsung10 = '묘';}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "申")){
$td1_sal = "지살";$td_unsung1 = '장생';
$td2_sal = "도화";$td_unsung2 = '목욕';
$td3_sal = "월살";$td_unsung3 = '관대';
$td4_sal = "망신";$td_unsung4 = '건록';
$td5_sal = "장성";$td_unsung5 = '제왕';
$td6_sal = "반안";$td_unsung6 = '쇄';
$td7_sal = "역마";$td_unsung7 = '병';
$td8_sal = "육해";$td_unsung8 = '사';
$td9_sal = "화개";$td_unsung9 = '묘';
$td10_sal = "겁살";$td_unsung10 = '절';}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "酉")){
$td1_sal = "도화";$td_unsung1 = '목욕';
$td2_sal = "월살";$td_unsung2 = '관대';
$td3_sal = "망신";$td_unsung3 = '건록';
$td4_sal = "장성";$td_unsung4 = '제왕';
$td5_sal = "반안";$td_unsung5 = '쇄';
$td6_sal = "역마";$td_unsung6 = '병';
$td7_sal = "육해";$td_unsung7 = '사';
$td8_sal = "화개";$td_unsung8 = '묘';
$td9_sal = "겁살";$td_unsung9 = '절';
$td10_sal = "재살";$td_unsung10 = '태';}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "戌")){
$td1_sal = "월살";$td_unsung1 = '관대';
$td2_sal = "망신";$td_unsung2 = '건록';
$td3_sal = "장성";$td_unsung3 = '제왕';
$td4_sal = "반안";$td_unsung4 = '쇄';
$td5_sal = "역마";$td_unsung5 = '병';
$td6_sal = "육해";$td_unsung6 = '사';
$td7_sal = "화개";$td_unsung7 = '묘';
$td8_sal = "겁살";$td_unsung8 = '절';
$td9_sal = "재살";$td_unsung9 = '태';
$td10_sal = "천살";$td_unsung10 = '양';}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "亥")){
$td1_sal = "망신";$td_unsung1 = '건록';
$td2_sal = "장성";$td_unsung2 = '제왕';
$td3_sal = "반안";$td_unsung3 = '쇄';
$td4_sal = "역마";$td_unsung4 = '병';
$td5_sal = "육해";$td_unsung5 = '사';
$td6_sal = "화개";$td_unsung6 = '묘';
$td7_sal = "겁살";$td_unsung7 = '절';
$td8_sal = "재살";$td_unsung8 = '태';
$td9_sal = "천살";$td_unsung9 = '양';
$td10_sal = "지살";$td_unsung10 = '장생';}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "子")){
$td1_sal = "장성";$td_unsung1 = '제왕';
$td2_sal = "반안";$td_unsung2 = '쇄';
$td3_sal = "역마";$td_unsung3 = '병';
$td4_sal = "육해";$td_unsung4 = '사';
$td5_sal = "화개";$td_unsung5 = '묘';
$td6_sal = "겁살";$td_unsung6 = '절';
$td7_sal = "재살";$td_unsung7 = '태';
$td8_sal = "천살";$td_unsung8 = '양';
$td9_sal = "지살";$td_unsung9 = '장생';
$td10_sal = "도화";$td_unsung10 = '목욕';}


if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_umyear_e == "丑")){
$td1_sal = "반안";$td_unsung1 = '쇄';
$td2_sal = "역마";$td_unsung2 = '병';
$td3_sal = "육해";$td_unsung3 = '사';
$td4_sal = "화개";$td_unsung4 = '묘';
$td5_sal = "겁살";$td_unsung5 = '절';
$td6_sal = "재살";$td_unsung6 = '태';
$td7_sal = "천살";$td_unsung7 = '양';
$td8_sal = "지살";$td_unsung8 = '장생';
$td9_sal = "도화";$td_unsung9 = '목욕';
$td10_sal = "월살";$td_unsung10 = '관대';}


if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "寅")){
$td1_sal = "망신";$td_unsung1 = '건록';
$td2_sal = "장성";$td_unsung2 = '제왕';
$td3_sal = "반안";$td_unsung3 = '쇄';
$td4_sal = "역마";$td_unsung4 = '병';
$td5_sal = "육해";$td_unsung5 = '사';
$td6_sal = "화개";$td_unsung6 = '묘';
$td7_sal = "겁살";$td_unsung7 = '절';
$td8_sal = "재살";$td_unsung8 = '태';
$td9_sal = "천살";$td_unsung9 = '양';
$td10_sal = "지살";$td_unsung10 = '장생';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "卯")){
$td1_sal = "장성";$td_unsung1 = '제왕';
$td2_sal = "반안";$td_unsung2 = '쇄';
$td3_sal = "역마";$td_unsung3 = '병';
$td4_sal = "육해";$td_unsung4 = '사';
$td5_sal = "화개";$td_unsung5 = '묘';
$td6_sal = "겁살";$td_unsung6 = '절';
$td7_sal = "재살";$td_unsung7 = '태';
$td8_sal = "천살";$td_unsung8 = '양';
$td9_sal = "지살";$td_unsung9 = '장생';
$td10_sal = "도화";$td_unsung10 = '목욕';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "辰")){
$td1_sal = "반안";$td_unsung1 = '쇄';
$td2_sal = "역마";$td_unsung2 = '병';
$td3_sal = "육해";$td_unsung3 = '사';
$td4_sal = "화개";$td_unsung4 = '묘';
$td5_sal = "겁살";$td_unsung5 = '절';
$td6_sal = "재살";$td_unsung6 = '태';
$td7_sal = "천살";$td_unsung7 = '양';
$td8_sal = "지살";$td_unsung8 = '장생';
$td9_sal = "도화";$td_unsung9 = '목욕';
$td10_sal = "월살";$td_unsung10 = '관대';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "巳")){
$td1_sal = "역마";$td_unsung1 = '병';
$td2_sal = "육해";$td_unsung2 = '사';
$td3_sal = "화개";$td_unsung3 = '묘';
$td4_sal = "겁살";$td_unsung4 = '절';
$td5_sal = "재살";$td_unsung5 = '태';
$td6_sal = "천살";$td_unsung6 = '양';
$td7_sal = "지살";$td_unsung7 = '장생';
$td8_sal = "도화";$td_unsung8 = '목욕';
$td9_sal = "월살";$td_unsung9 = '관대';
$td10_sal = "망신";$td_unsung10 = '건록';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "午")){
$td1_sal = "육해";$td_unsung1 = '사';
$td2_sal = "화개";$td_unsung2 = '묘';
$td3_sal = "겁살";$td_unsung3 = '절';
$td4_sal = "재살";$td_unsung4 = '태';
$td5_sal = "천살";$td_unsung5 = '양';
$td6_sal = "지살";$td_unsung6 = '장생';
$td7_sal = "도화";$td_unsung7 = '목욕';
$td8_sal = "월살";$td_unsung8 = '관대';
$td9_sal = "망신";$td_unsung9 = '건록';
$td10_sal = "장성";$td_unsung10 = '제왕';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "未")){
$td1_sal = "화개";$td_unsung1 = '묘';
$td2_sal = "겁살";$td_unsung2 = '절';
$td3_sal = "재살";$td_unsung3 = '태';
$td4_sal = "천살";$td_unsung4 = '양';
$td5_sal = "지살";$td_unsung5 = '장생';
$td6_sal = "도화";$td_unsung6 = '목욕';
$td7_sal = "월살";$td_unsung7 = '관대';
$td8_sal = "망신";$td_unsung8 = '건록';
$td9_sal = "장성";$td_unsung9 = '제왕';
$td10_sal = "반안";$td_unsung10 = '쇄';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "申")){
$td1_sal = "겁살";$td_unsung1 = '절';
$td2_sal = "재살";$td_unsung2 = '태';
$td3_sal = "천살";$td_unsung3 = '양';
$td4_sal = "지살";$td_unsung4 = '장생';
$td5_sal = "도화";$td_unsung5 = '목욕';
$td6_sal = "월살";$td_unsung6 = '관대';
$td7_sal = "망신";$td_unsung7 = '건록';
$td8_sal = "장성";$td_unsung8 = '제왕';
$td9_sal = "반안";$td_unsung9 = '쇄';
$td10_sal = "역마";$td_unsung10 = '병';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "酉")){
$td1_sal = "재살";$td_unsung1 = '태';
$td2_sal = "천살";$td_unsung2 = '양';
$td3_sal = "지살";$td_unsung3 = '장생';
$td4_sal = "도화";$td_unsung4 = '목욕';
$td5_sal = "월살";$td_unsung5 = '관대';
$td6_sal = "망신";$td_unsung6 = '건록';
$td7_sal = "장성";$td_unsung7 = '제왕';
$td8_sal = "반안";$td_unsung8 = '쇄';
$td9_sal = "역마";$td_unsung9 = '병';
$td10_sal = "육해";$td_unsung10 = '사';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "戌")){
$td1_sal = "천살";$td_unsung1 = '양';
$td2_sal = "지살";$td_unsung2 = '장생';
$td3_sal = "도화";$td_unsung3 = '목욕';
$td4_sal = "월살";$td_unsung4 = '관대';
$td5_sal = "망신";$td_unsung5 = '건록';
$td6_sal = "장성";$td_unsung6 = '제왕';
$td7_sal = "반안";$td_unsung7 = '쇄';
$td8_sal = "역마";$td_unsung8 = '병';
$td9_sal = "육해";$td_unsung9 = '사';
$td10_sal = "화개";$td_unsung10 = '묘';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "亥")){
$td1_sal = "지살";$td_unsung1 = '장생';
$td2_sal = "도화";$td_unsung2 = '목욕';
$td3_sal = "월살";$td_unsung3 = '관대';
$td4_sal = "망신";$td_unsung4 = '건록';
$td5_sal = "장성";$td_unsung5 = '제왕';
$td6_sal = "반안";$td_unsung6 = '쇄';
$td7_sal = "역마";$td_unsung7 = '병';
$td8_sal = "육해";$td_unsung8 = '사';
$td9_sal = "화개";$td_unsung9 = '묘';
$td10_sal = "겁살";$td_unsung10 = '절';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "子")){
$td1_sal = "도화";$td_unsung1 = '목욕';
$td2_sal = "월살";$td_unsung2 = '관대';
$td3_sal = "망신";$td_unsung3 = '건록';
$td4_sal = "장성";$td_unsung4 = '제왕';
$td5_sal = "반안";$td_unsung5 = '쇄';
$td6_sal = "역마";$td_unsung6 = '병';
$td7_sal = "육해";$td_unsung7 = '사';
$td8_sal = "화개";$td_unsung8 = '묘';
$td9_sal = "겁살";$td_unsung9 = '절';
$td10_sal = "재살";$td_unsung10 = '태';}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_umyear_e == "丑")){
$td1_sal = "월살";$td_unsung1 = '관대';
$td2_sal = "망신";$td_unsung2 = '건록';
$td3_sal = "장성";$td_unsung3 = '제왕';
$td4_sal = "반안";$td_unsung4 = '쇄';
$td5_sal = "역마";$td_unsung5 = '병';
$td6_sal = "육해";$td_unsung6 = '사';
$td7_sal = "화개";$td_unsung7 = '묘';
$td8_sal = "겁살";$td_unsung8 = '절';
$td9_sal = "재살";$td_unsung9 = '태';
$td10_sal = "천살";$td_unsung10 = '양';}




if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "寅")){
$td1_sal = "지살";$td_unsung1 = '장생';
$td2_sal = "도화";$td_unsung2 = '목욕';
$td3_sal = "월살";$td_unsung3 = '관대';
$td4_sal = "망신";$td_unsung4 = '건록';
$td5_sal = "장성";$td_unsung5 = '제왕';
$td6_sal = "반안";$td_unsung6 = '쇄';
$td7_sal = "역마";$td_unsung7 = '병';
$td8_sal = "육해";$td_unsung8 = '사';
$td9_sal = "화개";$td_unsung9 = '묘';
$td10_sal = "겁살";$td_unsung10 = '절';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "卯")){
$td1_sal = "도화";$td_unsung1 = '목욕';
$td2_sal = "월살";$td_unsung2 = '관대';
$td3_sal = "망신";$td_unsung3 = '건록';
$td4_sal = "장성";$td_unsung4 = '제왕';
$td5_sal = "반안";$td_unsung5 = '쇄';
$td6_sal = "역마";$td_unsung6 = '병';
$td7_sal = "육해";$td_unsung7 = '사';
$td8_sal = "화개";$td_unsung8 = '묘';
$td9_sal = "겁살";$td_unsung9 = '절';
$td10_sal = "재살";$td_unsung10 = '태';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "辰")){
$td1_sal = "월살";$td_unsung1 = '관대';
$td2_sal = "망신";$td_unsung2 = '건록';
$td3_sal = "장성";$td_unsung3 = '제왕';
$td4_sal = "반안";$td_unsung4 = '쇄';
$td5_sal = "역마";$td_unsung5 = '병';
$td6_sal = "육해";$td_unsung6 = '사';
$td7_sal = "화개";$td_unsung7 = '묘';
$td8_sal = "겁살";$td_unsung8 = '절';
$td9_sal = "재살";$td_unsung9 = '태';
$td10_sal = "천살";$td_unsung10 = '양';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "巳")){
$td1_sal = "망신";$td_unsung1 = '건록';
$td2_sal = "장성";$td_unsung2 = '제왕';
$td3_sal = "반안";$td_unsung3 = '쇄';
$td4_sal = "역마";$td_unsung4 = '병';
$td5_sal = "육해";$td_unsung5 = '사';
$td6_sal = "화개";$td_unsung6 = '묘';
$td7_sal = "겁살";$td_unsung7 = '절';
$td8_sal = "재살";$td_unsung8 = '태';
$td9_sal = "천살";$td_unsung9 = '양';
$td10_sal = "지살";$td_unsung10 = '장생';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "午")){
$td1_sal = "장성";$td_unsung1 = '제왕';
$td2_sal = "반안";$td_unsung2 = '쇄';
$td3_sal = "역마";$td_unsung3 = '병';
$td4_sal = "육해";$td_unsung4 = '사';
$td5_sal = "화개";$td_unsung5 = '묘';
$td6_sal = "겁살";$td_unsung6 = '절';
$td7_sal = "재살";$td_unsung7 = '태';
$td8_sal = "천살";$td_unsung8 = '양';
$td9_sal = "지살";$td_unsung9 = '장생';
$td10_sal = "도화";$td_unsung10 = '목욕';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "未")){
$td1_sal = "반안";$td_unsung1 = '쇄';
$td2_sal = "역마";$td_unsung2 = '병';
$td3_sal = "육해";$td_unsung3 = '사';
$td4_sal = "화개";$td_unsung4 = '묘';
$td5_sal = "겁살";$td_unsung5 = '절';
$td6_sal = "재살";$td_unsung6 = '태';
$td7_sal = "천살";$td_unsung7 = '양';
$td8_sal = "지살";$td_unsung8 = '장생';
$td9_sal = "도화";$td_unsung9 = '목욕';
$td10_sal = "월살";$td_unsung10 = '관대';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "申")){
$td1_sal = "역마";$td_unsung1 = '병';
$td2_sal = "육해";$td_unsung2 = '사';
$td3_sal = "화개";$td_unsung3 = '묘';
$td4_sal = "겁살";$td_unsung4 = '절';
$td5_sal = "재살";$td_unsung5 = '태';
$td6_sal = "천살";$td_unsung6 = '양';
$td7_sal = "지살";$td_unsung7 = '장생';
$td8_sal = "도화";$td_unsung8 = '목욕';
$td9_sal = "월살";$td_unsung9 = '관대';
$td10_sal = "망신";$td_unsung10 = '건록';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "酉")){
$td1_sal = "육해";$td_unsung1 = '사';
$td2_sal = "화개";$td_unsung2 = '묘';
$td3_sal = "겁살";$td_unsung3 = '절';
$td4_sal = "재살";$td_unsung4 = '태';
$td5_sal = "천살";$td_unsung5 = '양';
$td6_sal = "지살";$td_unsung6 = '장생';
$td7_sal = "도화";$td_unsung7 = '목욕';
$td8_sal = "월살";$td_unsung8 = '관대';
$td9_sal = "망신";$td_unsung9 = '건록';
$td10_sal = "장성";$td_unsung10 = '제왕';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "戌")){
$td1_sal = "화개";$td_unsung1 = '묘';
$td2_sal = "겁살";$td_unsung2 = '절';
$td3_sal = "재살";$td_unsung3 = '태';
$td4_sal = "천살";$td_unsung4 = '양';
$td5_sal = "지살";$td_unsung5 = '장생';
$td6_sal = "도화";$td_unsung6 = '목욕';
$td7_sal = "월살";$td_unsung7 = '관대';
$td8_sal = "망신";$td_unsung8 = '건록';
$td9_sal = "장성";$td_unsung9 = '제왕';
$td10_sal = "반안";$td_unsung10 = '쇄';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "亥")){
$td1_sal = "겁살";$td_unsung1 = '절';
$td2_sal = "재살";$td_unsung2 = '태';
$td3_sal = "천살";$td_unsung3 = '양';
$td4_sal = "지살";$td_unsung4 = '장생';
$td5_sal = "도화";$td_unsung5 = '목욕';
$td6_sal = "월살";$td_unsung6 = '관대';
$td7_sal = "망신";$td_unsung7 = '건록';
$td8_sal = "장성";$td_unsung8 = '제왕';
$td9_sal = "반안";$td_unsung9 = '쇄';
$td10_sal = "역마";$td_unsung10 = '병';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "子")){
$td1_sal = "재살";$td_unsung1 = '태';
$td2_sal = "천살";$td_unsung2 = '양';
$td3_sal = "지살";$td_unsung3 = '장생';
$td4_sal = "도화";$td_unsung4 = '목욕';
$td5_sal = "월살";$td_unsung5 = '관대';
$td6_sal = "망신";$td_unsung6 = '건록';
$td7_sal = "장성";$td_unsung7 = '제왕';
$td8_sal = "반안";$td_unsung8 = '쇄';
$td9_sal = "역마";$td_unsung9 = '병';
$td10_sal = "육해";$td_unsung10 = '사';}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_umyear_e == "丑")){
$td1_sal = "천살";$td_unsung1 = '양';
$td2_sal = "지살";$td_unsung2 = '장생';
$td3_sal = "도화";$td_unsung3 = '목욕';
$td4_sal = "월살";$td_unsung4 = '관대';
$td5_sal = "망신";$td_unsung5 = '건록';
$td6_sal = "장성";$td_unsung6 = '제왕';
$td7_sal = "반안";$td_unsung7 = '쇄';
$td8_sal = "역마";$td_unsung8 = '병';
$td9_sal = "육해";$td_unsung9 = '사';
$td10_sal = "화개";$td_unsung10 = '묘';}
####################################################################################################
#################################################################################################   
##########################################################################################################################################


echo "<br>";

###########################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################

if (($td1_daeun == $td2_daeun) &&
   ($td2_daeun == $td3_daeun) &&
   ($td3_daeun == $td4_daeun) &&
   ($td4_daeun == $td5_daeun) &&
   ($td5_daeun == $td6_daeun) &&
   ($td6_daeun == $td7_daeun) &&
   ($td7_daeun == $td8_daeun) &&
   ($td8_daeun == $td9_daeun) &&
   ($td9_daeun == $td10_daeun))
   {$cspan1 = '10';$daeundisp1 = $td1_daeun;
  
//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}

$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];


$td2_daeun_check = substr($daeundisp2,0,2);

if ($td2_daeun_check == '甲') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td2_daeun_check == '乙') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td2_daeun_check == '丙') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td2_daeun_check == '丁') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td2_daeun_check == '戊') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td2_daeun_check == '己') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td2_daeun_check == '庚') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td2_daeun_check == '辛') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td2_daeun_check == '壬') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td2_daeun_check == '癸') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td2_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];

//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}

$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];








$td2_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td2_daeun_check_jiji == '寅') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td2_daeun_check_jiji == '卯') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td2_daeun_check_jiji == '辰') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td2_daeun_check_jiji == '巳') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td2_daeun_check_jiji == '午') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td2_daeun_check_jiji == '未') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td2_daeun_check_jiji == '申') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td2_daeun_check_jiji == '酉') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td2_daeun_check_jiji == '戌') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td2_daeun_check_jiji == '亥') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td2_daeun_check_jiji == '子') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td2_daeun_check_jiji == '丑') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}

$temp_search_jiji = $my_day_h.$td2_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];


echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							 
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
							
							</td>
						</tr>						
";
}



if ($td1_daeun <> $td2_daeun) {$cspan1 = '1';$cspan2 = '9';$daeundisp1 = $td1_daeun;$daeundisp2 = $td2_daeun;

//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];


$td2_daeun_check = substr($daeundisp2,0,2);

if ($td2_daeun_check == '甲') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td2_daeun_check == '乙') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td2_daeun_check == '丙') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td2_daeun_check == '丁') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td2_daeun_check == '戊') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td2_daeun_check == '己') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td2_daeun_check == '庚') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td2_daeun_check == '辛') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td2_daeun_check == '壬') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td2_daeun_check == '癸') {$td2_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}

$temp_search = $my_day_h.$td2_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];

//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}

$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];




$td2_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td2_daeun_check_jiji == '寅') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td2_daeun_check_jiji == '卯') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td2_daeun_check_jiji == '辰') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td2_daeun_check_jiji == '巳') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td2_daeun_check_jiji == '午') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td2_daeun_check_jiji == '未') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td2_daeun_check_jiji == '申') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td2_daeun_check_jiji == '酉') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td2_daeun_check_jiji == '戌') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td2_daeun_check_jiji == '亥') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td2_daeun_check_jiji == '子') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td2_daeun_check_jiji == '丑') {$td2_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td2_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];


echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
							</td>
							<td colspan=$cspan2 bgcolor=dff7df>
							  $td2_dae_sipsin<br>
							  $td2_daeun_check_disp<br>
							  $td2_daeun_check_jiji_disp<br>
							  $td2_dae_sipsin_jiji
							</td>
						</tr>						
";
}
####################################################################################################

if ($td2_daeun <> $td3_daeun) {$cspan1 = '2';$cspan2 = '8';$daeundisp1 = $td2_daeun;$daeundisp2 = $td3_daeun;

//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];

$td3_daeun_check = substr($daeundisp2,0,2);

if ($td3_daeun_check == '甲') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td3_daeun_check == '乙') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td3_daeun_check == '丙') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td3_daeun_check == '丁') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td3_daeun_check == '戊') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td3_daeun_check == '己') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td3_daeun_check == '庚') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td3_daeun_check == '辛') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td3_daeun_check == '壬') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td3_daeun_check == '癸') {$td3_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td3_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];

//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}

$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];



$td3_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td3_daeun_check_jiji == '寅') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td3_daeun_check_jiji == '卯') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td3_daeun_check_jiji == '辰') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td3_daeun_check_jiji == '巳') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td3_daeun_check_jiji == '午') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td3_daeun_check_jiji == '未') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td3_daeun_check_jiji == '申') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td3_daeun_check_jiji == '酉') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td3_daeun_check_jiji == '戌') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td3_daeun_check_jiji == '亥') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td3_daeun_check_jiji == '子') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td3_daeun_check_jiji == '丑') {$td3_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td3_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];


echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
                                                       </td>
							<td colspan=$cspan2 bgcolor=dff7df>
							  $td3_dae_sipsin<br>
							  $td3_daeun_check_disp<br>
							  $td3_daeun_check_jiji_disp<br>
							  $td3_dae_sipsin_jiji

							</td>
						</tr>						
";
}

######################################################################################################


if ($td3_daeun <> $td4_daeun) {$cspan1 = '3';$cspan2 = '7';$daeundisp1 = $td3_daeun;$daeundisp2 = $td4_daeun;

//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];

$td4_daeun_check = substr($daeundisp2,0,2);

if ($td4_daeun_check == '甲') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td4_daeun_check == '乙') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td4_daeun_check == '丙') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td4_daeun_check == '丁') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td4_daeun_check == '戊') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td4_daeun_check == '己') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td4_daeun_check == '庚') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td4_daeun_check == '辛') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td4_daeun_check == '壬') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td4_daeun_check == '癸') {$td4_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td4_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i; }
         		}


$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];

//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];






$td4_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td4_daeun_check_jiji == '寅') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td4_daeun_check_jiji == '卯') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td4_daeun_check_jiji == '辰') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td4_daeun_check_jiji == '巳') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td4_daeun_check_jiji == '午') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td4_daeun_check_jiji == '未') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td4_daeun_check_jiji == '申') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td4_daeun_check_jiji == '酉') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td4_daeun_check_jiji == '戌') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td4_daeun_check_jiji == '亥') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td4_daeun_check_jiji == '子') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td4_daeun_check_jiji == '丑') {$td4_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td4_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];

####################################################################################################


echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
							  
							</td>
							<td colspan=$cspan2 bgcolor=dff7df>
							  $td4_dae_sipsin<br>
							  $td4_daeun_check_disp<br>
							  $td4_daeun_check_jiji_disp<br>
							  $td4_dae_sipsin_jiji

							</td>
						</tr>						
";
}

####################################################################################################

if ($td4_daeun <> $td5_daeun) {$cspan1 = '4';$cspan2 = '6';$daeundisp1 = $td4_daeun;$daeundisp2 = $td5_daeun;

//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];

$td5_daeun_check = substr($daeundisp2,0,2);

if ($td5_daeun_check == '甲') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td5_daeun_check == '乙') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td5_daeun_check == '丙') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td5_daeun_check == '丁') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td5_daeun_check == '戊') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td5_daeun_check == '己') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td5_daeun_check == '庚') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td5_daeun_check == '辛') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td5_daeun_check == '壬') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td5_daeun_check == '癸') {$td5_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}

$temp_search = $my_day_h.$td5_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];

//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];





$td5_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td5_daeun_check_jiji == '寅') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td5_daeun_check_jiji == '卯') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td5_daeun_check_jiji == '辰') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td5_daeun_check_jiji == '巳') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td5_daeun_check_jiji == '午') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td5_daeun_check_jiji == '未') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td5_daeun_check_jiji == '申') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td5_daeun_check_jiji == '酉') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td5_daeun_check_jiji == '戌') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td5_daeun_check_jiji == '亥') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td5_daeun_check_jiji == '子') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td5_daeun_check_jiji == '丑') {$td5_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td5_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];

echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
							</td>
							<td colspan=$cspan2 bgcolor=dff7df>
							  $td5_dae_sipsin<br>
							  $td5_daeun_check_disp<br>
							  $td5_daeun_check_jiji_disp<br>
							  $td5_dae_sipsin_jiji

							</td>
						</tr>						
";
}
#########################################################################################

if ($td5_daeun <> $td6_daeun) {$cspan1 = '5';$cspan2 = '5';$daeundisp1 = $td5_daeun;$daeundisp2 = $td6_daeun;

//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];

$td6_daeun_check = substr($daeundisp2,0,2);

if ($td6_daeun_check == '甲') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td6_daeun_check == '乙') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td6_daeun_check == '丙') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td6_daeun_check == '丁') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td6_daeun_check == '戊') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td6_daeun_check == '己') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td6_daeun_check == '庚') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td6_daeun_check == '辛') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td6_daeun_check == '壬') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td6_daeun_check == '癸') {$td6_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}

$temp_search = $my_day_h.$td6_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}


$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];

//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];




$td6_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td6_daeun_check_jiji == '寅') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td6_daeun_check_jiji == '卯') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td6_daeun_check_jiji == '辰') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td6_daeun_check_jiji == '巳') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td6_daeun_check_jiji == '午') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td6_daeun_check_jiji == '未') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td6_daeun_check_jiji == '申') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td6_daeun_check_jiji == '酉') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td6_daeun_check_jiji == '戌') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td6_daeun_check_jiji == '亥') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td6_daeun_check_jiji == '子') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td6_daeun_check_jiji == '丑') {$td6_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td6_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];



echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
							  
							</td>
							<td colspan=$cspan2 bgcolor=dff7df>
							  $td6_dae_sipsin<br>
							  $td6_daeun_check_disp<br>
							  $td6_daeun_check_jiji_disp<br>
							  $td6_dae_sipsin_jiji

							  							
							</td>
						</tr>						
";
}

#################################################################################################

if ($td6_daeun <> $td7_daeun) {$cspan1 = '6';$cspan2 = '4';$daeundisp1 = $td6_daeun;$daeundisp2 = $td7_daeun;

//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];



$td7_daeun_check = substr($daeundisp2,0,2);

if ($td7_daeun_check == '甲') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td7_daeun_check == '乙') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td7_daeun_check == '丙') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td7_daeun_check == '丁') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td7_daeun_check == '戊') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td7_daeun_check == '己') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td7_daeun_check == '庚') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td7_daeun_check == '辛') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td7_daeun_check == '壬') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td7_daeun_check == '癸') {$td7_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}

$temp_search = $my_day_h.$td7_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}


$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];

//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];



$td7_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td7_daeun_check_jiji == '寅') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td7_daeun_check_jiji == '卯') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td7_daeun_check_jiji == '辰') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td7_daeun_check_jiji == '巳') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td7_daeun_check_jiji == '午') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td7_daeun_check_jiji == '未') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td7_daeun_check_jiji == '申') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td7_daeun_check_jiji == '酉') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td7_daeun_check_jiji == '戌') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td7_daeun_check_jiji == '亥') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td7_daeun_check_jiji == '子') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td7_daeun_check_jiji == '丑') {$td7_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td7_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];


echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
							  
							</td>
							<td colspan=$cspan2 bgcolor=dff7df>
							  $td7_dae_sipsin<br>
							  $td7_daeun_check_disp<br>
							  $td7_daeun_check_jiji_disp<br>
							  $td7_dae_sipsin_jiji

							  							
							</td>
						</tr>						
";
}
####################################################################################################

if ($td7_daeun <> $td8_daeun) {$cspan1 = '7';$cspan2 = '3';$daeundisp1 = $td7_daeun;$daeundisp2 = $td8_daeun;

//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}



$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];


$td8_daeun_check = substr($daeundisp2,0,2);

if ($td8_daeun_check == '甲') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td8_daeun_check == '乙') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td8_daeun_check == '丙') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td8_daeun_check == '丁') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td8_daeun_check == '戊') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td8_daeun_check == '己') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td8_daeun_check == '庚') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td8_daeun_check == '辛') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td8_daeun_check == '壬') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td8_daeun_check == '癸') {$td8_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}

$temp_search = $my_day_h.$td8_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}


$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];

//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];


$td8_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td8_daeun_check_jiji == '寅') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td8_daeun_check_jiji == '卯') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td8_daeun_check_jiji == '辰') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td8_daeun_check_jiji == '巳') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td8_daeun_check_jiji == '午') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td8_daeun_check_jiji == '未') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td8_daeun_check_jiji == '申') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td8_daeun_check_jiji == '酉') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td8_daeun_check_jiji == '戌') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td8_daeun_check_jiji == '亥') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td8_daeun_check_jiji == '子') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td8_daeun_check_jiji == '丑') {$td8_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td8_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}


$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];



echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
							</td>
							<td colspan=$cspan2 bgcolor=dff7df>
							  $td8_dae_sipsin<br>
							  $td8_daeun_check_disp<br>
							  $td8_daeun_check_jiji_disp<br>
							  $td8_dae_sipsin_jiji

							  							
							</td>
						</tr>						
";
}

#####################################################################################################

if ($td8_daeun <> $td9_daeun) {$cspan1 = '8';$cspan2 = '2';$daeundisp1 = $td8_daeun;$daeundisp2 = $td9_daeun;

//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];

$td9_daeun_check = substr($daeundisp2,0,2);

if ($td9_daeun_check == '甲') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td9_daeun_check == '乙') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td9_daeun_check == '丙') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td9_daeun_check == '丁') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td9_daeun_check == '戊') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td9_daeun_check == '己') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td9_daeun_check == '庚') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td9_daeun_check == '辛') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td9_daeun_check == '壬') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td9_daeun_check == '癸') {$td9_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}

$temp_search = $my_day_h.$td9_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}


$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];


//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];

$td9_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td9_daeun_check_jiji == '寅') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td9_daeun_check_jiji == '卯') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td9_daeun_check_jiji == '辰') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td9_daeun_check_jiji == '巳') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td9_daeun_check_jiji == '午') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td9_daeun_check_jiji == '未') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td9_daeun_check_jiji == '申') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td9_daeun_check_jiji == '酉') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td9_daeun_check_jiji == '戌') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td9_daeun_check_jiji == '亥') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td9_daeun_check_jiji == '子') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td9_daeun_check_jiji == '丑') {$td9_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td9_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}



$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];




echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
							  
							</td>
							<td colspan=$cspan2 bgcolor=dff7df>
							  $td9_dae_sipsin<br>
							  $td9_daeun_check_disp<br>
							  $td9_daeun_check_jiji_disp<br>
							  $td9_dae_sipsin_jiji

							  							
							</td>
						</tr>						
";
}

########################################################################################################

if ($td9_daeun <> $td10_daeun) {$cspan1 = '9';$cspan2 = '1';$daeundisp1 = $td9_daeun;$daeundisp2 = $td10_daeun;

//대운천간십신
$td1_daeun_check = substr($daeundisp1,0,2);

if ($td1_daeun_check == '甲') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td1_daeun_check == '乙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td1_daeun_check == '丙') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td1_daeun_check == '丁') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td1_daeun_check == '戊') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td1_daeun_check == '己') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td1_daeun_check == '庚') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td1_daeun_check == '辛') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td1_daeun_check == '壬') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td1_daeun_check == '癸') {$td1_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}


$temp_search = $my_day_h.$td1_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}

$td1_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td2_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td3_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td4_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td5_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td6_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td7_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td8_dae_sipsin = $ilgan_chengan_sipsin[$k];
$td9_dae_sipsin = $ilgan_chengan_sipsin[$k];

$td10_daeun_check = substr($daeundisp2,0,2);

if ($td10_daeun_check == '甲') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_01.gif>';}
if ($td10_daeun_check == '乙') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_02.gif>';}
if ($td10_daeun_check == '丙') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_03.gif>';}
if ($td10_daeun_check == '丁') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_04.gif>';}
if ($td10_daeun_check == '戊') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_05.gif>';}
if ($td10_daeun_check == '己') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_06.gif>';}
if ($td10_daeun_check == '庚') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_07.gif>';}
if ($td10_daeun_check == '辛') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_08.gif>';}
if ($td10_daeun_check == '壬') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_09.gif>';}
if ($td10_daeun_check == '癸') {$td10_daeun_check_disp = '<img src=/images/jijangan_img/gan_10.gif>';}

$temp_search = $my_day_h.$td10_daeun_check;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_chengan[$i] == $temp_search)
			     {$k = $i;}
         		}


$td10_dae_sipsin = $ilgan_chengan_sipsin[$k];

//대운지지십신
$td1_daeun_check_jiji = substr($daeundisp1,2,2);

if ($td1_daeun_check_jiji == '寅') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td1_daeun_check_jiji == '卯') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td1_daeun_check_jiji == '辰') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td1_daeun_check_jiji == '巳') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td1_daeun_check_jiji == '午') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td1_daeun_check_jiji == '未') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td1_daeun_check_jiji == '申') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td1_daeun_check_jiji == '酉') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td1_daeun_check_jiji == '戌') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td1_daeun_check_jiji == '亥') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td1_daeun_check_jiji == '子') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td1_daeun_check_jiji == '丑') {$td1_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td1_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}

$td1_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td2_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td3_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td4_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td5_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td6_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td7_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td8_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];
$td9_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];

$td10_daeun_check_jiji = substr($daeundisp2,2,2);

if ($td10_daeun_check_jiji == '寅') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_01.gif>';}
if ($td10_daeun_check_jiji == '卯') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_02.gif>';}
if ($td10_daeun_check_jiji == '辰') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_03.gif>';}
if ($td10_daeun_check_jiji == '巳') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_04.gif>';}
if ($td10_daeun_check_jiji == '午') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_05.gif>';}
if ($td10_daeun_check_jiji == '未') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_06.gif>';}
if ($td10_daeun_check_jiji == '申') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_07.gif>';}
if ($td10_daeun_check_jiji == '酉') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_08.gif>';}
if ($td10_daeun_check_jiji == '戌') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_09.gif>';}
if ($td10_daeun_check_jiji == '亥') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_10.gif>';}
if ($td10_daeun_check_jiji == '子') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_11.gif>';}
if ($td10_daeun_check_jiji == '丑') {$td10_daeun_check_jiji_disp = '<img src=/images/jijangan_img/ji_12.gif>';}


$temp_search_jiji = $my_day_h.$td10_daeun_check_jiji;
		
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_search_jiji)
			     {$k = $i;}
         		}



$td10_dae_sipsin_jiji = $ilgan_jiji_sipsin[$k];



echo "

<table width=512 border=0 cellspacing=1 cellpadding=4 bgcolor=CCCCCC align='center'>

						<tr align='center'> 
							<td bgcolor=f8f8f8>대운</td>
	                                                <td colspan=$cspan1 bgcolor=d8ebf5>
							  $td1_dae_sipsin<br>
							  $td1_daeun_check_disp<br>
							  $td1_daeun_check_jiji_disp<br>
							  $td1_dae_sipsin_jiji
							  
							</td>
							<td colspan=$cspan2 bgcolor=dff7df>
							  $td10_dae_sipsin<br>
							  $td10_daeun_check_disp<br>
							  $td10_daeun_check_jiji_disp<br>
							  $td10_dae_sipsin_jiji

							  							
							</td>
						</tr>						
";
}


####################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################


//echo "$td1_daeun /$td2_daeun /$td3_daeun /$td4_daeun /$td5_daeun /$td6_daeun /$td7_daeun /$td8_daeun /$td9_daeun /$td10_daeun /";




echo "







						<tr align='center' bgcolor=f8f8f8> 
							<td>나이</td>
							<td>$td1_my_age</td>
							<td>$td2_my_age</td>
							<td bgcolor=FFDDEE>$td3_my_age</td>
							<td>$td4_my_age</td>
							<td>$td5_my_age</td>
							<td>$td6_my_age</td>
							<td>$td7_my_age</td>
							<td>$td8_my_age</td>
							<td>$td9_my_age</td>
							<td>$td10_my_age</td>
						</tr>						


<tr bgcolor=f8f8f8 align='center'> 
<td bgcolor=f8f8f8>연도</td>
<td>$td_y1</td>
<td>$td_y2</td>
<td bgcolor=FFDDEE>$td_y3</td>
<td>$td_y4</td>
<td>$td_y5</td>
<td>$td_y6</td>
<td>$td_y7</td>
<td>$td_y8</td>
<td>$td_y9</td>
<td>$td_y10</td>
					
						
						
						
						
						
						</tr>

						<tr align='center' bgcolor=e8e8e8> 
							<td>십성</td>
							<td>$td_sipsin_h[1]</td>
							<td>$td_sipsin_h[2]</td>
							<td bgcolor=FFDDEE>$td_sipsin_h[3]</td>
							<td>$td_sipsin_h[4]</td>
							<td>$td_sipsin_h[5]</td>
							<td>$td_sipsin_h[6]</td>
							<td>$td_sipsin_h[7]</td>
							<td>$td_sipsin_h[8]</td>
							<td>$td_sipsin_h[9]</td>
							<td>$td_sipsin_h[10]</td>
						</tr>						
						
						
						<tr align='center' bgcolor=e8e8e8> 
							<td>천간</td>
							<td>$td_umyear_h[1]</td>
							<td>$td_umyear_h[2]</td>
							<td bgcolor=FFDDEE>$td_umyear_h[3]</td>
							<td>$td_umyear_h[4]</td>
							<td>$td_umyear_h[5]</td>
							<td>$td_umyear_h[6]</td>
							<td>$td_umyear_h[7]</td>
							<td>$td_umyear_h[8]</td>
							<td>$td_umyear_h[9]</td>
							<td>$td_umyear_h[10]</td>
						</tr>


						<tr align='center' bgcolor=e8e8e8> 
							<td>지지</td>
							<td>$td_umyear_e[1]</td>
							<td>$td_umyear_e[2]</td>
							<td bgcolor=FFDDEE>$td_umyear_e[3]</td>
							<td>$td_umyear_e[4]</td>
							<td>$td_umyear_e[5]</td>
							<td>$td_umyear_e[6]</td>
							<td>$td_umyear_e[7]</td>
							<td>$td_umyear_e[8]</td>
							<td>$td_umyear_e[9]</td>
							<td>$td_umyear_e[10]</td>
						</tr>

						<tr align='center' bgcolor=e8e8e8> 
							<td>십성</td>
							<td>$td_sipsin_e[1]</td>
							<td>$td_sipsin_e[2]</td>
							<td bgcolor=FFDDEE>$td_sipsin_e[3]</td>
							<td>$td_sipsin_e[4]</td>
							<td>$td_sipsin_e[5]</td>
							<td>$td_sipsin_e[6]</td>
							<td>$td_sipsin_e[7]</td>
							<td>$td_sipsin_e[8]</td>
							<td>$td_sipsin_e[9]</td>
							<td>$td_sipsin_e[10]</td>
						</tr>

						<tr align='center' bgcolor=f8f8f8> 
							<td>
							   십이운성
							  							
							
							</td>
							<td>$td_unsung1</td>
							<td>$td_unsung2</td>
							<td bgcolor=FFDDEE>$td_unsung3</td>
							<td>$td_unsung4</td>
							<td>$td_unsung5</td>
							<td>$td_unsung6</td>
							<td>$td_unsung7</td>
							<td>$td_unsung8</td>
							<td>$td_unsung9</td>
							<td>$td_unsung10</td>
						</tr>


						<tr align='center' bgcolor=f8f8f8>
						 
							<td>신살</td>
							<td>$td1_sal</td>
							<td>$td2_sal</td>
							<td bgcolor=FFDDEE>$td3_sal</td>
							<td>$td4_sal</td>
							<td>$td5_sal</td>
							<td>$td6_sal</td>
							<td>$td7_sal</td>
							<td>$td8_sal</td>
							<td>$td9_sal</td>
							<td>$td10_sal</td>
						</tr>

						</table>

<br>


";
?>