
<table cellpadding="0" cellspacing="0">
	<Tr>
		<td style="<?=$fontcolor;?>"><?S_CI_img("G", "33.jpg");?>
<?
If($sex == "남"){

$start_year = $year + 18;
$end_year = $year + 40;

?><?

if (($my_day_h == '甲')||($my_day_h == '乙')) {echo "귀하는 <font color=blue>토(土)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '戊';$s_umyear_h2 = '己';$s_umyear_e1 = '辰';$s_umyear_e2 = '戌';$s_umyear_e3 = '丑';$s_umyear_e4 = '未';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2' or umyear_e = '$s_umyear_e3' or umyear_e = '$s_umyear_e4'";
}

if (($my_day_h == '丙')||($my_day_h == '丁')) {echo "귀하는 <font color=blue>금(金)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '庚';$s_umyear_h2 = '辛';$s_umyear_e1 = '申';$s_umyear_e2 = '酉';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2'";
}

if (($my_day_h == '戊')||($my_day_h == '己')) {echo "귀하는 <font color=blue>수(水)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '壬';$s_umyear_h2 = '癸';$s_umyear_e1 = '亥';$s_umyear_e2 = '子';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2'";
}

if (($my_day_h == '庚')||($my_day_h == '辛')) {echo "귀하는 <font color=blue>목(木)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '甲';$s_umyear_h2 = '乙';$s_umyear_e1 = '寅';$s_umyear_e2 = '卯';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2'";
}

if (($my_day_h == '壬')||($my_day_h == '癸')) {echo "귀하는 <font color=blue>화(火)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '丙';$s_umyear_h2 = '丁';$s_umyear_e1 = '巳';$s_umyear_e2 = '午';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2'";
}



if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {
  error("QUERY_ERROR");
}

$g = 0;
		for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$umyear_h = stripslashes($row[umyear_h]);
			$umyear_e = stripslashes($row[umyear_e]);
			$umyear_ho = stripslashes($row[umyear_ho]);
			$umyear_eo = stripslashes($row[umyear_eo]);

			$no = stripslashes($row[no]);
                        if (($no >= $start_year) && ($no < $end_year)) {
			
			//echo "$no 년 ($umyear_h$umyear_e 년) &nbsp;<br>";
			
			$age_dis[$g] = $no - $year + 1;
			$no_dis[$g] = $no;
			$umyear_h_dis[$g] = $umyear_h;
			$umyear_e_dis[$g] = $umyear_e;
			$umyear_ho_dis[$g] = $umyear_ho;
			$umyear_eo_dis[$g] = $umyear_eo;
                        
			$g = $g + 1; 
			
			
			}
                        }
   
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_ho_dis[$s] == $osearch1)&&($umyear_eo_dis[$s] == $osearch1)) {$jumsu_01[$s] = '150';}
	if (($umyear_ho_dis[$s] == $osearch1)&&($umyear_eo_dis[$s] <> $osearch1)) {$jumsu_01[$s] = '100';}
	if (($umyear_ho_dis[$s] <> $osearch1)&&($umyear_eo_dis[$s] == $osearch1)) {$jumsu_01[$s] = '120';}

	
	
  }

#####################################천간합


if ($my_day_h == '甲') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '己') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '己') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '甲') {$jumsu_02[$s] = '50';}
  }
}

////////////

if ($my_day_h == '乙') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '庚') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '庚') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '乙') {$jumsu_02[$s] = '50';}
  }
}

////////////

if ($my_day_h == '丙') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '辛') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '辛') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '丙') {$jumsu_02[$s] = '50';}
  }
}

////////////

if ($my_day_h == '丁') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '壬') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '壬') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '丁') {$jumsu_02[$s] = '50';}
  }
}

////////////

if ($my_day_h == '戊') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '癸') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '癸') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '戊') {$jumsu_02[$s] = '50';}
  }
}

###################################### 지지합
if ($my_day_e == '子') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '丑') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '축') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '子') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '寅') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '亥') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '亥') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '寅') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '卯') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '戌') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '戌') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '卯') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '辰') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '酉') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '酉') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '辰') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '巳') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '申') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '申') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '巳') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '午') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '未') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '未') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '午') {$jumsu_03[$s] = '70';}
  }
}

###########################################충 되는것(지지만 논함)
if ($my_day_e == '子') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '午') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '午') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '자') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '卯') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '酉') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '酉') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '卯') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '寅') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '申') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '申') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '寅') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '巳') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '亥') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '亥') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '巳') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '辰') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '戌') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '戌') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '辰') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '丑') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '未') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '未') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '丑') {$jumsu_04[$s] = '-40';}
  }
}

