<?
$current_ymd = date("Ymd");
$current_y = date("Y");

//$current_y = $current_y-1;


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

$sql = "SELECT * FROM mansedata WHERE no = '".$current_ymd."'";
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


//echo "$umyear_h$umyear_e";

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
'정재','편재','정관','편관','정인','편인','겁재','비견','정인','식신',
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
'편인','정재','비견','겁재','편재','상관','식신','정재','편관','정관','편재','정인',
'정인','편재','겁재','비견','정재','식신','상관','편재','정관','편관','정재','편인',
'편관','상관','편인','정인','식신','겁재','비견','상관','편재','정재','식신','정관',
'정관','식신','정인','편인','상관','비견','겁재','식신','정재','편재','상관','편관',
'편재','겁재','편관','정관','비견','정인','편인','겁재','식신','상관','비견','정재',
'정재','비견','정관','편관','겁재','편인','정인','비견','상관','식신','겁재','편재',
'식신','정인','편재','정재','편인','정관','편관','정인','비견','겁재','편인','편관',
'상관','편인','정재','편재','정인','편관','정관','편인','겁재','비견','정인','식신',
'비견','정관','식신','상관','편관','정재','편재','정관','편인','정인','편관','겁재',
'겁재','편관','상관','식신','정관','편재','정재','편관','정인','편인','정관','비견'
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
switch ($my_month_e) {

  case ("子") : 
*/

if($my_month_e=="子"){
   
if ($td1_umyear_e == '巳') {$td1_cduck = "천귀";}
if ($td2_umyear_e == '巳') {$td2_cduck = "천귀";}
if ($td3_umyear_e == '巳') {$td3_cduck = "천귀";}
if ($td4_umyear_e == '巳') {$td4_cduck = "천귀";}
if ($td5_umyear_e == '巳') {$td5_cduck = "천귀";}
if ($td6_umyear_e == '巳') {$td6_cduck = "천귀";}
if ($td7_umyear_e == '巳') {$td7_cduck = "천귀";}
if ($td8_umyear_e == '巳') {$td8_cduck = "천귀";}
if ($td9_umyear_e == '巳') {$td9_cduck = "천귀";}
if ($td10_umyear_e == '巳') {$td10_cduck = "천귀";}

if ($td1_umyear_e == '申') {$td1_chap = "천합";}
if ($td2_umyear_e == '申') {$td2_chap = "천합";}
if ($td3_umyear_e == '申') {$td3_chap = "천합";}
if ($td4_umyear_e == '申') {$td4_chap = "천합";}
if ($td5_umyear_e == '申') {$td5_chap = "천합";}
if ($td6_umyear_e == '申') {$td6_chap = "천합";}
if ($td7_umyear_e == '申') {$td7_chap = "천합";}
if ($td8_umyear_e == '申') {$td8_chap = "천합";}
if ($td9_umyear_e == '申') {$td9_chap = "천합";}
if ($td10_umyear_e == '申') {$td10_chap = "천합";}
}


if($my_month_e=="丑"){

	if ($td1_umyear_h == '乙') {$td1_chap = "천합";}
	if ($td2_umyear_h == '乙') {$td2_chap = "천합";}
	if ($td3_umyear_h == '乙') {$td3_chap = "천합";}
	if ($td4_umyear_h == '乙') {$td4_chap = "천합";}
	if ($td5_umyear_h == '乙') {$td5_chap = "천합";}
	if ($td6_umyear_h == '乙') {$td6_chap = "천합";}
	if ($td7_umyear_h == '乙') {$td7_chap = "천합";}
	if ($td8_umyear_h == '乙') {$td8_chap = "천합";}
	if ($td9_umyear_h == '乙') {$td9_chap = "천합";}
	if ($td10_umyear_h == '乙') {$td10_chap = "천합";}

	if ($td1_umyear_h == '庚') {$td1_cduck = "천귀";}
	if ($td2_umyear_h == '庚') {$td2_cduck = "천귀";}
	if ($td3_umyear_h == '庚') {$td3_cduck = "천귀";}
	if ($td4_umyear_h == '庚') {$td4_cduck = "천귀";}
	if ($td5_umyear_h == '庚') {$td5_cduck = "천귀";}
	if ($td6_umyear_h == '庚') {$td6_cduck = "천귀";}
	if ($td7_umyear_h == '庚') {$td7_cduck = "천귀";}
	if ($td8_umyear_h == '庚') {$td8_cduck = "천귀";}
	if ($td9_umyear_h == '庚') {$td9_cduck = "천귀";}
	if ($td10_umyear_h == '庚') {$td10_cduck = "천귀";}

}

if($my_month_e=="寅"){
	if ($td1_umyear_h == '丁') {$td1_cduck = "천귀";}
	if ($td2_umyear_h == '丁') {$td2_cduck = "천귀";}
	if ($td3_umyear_h == '丁') {$td3_cduck = "천귀";}
	if ($td4_umyear_h == '丁') {$td4_cduck = "천귀";}
	if ($td5_umyear_h == '丁') {$td5_cduck = "천귀";}
	if ($td6_umyear_h == '丁') {$td6_cduck = "천귀";}
	if ($td7_umyear_h == '丁') {$td7_cduck = "천귀";}
	if ($td8_umyear_h == '丁') {$td8_cduck = "천귀";}
	if ($td9_umyear_h == '丁') {$td9_cduck = "천귀";}
	if ($td10_umyear_h == '丁') {$td10_cduck = "천귀";}

	if ($td1_umyear_h == '壬') {$td1_chap = "천합";}
	if ($td2_umyear_h == '壬') {$td2_chap = "천합";}
	if ($td3_umyear_h == '壬') {$td3_chap = "천합";}
	if ($td4_umyear_h == '壬') {$td4_chap = "천합";}
	if ($td5_umyear_h == '壬') {$td5_chap = "천합";}
	if ($td6_umyear_h == '壬') {$td6_chap = "천합";}
	if ($td7_umyear_h == '壬') {$td7_chap = "천합";}
	if ($td8_umyear_h == '壬') {$td8_chap = "천합";}
	if ($td9_umyear_h == '壬') {$td9_chap = "천합";}
	if ($td10_umyear_h == '壬') {$td10_chap = "천합";}
}

if($my_month_e=="卯"){
	if ($td1_umyear_e == '巳') {$td1_chap = "천합";}
	if ($td2_umyear_e == '巳') {$td2_chap = "천합";}
	if ($td3_umyear_e == '巳') {$td3_chap = "천합";}
	if ($td4_umyear_e == '巳') {$td4_chap = "천합";}
	if ($td5_umyear_e == '巳') {$td5_chap = "천합";}
	if ($td6_umyear_e == '巳') {$td6_chap = "천합";}
	if ($td7_umyear_e == '巳') {$td7_chap = "천합";}
	if ($td8_umyear_e == '巳') {$td8_chap = "천합";}
	if ($td9_umyear_e == '巳') {$td9_chap = "천합";}
	if ($td10_umyear_e == '巳') {$td10_chap = "천합";}

	if ($td1_umyear_e == '申') {$td1_cduck = "천귀";}
	if ($td2_umyear_e == '申') {$td2_cduck = "천귀";}
	if ($td3_umyear_e == '申') {$td3_cduck = "천귀";}
	if ($td4_umyear_e == '申') {$td4_cduck = "천귀";}
	if ($td5_umyear_e == '申') {$td5_cduck = "천귀";}
	if ($td6_umyear_e == '申') {$td6_cduck = "천귀";}
	if ($td7_umyear_e == '申') {$td7_cduck = "천귀";}
	if ($td8_umyear_e == '申') {$td8_cduck = "천귀";}
	if ($td9_umyear_e == '申') {$td9_cduck = "천귀";}
	if ($td10_umyear_e == '申') {$td10_cduck = "천귀";}
}


if($my_month_e=="辰"){   
	if ($td1_umyear_h == '丁') {$td1_chap = "천합";}
	if ($td2_umyear_h == '丁') {$td2_chap = "천합";}
	if ($td3_umyear_h == '丁') {$td3_chap = "천합";}
	if ($td4_umyear_h == '丁') {$td4_chap = "천합";}
	if ($td5_umyear_h == '丁') {$td5_chap = "천합";}
	if ($td6_umyear_h == '丁') {$td6_chap = "천합";}
	if ($td7_umyear_h == '丁') {$td7_chap = "천합";}
	if ($td8_umyear_h == '丁') {$td8_chap = "천합";}
	if ($td9_umyear_h == '丁') {$td9_chap = "천합";}
	if ($td10_umyear_h == '丁') {$td10_chap = "천합";}

	if ($td1_umyear_h == '壬') {$td1_cduck = "천귀";}
	if ($td2_umyear_h == '壬') {$td2_cduck = "천귀";}
	if ($td3_umyear_h == '壬') {$td3_cduck = "천귀";}
	if ($td4_umyear_h == '壬') {$td4_cduck = "천귀";}
	if ($td5_umyear_h == '壬') {$td5_cduck = "천귀";}
	if ($td6_umyear_h == '壬') {$td6_cduck = "천귀";}
	if ($td7_umyear_h == '壬') {$td7_cduck = "천귀";}
	if ($td8_umyear_h == '壬') {$td8_cduck = "천귀";}
	if ($td9_umyear_h == '壬') {$td9_cduck = "천귀";}
	if ($td10_umyear_h == '壬') {$td10_cduck = "천귀";}
}

if($my_month_e=="巳"){  
	if ($td1_umyear_h == '丙') {$td1_chap = "천합";}
	if ($td2_umyear_h == '丙') {$td2_chap = "천합";}
	if ($td3_umyear_h == '丙') {$td3_chap = "천합";}
	if ($td4_umyear_h == '丙') {$td4_chap = "천합";}
	if ($td5_umyear_h == '丙') {$td5_chap = "천합";}
	if ($td6_umyear_h == '丙') {$td6_chap = "천합";}
	if ($td7_umyear_h == '丙') {$td7_chap = "천합";}
	if ($td8_umyear_h == '丙') {$td8_chap = "천합";}
	if ($td9_umyear_h == '丙') {$td9_chap = "천합";}
	if ($td10_umyear_h == '丙') {$td10_chap = "천합";}

	if ($td1_umyear_h == '辛') {$td1_cduck = "천귀";}
	if ($td2_umyear_h == '辛') {$td2_cduck = "천귀";}
	if ($td3_umyear_h == '辛') {$td3_cduck = "천귀";}
	if ($td4_umyear_h == '辛') {$td4_cduck = "천귀";}
	if ($td5_umyear_h == '辛') {$td5_cduck = "천귀";}
	if ($td6_umyear_h == '辛') {$td6_cduck = "천귀";}
	if ($td7_umyear_h == '辛') {$td7_cduck = "천귀";}
	if ($td8_umyear_h == '辛') {$td8_cduck = "천귀";}
	if ($td9_umyear_h == '辛') {$td9_cduck = "천귀";}
	if ($td10_umyear_h == '辛') {$td10_cduck = "천귀";}
}
  

if($my_month_e=="午"){     
	if ($td1_umyear_e == '寅') {$td1_chap = "천합";}
	if ($td2_umyear_e == '寅') {$td2_chap = "천합";}
	if ($td3_umyear_e == '寅') {$td3_chap = "천합";}
	if ($td4_umyear_e == '寅') {$td4_chap = "천합";}
	if ($td5_umyear_e == '寅') {$td5_chap = "천합";}
	if ($td6_umyear_e == '寅') {$td6_chap = "천합";}
	if ($td7_umyear_e == '寅') {$td7_chap = "천합";}
	if ($td8_umyear_e == '寅') {$td8_chap = "천합";}
	if ($td9_umyear_e == '寅') {$td9_chap = "천합";}
	if ($td10_umyear_e == '寅') {$td10_chap = "천합";}

	if ($td1_umyear_e == '亥') {$td1_cduck = "천귀";}  
	if ($td2_umyear_e == '亥') {$td2_cduck = "천귀";}  
	if ($td3_umyear_e == '亥') {$td3_cduck = "천귀";}  
	if ($td4_umyear_e == '亥') {$td4_cduck = "천귀";}  
	if ($td5_umyear_e == '亥') {$td5_cduck = "천귀";}  
	if ($td6_umyear_e == '亥') {$td6_cduck = "천귀";}  
	if ($td7_umyear_e == '亥') {$td7_cduck = "천귀";}  
	if ($td8_umyear_e == '亥') {$td8_cduck = "천귀";}  
	if ($td9_umyear_e == '亥') {$td9_cduck = "천귀";}  
	if ($td10_umyear_e == '亥') {$td10_cduck = "천귀";}  
}

if($my_month_e=="未"){ 
	if ($td1_umyear_h == '甲') {$td1_cduck = "천귀";}
	if ($td2_umyear_h == '甲') {$td2_cduck = "천귀";}
	if ($td3_umyear_h == '甲') {$td3_cduck = "천귀";}
	if ($td4_umyear_h == '甲') {$td4_cduck = "천귀";}
	if ($td5_umyear_h == '甲') {$td5_cduck = "천귀";}
	if ($td6_umyear_h == '甲') {$td6_cduck = "천귀";}
	if ($td7_umyear_h == '甲') {$td7_cduck = "천귀";}
	if ($td8_umyear_h == '甲') {$td8_cduck = "천귀";}
	if ($td9_umyear_h == '甲') {$td9_cduck = "천귀";}
	if ($td10_umyear_h == '甲') {$td10_cduck = "천귀";}

	if ($td1_umyear_h == '己') {$td1_chap = "천합";}
	if ($td2_umyear_h == '己') {$td2_chap = "천합";}
	if ($td3_umyear_h == '己') {$td3_chap = "천합";}
	if ($td4_umyear_h == '己') {$td4_chap = "천합";}
	if ($td5_umyear_h == '己') {$td5_chap = "천합";}
	if ($td6_umyear_h == '己') {$td6_chap = "천합";}
	if ($td7_umyear_h == '己') {$td7_chap = "천합";}
	if ($td8_umyear_h == '己') {$td8_chap = "천합";}
	if ($td9_umyear_h == '己') {$td9_chap = "천합";}
	if ($td10_umyear_h == '己') {$td10_chap = "천합";}
}

if($my_month_e=="申"){    
	if ($td1_umyear_h == '戊') {$td1_chap = "천합";}
	if ($td2_umyear_h == '戊') {$td2_chap = "천합";}
	if ($td3_umyear_h == '戊') {$td3_chap = "천합";}
	if ($td4_umyear_h == '戊') {$td4_chap = "천합";}
	if ($td5_umyear_h == '戊') {$td5_chap = "천합";}
	if ($td6_umyear_h == '戊') {$td6_chap = "천합";}
	if ($td7_umyear_h == '戊') {$td7_chap = "천합";}
	if ($td8_umyear_h == '戊') {$td8_chap = "천합";}
	if ($td9_umyear_h == '戊') {$td9_chap = "천합";}
	if ($td10_umyear_h == '戊') {$td10_chap = "천합";}

	if ($td1_umyear_h == '癸') {$td1_cduck = "천귀";}  
	if ($td2_umyear_h == '癸') {$td2_cduck = "천귀";}  
	if ($td3_umyear_h == '癸') {$td3_cduck = "천귀";}  
	if ($td4_umyear_h == '癸') {$td4_cduck = "천귀";}  
	if ($td5_umyear_h == '癸') {$td5_cduck = "천귀";}  
	if ($td6_umyear_h == '癸') {$td6_cduck = "천귀";}  
	if ($td7_umyear_h == '癸') {$td7_cduck = "천귀";}  
	if ($td8_umyear_h == '癸') {$td8_cduck = "천귀";}  
	if ($td9_umyear_h == '癸') {$td9_cduck = "천귀";}  
	if ($td10_umyear_h == '癸') {$td10_cduck = "천귀";}  
}

if($my_month_e=="酉"){     
	if ($td1_umyear_e == '寅') {$td1_cduck = "천귀";}
	if ($td2_umyear_e == '寅') {$td2_cduck = "천귀";}
	if ($td3_umyear_e == '寅') {$td3_cduck = "천귀";}
	if ($td4_umyear_e == '寅') {$td4_cduck = "천귀";}
	if ($td5_umyear_e == '寅') {$td5_cduck = "천귀";}
	if ($td6_umyear_e == '寅') {$td6_cduck = "천귀";}
	if ($td7_umyear_e == '寅') {$td7_cduck = "천귀";}
	if ($td8_umyear_e == '寅') {$td8_cduck = "천귀";}
	if ($td9_umyear_e == '寅') {$td9_cduck = "천귀";}
	if ($td10_umyear_e == '寅') {$td10_cduck = "천귀";}

	if ($td1_umyear_e == '亥') {$td1_chap = "천합";}  
	if ($td2_umyear_e == '亥') {$td2_chap = "천합";}  
	if ($td3_umyear_e == '亥') {$td3_chap = "천합";}  
	if ($td4_umyear_e == '亥') {$td4_chap = "천합";}  
	if ($td5_umyear_e == '亥') {$td5_chap = "천합";}  
	if ($td6_umyear_e == '亥') {$td6_chap = "천합";}  
	if ($td7_umyear_e == '亥') {$td7_chap = "천합";}  
	if ($td8_umyear_e == '亥') {$td8_chap = "천합";}  
	if ($td9_umyear_e == '亥') {$td9_chap = "천합";}  
	if ($td10_umyear_e == '亥') {$td10_chap = "천합";}  
}


if($my_month_e=="戌"){  
	if ($td1_umyear_h == '丙') {$td1_cduck = "천귀";}
	if ($td2_umyear_h == '丙') {$td2_cduck = "천귀";}
	if ($td3_umyear_h == '丙') {$td3_cduck = "천귀";}
	if ($td4_umyear_h == '丙') {$td4_cduck = "천귀";}
	if ($td5_umyear_h == '丙') {$td5_cduck = "천귀";}
	if ($td6_umyear_h == '丙') {$td6_cduck = "천귀";}
	if ($td7_umyear_h == '丙') {$td7_cduck = "천귀";}
	if ($td8_umyear_h == '丙') {$td8_cduck = "천귀";}
	if ($td9_umyear_h == '丙') {$td9_cduck = "천귀";}
	if ($td10_umyear_h == '丙') {$td10_cduck = "천귀";}

	if ($td1_umyear_h == '辛') {$td1_chap = "천합";}
	if ($td2_umyear_h == '辛') {$td2_chap = "천합";}
	if ($td3_umyear_h == '辛') {$td3_chap = "천합";}
	if ($td4_umyear_h == '辛') {$td4_chap = "천합";}
	if ($td5_umyear_h == '辛') {$td5_chap = "천합";}
	if ($td6_umyear_h == '辛') {$td6_chap = "천합";}
	if ($td7_umyear_h == '辛') {$td7_chap = "천합";}
	if ($td8_umyear_h == '辛') {$td8_chap = "천합";}
	if ($td9_umyear_h == '辛') {$td9_chap = "천합";}
	if ($td10_umyear_h == '辛') {$td10_chap = "천합";}
}

if($my_month_e=="亥"){  
	if ($td1_umyear_h == '乙') {$td1_cduck = "천귀";}
	if ($td2_umyear_h == '乙') {$td2_cduck = "천귀";}
	if ($td3_umyear_h == '乙') {$td3_cduck = "천귀";}
	if ($td4_umyear_h == '乙') {$td4_cduck = "천귀";}
	if ($td5_umyear_h == '乙') {$td5_cduck = "천귀";}
	if ($td6_umyear_h == '乙') {$td6_cduck = "천귀";}
	if ($td7_umyear_h == '乙') {$td7_cduck = "천귀";}
	if ($td8_umyear_h == '乙') {$td8_cduck = "천귀";}
	if ($td9_umyear_h == '乙') {$td9_cduck = "천귀";}
	if ($td10_umyear_h == '乙') {$td10_cduck = "천귀";}

	if ($td1_umyear_h == '庚') {$td1_chap = "천합";}
	if ($td2_umyear_h == '庚') {$td2_chap = "천합";}
	if ($td3_umyear_h == '庚') {$td3_chap = "천합";}
	if ($td4_umyear_h == '庚') {$td4_chap = "천합";}
	if ($td5_umyear_h == '庚') {$td5_chap = "천합";}
	if ($td6_umyear_h == '庚') {$td6_chap = "천합";}
	if ($td7_umyear_h == '庚') {$td7_chap = "천합";}
	if ($td8_umyear_h == '庚') {$td8_chap = "천합";}
	if ($td9_umyear_h == '庚') {$td9_chap = "천합";}
	if ($td10_umyear_h == '庚') {$td10_chap = "천합";}
}




if($my_day_h=="甲"){
	if ($td1_umyear_e == '卯') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '卯') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '卯') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '卯') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '卯') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '卯') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '卯') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '卯') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '卯') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '卯') {$td10_yangin = "양인";}
}

