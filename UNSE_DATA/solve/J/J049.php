<?
########################################################################################## 2006 을유년
///그해 행년태세수
$taese_result = 17;
$current_year = 2008;
########################################################################################## 간지 60 갑자
$gabja = array('甲子','乙丑','丙寅','丁卯','戊辰','己巳','庚午','辛未','壬申','癸酉','甲戌','乙亥','丙子','丁丑','戊寅','己卯','庚辰','辛巳','壬午','癸未','甲申','乙酉','丙戌',
'丁亥','戊子','己丑','庚寅','辛卯','壬辰','癸巳','甲午','乙未','丙申','丁酉','戊戌','己亥','庚子','辛丑','壬寅','癸卯','甲辰','乙巳','丙午','丁未','戊申','己酉','庚戌','辛亥','壬子',
'癸丑','甲寅','乙卯','丙辰','丁巳','戊午','己未','庚申','辛酉','壬戌','癸亥');

$yeanju = array('88','96','248','24','240','248','16','176','24','240','248','320','168','104','160','104','320','240','328','96','24','240','328','328','80','184','240','96','248','160','328',
'96','104','248','240','24','160','176','168','16','248','160','328','104','16','328','320','16','88','96','168','16','328','168','320','184','96','320','248','320');

$wolju = array('316','48','332','348','216','332','232','176','348','216','332','32','132','164','16','164','32','216','148','48','348','216','148','148','200','364','216','48','332','16','148','48',
'164','332','216','348','16','248','132','232','332','16','348','164','232','148','32','232','316','48','132','232','148','132','32','364','48','32','332','32');

$ilju = array('70','120','110','150','60','110','100','140','150','60','110','80','90','170','40','170','80','60','130','120','150','60','130','130','20','190','60','120','110','40',
'130','120','170','110','60','150','40','140','90','100','110','40','150','170','100','130','80','100','70','120','90','100','130','90','80','190','120','80','110','80');

$siju = array('7','12','11','15','6','11','10','14','15','6','11','8','9','17','4','17','8','6','13','12','15','6','13','13','2','19','6','12','11','4',
'13','12','17','11','6','15','4','14','9','10','11','4','15','17','10','13','8','10','7','12','9','10','13','9','8','19','12','8','11','8');

$taese = array('20','21','17','16','18','18','17','20','18','17','20','19','18','19','15','19','21','16','15','18','21','20','20','17','16','22','18','17','19','14',
'18','21','19','18','18','18','19','20','16','15','22','17','16','19','17','21','21','18','17','18','19','18','20','15','14','21','20','19','19','16');

##########################################################################################배열에서 찾기
$yeanju_search = $my_year_h.$my_year_e;
$wolju_search = $my_month_h.$my_month_e;
$ilju_search = $my_day_h.$my_day_e;
$siju_search = $my_hour_h.$my_hour_e;
##########################################
for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $yeanju_search) {$temp_i = $i;}
}
$yeanju_result = $yeanju[$temp_i];

for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $wolju_search) {$temp_i = $i;}
}
$wolju_result = $wolju[$temp_i];

for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $ilju_search) {$temp_i = $i;}
}
$ilju_result = $ilju[$temp_i];

for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $siju_search) {$temp_i = $i;}
}
$siju_result = $siju[$temp_i];
#########################################연령
$age = $current_year - $year + 1;
if ((($year == 1936) || ($year == 1948) || ($year == 1960) || ($year == 1972) || ($year == 1984) || ($year == 1996) || ($year == 2008)) && ($my_year_e == '亥')) {$age = $age + 1;}
if ((($year == 1937) || ($year == 1949) || ($year == 1961) || ($year == 1973) || ($year == 1985) || ($year == 1997) || ($year == 2009)) && ($my_year_e == '子')) {$age = $age + 1;}
if ((($year == 1938) || ($year == 1950) || ($year == 1962) || ($year == 1974) || ($year == 1986) || ($year == 1998) || ($year == 2010)) && ($my_year_e == '丑')) {$age = $age + 1;}
if ((($year == 1939) || ($year == 1951) || ($year == 1963) || ($year == 1975) || ($year == 1987) || ($year == 1999) || ($year == 2011)) && ($my_year_e == '寅')) {$age = $age + 1;}
if ((($year == 1940) || ($year == 1952) || ($year == 1964) || ($year == 1976) || ($year == 1988) || ($year == 2000) || ($year == 2012)) && ($my_year_e == '卯')) {$age = $age + 1;}
if ((($year == 1941) || ($year == 1953) || ($year == 1965) || ($year == 1977) || ($year == 1989) || ($year == 2001) || ($year == 2013)) && ($my_year_e == '辰')) {$age = $age + 1;}

