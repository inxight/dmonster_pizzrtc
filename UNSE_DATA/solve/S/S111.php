<?

$search_year = $_REQUEST["search_year"];
$search_month = $_REQUEST["search_month"];
?>

<SCRIPT LANGUAGE="JavaScript">
<!--
function checkIt() {
	document.signform.submit();
}

function OpenWin(ref) {
	window.open(ref,"","toolbar=no,resizable=yes,width=520,height=450,scrollbars=yes, screenX=200, screenY=250");
}

function F_change_bg(i_var, bgcolor_var){	
	var V_div_lastvar = document.getElementById("div_lastvar");
	var V_tr_var_1 = document.getElementById("td_var_"+i_var);

	if (V_div_lastvar.value != "nothing")
	{
		var V_tr_var_2 = document.getElementById("td_var_"+V_div_lastvar.value);

		V_tr_var_1.style.backgroundColor = '#E8FBFF';
		V_tr_var_2.style.backgroundColor = bgcolor_var;

		V_div_lastvar.value = i_var;
	}else{
		V_tr_var_1.style.backgroundColor = '#E8FBFF';

		V_div_lastvar.value = i_var;
	}
}
//-->
</SCRIPT>
<?  
//###########################내용계산########################################

if (!$search_year) {$selected_year = date('Y');}else{$selected_year = $search_year;}
if (!$search_month) {$selected_month = date('m');}else{$selected_month = $search_month;}


$selectm[0] = $_REQUEST["selectm"]."|";
$plus[0]=$selected_year."*".$selected_month;

If(sizeof(Split($plus[0], $selectm[0])) > 0){ 
?>
<script>//alert('해당 월은 한번밖에 보실 수 없습니다.'); history.back();</script>
<?
	//exit;
}
?>

<input type="hidden" id="div_lastvar" value="nothing">

<table border=0 align=center>
  <tr>
    <td>
	    <form name=signform method=POST action="<?=$action_var?>" style="display : inline;">

<input type='hidden' name='cate' value='<?=$cate?>'>
<input type='hidden' name='sel' value='<?=$sel?>'>

<input type=hidden name=sex value="<?=$sex?>">
<input type=hidden name=solunar value="<?=$my_solnuar?>">
<input type=hidden name=youn value="<?=$youn?>">
<input type=hidden name=request_year value="<?=$request_year?>">
<input type=hidden name=request_month value="<?=$request_month?>">
<input type=hidden name=request_day value="<?=$request_day?>">
<input type=hidden name=request_hour value="<?=$request_hour?>">
<input type=hidden name=request_min value="<?=$request_min?>">
<input type=hidden name=your_hour value="<?=$your_hour?>">
<input type=hidden name=your_min value="<?=$your_min?>">
<input type=hidden name=user_name value="<?=$user_name?>">
<input type=hidden name=your_user_name value="<?=$your_user_name?>">

<input type=hidden name=my_sex value="<?=$sex?>">
<input type=hidden name=my_solnuar value="<?=$my_solnuar?>">
<input type=hidden name=request_my_youn value="<?=$youn?>">
<input type=hidden name=request_my_year value="<?=$request_my_year?>">
<input type=hidden name=request_my_month value="<?=$request_my_month?>">
<input type=hidden name=request_my_day value="<?=$request_my_day?>">

<input type=hidden name=your_sex value="<?=$your_sex?>">
<input type=hidden name=your_solunar value="<?=$your_solunar?>">
<input type=hidden name=your_youn value="<?=$your_youn?>">
<input type=hidden name=your_year value="<?=$your_year?>">
<input type=hidden name=your_month value="<?=$your_month?>">
<input type=hidden name=your_day value="<?=$your_day?>">

<input type=hidden name=selectm value="<?=$selectm[0]?>|<?=$plus[0]?>">

		<br>
        <table>
			<tr>
				<td align="center" bgcolor=333333 width="335"><font color=gold>택일을 선택하시기 바랍니다.</font>

				<select name=search_year onchange="if(this.value=='<?=Date('Y');?>'){document.all.dvv1.style.display='';document.all.dvv2.style.display='none';;search_month.value=search_month2.value}else{document.all.dvv1.style.display='none';document.all.dvv2.style.display='';search_month.value=search_month2.value}">
				<?
				for($i = date("Y"); $i < date("Y") + 2; $i++ ){
					If($i == Intval($selected_year)){$s = "selected";}Else{$s = "";}
					
					echo "<option value = '".$i."' ".$s.">".$i."</option>";
				}
				?>
				</select><font color=gold> 년 </font>

				<div style="position:absolute;display:none" id="dvv1"><select name=search_month1 onchange="search_month.value=this.value">
				<?
				for($i = date("m"); $i < 13; $i++ ){
					If($i == Intval($selected_month)){$s = "selected";}Else{$s = "";}
					
					echo "<option value = '".$i."' ".$s.">".$i."</option>";
				}
				?>
				</select>
				</div>
				<div style="position:absolute;display:none" id="dvv2"><select name=search_month2 onchange="search_month.value=this.value">
				<?
				for($i = 1; $i < 13; $i++ ){
					If($i == Intval($selected_month)){$s = "selected";}Else{$s = "";}
					
					echo "<option value = '".$i."' ".$s.">";
					
					if(strlen($i) == 1){echo "0";}

					echo $i."</option>";
				}
				?>
				</select>
				<input type="hidden" name="search_month" value="<?=$selected_month?>">
				</div>
<SCRIPT LANGUAGE="JavaScript">
<?If(intval($selected_year)==intval(date("Y"))){$loll[0]="1";}else{$loll[0]="2";}?>
document.all.dvv<?=$loll[0]?>.style.display=''
</SCRIPT>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<font color=gold> 월 </font>

               </td>
			   <td width="176" align="center">&nbsp;&nbsp;&nbsp;<input type=button value='해당택일보기' onclick=javascript:checkIt(); onfocus='this.blur()'></td>
			</tr>
         </table>
</form>
		</td>
	</tr>
	<tR>
		<tD height="5"></tD>
	</tR>
	<tR>
		<tD style="padding-left:1px;"><img src="/UNSE_DATA/images/S111_img/selectDay1_subinfo.jpg"></tD>
	</tR>
	<tR>
		<tD height="20"></tD>
	</tR>
</table>


<?
//###########본인사주가 음력으로 입력되었으면 맞는지 검정하고 양력으로 바꾼다#####################

if ($solunar == 'lunar') {

$temp_lunar = $year.$month.$day;
$result = mysql_query("SELECT * FROM mansedata WHERE umdate = '$temp_lunar' and youn = '$youn'");

if (!$result) {
//   error("QUERY_ERROR");
 //  exit;
}

$rows = mysql_num_rows($result);


   $all = mysql_affected_rows();


   		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($result,$i);
			$row = mysql_fetch_array($result);
			$my_no = stripslashes($row[no]);
			$my_year_e = stripslashes($row[year_e]);
		 }
 
}


###########본인사주가 양력으로 입력되었으면 맞는지 검정하고 #####################

if ($solunar == 'solar') {

$temp_solar = $year.$month.$day;
$result = mysql_query("SELECT * FROM mansedata WHERE no = '$temp_solar'");


$rows = mysql_num_rows($result);


   $all = mysql_affected_rows();


   		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($result,$i);
			$row = mysql_fetch_array($result);
			$my_no = stripslashes($row[no]);
			$my_year_e = stripslashes($row[year_e]);
		 }
 
}


######월이 셀렉트문에서 1자로 선택되는것을 2자로 맟춤######

if (strlen($selected_month) == 1) {$selected_month = '0'.$selected_month;}

#######################################################################
#################################################################################
######################월 테이블 생성############################################################
$cellh  = 55;
$cellw  = 72;
$tablew = $cellw*7;

function SkipOffset($height, $width, $no)
{
  for ($i = 1; $i <= $no; $i++) {
    echo "  <TD height=$height width=$width class=date><p>&nbsp;</p></TD> \n";
  }
}


#######################################################################################################################
//---- 오늘 날짜
##########$thisyear  = date('Y');  // 2000
##########$thismonth = date('n');  // 1, 2, 3, ..., 12 m으로하면 01,02,03
###########$today     = date('j');  // 1, 2, 3, ..., 31 d로하면 01,02

$selected_day = date('d');

########################################################이번달의 일별 천간지지 ################################
$maxdate = date(t, mktime(0, 0, 0, $selected_month, 1, $selected_year)); ////////선택된달의 총날짜수///////////

$start_call_today = $selected_year.$selected_month.'01';
$end_call_today = $selected_year.$selected_month.$maxdate;
#################################################################################################################


for ($j = $start_call_today; $j<$end_call_today+1; $j++) {

$sql = "SELECT * FROM mansedata WHERE no = '$j'";

if (!$sql) {
//error("QUERY_ERROR");
//exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {
//error("QUERY_ERROR");
//exit;
}


		for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$toyear_h = stripslashes($row[year_h]);
			$toyear_e = stripslashes($row[year_e]);
			$tomonth_h = stripslashes($row[month_h]);
			$tomonth_e = stripslashes($row[month_e]);
			$today_h = stripslashes($row[day_h]);
			$today_e = stripslashes($row[day_e]);
			
			$jeol = stripslashes($row[jeol]);
			
			$umdate = stripslashes($row[umdate]);
			$to_umdate = substr($umdate,6,2);
			
                              
}


			
			

//$sum_he[$ii] = $today_h;

//echo("이날의 지지 $today_e 이다<br>");