if($my_day_h=="乙"){
	if ($td1_umyear_e == '辰') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '辰') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '辰') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '辰') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '辰') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '辰') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '辰') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '辰') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '辰') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '辰') {$td10_yangin = "양인";}
}

if($my_day_h=="乙"){
	if ($td1_umyear_e == '午') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '午') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '午') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '午') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '午') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '午') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '午') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '午') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '午') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '午') {$td10_yangin = "양인";}
}

if($my_day_h=="乙"){
	if ($td1_umyear_e == '未') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '未') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '未') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '未') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '未') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '未') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '未') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '未') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '未') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '未') {$td10_yangin = "양인";}
}


if($my_day_h=="戊"){   
	if ($td1_umyear_e == '午') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '午') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '午') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '午') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '午') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '午') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '午') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '午') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '午') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '午') {$td10_yangin = "양인";}
}


if($my_day_h=="己"){   
	if ($td1_umyear_e == '未') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '未') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '未') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '未') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '未') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '未') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '未') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '未') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '未') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '未') {$td10_yangin = "양인";}
}


if($my_day_h=="庚"){    
	if ($td1_umyear_e == '酉') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '酉') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '酉') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '酉') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '酉') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '酉') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '酉') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '酉') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '酉') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '酉') {$td10_yangin = "양인";}
}