/////////////////////////////////////////////////용신을 적용(천간)
//echo "/$my_yongsin/";

if ($my_yongsin == '목') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '甲')||($umyear_h_dis[$s] == '乙')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '寅')||($umyear_e_dis[$s] == '卯')) {$jumsu_06[$s] = '18';}
  }
}
//////////////////////
if ($my_yongsin == '화') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '丙')||($umyear_h_dis[$s] == '丁')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '巳')||($umyear_e_dis[$s] == '午')) {$jumsu_06[$s] = '18';}
  }
}
//////////////////////
if ($my_yongsin == '토') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '戊')||($umyear_h_dis[$s] == '己')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '辰')||($umyear_e_dis[$s] == '戌')||($umyear_e_dis[$s] == '丑')||($umyear_e_dis[$s] == '未')) {$jumsu_06[$s] = '18';}
  }
}
//////////////////////
if ($my_yongsin == '금') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '庚')||($umyear_h_dis[$s] == '辛')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '申')||($umyear_e_dis[$s] == '酉')) {$jumsu_06[$s] = '18';}
  }
}
//////////////////////
if ($my_yongsin == '수') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '壬')||($umyear_h_dis[$s] == '癸')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '亥')||($umyear_e_dis[$s] == '子')) {$jumsu_06[$s] = '18';}
  }
}
/////////////////////////////////////////////////희신을 적용(천간)
if ($my_heesin == '목') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '甲')||($umyear_h_dis[$s] == '乙')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '寅')||($umyear_e_dis[$s] == '卯')) {$jumsu_08[$s] = '13';}
  }
}
//////////////////////
if ($my_heesin == '화') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '丙')||($umyear_h_dis[$s] == '丁')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '巳')||($umyear_e_dis[$s] == '午')) {$jumsu_08[$s] = '13';}
  }
}
//////////////////////
if ($my_heesin == '토') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '戊')||($umyear_h_dis[$s] == '己')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '辰')||($umyear_e_dis[$s] == '戌')||($umyear_e_dis[$s] == '丑')||($umyear_e_dis[$s] == '未')) {$jumsu_08[$s] = '13';}
  }
}
//////////////////////
if ($my_heesin == '금') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '庚')||($umyear_h_dis[$s] == '辛')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '申')||($umyear_e_dis[$s] == '酉')) {$jumsu_08[$s] = '13';}
  }
}
//////////////////////
if ($my_heesin == '수') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '壬')||($umyear_h_dis[$s] == '癸')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '子')||($umyear_e_dis[$s] == '亥')) {$jumsu_08[$s] = '13';}
  }
}






for ($s = 0 ; $s<sizeof($no_dis); $s++) {
$jumsu_total[$s] = abs($jumsu_01[$s]) + abs($jumsu_02[$s])+ abs($jumsu_03[$s])+ abs($jumsu_04[$s])+ abs($jumsu_05[$s])+ abs($jumsu_06[$s])+ abs($jumsu_07[$s])+ abs($jumsu_08[$s]);

$jumsu_per[$s] = 100 * ($jumsu_total[$s] / 340);
$jumsu_per2[$s] = number_format($jumsu_per[$s],0);
}

echo "


다음은 혼인시기를 표시한 년도표로서 세운이 재성운이며 본인 사주의 합충, 도화, 천덕합과 용희신의 합을 고려하여 분석한 데이터 입니다.
		</tD>
	</tR>
</table>
<BR><BR>
<table width=460 bgcolor=CCCCCC align=center border=0 cellpadding=5 cellspacing=1>
<tr bgcolor=ddddff><td width=80 align=center> 년도 </td><td width=30 align=center> 간지 </td><td width=350 align=center> 혼인,연애,동거할 확률 </td></tr>

";


for ($j = 0 ; $j<sizeof($no_dis); $j++) {

        echo "<tr bgcolor=FFFFFF><td align=center> $no_dis[$j]($age_dis[$j] 세) </td><td align=center> $umyear_h_dis[$j]$umyear_e_dis[$j] </td><td bgcolor=FFFFFF> <table border=0 cellspacing=0 cellpading=0><tr><td><img src=/images/bar.gif width=$jumsu_total[$j] height=5></td><td>$jumsu_per2[$j] %</td></tr></table></td></tr>";

}