########################################################################################################################
if ($toyear_h == 'A'){$toyear_h = '甲';}
if ($toyear_h == 'B'){$toyear_h = '乙';}
if ($toyear_h == 'C'){$toyear_h = '丙';}
if ($toyear_h == 'D'){$toyear_h = '丁';}
if ($toyear_h == 'E'){$toyear_h = '戊';}
if ($toyear_h == 'F'){$toyear_h = '己';}
if ($toyear_h == 'G'){$toyear_h = '庚';}
if ($toyear_h == 'H'){$toyear_h = '辛';}
if ($toyear_h == 'I'){$toyear_h = '壬';}
if ($toyear_h == 'J'){$toyear_h = '癸';}

if ($toyear_e == '01'){$toyear_e = '寅';}
if ($toyear_e == '02'){$toyear_e = '卯';}
if ($toyear_e == '03'){$toyear_e = '辰';}
if ($toyear_e == '04'){$toyear_e = '巳';}
if ($toyear_e == '05'){$toyear_e = '午';}
if ($toyear_e == '06'){$toyear_e = '未';}
if ($toyear_e == '07'){$toyear_e = '申';}
if ($toyear_e == '08'){$toyear_e = '酉';}
if ($toyear_e == '09'){$toyear_e = '戌';}
if ($toyear_e == '10'){$toyear_e = '亥';}
if ($toyear_e == '11'){$toyear_e = '子';}
if ($toyear_e == '12'){$toyear_e = '丑';}



if ($tomonth_h == 'A'){$tomonth_h = '甲';}
if ($tomonth_h == 'B'){$tomonth_h = '乙';}
if ($tomonth_h == 'C'){$tomonth_h = '丙';}
if ($tomonth_h == 'D'){$tomonth_h = '丁';}
if ($tomonth_h == 'E'){$tomonth_h = '戊';}
if ($tomonth_h == 'F'){$tomonth_h = '己';}
if ($tomonth_h == 'G'){$tomonth_h = '庚';}
if ($tomonth_h == 'H'){$tomonth_h = '辛';}
if ($tomonth_h == 'I'){$tomonth_h = '壬';}
if ($tomonth_h == 'J'){$tomonth_h = '癸';}

if ($tomonth_e == '01'){$tomonth_e = '寅';}
if ($tomonth_e == '02'){$tomonth_e = '卯';}
if ($tomonth_e == '03'){$tomonth_e = '辰';}
if ($tomonth_e == '04'){$tomonth_e = '巳';}
if ($tomonth_e == '05'){$tomonth_e = '午';}
if ($tomonth_e == '06'){$tomonth_e = '未';}
if ($tomonth_e == '07'){$tomonth_e = '申';}
if ($tomonth_e == '08'){$tomonth_e = '酉';}
if ($tomonth_e == '09'){$tomonth_e = '戌';}
if ($tomonth_e == '10'){$tomonth_e = '亥';}
if ($tomonth_e == '11'){$tomonth_e = '子';}
if ($tomonth_e == '12'){$tomonth_e = '丑';}


if ($today_h == 'A'){$today_h = '甲';}
if ($today_h == 'B'){$today_h = '乙';}
if ($today_h == 'C'){$today_h = '丙';}
if ($today_h == 'D'){$today_h = '丁';}
if ($today_h == 'E'){$today_h = '戊';}
if ($today_h == 'F'){$today_h = '己';}
if ($today_h == 'G'){$today_h = '庚';}
if ($today_h == 'H'){$today_h = '辛';}
if ($today_h == 'I'){$today_h = '壬';}
if ($today_h == 'J'){$today_h = '癸';}

if ($today_e == '01'){$today_e = '寅';}
if ($today_e == '02'){$today_e = '卯';}
if ($today_e == '03'){$today_e = '辰';}
if ($today_e == '04'){$today_e = '巳';}
if ($today_e == '05'){$today_e = '午';}
if ($today_e == '06'){$today_e = '未';}
if ($today_e == '07'){$today_e = '申';}
if ($today_e == '08'){$today_e = '酉';}
if ($today_e == '09'){$today_e = '戌';}
if ($today_e == '10'){$today_e = '亥';}
if ($today_e == '11'){$today_e = '子';}
if ($today_e == '12'){$today_e = '丑';}

$ch = substr($j,6,2);
if ($ch <10) { $ch = substr($ch,1,1);}

$sum_year_h[$ch]= $toyear_h;
$sum_year_e[$ch]= $toyear_e;

$sum_month_h[$ch]= $tomonth_h;
$sum_month_e[$ch]= $tomonth_e;

$sum_day_h[$ch]= $today_h;
$sum_day_e[$ch]= $today_e;

$sum_day_he[$ch] = $today_h.$today_e;

$sum_to_umdate[$ch]= $to_umdate;

$sum_to_jeol[$ch]= $jeol;


}

//echo "/$sum_e[1]/$sum_e[2]/$sum_e[3]/$sum_e[4]/$sum_e[5]/";

$br = '<br>';

//'#####################################################################나이산출


$my_age = $selected_year - substr($my_no,0,4) + 1 ;

if (!$my_sex) {$my_sex = $sex;}

//echo "$my_age $my_sex";

#################################################################################생기복덕산출(81세까지)
if ((($my_age == '2')||($my_age == '10')||($my_age == '18')||($my_age == '26')||($my_age == '34')||($my_age == '42')||($my_age == '50')||($my_age == '58')||($my_age == '66')||($my_age == '74'))&&($my_sex == '남')) {
$senggi_01 = '戌'; $senggi_02 = '亥'; $bokduk_01 = '未'; $bokduk_02 = '申'; $cheneu_01 = '午'; $cheneu_02 = '';}

if ((($my_age == '9')||($my_age == '17')||($my_age == '25')||($my_age == '33')||($my_age == '41')||($my_age == '49')||($my_age == '57')||($my_age == '65')||($my_age == '73')||($my_age == '81'))&&($my_sex == '남')) {
$senggi_01 = '丑'; $senggi_02 = '寅'; $bokduk_01 = '酉'; $bokduk_02 = ''; $cheneu_01 = '辰'; $cheneu_02 = '巳';}

if ((($my_age == '1')||($my_age == '8')||($my_age == '16')||($my_age == '24')||($my_age == '32')||($my_age == '40')||($my_age == '48')||($my_age == '56')||($my_age == '64')||($my_age == '72')||($my_age == '80'))&&($my_sex == '남')) {
$senggi_01 = '卯'; $senggi_02 = ''; $bokduk_01 = '辰'; $bokduk_02 = '巳'; $cheneu_01 = '酉'; $cheneu_02 = '';}

if ((($my_age == '7')||($my_age == '15')||($my_age == '23')||($my_age == '31')||($my_age == '39')||($my_age == '47')||($my_age == '55')||($my_age == '63')||($my_age == '71')||($my_age == '79'))&&($my_sex == '남')) {
$senggi_01 = '子'; $senggi_02 = ''; $bokduk_01 = '午'; $bokduk_02 = ''; $cheneu_01 = '未'; $cheneu_02 = '申';}

if ((($my_age == '6')||($my_age == '14')||($my_age == '22')||($my_age == '30')||($my_age == '38')||($my_age == '46')||($my_age == '54')||($my_age == '62')||($my_age == '70')||($my_age == '78'))&&($my_sex == '남')) {
$senggi_01 = '午'; $senggi_02 = ''; $bokduk_01 = '戌'; $bokduk_02 = '亥'; $cheneu_01 = '子'; $cheneu_02 = '';}

if ((($my_age == '5')||($my_age == '13')||($my_age == '21')||($my_age == '29')||($my_age == '37')||($my_age == '45')||($my_age == '53')||($my_age == '61')||($my_age == '69')||($my_age == '77'))&&($my_sex == '남')) {
$senggi_01 = '未'; $senggi_02 = '申'; $bokduk_01 = '戌'; $bokduk_02 = '亥'; $cheneu_01 = '子'; $cheneu_02 = '';}

if ((($my_age == '4')||($my_age == '12')||($my_age == '20')||($my_age == '28')||($my_age == '36')||($my_age == '44')||($my_age == '52')||($my_age == '60')||($my_age == '68')||($my_age == '76'))&&($my_sex == '남')) {
$senggi_01 = '辰'; $senggi_02 = '巳'; $bokduk_01 = '卯'; $bokduk_02 = ''; $cheneu_01 = '丑'; $cheneu_02 = '寅';}

if ((($my_age == '3')||($my_age == '11')||($my_age == '19')||($my_age == '27')||($my_age == '35')||($my_age == '43')||($my_age == '51')||($my_age == '59')||($my_age == '67')||($my_age == '75'))&&($my_sex == '남')) {
$senggi_01 = '酉'; $senggi_02 = ''; $bokduk_01 = '丑'; $bokduk_02 = '寅'; $cheneu_01 = '卯'; $cheneu_02 = '';}

################남끝

if ((($my_age == '3')||($my_age == '10')||($my_age == '18')||($my_age == '26')||($my_age == '34')||($my_age == '42')||($my_age == '50')||($my_age == '58')||($my_age == '66')||($my_age == '74'))&&($my_sex == '여')) {
$senggi_01 = '戌'; $senggi_02 = '亥'; $bokduk_01 = '未'; $bokduk_02 = '申'; $cheneu_01 = '午'; $cheneu_02 = '';}

if ((($my_age == '4')||($my_age == '11')||($my_age == '19')||($my_age == '27')||($my_age == '35')||($my_age == '43')||($my_age == '51')||($my_age == '59')||($my_age == '67')||($my_age == '75'))&&($my_sex == '여')) {
$senggi_01 = '丑'; $senggi_02 = '寅'; $bokduk_01 = '酉'; $bokduk_02 = ''; $cheneu_01 = '辰'; $cheneu_02 = '巳';}