if($my_day_h=="辛"){    
	if ($td1_umyear_e == '戌') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '戌') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '戌') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '戌') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '戌') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '戌') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '戌') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '戌') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '戌') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '戌') {$td10_yangin = "양인";}
}

if($my_day_h=="壬"){
	if ($td1_umyear_e == '子') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '子') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '子') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '子') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '子') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '子') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '子') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '子') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '子') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '子') {$td10_yangin = "양인";}
}

if($my_day_h=="癸"){   
	if ($td1_umyear_e == '丑') {$td1_yangin = "양인";}
	if ($td2_umyear_e == '丑') {$td2_yangin = "양인";}
	if ($td3_umyear_e == '丑') {$td3_yangin = "양인";}
	if ($td4_umyear_e == '丑') {$td4_yangin = "양인";}
	if ($td5_umyear_e == '丑') {$td5_yangin = "양인";}
	if ($td6_umyear_e == '丑') {$td6_yangin = "양인";}
	if ($td7_umyear_e == '丑') {$td7_yangin = "양인";}
	if ($td8_umyear_e == '丑') {$td8_yangin = "양인";}
	if ($td9_umyear_e == '丑') {$td9_yangin = "양인";}
	if ($td10_umyear_e == '丑') {$td10_yangin = "양인";}
}