if ((($year == 1930) || ($year == 1942) || ($year == 1954) || ($year == 1966) || ($year == 1978) || ($year == 1990) || ($year == 2002)) && ($my_year_e == '巳')) {$age = $age + 1;}
if ((($year == 1931) || ($year == 1943) || ($year == 1955) || ($year == 1967) || ($year == 1979) || ($year == 1991) || ($year == 2003)) && ($my_year_e == '午')) {$age = $age + 1;}
if ((($year == 1932) || ($year == 1944) || ($year == 1956) || ($year == 1968) || ($year == 1980) || ($year == 1992) || ($year == 2004)) && ($my_year_e == '未')) {$age = $age + 1;}
if ((($year == 1933) || ($year == 1945) || ($year == 1957) || ($year == 1969) || ($year == 1981) || ($year == 1993) || ($year == 2006)) && ($my_year_e == '申')) {$age = $age + 1;}
if ((($year == 1934) || ($year == 1946) || ($year == 1958) || ($year == 1970) || ($year == 1982) || ($year == 1994) || ($year == 2006)) && ($my_year_e == '酉')) {$age = $age + 1;}
if ((($year == 1935) || ($year == 1947) || ($year == 1959) || ($year == 1971) || ($year == 1983) || ($year == 1995) || ($year == 2007)) && ($my_year_e == '戌')) {$age = $age + 1;}

############################################

$total = $yeanju_result + $wolju_result + $ilju_result + $siju_result + $taese_result + $age;

if ($total > 384) {$total = ceil($total%384);}

############################################

###############################
$sql = "SELECT DB_title, DB_data, DB_data_1, DB_data_2, DB_data_3, DB_data_4, DB_data_5, DB_data_6, DB_data_7, DB_data_8, DB_data_9, DB_data_10, DB_data_11, DB_data_12 FROM J049 WHERE DB_num = '".$total."'";

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
			$DB_title = stripslashes($row[DB_title]);
			$DB_data = stripslashes($row[DB_data]);
			$DB_data_1 = stripslashes($row[DB_data_1]);
			$DB_data_2 = stripslashes($row[DB_data_2]);
			$DB_data_3 = stripslashes($row[DB_data_3]);
			$DB_data_4 = stripslashes($row[DB_data_4]);
			$DB_data_5 = stripslashes($row[DB_data_5]);
			$DB_data_6 = stripslashes($row[DB_data_6]);
			$DB_data_7 = stripslashes($row[DB_data_7]);
			$DB_data_8 = stripslashes($row[DB_data_8]);
			$DB_data_9 = stripslashes($row[DB_data_9]);
			$DB_data_10 = stripslashes($row[DB_data_10]);
			$DB_data_11 = stripslashes($row[DB_data_11]);
			$DB_data_12 = stripslashes($row[DB_data_12]);
		 }

}
?>
<table cellpadding="0" cellspacing="0">
	<tR><tD><?S_CI_img("J", "35.jpg")?><?=$DB_data;?><BR><BR></td></tR>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/1.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_1?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/2.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_2?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/3.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_3?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/4.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_4?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/5.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_5?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/6.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_6?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/7.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_7?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/8.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_8?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/9.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_9?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/10.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_10?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/11.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_11?></tD></tr>
	<tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR>
	<tr><tD><BR><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/12.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?=$DB_data_12?></tD></tr>
</table>