echo "</table>";
}Else{
$start_year = $year + 18;
$end_year = $year + 40;

####################################################

echo "";

if (($my_day_h == '甲')||($my_day_h == '乙')) {echo "귀하는 <font color=blue>금(金)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '庚';$s_umyear_h2 = '辛';$s_umyear_e1 = '申';$s_umyear_e2 = '酉';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2'";
}

if (($my_day_h == '丙')||($my_day_h == '丁')) {echo "귀하는 <font color=blue>수(水)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '壬';$s_umyear_h2 = '癸';$s_umyear_e1 = '子';$s_umyear_e2 = '亥';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2'";
}

if (($my_day_h == '戊')||($my_day_h == '己')) {echo "귀하는 <font color=blue>목(木)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '甲';$s_umyear_h2 = '乙';$s_umyear_e1 = '寅';$s_umyear_e2 = '卯';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2'";
}

if (($my_day_h == '庚')||($my_day_h == '辛')) {echo "귀하는 <font color=blue>화(火)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '丙';$s_umyear_h2 = '丁';$s_umyear_e1 = '巳';$s_umyear_e2 = '午';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2'";
}

if (($my_day_h == '壬')||($my_day_h == '癸')) {echo "귀하는 <font color=blue>토(土)</font>의 운에 결혼을 할 확률이 가장 많습니다. "; $s_umyear_h1 = '戊';$s_umyear_h2 = '己';$s_umyear_e1 = '辰';$s_umyear_e2 = '戌';$s_umyear_e3 = '丑';$s_umyear_e4 = '未';
$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_h = '$s_umyear_h1' or umyear_h = '$s_umyear_h2' or umyear_e = '$s_umyear_e1' or umyear_e = '$s_umyear_e2' or umyear_e = '$s_umyear_e3' or umyear_e = '$s_umyear_e4'";
}




if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {
  error("QUERY_ERROR");
}

$g = 0;
		for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$umyear_h = stripslashes($row[umyear_h]);
			$umyear_e = stripslashes($row[umyear_e]);
			$umyear_ho = stripslashes($row[umyear_ho]);
			$umyear_eo = stripslashes($row[umyear_eo]);

			$no = stripslashes($row[no]);
                        if (($no >= $start_year) && ($no < $end_year)) {
			
			//echo "$no 년 ($umyear_h$umyear_e 년) &nbsp;<br>";
			
			$age_dis[$g] = $no - $year + 1;
			$no_dis[$g] = $no;
			$umyear_h_dis[$g] = $umyear_h;
			$umyear_e_dis[$g] = $umyear_e;
			$umyear_ho_dis[$g] = $umyear_ho;
			$umyear_eo_dis[$g] = $umyear_eo;
                        
			$g = $g + 1; 
			
			
			}
                        }

   
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_ho_dis[$s] == $osearch1)&&($umyear_eo_dis[$s] == $osearch1)) {$jumsu_01[$s] = '150';}
	if (($umyear_ho_dis[$s] == $osearch1)&&($umyear_eo_dis[$s] <> $osearch1)) {$jumsu_01[$s] = '100';}
	if (($umyear_ho_dis[$s] <> $osearch1)&&($umyear_eo_dis[$s] == $osearch1)) {$jumsu_01[$s] = '120';}

	
	
  }

#####################################천간합


if ($my_day_h == '甲') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '己') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '己') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '甲') {$jumsu_02[$s] = '50';}
  }
}

////////////

if ($my_day_h == '乙') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '庚') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '庚') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '乙') {$jumsu_02[$s] = '50';}
  }
}

////////////

if ($my_day_h == '丙') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '辛') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '辛') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '丙') {$jumsu_02[$s] = '50';}
  }
}

////////////

if ($my_day_h == '丁') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '壬') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '壬') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '丁') {$jumsu_02[$s] = '50';}
  }
}

////////////

if ($my_day_h == '戊') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '癸') {$jumsu_02[$s] = '50';}
  }
}


if ($my_day_h == '癸') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_h_dis[$s] == '戊') {$jumsu_02[$s] = '50';}
  }
}

###################################### 지지합
if ($my_day_e == '子') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '丑') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '축') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '子') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '寅') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '亥') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '亥') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '寅') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '卯') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '戌') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '戌') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '卯') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '辰') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '酉') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '酉') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '辰') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '巳') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '申') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '申') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '巳') {$jumsu_03[$s] = '70';}
  }
}
////////////////////////////////////
if ($my_day_e == '午') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '未') {$jumsu_03[$s] = '70';}
  }
}


if ($my_day_e == '未') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '午') {$jumsu_03[$s] = '70';}
  }
}

###########################################충 되는것(지지만 논함)
if ($my_day_e == '子') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '午') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '午') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '자') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '卯') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '酉') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '酉') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '卯') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '寅') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '申') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '申') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '寅') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '巳') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '亥') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '亥') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '巳') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '辰') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '戌') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '戌') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '辰') {$jumsu_04[$s] = '-40';}
  }
}
////////////////////////////////////////////////////////
if ($my_day_e == '丑') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '未') {$jumsu_04[$s] = '-40';}
  }
}