######################################################################
//$my_day_tot = $my_day_h.$my_day_e;
//echo "$my_day_tot";

switch ($my_day_tot) {

  case ("甲子") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("甲戌") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("甲申") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("甲午") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("甲辰") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("甲寅") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;


  case ("乙丑") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("乙亥") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("乙酉") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("乙未") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("乙巳") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("乙卯") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;

  case ("丙寅") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("丙子") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("丙戌") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("丙申") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("丙午") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("丙辰") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;

  case ("丁卯") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("丁丑") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("丁亥") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("丁酉") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("丁未") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("丁巳") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;


  case ("戊辰") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("戊寅") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("戊子") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("戊戌") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("戊申") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("戊午") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;

  case ("己巳") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("己卯") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("己丑") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("己亥") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("己酉") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("己未") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;

  case ("庚午") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("庚辰") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("庚寅") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("庚子") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("庚戌") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("庚申") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;


  case ("辛未") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("辛巳") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("辛卯") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("辛丑") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("辛亥") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("辛酉") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;

  case ("壬申") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("壬午") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("壬辰") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("壬寅") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("壬子") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("壬戌") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;

  case ("癸酉") : 
   
if (($td1_umyear_e == '戌') || ($td1_umyear_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '戌') || ($td2_umyear_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '戌') || ($td3_umyear_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '戌') || ($td4_umyear_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '戌') || ($td5_umyear_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '戌') || ($td6_umyear_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '戌') || ($td7_umyear_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '戌') || ($td8_umyear_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '戌') || ($td9_umyear_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '戌') || ($td10_umyear_e == '亥')) {$td10_gongmang = "공망";}


break;

  case ("癸未") : 
   
if (($td1_umyear_e == '申') || ($td1_umyear_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '申') || ($td2_umyear_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '申') || ($td3_umyear_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '申') || ($td4_umyear_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '申') || ($td5_umyear_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '申') || ($td6_umyear_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '申') || ($td7_umyear_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '申') || ($td8_umyear_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '申') || ($td9_umyear_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '申') || ($td10_umyear_e == '酉')) {$td10_gongmang = "공망";}


break;

  
  case ("癸巳") : 
   
if (($td1_umyear_e == '午') || ($td1_umyear_e == '未')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '午') || ($td2_umyear_e == '未')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '午') || ($td3_umyear_e == '未')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '午') || ($td4_umyear_e == '未')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '午') || ($td5_umyear_e == '未')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '午') || ($td6_umyear_e == '未')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '午') || ($td7_umyear_e == '未')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '午') || ($td8_umyear_e == '未')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '午') || ($td9_umyear_e == '未')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '午') || ($td10_umyear_e == '未')) {$td10_gongmang = "공망";}