if ((($my_age == '5')||($my_age == '12')||($my_age == '20')||($my_age == '28')||($my_age == '36')||($my_age == '44')||($my_age == '52')||($my_age == '60')||($my_age == '68')||($my_age == '76'))&&($my_sex == '여')) {
$senggi_01 = '卯'; $senggi_02 = ''; $bokduk_01 = '辰'; $bokduk_02 = '巳'; $cheneu_01 = '酉'; $cheneu_02 = '';}

if ((($my_age == '6')||($my_age == '13')||($my_age == '21')||($my_age == '29')||($my_age == '37')||($my_age == '45')||($my_age == '53')||($my_age == '61')||($my_age == '69')||($my_age == '77'))&&($my_sex == '여')) {
$senggi_01 = '子'; $senggi_02 = ''; $bokduk_01 = '午'; $bokduk_02 = ''; $cheneu_01 = '未'; $cheneu_02 = '申';}

if ((($my_age == '7')||($my_age == '14')||($my_age == '22')||($my_age == '30')||($my_age == '38')||($my_age == '46')||($my_age == '54')||($my_age == '62')||($my_age == '70')||($my_age == '78'))&&($my_sex == '여')) {
$senggi_01 = '午'; $senggi_02 = ''; $bokduk_01 = '戌'; $bokduk_02 = '亥'; $cheneu_01 = '子'; $cheneu_02 = '';}

if ((($my_age == '')||($my_age == '15')||($my_age == '23')||($my_age == '31')||($my_age == '39')||($my_age == '47')||($my_age == '55')||($my_age == '63')||($my_age == '71')||($my_age == '79'))&&($my_sex == '여')) {
$senggi_01 = '未'; $senggi_02 = '申'; $bokduk_01 = '戌'; $bokduk_02 = '亥'; $cheneu_01 = '子'; $cheneu_02 = '';}

if ((($my_age == '1')||($my_age == '8')||($my_age == '16')||($my_age == '24')||($my_age == '32')||($my_age == '40')||($my_age == '48')||($my_age == '56')||($my_age == '64')||($my_age == '72')||($my_age == '80'))&&($my_sex == '여')) {
$senggi_01 = '辰'; $senggi_02 = '巳'; $bokduk_01 = '卯'; $bokduk_02 = ''; $cheneu_01 = '丑'; $cheneu_02 = '寅';}

if ((($my_age == '2')||($my_age == '9')||($my_age == '17')||($my_age == '25')||($my_age == '33')||($my_age == '41')||($my_age == '49')||($my_age == '57')||($my_age == '65')||($my_age == '73')||($my_age == '81'))&&($my_sex == '여')) {
$senggi_01 = '酉'; $senggi_02 = ''; $bokduk_01 = '丑'; $bokduk_02 = '寅'; $cheneu_01 = '卯'; $cheneu_02 = '';}






//echo "$my_sex  $my_age 생기[$senggi_01 $senggi_02]  복덕[$bokduk_01  $bokduk_02 ] 천의[$cheneu_01  $cheneu_02]";


###########################################################

#갑자 을축 병인 정묘 무진 기사 경오 신미 임신 계유
#갑술 을해 병자 정축 무인 기묘 경진 신사 임오 계미
#갑신 을유 병술 정해 무자 기축 경인 신묘 임진 계사
#갑오 을미 병신 정유 무술 기해 경자 신축 임인 계묘
#갑진 을사 병오 정미 무신 기유 경술 신해 임자 계축
#갑인 을묘 병진 정사 무오 기미 경신 신유 임술 계해

if (($toyear_e == '子')||($toyear_e == '午')||($toyear_e == '卯')||($toyear_e == '酉')) {$aa = array('甲子','乙丑','丙寅','丁卯','戊辰','己巳','庚午','辛未','壬申','癸酉','甲午','乙未','丙申','丁酉','戊戌','己亥','庚子','辛丑','壬寅','癸卯');}
if (($toyear_e == '辰')||($toyear_e == '戌')||($toyear_e == '丑')||($toyear_e == '未')) {$aa = array('甲辰','乙巳','丙午','丁未','戊申','己酉','庚戌','辛亥','壬子','癸丑','甲戌','乙亥','丙子','丁丑','戊寅','己卯','庚辰','辛巳','壬午','癸未');}
if (($toyear_e == '寅')||($toyear_e == '申')||($toyear_e == '巳')||($toyear_e == '亥')) {$aa = array('甲寅','乙卯','丙辰','丁巳','戊午','己未','庚申','辛酉','壬戌','癸亥','甲申','乙酉','丙戌','丁亥','戊子','己丑','庚寅','辛卯','壬辰','癸巳');}


for ($k = 1; $k<sizeof($sum_day_he)+1; $k++) {

		for ($i = 0 ; $i<20; $i++) {

			if ($sum_day_he[$k] == $aa[$i]) {$color[$k] = "blue"; $color_jumsu[$k] = '20';}
			
			
			}
}