if ($my_day_e == '未') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if ($umyear_e_dis[$s] == '丑') {$jumsu_04[$s] = '-40';}
  }
}

/////////////////////////////////////////////////용신을 적용(천간)
//echo "/$my_yongsin/";

if ($my_yongsin == '목') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '甲')||($umyear_h_dis[$s] == '乙')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '寅')||($umyear_e_dis[$s] == '卯')) {$jumsu_06[$s] = '18';}
  }
}
//////////////////////
if ($my_yongsin == '화') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '丙')||($umyear_h_dis[$s] == '丁')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '巳')||($umyear_e_dis[$s] == '午')) {$jumsu_06[$s] = '18';}
  }
}
//////////////////////
if ($my_yongsin == '토') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '戊')||($umyear_h_dis[$s] == '己')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '辰')||($umyear_e_dis[$s] == '戌')||($umyear_e_dis[$s] == '丑')||($umyear_e_dis[$s] == '未')) {$jumsu_06[$s] = '18';}
  }
}
//////////////////////
if ($my_yongsin == '금') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '庚')||($umyear_h_dis[$s] == '辛')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '申')||($umyear_e_dis[$s] == '酉')) {$jumsu_06[$s] = '18';}
  }
}
//////////////////////
if ($my_yongsin == '수') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '壬')||($umyear_h_dis[$s] == '癸')) {$jumsu_05[$s] = '22';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '亥')||($umyear_e_dis[$s] == '子')) {$jumsu_06[$s] = '18';}
  }
}
/////////////////////////////////////////////////희신을 적용(천간)
if ($my_heesin == '목') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '甲')||($umyear_h_dis[$s] == '乙')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '寅')||($umyear_e_dis[$s] == '卯')) {$jumsu_08[$s] = '13';}
  }
}
//////////////////////
if ($my_heesin == '화') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '丙')||($umyear_h_dis[$s] == '丁')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '巳')||($umyear_e_dis[$s] == '午')) {$jumsu_08[$s] = '13';}
  }
}
//////////////////////
if ($my_heesin == '토') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '戊')||($umyear_h_dis[$s] == '己')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '辰')||($umyear_e_dis[$s] == '戌')||($umyear_e_dis[$s] == '丑')||($umyear_e_dis[$s] == '未')) {$jumsu_08[$s] = '13';}
  }
}
//////////////////////
if ($my_heesin == '금') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '庚')||($umyear_h_dis[$s] == '辛')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '申')||($umyear_e_dis[$s] == '酉')) {$jumsu_08[$s] = '13';}
  }
}
//////////////////////
if ($my_heesin == '수') {

  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_h_dis[$s] == '壬')||($umyear_h_dis[$s] == '癸')) {$jumsu_07[$s] = '17';}
  }
  for ($s = 0 ; $s<sizeof($no_dis); $s++) {
        if (($umyear_e_dis[$s] == '子')||($umyear_e_dis[$s] == '亥')) {$jumsu_08[$s] = '13';}
  }
}






for ($s = 0 ; $s<sizeof($no_dis); $s++) {
$jumsu_total[$s] = $jumsu_01[$s] + $jumsu_02[$s]+ $jumsu_03[$s]+ $jumsu_04[$s]+ $jumsu_05[$s]+ $jumsu_06[$s]+ $jumsu_07[$s]+ $jumsu_08[$s];

$jumsu_per[$s] = abs(100 * ($jumsu_total[$s] / 340));
$jumsu_per2[$s] = number_format(abs($jumsu_per[$s]),0);
}


echo "


다음은 혼인시기를 표시한 년도표로서 세운이 관성운이며 본인 사주의 합충, 도화, 천덕합과 용희신의 합을 고려하여 분석한 데이터 입니다.
		</tD>
	</tR>
</table>
<BR><BR>
<table width=460 bgcolor=CCCCCC align=center border=0 cellpadding=5 cellspacing=1>
<tr bgcolor=ddddff><td width=80 align=center> 년도 </td><td width=30 align=center> 간지 </td><td width=350 align=center> 혼인,연애,동거할 확률 </td></tr>

";


for ($j = 0 ; $j<sizeof($no_dis); $j++) {

        echo "<tr bgcolor=FFFFFF><td align=center> $no_dis[$j]($age_dis[$j] 세) </td><td align=center> $umyear_h_dis[$j]$umyear_e_dis[$j] </td><td bgcolor=FFFFFF> <table border=0 cellspacing=0 cellpading=0><tr><td><img src=/21C_img/bar.gif width=$jumsu_total[$j] height=5></td><td>$jumsu_per2[$j] %</td></tr></table></td></tr>";

}

echo "</table>";
}
?>	 