break;

  case ("癸卯") : 
   
if (($td1_umyear_e == '辰') || ($td1_umyear_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '辰') || ($td2_umyear_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '辰') || ($td3_umyear_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '辰') || ($td4_umyear_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '辰') || ($td5_umyear_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '辰') || ($td6_umyear_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '辰') || ($td7_umyear_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '辰') || ($td8_umyear_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '辰') || ($td9_umyear_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '辰') || ($td10_umyear_e == '巳')) {$td10_gongmang = "공망";}


break;
  
  case ("癸丑") : 
   
if (($td1_umyear_e == '寅') || ($td1_umyear_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '寅') || ($td2_umyear_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '寅') || ($td3_umyear_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '寅') || ($td4_umyear_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '寅') || ($td5_umyear_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '寅') || ($td6_umyear_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '寅') || ($td7_umyear_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '寅') || ($td8_umyear_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '寅') || ($td9_umyear_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '寅') || ($td10_umyear_e == '卯')) {$td10_gongmang = "공망";}


break;
  
  
  case ("癸亥") : 
   
if (($td1_umyear_e == '子') || ($td1_umyear_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_umyear_e == '子') || ($td2_umyear_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_umyear_e == '子') || ($td3_umyear_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_umyear_e == '子') || ($td4_umyear_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_umyear_e == '子') || ($td5_umyear_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_umyear_e == '子') || ($td6_umyear_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_umyear_e == '子') || ($td7_umyear_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_umyear_e == '子') || ($td8_umyear_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_umyear_e == '子') || ($td9_umyear_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_umyear_e == '子') || ($td10_umyear_e == '丑')) {$td10_gongmang = "공망";}