for ($q = 1; $q<sizeof($sum_day_he)+1; $q++) {

			
			if ((($sum_month_e[$q] == '巳')||($sum_month_e[$q] == '亥'))&&($sum_day_e[$q] == '午')) {$whangdo[$q] = '청룡황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '巳')||($sum_month_e[$q] == '亥'))&&($sum_day_e[$q] == '未')) {$whangdo[$q] = '명당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '巳')||($sum_month_e[$q] == '亥'))&&($sum_day_e[$q] == '戌')) {$whangdo[$q] = '금궤황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '巳')||($sum_month_e[$q] == '亥'))&&($sum_day_e[$q] == '亥')) {$whangdo[$q] = '천덕황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '巳')||($sum_month_e[$q] == '亥'))&&($sum_day_e[$q] == '丑')) {$whangdo[$q] = '옥당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '巳')||($sum_month_e[$q] == '亥'))&&($sum_day_e[$q] == '辰')) {$whangdo[$q] = '사명황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			
			if ((($sum_month_e[$q] == '午')||($sum_month_e[$q] == '子'))&&($sum_day_e[$q] == '申')) {$whangdo[$q] = '청룡황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '午')||($sum_month_e[$q] == '子'))&&($sum_day_e[$q] == '酉')) {$whangdo[$q] = '명당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '午')||($sum_month_e[$q] == '子'))&&($sum_day_e[$q] == '子')) {$whangdo[$q] = '금궤황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '午')||($sum_month_e[$q] == '子'))&&($sum_day_e[$q] == '丑')) {$whangdo[$q] = '천덕황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '午')||($sum_month_e[$q] == '子'))&&($sum_day_e[$q] == '卯')) {$whangdo[$q] = '옥당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '午')||($sum_month_e[$q] == '子'))&&($sum_day_e[$q] == '午')) {$whangdo[$q] = '사명황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}

			if ((($sum_month_e[$q] == '未')||($sum_month_e[$q] == '丑'))&&($sum_day_e[$q] == '戌')) {$whangdo[$q] = '청룡황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '未')||($sum_month_e[$q] == '丑'))&&($sum_day_e[$q] == '亥')) {$whangdo[$q] = '명당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '未')||($sum_month_e[$q] == '丑'))&&($sum_day_e[$q] == '寅')) {$whangdo[$q] = '금궤황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '未')||($sum_month_e[$q] == '丑'))&&($sum_day_e[$q] == '卯')) {$whangdo[$q] = '천덕황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '未')||($sum_month_e[$q] == '丑'))&&($sum_day_e[$q] == '巳')) {$whangdo[$q] = '옥당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '未')||($sum_month_e[$q] == '丑'))&&($sum_day_e[$q] == '申')) {$whangdo[$q] = '사명황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}

			if ((($sum_month_e[$q] == '寅')||($sum_month_e[$q] == '申'))&&($sum_day_e[$q] == '子')) {$whangdo[$q] = '청룡황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '寅')||($sum_month_e[$q] == '申'))&&($sum_day_e[$q] == '丑')) {$whangdo[$q] = '명당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '寅')||($sum_month_e[$q] == '申'))&&($sum_day_e[$q] == '辰')) {$whangdo[$q] = '금궤황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '寅')||($sum_month_e[$q] == '申'))&&($sum_day_e[$q] == '巳')) {$whangdo[$q] = '천덕황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '寅')||($sum_month_e[$q] == '申'))&&($sum_day_e[$q] == '未')) {$whangdo[$q] = '옥당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '寅')||($sum_month_e[$q] == '申'))&&($sum_day_e[$q] == '戌')) {$whangdo[$q] = '사명황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}

			if ((($sum_month_e[$q] == '卯')||($sum_month_e[$q] == '酉'))&&($sum_day_e[$q] == '寅')) {$whangdo[$q] = '청룡황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '卯')||($sum_month_e[$q] == '酉'))&&($sum_day_e[$q] == '卯')) {$whangdo[$q] = '명당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '卯')||($sum_month_e[$q] == '酉'))&&($sum_day_e[$q] == '午')) {$whangdo[$q] = '금궤황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '卯')||($sum_month_e[$q] == '酉'))&&($sum_day_e[$q] == '未')) {$whangdo[$q] = '천덕황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '卯')||($sum_month_e[$q] == '酉'))&&($sum_day_e[$q] == '酉')) {$whangdo[$q] = '옥당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '卯')||($sum_month_e[$q] == '酉'))&&($sum_day_e[$q] == '子')) {$whangdo[$q] = '사명황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}

			if ((($sum_month_e[$q] == '辰')||($sum_month_e[$q] == '戌'))&&($sum_day_e[$q] == '辰')) {$whangdo[$q] = '청룡황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '辰')||($sum_month_e[$q] == '戌'))&&($sum_day_e[$q] == '巳')) {$whangdo[$q] = '명당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '辰')||($sum_month_e[$q] == '戌'))&&($sum_day_e[$q] == '申')) {$whangdo[$q] = '금궤황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '辰')||($sum_month_e[$q] == '戌'))&&($sum_day_e[$q] == '酉')) {$whangdo[$q] = '천덕황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '辰')||($sum_month_e[$q] == '戌'))&&($sum_day_e[$q] == '亥')) {$whangdo[$q] = '옥당황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}
			if ((($sum_month_e[$q] == '辰')||($sum_month_e[$q] == '戌'))&&($sum_day_e[$q] == '寅')) {$whangdo[$q] = '사명황도'; $whangdo_title[$q] = '<img src=/UNSE_DATA/images/S111_img/whangdo.gif>'; $whangdo_jumsu[$q] = '30';}

                        if (($sum_day_e[$q] == $senggi_01)||($sum_day_e[$q] == $senggi_02)) {$senggi[$q] = '생기';$senggi_title[$q] = '<img src=/UNSE_DATA/images/S111_img/senggi.gif>'; $sbc_jumsu[$q] = '30';}
			if (($sum_day_e[$q] == $bokduk_01)||($sum_day_e[$q] == $bokduk_02)) {$bokduk[$q] = '복덕';$bokduk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/senggi.gif>'; $sbc_jumsu[$q] = '30';}
			if (($sum_day_e[$q] == $cheneu_01)||($sum_day_e[$q] == $cheneu_02)) {$cheneu[$q] = '천의';$cheneu_title[$q] = '<img src=/UNSE_DATA/images/S111_img/senggi.gif>'; $sbc_jumsu[$q] = '30';}
			
			if ((($sum_year_h[$q] == '甲')||($sum_year_h[$q] == '己'))&&($sum_month_e[$q] == '辰')&&($sum_day_he[$q] == '戊戌')) {$sipak[$q] = '십악대패';$sipak_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sipak.gif>'; $sipak_jumsu[$q] = '-40';}
			if ((($sum_year_h[$q] == '甲')||($sum_year_h[$q] == '己'))&&($sum_month_e[$q] == '申')&&($sum_day_he[$q] == '癸亥')) {$sipak[$q] = '십악대패';$sipak_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sipak.gif>'; $sipak_jumsu[$q] = '-40';}
			if ((($sum_year_h[$q] == '甲')||($sum_year_h[$q] == '己'))&&($sum_month_e[$q] == '亥')&&($sum_day_he[$q] == '丙申')) {$sipak[$q] = '십악대패';$sipak_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sipak.gif>'; $sipak_jumsu[$q] = '-40';}
			if ((($sum_year_h[$q] == '甲')||($sum_year_h[$q] == '己'))&&($sum_month_e[$q] == '子')&&($sum_day_he[$q] == '辛亥')) {$sipak[$q] = '십악대패';$sipak_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sipak.gif>'; $sipak_jumsu[$q] = '-40';}
			if ((($sum_year_h[$q] == '乙')||($sum_year_h[$q] == '庚'))&&($sum_month_e[$q] == '巳')&&($sum_day_he[$q] == '壬申')) {$sipak[$q] = '십악대패';$sipak_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sipak.gif>'; $sipak_jumsu[$q] = '-40';}
			if ((($sum_year_h[$q] == '乙')||($sum_year_h[$q] == '庚'))&&($sum_month_e[$q] == '戌')&&($sum_day_he[$q] == '乙巳')) {$sipak[$q] = '십악대패';$sipak_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sipak.gif>'; $sipak_jumsu[$q] = '-40';}
			if ((($sum_year_h[$q] == '丙')||($sum_year_h[$q] == '辛'))&&($sum_month_e[$q] == '辰')&&($sum_day_he[$q] == '辛巳')) {$sipak[$q] = '십악대패';$sipak_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sipak.gif>'; $sipak_jumsu[$q] = '-40';}
			if ((($sum_year_h[$q] == '丙')||($sum_year_h[$q] == '辛'))&&($sum_month_e[$q] == '戌')&&($sum_day_he[$q] == '庚辰')) {$sipak[$q] = '십악대패';$sipak_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sipak.gif>'; $sipak_jumsu[$q] = '-40';}
			if ((($sum_year_h[$q] == '戊')||($sum_year_h[$q] == '癸'))&&($sum_month_e[$q] == '未')&&($sum_day_he[$q] == '己丑')) {$sipak[$q] = '십악대패';$sipak_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sipak.gif>'; $sipak_jumsu[$q] = '-40';}


			
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_h[$q] == '丁'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '辰')&&($sum_day_h[$q] == '壬'))||(($sum_month_e[$q] == '巳')&&($sum_day_h[$q] == '辛'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '亥'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '申')&&($sum_day_h[$q] == '癸'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '戌')&&($sum_day_h[$q] == '丙'))||(($sum_month_e[$q] == '亥')&&($sum_day_h[$q] == '乙'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '丑')&&($sum_day_h[$q] == '庚'))) {
			$chenduk[$q] = '천덕';$gilsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gilsin.gif>'; $chenduk_jumsu[$q] = '10';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_h[$q] == '丙'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '辰')&&($sum_day_h[$q] == '壬'))||(($sum_month_e[$q] == '巳')&&($sum_day_h[$q] == '庚'))||(($sum_month_e[$q] == '午')&&($sum_day_h[$q] == '丙'))||(($sum_month_e[$q] == '未')&&($sum_day_h[$q] == '甲'))||(($sum_month_e[$q] == '申')&&($sum_day_h[$q] == '壬'))||(($sum_month_e[$q] == '酉')&&($sum_day_h[$q] == '庚'))||(($sum_month_e[$q] == '戌')&&($sum_day_h[$q] == '丙'))||(($sum_month_e[$q] == '亥')&&($sum_day_h[$q] == '甲'))||(($sum_month_e[$q] == '子')&&($sum_day_h[$q] == '壬'))||(($sum_month_e[$q] == '丑')&&($sum_day_h[$q] == '庚'))) {
			$wolduk[$q] = '월덕';$gilsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gilsin.gif>'; $wolduk_jumsu[$q] = '10';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_h[$q] == '壬'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '辰')&&($sum_day_h[$q] == '丁'))||(($sum_month_e[$q] == '巳')&&($sum_day_h[$q] == '丙'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '未')&&($sum_day_h[$q] == '己'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '亥'))||(($sum_month_e[$q] == '戌')&&($sum_day_h[$q] == '辛'))||(($sum_month_e[$q] == '亥')&&($sum_day_h[$q] == '庚'))||(($sum_month_e[$q] == '子')&&($sum_day_h[$q] == '甲'))||(($sum_month_e[$q] == '丑')&&($sum_day_h[$q] == '乙'))) {
			$chendukhap[$q] = '천덕합';$gilsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gilsin.gif>'; $chendukhap_jumsu[$q] = '10';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_h[$q] == '辛'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '辰')&&($sum_day_h[$q] == '丁'))||(($sum_month_e[$q] == '巳')&&($sum_day_h[$q] == '乙'))||(($sum_month_e[$q] == '午')&&($sum_day_h[$q] == '辛'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '申')&&($sum_day_h[$q] == '丁'))||(($sum_month_e[$q] == '酉')&&($sum_day_h[$q] == '乙'))||(($sum_month_e[$q] == '戌')&&($sum_day_h[$q] == '辛'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '子')&&($sum_day_h[$q] == '丁'))||(($sum_month_e[$q] == '丑')&&($sum_day_h[$q] == '乙'))) {
			$woldukhap[$q] = '월덕합';$gilsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gilsin.gif>'; $woldukhap_jumsu[$q] = '10';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '亥'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '酉'))) {
			$seng[$q] = '생기';$gilsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gilsin.gif>'; $seng_jumsu[$q] = '10';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '酉'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '亥'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '子'))) {
			$chen[$q] = '천의';$gilsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gilsin.gif>'; $chen_jumsu[$q] = '10';}		
			
			
                       
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '巳'))||
			(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '子'))||
			(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '未'))||
			(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '寅'))||
			(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '酉'))||
			(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '辰'))||
			(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '亥'))||
			(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '午'))||
			(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '丑'))||
			(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '申'))||
			(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '卯'))||
			(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '戌'))) {
			$chengang[$q] = '천강';$hyungsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/hyungsin.gif>'; $chengang_jumsu[$q] = '-20';}		
			
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '亥'))||
			(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '午'))||
			(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '丑'))||
			(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '申'))||
			(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '卯'))||
			(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '戌'))||
			(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '巳'))||
			(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '子'))||
			(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '未'))||
			(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '寅'))||
			(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '酉'))||
			(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '辰'))) {
			$hague[$q] = '하괴';$hyungsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/hyungsin.gif>'; $hague_jumsu[$q] = '-20';}		

                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '亥'))||
			(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '子'))||
			(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '丑'))||
			(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '寅'))||
			(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '卯'))||
			(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '辰'))||
			(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '巳'))||
			(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '午'))||
			(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '未'))||
			(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '申'))||
			(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '酉'))||
			(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '戌'))) {
			$jipa[$q] = '지파';$hyungsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/hyungsin.gif>'; $jipa_jumsu[$q] = '-20';}		

                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '子'))||
			(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '申'))||
			(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '巳'))||
			(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '辰'))||
			(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '戌'))||
			(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '亥'))||
			(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '丑'))||
			(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '申'))||
			(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '未'))||
			(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '子'))||
			(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '巳'))||
			(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '申'))) {
			$namang[$q] = '나망';$hyungsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/hyungsin.gif>'; $namang_jumsu[$q] = '-20';}		

                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '丑'))||
			(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '子'))||
			(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '亥'))||
			(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '戌'))||
			(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '酉'))||
			(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '申'))||
			(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '未'))||
			(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '午'))||
			(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '巳'))||
			(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '辰'))||
			(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '卯'))||
			(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '寅'))) {
			$myelmol[$q] = '멸몰'; $hyungsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/hyungsin.gif>';$myelmol_jumsu[$q] = '-20';}		

                        if ((($sum_month_e[$q] == '寅')&&($sum_day_h[$q] == '甲'))||
			(($sum_month_e[$q] == '卯')&&($sum_day_h[$q] == '乙'))||
			(($sum_month_e[$q] == '辰')&&($sum_day_h[$q] == '己'))||
			(($sum_month_e[$q] == '巳')&&($sum_day_h[$q] == '丙'))||
			(($sum_month_e[$q] == '午')&&($sum_day_h[$q] == '丁'))||
			(($sum_month_e[$q] == '未')&&($sum_day_h[$q] == '己'))||
			(($sum_month_e[$q] == '申')&&($sum_day_h[$q] == '庚'))||
			(($sum_month_e[$q] == '酉')&&($sum_day_h[$q] == '辛'))||
			(($sum_month_e[$q] == '戌')&&($sum_day_h[$q] == '己'))||
			(($sum_month_e[$q] == '亥')&&($sum_day_h[$q] == '壬'))||
			(($sum_month_e[$q] == '子')&&($sum_day_h[$q] == '癸'))||
			(($sum_month_e[$q] == '丑')&&($sum_day_h[$q] == '己'))) {
			$jungsang[$q] = '중상';$hyungsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/hyungsin.gif>'; $jungsang_jumsu[$q] = '-20';}		

                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '子'))||
			(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '丑'))||
			(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '寅'))||
			(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '卯'))||
			(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '辰'))||
			(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '巳'))||
			(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '午'))||
			(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '未'))||
			(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '申'))||
			(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '酉'))||
			(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '戌'))||
			(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '亥'))) {
			$chengu[$q] = '천구';$hyungsin_title[$q] = '<img src=/UNSE_DATA/images/S111_img/hyungsin.gif>'; $chengu_jumsu[$q] = '-20';}		
			
			
			