break;


}

############################
if (!$td1_cduck) {$td1_cduck = '&nbsp;';}
if (!$td2_cduck) {$td2_cduck = '&nbsp;';}
if (!$td3_cduck) {$td3_cduck = '&nbsp;';}
if (!$td4_cduck) {$td4_cduck = '&nbsp;';}
if (!$td5_cduck) {$td5_cduck = '&nbsp;';}
if (!$td6_cduck) {$td6_cduck = '&nbsp;';}
if (!$td7_cduck) {$td7_cduck = '&nbsp;';}
if (!$td8_cduck) {$td8_cduck = '&nbsp;';}
if (!$td9_cduck) {$td9_cduck = '&nbsp;';}
if (!$td10_cduck) {$td10_cduck = '&nbsp;';}

if (!$td1_chap) {$td1_chap = '&nbsp;';}
if (!$td2_chap) {$td2_chap = '&nbsp;';}
if (!$td3_chap) {$td3_chap = '&nbsp;';}
if (!$td4_chap) {$td4_chap = '&nbsp;';}
if (!$td5_chap) {$td5_chap = '&nbsp;';}
if (!$td6_chap) {$td6_chap = '&nbsp;';}
if (!$td7_chap) {$td7_chap = '&nbsp;';}
if (!$td8_chap) {$td8_chap = '&nbsp;';}
if (!$td9_chap) {$td9_chap = '&nbsp;';}
if (!$td10_chap) {$td10_chap = '&nbsp;';}

if (!$td1_yangin) {$td1_yangin = '&nbsp;';}
if (!$td2_yangin) {$td2_yangin = '&nbsp;';}
if (!$td3_yangin) {$td3_yangin = '&nbsp;';}
if (!$td4_yangin) {$td4_yangin = '&nbsp;';}
if (!$td5_yangin) {$td5_yangin = '&nbsp;';}
if (!$td6_yangin) {$td6_yangin = '&nbsp;';}
if (!$td7_yangin) {$td7_yangin = '&nbsp;';}
if (!$td8_yangin) {$td8_yangin = '&nbsp;';}
if (!$td9_yangin) {$td9_yangin = '&nbsp;';}
if (!$td10_yangin) {$td10_yangin = '&nbsp;';}


if (!$td1_gongmang) {$td1_gongmang = '&nbsp;';}
if (!$td2_gongmang) {$td2_gongmang = '&nbsp;';}
if (!$td3_gongmang) {$td3_gongmang = '&nbsp;';}
if (!$td4_gongmang) {$td4_gongmang = '&nbsp;';}
if (!$td5_gongmang) {$td5_gongmang = '&nbsp;';}
if (!$td6_gongmang) {$td6_gongmang = '&nbsp;';}
if (!$td7_gongmang) {$td7_gongmang = '&nbsp;';}
if (!$td8_gongmang) {$td8_gongmang = '&nbsp;';}
if (!$td9_gongmang) {$td9_gongmang = '&nbsp;';}
if (!$td10_gongmang) {$td10_gongmang = '&nbsp;';}


//if ($td3_yangin) {$td3_yangin = "양인";}
//echo "$td3_yangin";

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

$daeundisp1 = $td3_daeun;

$daeundisp1_mid = substr($daeundisp1,2,2);

S_epos($my_day_e,$daeundisp1_mid);

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




$sql ="SELECT DB_data FROM S144 WHERE DB_express = '". $td1_sal ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S144 = stripslashes($row[DB_data]);
}


?>