//	chengang=$chengang[$q]&hague=$hague[$q]&jipa=$jipa[$q]&namang=$namang[$q]&myelmol=$myelmol[$q]&jungsang=$jungsang[$q]&chengu=$chengu[$q]	
			
			
			
			
			
			if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '酉'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '亥'))) {
			$chensal[$q] = '천살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $chensal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '酉'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '酉'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '酉'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '卯'))) {
			$pamasal[$q] = '피마살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $pamasal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '亥'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '酉'))) {
			$susasal[$q] = '수사살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $susasal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '亥'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '申'))) {
			$mangrasal[$q] = '망라살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $mangrasal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '酉'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '亥'))) {
			$chenjeoksal[$q] = '천적살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $chenjeoksal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '酉'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '亥'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '巳'))) {
			$gochosal[$q] = '고초살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $gochosal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '子'))) {
			$gueguesal[$q] = '귀기살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $gueguesal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '亥'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '酉'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '丑'))) {
			$wangmangsal[$q] = '왕망살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $wangmangsal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '辰'))) {
			$sipaksal[$q] = '십악살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $sipaksal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '酉'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '申'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '巳'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '卯'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '亥'))) {
			$wolapsal[$q] = '월압살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $wolapsal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '辰'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '丑'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '戌'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '未'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '辰'))) {
			$wolsal[$q] = '월살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $wolsal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '卯')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '辰')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '巳')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '午')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '未')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '申')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '酉')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '戌')&&($sum_day_e[$q] == '子'))||(($sum_month_e[$q] == '亥')&&($sum_day_e[$q] == '午'))||(($sum_month_e[$q] == '子')&&($sum_day_e[$q] == '寅'))||(($sum_month_e[$q] == '丑')&&($sum_day_e[$q] == '子'))) {
			$hwangsasal[$q] = '황사살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $hwangsasal_jumsu[$q] = '-15';}
                        if ((($sum_month_e[$q] == '寅')&&(($sum_day_e[$q] == '申')||($sum_day_e[$q] == '酉')))||(($sum_month_e[$q] == '卯')&&(($sum_day_e[$q] == '辰')||($sum_day_e[$q] == '巳')))||(($sum_month_e[$q] == '辰')&&(($sum_day_e[$q] == '子')||($sum_day_e[$q] == '丑')))||(($sum_month_e[$q] == '巳')&&(($sum_day_e[$q] == '申')||($sum_day_e[$q] == '酉')))||(($sum_month_e[$q] == '午')&&(($sum_day_e[$q] == '辰')||($sum_day_e[$q] == '巳')))||(($sum_month_e[$q] == '未')&&(($sum_day_e[$q] == '子')||($sum_day_e[$q] == '丑')))||(($sum_month_e[$q] == '申')&&(($sum_day_e[$q] == '申')||($sum_day_e[$q] == '酉')))||	(($sum_month_e[$q] == '酉')&&(($sum_day_e[$q] == '辰')||($sum_day_e[$q] == '巳')))||(($sum_month_e[$q] == '戌')&&(($sum_day_e[$q] == '子')||($sum_day_e[$q] == '丑')))||(($sum_month_e[$q] == '亥')&&(($sum_day_e[$q] == '申')||($sum_day_e[$q] == '酉')))||(($sum_month_e[$q] == '子')&&(($sum_day_e[$q] == '辰')||($sum_day_e[$q] == '巳')))||(($sum_month_e[$q] == '丑')&&(($sum_day_e[$q] == '子')||($sum_day_e[$q] == '丑')))) {
			$hongsasal[$q] = '홍사살';$sal_title[$q] = '<img src=/UNSE_DATA/images/S111_img/sal.gif>'; $hongsasal_jumsu[$q] = '-15';}
			
			
			

####################################대리월 방모씨 방옹고 방녀부모 방부주 방녀신

if ($my_sex == '남') {$choice_year_e = $your_year_e;}else{$choice_year_e = $my_year_e;}


if ((($choice_year_e == '11')||($choice_year_e == '05'))&&(($sum_month_e[$q] == '丑')||($sum_month_e[$q] == '未'))) {$dae[$q] = '대리월';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/daeri.gif>';$dae_jumsu[$q] = '20';}
if ((($choice_year_e == '11')||($choice_year_e == '05'))&&(($sum_month_e[$q] == '申')||($sum_month_e[$q] == '寅'))) {$dae[$q] = '방모씨';$dae_title[$q] = '';}
if ((($choice_year_e == '11')||($choice_year_e == '05'))&&(($sum_month_e[$q] == '酉')||($sum_month_e[$q] == '卯'))) {$dae[$q] = '방옹고';$dae_title[$q] = '';}
if ((($choice_year_e == '11')||($choice_year_e == '05'))&&(($sum_month_e[$q] == '戌')||($sum_month_e[$q] == '辰'))) {$dae[$q] = '방녀부모';$dae_title[$q] = '';}
if ((($choice_year_e == '11')||($choice_year_e == '05'))&&(($sum_month_e[$q] == '亥')||($sum_month_e[$q] == '巳'))) {$dae[$q] = '방부주';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/buzu.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '11')||($choice_year_e == '05'))&&(($sum_month_e[$q] == '子')||($sum_month_e[$q] == '午'))) {$dae[$q] = '방녀신';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/yesin.gif>';$dae_jumsu[$q] = '-20';}

if ((($choice_year_e == '12')||($choice_year_e == '06'))&&(($sum_month_e[$q] == '丑')||($sum_month_e[$q] == '未'))) {$dae[$q] = '방녀신';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/yesin.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '12')||($choice_year_e == '06'))&&(($sum_month_e[$q] == '申')||($sum_month_e[$q] == '寅'))) {$dae[$q] = '방부주';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/buzu.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '12')||($choice_year_e == '06'))&&(($sum_month_e[$q] == '酉')||($sum_month_e[$q] == '卯'))) {$dae[$q] = '방녀부모';$dae_title[$q] = '';}
if ((($choice_year_e == '12')||($choice_year_e == '06'))&&(($sum_month_e[$q] == '戌')||($sum_month_e[$q] == '辰'))) {$dae[$q] = '방옹고';$dae_title[$q] = '';}
if ((($choice_year_e == '12')||($choice_year_e == '06'))&&(($sum_month_e[$q] == '亥')||($sum_month_e[$q] == '巳'))) {$dae[$q] = '방모씨';$dae_title[$q] = '';}
if ((($choice_year_e == '12')||($choice_year_e == '06'))&&(($sum_month_e[$q] == '子')||($sum_month_e[$q] == '午'))) {$dae[$q] = '대리월';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/daeri.gif>';$dae_jumsu[$q] = '20';}

if ((($choice_year_e == '01')||($choice_year_e == '07'))&&(($sum_month_e[$q] == '丑')||($sum_month_e[$q] == '未'))) {$dae[$q] = '방부주';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/buzu.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '01')||($choice_year_e == '07'))&&(($sum_month_e[$q] == '申')||($sum_month_e[$q] == '寅'))) {$dae[$q] = '방녀신';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/yesin.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '01')||($choice_year_e == '07'))&&(($sum_month_e[$q] == '酉')||($sum_month_e[$q] == '卯'))) {$dae[$q] = '대리월';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/daeri.gif>';$dae_jumsu[$q] = '20';}
if ((($choice_year_e == '01')||($choice_year_e == '07'))&&(($sum_month_e[$q] == '戌')||($sum_month_e[$q] == '辰'))) {$dae[$q] = '방모씨';$dae_title[$q] = '';}
if ((($choice_year_e == '01')||($choice_year_e == '07'))&&(($sum_month_e[$q] == '亥')||($sum_month_e[$q] == '巳'))) {$dae[$q] = '방옹고';$dae_title[$q] = '';}
if ((($choice_year_e == '01')||($choice_year_e == '07'))&&(($sum_month_e[$q] == '子')||($sum_month_e[$q] == '午'))) {$dae[$q] = '방녀부모';$dae_title[$q] = '';}

if ((($choice_year_e == '02')||($choice_year_e == '08'))&&(($sum_month_e[$q] == '丑')||($sum_month_e[$q] == '未'))) {$dae[$q] = '방모씨';$dae_title[$q] = '';}
if ((($choice_year_e == '02')||($choice_year_e == '08'))&&(($sum_month_e[$q] == '申')||($sum_month_e[$q] == '寅'))) {$dae[$q] = '대리월';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/daeri.gif>';$dae_jumsu[$q] = '20';}
if ((($choice_year_e == '02')||($choice_year_e == '08'))&&(($sum_month_e[$q] == '酉')||($sum_month_e[$q] == '卯'))) {$dae[$q] = '방녀신';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/yesin.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '02')||($choice_year_e == '08'))&&(($sum_month_e[$q] == '戌')||($sum_month_e[$q] == '辰'))) {$dae[$q] = '방부주';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/buzu.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '02')||($choice_year_e == '08'))&&(($sum_month_e[$q] == '亥')||($sum_month_e[$q] == '巳'))) {$dae[$q] = '방녀부모';$dae_title[$q] = '';}
if ((($choice_year_e == '02')||($choice_year_e == '08'))&&(($sum_month_e[$q] == '子')||($sum_month_e[$q] == '午'))) {$dae[$q] = '방옹고';$dae_title[$q] = '';}

if ((($choice_year_e == '03')||($choice_year_e == '09'))&&(($sum_month_e[$q] == '丑')||($sum_month_e[$q] == '未'))) {$dae[$q] = '방옹고';$dae_title[$q] = '';}
if ((($choice_year_e == '03')||($choice_year_e == '09'))&&(($sum_month_e[$q] == '申')||($sum_month_e[$q] == '寅'))) {$dae[$q] = '방녀부모';$dae_title[$q] = '모';}
if ((($choice_year_e == '03')||($choice_year_e == '09'))&&(($sum_month_e[$q] == '酉')||($sum_month_e[$q] == '卯'))) {$dae[$q] = '방부주';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/buzu.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '03')||($choice_year_e == '09'))&&(($sum_month_e[$q] == '戌')||($sum_month_e[$q] == '辰'))) {$dae[$q] = '방녀신';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/yesin.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '03')||($choice_year_e == '09'))&&(($sum_month_e[$q] == '亥')||($sum_month_e[$q] == '巳'))) {$dae[$q] = '대리월';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/daeri.gif>';$dae_jumsu[$q] = '20';}
if ((($choice_year_e == '03')||($choice_year_e == '09'))&&(($sum_month_e[$q] == '子')||($sum_month_e[$q] == '午'))) {$dae[$q] = '방모씨';$dae_title[$q] = '';}

if ((($choice_year_e == '04')||($choice_year_e == '10'))&&(($sum_month_e[$q] == '丑')||($sum_month_e[$q] == '未'))) {$dae[$q] = '방녀부모';$dae_title[$q] = '';}
if ((($choice_year_e == '04')||($choice_year_e == '10'))&&(($sum_month_e[$q] == '申')||($sum_month_e[$q] == '寅'))) {$dae[$q] = '방옹고';$dae_title[$q] = '';}
if ((($choice_year_e == '04')||($choice_year_e == '10'))&&(($sum_month_e[$q] == '酉')||($sum_month_e[$q] == '卯'))) {$dae[$q] = '방모씨';$dae_title[$q] = '';}
if ((($choice_year_e == '04')||($choice_year_e == '10'))&&(($sum_month_e[$q] == '戌')||($sum_month_e[$q] == '辰'))) {$dae[$q] = '대리월';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/daeri.gif>';$dae_jumsu[$q] = '20';}
if ((($choice_year_e == '04')||($choice_year_e == '10'))&&(($sum_month_e[$q] == '亥')||($sum_month_e[$q] == '巳'))) {$dae[$q] = '방녀신';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/yesin.gif>';$dae_jumsu[$q] = '-20';}
if ((($choice_year_e == '04')||($choice_year_e == '10'))&&(($sum_month_e[$q] == '子')||($sum_month_e[$q] == '午'))) {$dae[$q] = '방부주';$dae_title[$q] = '<img src=/UNSE_DATA/images/S111_img/buzu.gif>';$dae_jumsu[$q] = '-20';}


#############################################################################축음양불장길일
#인월 : 병인 정묘 병자 무인 기묘 무자 기축 경인 신묘 경자 신축
#묘월 : 을축 병인 병자 무인 무자 기축 경인 무술 경자 경술
#진월 : 갑자 을축 갑술 병자 을유 무자 기축 정유 무술 기유
#사월 : 갑자 갑술 병자 갑신 을유 무자 병신 정유 무술 무신 기유
#오월 : 계유 갑술 계미 갑신 을유 병신 무술 무신
#미월 : 임신 계유 갑술 임오 계미 갑신 을유 갑오
#신월 : 임신 계유 임오 계미 갑신 을유 계사 갑오 을사
#유월 : 신미 임신 신사 임오 계미 갑신 임진 계사 갑오
#술월 : 경오 신미 경진 신사 임오 계미 신묘 임진 계사 계묘
#해월 : 경오 경진 신사 임오 경인 신묘 임진 계사 임인 계묘
#자월 : 정묘 기사 기묘 경진신사 기축 경인 신묘 임진 신축 임인 정사
#축월 : 병인 정묘 무진 병자 무인 기묘 경진 무자 기축 경인 신묘 경자 신축 병진 정사 기사 신사

	
if (($sum_month_e[$q] == '寅')&&(($sum_day_he[$q] == '丙寅')||
                                           ($sum_day_he[$q] == '丁卯')||
					   ($sum_day_he[$q] == '丙子')||
					   ($sum_day_he[$q] == '戊寅')||
					   ($sum_day_he[$q] == '己卯')||
					   ($sum_day_he[$q] == '戊子')||
					   ($sum_day_he[$q] == '己丑')||
					   ($sum_day_he[$q] == '庚寅')||
					   ($sum_day_he[$q] == '辛卯')||
					   ($sum_day_he[$q] == '庚子')||
					   ($sum_day_he[$q] == '辛丑')))
{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}

if (($sum_month_e[$q] == '卯')&&(($sum_day_he[$q] == '乙丑')||
                                           ($sum_day_he[$q] == '丙寅')||
					   ($sum_day_he[$q] == '丙子')||
					   ($sum_day_he[$q] == '戊寅')||
					   ($sum_day_he[$q] == '戊子')||
					   ($sum_day_he[$q] == '己丑')||
					   ($sum_day_he[$q] == '庚寅')||
					   ($sum_day_he[$q] == '戊戌')||
					   ($sum_day_he[$q] == '庚子')||
					   ($sum_day_he[$q] == '庚戌')))
{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}

if (($sum_month_e[$q] == '辰')&&(($sum_day_he[$q] == '甲子')||
                                           ($sum_day_he[$q] == '乙丑')||
					   ($sum_day_he[$q] == '甲戌')||
					   ($sum_day_he[$q] == '丙子')||
					   ($sum_day_he[$q] == '乙酉')||
					   ($sum_day_he[$q] == '戊子')||
					   ($sum_day_he[$q] == '己丑')||
					   ($sum_day_he[$q] == '丁酉')||
					   ($sum_day_he[$q] == '戊戌')||
					   ($sum_day_he[$q] == '己酉')))
{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}

if (($sum_month_e[$q] == '巳')&&(($sum_day_he[$q] == '甲子')||
                                           ($sum_day_he[$q] == '甲戌')||
					   ($sum_day_he[$q] == '丙子')||
					   ($sum_day_he[$q] == '甲申')||
					   ($sum_day_he[$q] == '乙酉')||
					   ($sum_day_he[$q] == '戊子')||
					   ($sum_day_he[$q] == '丙申')||
					   ($sum_day_he[$q] == '丁酉')||
					   ($sum_day_he[$q] == '戊戌')||
					   ($sum_day_he[$q] == '戊申')||
					   ($sum_day_he[$q] == '己酉')))
{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}
 
if (($sum_month_e[$q] == '午')&&(($sum_day_he[$q] == '癸酉')||
                                           ($sum_day_he[$q] == '甲戌')||
					   ($sum_day_he[$q] == '癸未')||
					   ($sum_day_he[$q] == '甲申')||
					   ($sum_day_he[$q] == '乙酉')||
					   ($sum_day_he[$q] == '丙申')||
					   ($sum_day_he[$q] == '戊戌')||
					   ($sum_day_he[$q] == '戊申')))

{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}

if (($sum_month_e[$q] == '未')&&(($sum_day_he[$q] == '壬申')||
                                           ($sum_day_he[$q] == '癸酉')||
					   ($sum_day_he[$q] == '甲戌')||
					   ($sum_day_he[$q] == '壬午')||
					   ($sum_day_he[$q] == '癸未')||
					   ($sum_day_he[$q] == '甲申')||
					   ($sum_day_he[$q] == '乙酉')||
					   ($sum_day_he[$q] == '甲午')))

{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}


if (($sum_month_e[$q] == '申')&&(($sum_day_he[$q] == '壬申')||
                                           ($sum_day_he[$q] == '癸酉')||
					   ($sum_day_he[$q] == '壬午')||
					   ($sum_day_he[$q] == '癸未')||
					   ($sum_day_he[$q] == '甲申')||
					   ($sum_day_he[$q] == '乙酉')||
					   ($sum_day_he[$q] == '癸巳')||
					   ($sum_day_he[$q] == '甲午')||
					   ($sum_day_he[$q] == '乙巳')))

{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}

if (($sum_month_e[$q] == '酉')&&(($sum_day_he[$q] == '辛未')||
                                           ($sum_day_he[$q] == '壬申')||
					   ($sum_day_he[$q] == '辛巳')||
					   ($sum_day_he[$q] == '壬午')||
					   ($sum_day_he[$q] == '癸未')||
					   ($sum_day_he[$q] == '甲申')||
					   ($sum_day_he[$q] == '壬辰')||
					   ($sum_day_he[$q] == '癸巳')||
					   ($sum_day_he[$q] == '甲午')))

{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}

if (($sum_month_e[$q] == '戌')&&(($sum_day_he[$q] == '庚午')||
                                           ($sum_day_he[$q] == '辛未')||
					   ($sum_day_he[$q] == '庚辰')||
					   ($sum_day_he[$q] == '辛巳')||
					   ($sum_day_he[$q] == '壬午')||
					   ($sum_day_he[$q] == '癸未')||
					   ($sum_day_he[$q] == '辛卯')||
					   ($sum_day_he[$q] == '壬辰')||
					   ($sum_day_he[$q] == '癸巳')||
					   ($sum_day_he[$q] == '癸卯')))

{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}

if (($sum_month_e[$q] == '亥')&&(($sum_day_he[$q] == '庚午')||
					   ($sum_day_he[$q] == '庚辰')||
					   ($sum_day_he[$q] == '辛巳')||
					   ($sum_day_he[$q] == '壬午')||
					   ($sum_day_he[$q] == '庚寅')||
					   ($sum_day_he[$q] == '辛卯')||
					   ($sum_day_he[$q] == '壬辰')||
					   ($sum_day_he[$q] == '癸巳')||
					   ($sum_day_he[$q] == '壬寅')||
					   ($sum_day_he[$q] == '癸卯')))

{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}

if (($sum_month_e[$q] == '子')&&(($sum_day_he[$q] == '丁卯')||
					   ($sum_day_he[$q] == '己巳')||
					   ($sum_day_he[$q] == '己卯')||
					   ($sum_day_he[$q] == '庚辰')||
					   ($sum_day_he[$q] == '辛巳')||
					   ($sum_day_he[$q] == '己丑')||
					   ($sum_day_he[$q] == '庚寅')||
					   ($sum_day_he[$q] == '辛卯')||
					   ($sum_day_he[$q] == '壬辰')||
					   ($sum_day_he[$q] == '辛丑')||
					   ($sum_day_he[$q] == '壬寅')||
					   ($sum_day_he[$q] == '丁巳')))

{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}


if (($sum_month_e[$q] == '丑')&&(($sum_day_he[$q] == '丙寅')||
					   ($sum_day_he[$q] == '丁卯')||
					   ($sum_day_he[$q] == '戊辰')||
					   ($sum_day_he[$q] == '丙子')||
					   ($sum_day_he[$q] == '戊寅')||
					   ($sum_day_he[$q] == '己卯')||
					   ($sum_day_he[$q] == '庚辰')||
					   ($sum_day_he[$q] == '戊子')||
					   ($sum_day_he[$q] == '己丑')||
					   ($sum_day_he[$q] == '庚寅')||
					   ($sum_day_he[$q] == '辛卯')||
					   ($sum_day_he[$q] == '庚子')||
					   ($sum_day_he[$q] == '辛丑')||
					   ($sum_day_he[$q] == '丙辰')||
					   ($sum_day_he[$q] == '丁巳')||
					   ($sum_day_he[$q] == '己巳')||
					   ($sum_day_he[$q] == '辛巳')))

{$chuk[$q] = '축음양불장길';$chuk_title[$q] = '<img src=/UNSE_DATA/images/S111_img/umyang.gif>';$chuk_jumsu[$q] = '24';}


####################################################################월기일 매월 초5일 14일 23 일 ###########인동일

if (($sum_to_umdate[$q] == '05')||($sum_to_umdate[$q] == '14')||($sum_to_umdate[$q] == '23')) {$wolgi[$q] = '월기일';$wolgi_title[$q] = '<img src=/UNSE_DATA/images/S111_img/wolgi.gif>';$wolgi_jumsu[$q] = '-21';}
if (($sum_to_umdate[$q] == '01')||($sum_to_umdate[$q] == '08')||($sum_to_umdate[$q] == '13')||($sum_to_umdate[$q] == '18')||($sum_to_umdate[$q] == '23')||($sum_to_umdate[$q] == '24')||($sum_to_umdate[$q] == '28')) {$indong[$q] = '인동일';$indong_title[$q] = '<img src=/UNSE_DATA/images/S111_img/indong.gif>';$indong_jumsu[$q] = '-21';}

#########################################################################가취대흉일

if ((($sum_month_e[$q] == '寅')||($sum_month_e[$q] == '卯')||($sum_month_e[$q] == '辰')) && (($sum_day_he[$q] == '甲子')||($sum_day_he[$q] == '乙丑'))) {$gachui[$q] = '가취대흉일';$gachui_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gachui.gif>';$gachui_jumsu[$q] = '-21';}
if ((($sum_month_e[$q] == '巳')||($sum_month_e[$q] == '午')||($sum_month_e[$q] == '未')) && (($sum_day_he[$q] == '丙子')||($sum_day_he[$q] == '丁丑'))) {$gachui[$q] = '가취대흉일';$gachui_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gachui.gif>';$gachui_jumsu[$q] = '-21';}
if ((($sum_month_e[$q] == '申')||($sum_month_e[$q] == '酉')||($sum_month_e[$q] == '戌')) && (($sum_day_he[$q] == '庚子')||($sum_day_he[$q] == '辛丑'))) {$gachui[$q] = '가취대흉일';$gachui_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gachui.gif>';$gachui_jumsu[$q] = '-21';}
if ((($sum_month_e[$q] == '亥')||($sum_month_e[$q] == '子')||($sum_month_e[$q] == '丑')) && (($sum_day_he[$q] == '壬子')||($sum_day_he[$q] == '癸丑'))) {$gachui[$q] = '가취대흉일';$gachui_title[$q] = '<img src=/UNSE_DATA/images/S111_img/gachui.gif>';$gachui_jumsu[$q] = '-21';}
#########################################################################매달해일
if ($sum_day_e[$q] == '亥') {$haeil[$q] = '해일';$haeil_jumsu[$q] = '-11';}


}
?>




<TABLE cellSpacing=1 cellPadding=5 border=0  align=center bgcolor=CCCCCC>
<tr bgcolor=f8f8f8><td>
<font color=blue>아래의 택일 달력 보는 법을 자세히 읽어 보시고 택일 하시기 바랍니다.</font><br>
<ul>
<li><font color=CC0000>√</font> 표시 옆에 있는  날짜를 클릭하시면 자세한 그 날의 설명을 볼 수 있습니다.<br>
<li>날짜 옆에 () 안에 적혀 있는 일간지가 <font color=blue>청색</font> 으로 나타나 있으면 그 날은 삼갑순법중 생갑순에 속하는 좋은 날 입니다.<br>
<li><img src=/UNSE_DATA/images/S111_img/sal.gif> <img src=/UNSE_DATA/images/S111_img/wolgi.gif> <img src=/UNSE_DATA/images/S111_img/hyungsin.gif> <img src=/UNSE_DATA/images/S111_img/indong.gif> <img src=/UNSE_DATA/images/S111_img/gachui.gif> 등의
검은색 바탕의 아이콘은 흉함을 뜻하고 <img src=/UNSE_DATA/images/S111_img/gilsin.gif> <img src=/UNSE_DATA/images/S111_img/whangdo.gif>  <img src=/UNSE_DATA/images/S111_img/umyang.gif> <img src=/UNSE_DATA/images/S111_img/senggi.gif> 등의 색깔이 있는 아이콘은 길함을 의미합니다. 
<li>점수는 100 점 이상이 되면 아주 좋은 길일이라고 보셔도 무방합니다.
<li>그러나 날은 꼭 잡아야 하는데 점수가 100 점 이상이 되는 날이 없을 때는 원하시는 기간중에 점수가 가장 높은 날을 선택합니다.
<li>단, 결혼택일에서는 되도록이면 신살이나 흉신이 없는 날을 고려하여 선택하시기 바랍니다.

</td></tr></table>



<table border=0 cellspacing=0 cellpadding=5  align='center'>
<tr>
<td align=center>
<b>
<?=$selected_year?> 년 <?=$selected_month?> 월 택일 결과 (음력 <?=$toyear_htoyear_e?> 년 <?=$tomonth_h?><?=$tomonth_e?> 월 )
</b>
</td></tr></table>

<table border=0 cellspacing=0 cellpadding=0  align='center'>
<tr bgcolor=FFFFFF>

<td>
<TABLE cellSpacing=1 cellPadding=0 width=<?=$tablew?> border=0  align=center bgcolor=CCCCCC>
<TR>
  <!-- 요일 헤더 -->
  <TD width=<?=$cellw?> bgcolor=fa9274 align=center><p class=day>일</p></TD>
  <TD width=<?=$cellw?> bgcolor=CCCCCC align=center><p class=day>월</p></TD>
  <TD width=<?=$cellw?> bgcolor=CCCCCC align=center><p class=day>화</p></TD>
  <TD width=<?=$cellw?> bgcolor=CCCCCC align=center><p class=day>수</p></TD>
  <TD width=<?=$cellw?> bgcolor=CCCCCC align=center><p class=day>목</p></TD>
  <TD width=<?=$cellw?> bgcolor=CCCCCC align=center><p class=day>금</p></TD>
  <TD width=<?=$cellw?> bgcolor=8aa2fd align=center><p class=day>토</p></TD>
  <!-- 요일 헤더 끝 -->
</TR>
<TR bgcolor=FFFFFF>
  <!-- 날짜 테이블 -->

<?

$date = 1;                      //1일부터 그리기 시작하므로 1일을 몇번째 TD 에서 시작할것인지를 체크하기 위해
$offset = 0;                    // TD 띄우는 수 초기화 
$kk = 0;

while ($date <= $maxdate) {

####### 
  if ($date == $selected_day && $selected_year == date('Y')  && $selected_month == date('m')) {
    $bgcolor = 'bgcolor=ffddff';
  } else {
    $bgcolor = 'bgcolor=EEEEEE';
  }

  if ($date == '1') {
    $offset = date('w', mktime(0, 0, 0, $selected_month, $date, $selected_year));  // 0: sunday, 1: monday, ..., 6: saturday
    SkipOffset($cellh, $cellw, $offset);
    
 
    $total_jumsu[$date] = $color_jumsu[$date] + $whangdo_jumsu[$date] + $sbc_jumsu[$date] + $sipak_jumsu[$date] + $chenduk_jumsu[$date] + $wolduk_jumsu[$date] + $chendukhap_jumsu[$date] + $woldukhap_jumsu[$date] +  $seng_jumsu[$date] + $chen_jumsu[$date] + $chengang_jumsu[$date] + $hague_jumsu[$date] + $jipa_jumsu[$date] + $namang_jumsu[$date] + $myelmol_jumsu[$date] + $jungsang_jumsu[$date] + $chengu_jumsu[$date] + $chensal_jumsu[$date] + $pamasal_jumsu[$date] + $susasal_jumsu[$date] + $mangrasal_jumsu[$date] + $chenjeoksal_jumsu[$date] + $gochosal_jumsu[$date] + $gueguesal_jumsu[$date] + $wangmangsal_jumsu[$date] + $sipaksal_jumsu[$date] + $wolapsal_jumsu[$date] + $wolsal_jumsu[$date] + $hwangsasal_jumsu[$date] + $hongsasal_jumsu[$date] + $wolgi_jumsu[$date] + $indong_jumsu[$date] + $gachui_jumsu[$date] + $haeil_jumsu[$date] + $chuk_jumsu[$date] + $dae_jumsu[$date];
    
    echo "  <TD   id=td_var_$kk height=$cellh width=$cellw $bgcolor valign=top align=center   onMouseOver=\"this.style.cursor='hand'\"  onClick=\"javascript:OpenWin('/UNSE_DATA/etc/S111_popup.php?date=$date&dae=$dae[$date]&wolgi=$wolgi[$date]&indong=$indong[$date]&gachui=$gachui[$date]&sum_to_jeol=$sum_to_jeol[$date]&haeil=$haeil[$date]&selected_year=$selected_year&selected_month=$selected_month&color=$color[$date]&sum_day_he=$sum_day_he[$date]&whangdo=$whangdo[$date]&senggi=$senggi[$date]&bokduk=$bokduk[$date]&cheneu=$cheneu[$date]&sipak=$sipak[$date]&chenduk=$chenduk[$date]&wolduk=$wolduk[$date]&chendukhap=$chendukhap[$date]&woldukhap=$woldukhap[$date]&seng=$seng[$date]&chen=$chen[$date]&chensal=$chensal[$date]&pamasal=$pamasal[$date]&susasal=$susasal[$date]&mangrasal=$mangrasal[$date]&chenjeoksal=$chenjeoksal[$date]&gochosal=$gochosal[$date]&gueguesal=$gueguesal[$date]&wangmangsal=$wangmangsal[$date]&sipaksal=$sipaksal[$date]&wolapsal=$wolapsal[$date]&wolsal=$wolsal[$date]&hwangsasal=$hwangsasal[$date]&hongsasal=$hongsasal[$date]&chengang=$chengang[$date]&hague=$hague[$date]&jipa=$jipa[$date]&namang=$namang[$date]&myelmol=$myelmol[$date]&jungsang=$jungsang[$date]&chengu=$chengu[$date]&chuk=$chuk[$date]'); F_change_bg('$kk', '$bgcolor2');\">
    
    <table border=0 height=100% width=$cellw><tr><td height=$cellh width=$cellw valign=top align=center  >
 <font color=CC0000>√</font><img src=\"/UNSE_DATA/images/S111_img/$date.gif\"  >
    (<font color=$color[$date]>$sum_day_he[$date]</font>)<font color=000000>$sum_to_jeol[$date]</font><br>$whangdo_title[$date] $senggi_title[$date] $bokduk_title[$date] $cheneu_title[$date] $gilsin_title[$date]  $chuk_title[$date] $sipak_title[$date] $hyungsin_title[$date] $sal_title[$date] $wolgi_title[$date] $indong_title[$date] $gachui_title[$date] $dae_title[$date]
    </td></tr>
    <tr><td valign=bottom>
    점수 : <font color=red>$total_jumsu[$date]</font>
    </td></tr>
    
    </table>
    
    </TD> \n";
  
  } else {
    
    
    
    $total_jumsu[$date] = $color_jumsu[$date] + $whangdo_jumsu[$date] + $sbc_jumsu[$date] + $sipak_jumsu[$date] + $chenduk_jumsu[$date] + $wolduk_jumsu[$date] + $chendukhap_jumsu[$date] + $woldukhap_jumsu[$date] +  $seng_jumsu[$date] + $chen_jumsu[$date] + $chengang_jumsu[$date] + $hague_jumsu[$date] + $jipa_jumsu[$date] + $namang_jumsu[$date] + $myelmol_jumsu[$date] + $jungsang_jumsu[$date] + $chengu_jumsu[$date] + $chensal_jumsu[$date] + $pamasal_jumsu[$date] + $susasal_jumsu[$date] + $mangrasal_jumsu[$date] + $chenjeoksal_jumsu[$date] + $gochosal_jumsu[$date] + $gueguesal_jumsu[$date] + $wangmangsal_jumsu[$date] + $sipaksal_jumsu[$date] + $wolapsal_jumsu[$date] + $wolsal_jumsu[$date] + $hwangsasal_jumsu[$date] + $hongsasal_jumsu[$date] + $wolgi_jumsu[$date] + $indong_jumsu[$date] + $gachui_jumsu[$date] + $haeil_jumsu[$date] + $chuk_jumsu[$date] + $dae_jumsu[$date];

    echo "  <TD  id=td_var_$kk   height=$cellh width=$cellw $bgcolor valign=top align=center  onMouseOver=\"this.style.cursor='hand'\" onClick=\"javascript:OpenWin('/UNSE_DATA/etc/S111_popup.php?date=$date&dae=$dae[$date]&wolgi=$wolgi[$date]&indong=$indong[$date]&gachui=$gachui[$date]&sum_to_jeol=$sum_to_jeol[$date]&haeil=$haeil[$date]&selected_year=$selected_year&selected_month=$selected_month&color=$color[$date]&sum_day_he=$sum_day_he[$date]&whangdo=$whangdo[$date]&senggi=$senggi[$date]&bokduk=$bokduk[$date]&cheneu=$cheneu[$date]&sipak=$sipak[$date]&chenduk=$chenduk[$date]&wolduk=$wolduk[$date]&chendukhap=$chendukhap[$date]&woldukhap=$woldukhap[$date]&seng=$seng[$date]&chen=$chen[$date]&chensal=$chensal[$date]&pamasal=$pamasal[$date]&susasal=$susasal[$date]&mangrasal=$mangrasal[$date]&chenjeoksal=$chenjeoksal[$date]&gochosal=$gochosal[$date]&gueguesal=$gueguesal[$date]&wangmangsal=$wangmangsal[$date]&sipaksal=$sipaksal[$date]&wolapsal=$wolapsal[$date]&wolsal=$wolsal[$date]&hwangsasal=$hwangsasal[$date]&hongsasal=$hongsasal[$date]&chengang=$chengang[$date]&hague=$hague[$date]&jipa=$jipa[$date]&namang=$namang[$date]&myelmol=$myelmol[$date]&jungsang=$jungsang[$date]&chengu=$chengu[$date]&chuk=$chuk[$date]'); F_change_bg('$kk', '$bgcolor2');\">

    <table border=0 height=100% width=$cellw><tr><td height=$cellh width=$cellw valign=top align=center>
   <font color=CC0000>√</font><img src=\"/UNSE_DATA/images/S111_img/$date.gif\"   >
    (<font color=$color[$date]>$sum_day_he[$date]</font>)<font color=000000>$sum_to_jeol[$date]</font><br>$whangdo_title[$date] $senggi_title[$date] $bokduk_title[$date] $cheneu_title[$date]  $gilsin_title[$date] $chuk_title[$date] $sipak_title[$date] $hyungsin_title[$date] $sal_title[$date] $wolgi_title[$date] $indong_title[$date] $gachui_title[$date] $dae_title[$date]
    </td></tr>
    <tr><td valign=bottom>
    점수 : <font color=red>$total_jumsu[$date]</font>
    </td></tr>
    
    
    </table>
    
    </TD> \n";
  }

  $date++;
  $offset++;

  if ($offset == 7) {
    echo "</TR> \n";
    if ($date <= $maxdate) {
      echo "<TR bgcolor=FFFFFF> \n";
    }
    $offset = 0;
  }

  $kk++;

} // end of while

if ($offset != 0) {
  SkipOffset($cellh, $cellw, (7-$offset));
  echo "</TR> \n";
}
?>
<!-- 날짜 테이블 끝 -->

</TABLE>
</td>
</tr>
</table>
<iframe frameborder="0" width="0" height="0" name="sendwidth"></iframe>