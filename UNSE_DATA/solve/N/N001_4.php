<?
$hanja1 = $_POST["hanja1"];
$hanja_select2 = $_POST["hanja_select2"];
$hanja_select3 = $_POST["hanja_select3"];

if ((!$hanja_select2)||(!$hanja_select3)) {
?>
<script language='javascript'>
alert('한자를 선택하십시요.');
history.go(-1);
</script>
<?
} 

$user_name = $hanja1.$hanja_select2.$hanja_select3;

$mokwha1 = $_POST["mokwha1"];
$mokwha2 = $_POST["mokwha2"];
$mokwha3 = $_POST["mokwha3"];
$hanjano1 = $_POST["hanjano1"];
$hangul1 = $_POST["hangul1"];
$mok_power_ww = $_POST["mok_power_ww"];
$wha_power_ww = $_POST["wha_power_ww"];
$suu_power_ww = $_POST["suu_power_ww"];
$gum_power_ww = $_POST["gum_power_ww"];
$to_power_ww = $_POST["to_power_ww"];

$i = $_POST["i"];
$j = $_POST["j"];
$k = $_POST["k"];
$hanja1 = $_REQUEST["hanja1"];
?>
	       <table align="center" cellpadding='5' cellspacing='1' width='512' border=0 bgcolor=CCCCCC>
                  <tr><td align=center bgcolor=f8f8f8> 사주오행기운 </td></tr></table>
	       <table align="center" cellpadding='5' cellspacing='0' width='512' border=0>
                          <tr> 
                            <td width='510' height='20'> 
                              <table cellspacing='1' cellpadding='0' bgcolor='black' align='left'  height=20>
                                <tr> 
                                  <td  bgcolor='#f8f8f8' width=100 align=center><font color=CC0000 size=1>▶</font> 목의 기운</td><td  bgcolor='#0066CC' width='<?=$mok_power_ww;?>'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
			  <tr>
                            <td width='510' height='20'> 
                              <table cellspacing='1' cellpadding='0' bgcolor='black' align='left' height=20>
                                <tr> 
                                  <td  bgcolor='#f8f8f8' width=100 align=center><font color=CC0000 size=1>▶</font> 화의 기운</td><td  bgcolor='#CC0000' width='<?=$wha_power_ww;?>'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
			  <tr>                            
			    <td width='510' height='20'> 
                              <table cellspacing='1' cellpadding='0' bgcolor='black' align='left' height=20>
                                <tr> 
                                  <td  bgcolor='#f8f8f8' width=100 align=center><font color=CC0000 size=1>▶</font> 토의 기운</td><td  bgcolor='#FFCC00' width='<?=$to_power_ww;?>'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
			  <tr>                            
			    <td width='510' height='20'> 
                              <table cellspacing='1' cellpadding='0' bgcolor='black' align='left' height=20>
                                <tr> 
                                  <td  bgcolor='#f8f8f8' width=100 align=center><font color=CC0000 size=1>▶</font> 금의 기운</td><td  bgcolor='white' width='<?=$gum_power_ww;?>'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
			  <tr>                            
			    <td width='510' height='20'> 
                              <table cellspacing='1' cellpadding='0' bgcolor='black' align='left' height=20>
                                <tr> 
                                  <td  bgcolor='#f8f8f8' width=100 align=center><font color=CC0000 size=1>▶</font> 수의 기운</td><td  bgcolor='black' width='<?=$suu_power_ww;?>'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>

		
			</table>

<br>

<table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
             <tr bgcolor=f8f8f8>
                 <td align=center><b>[ 용신셀프작명 결과 ]</b></td>
             </tr>
</table>

<br>
<?$sql = "SELECT * FROM namedata WHERE hanjawin = '$hanja1' and hanjano = '$hanjano1'";


if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();
if ($all) {

		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$hanjano1 = stripslashes($row[hanjano]);
			$hanja1 = stripslashes($row[hanjawin]);
			$hangul1 = stripslashes($row[hangul]);
			$what1 = stripslashes($row[what]);

                 }
}

####################

$sql = "SELECT * FROM namedata WHERE hanjawin = '$hanja_select2' and hanjano = '$j'";


if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();
if ($all) {

		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$hanjano2 = stripslashes($row[hanjano]);
			$hanja2 = stripslashes($row[hanjawin]);
			$hangul2 = stripslashes($row[hangul]);
			$what2 = stripslashes($row[what]);
			$bulcomment2 = stripslashes($row[bulcomment]);

                 }
}

###################

$sql = "SELECT * FROM namedata WHERE hanjawin = '$hanja_select3' and hanjano = '$k'";


if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();
if ($all) {

		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$hanjano3 = stripslashes($row[hanjano]);
			$hanja3 = stripslashes($row[hanjawin]);
			$hangul3 = stripslashes($row[hangul]);
			$what3 = stripslashes($row[what]);
			$bulcomment3 = stripslashes($row[bulcomment]);

                 }
}

?>

<table width=512 align="center" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC>
	<tr bgcolor=f8f8f8>
		<td width=50 align=center>구분</td>
		<td width=150 align=center>성씨</td>
		<td width=150 align=center>중간자</td>
		<td width=150 align=center>끝자</td>
	</tr>
	<tr bgcolor=FFFFFF>
		<td width=50 align=center bgcolor=f8f8f8>한자</td>
		<td width=150 align=center><font size=5> <?=$hanja1;?></font></td>
		<td width=150 align=center><font size=5> <?=$hanja2?></font></td>
		<td width=150 align=center><font size=5> <?=$hanja3?></font></td>
	</tr>
	<tr bgcolor=FFFFFF>
	<td width=50 align=center bgcolor=f8f8f8>획수</td>
		<td width=150 align=center><font color=blue><?=$hanjano1;?></font></td>
		<td width=150 align=center><font color=blue><?=$hanjano2?></font></td>
		<td width=150 align=center><font color=blue><?=$hanjano3?></font></td>
	</tr>
	<tr bgcolor=FFFFFF>
		<td width=50 align=center bgcolor=f8f8f8>훈음</td>
		<td width=150 align=center><?=$what1?> <?=$hangul1;?></td>
		<td width=150 align=center><?=$what2?> <?=$hangul2?></td>
		<td width=150 align=center><?=$what3?> <?=$hangul3?></td>
	</tr>
	<tr bgcolor=FFFFFF>
		<td width=50 align=center bgcolor=f8f8f8>오행</td>
		<td width=150 align=center><?=$mokwha1;?></td>
		<td width=150 align=center><?=$mokwha2;?></td>
		<td width=150 align=center><?=$mokwha3;?></td>
	</tr>
</table>

<br>

<?
$mokwha_all = $mokwha1.$mokwha2.$mokwha3;   


$sql = "SELECT * FROM N015 WHERE DB_title_1 =  '$mokwha_all'";

if (!$sql) {
   echo("QUERY_ERROR");
   exit;
}


$query = mysql_query($sql);
$all = mysql_affected_rows();


   		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$no = stripslashes($row[DB_express]);
			$oheng = stripslashes($row[DB_title_1]);
			$gh = stripslashes($row[DB_title]);
                        $data = stripslashes($row[DB_data]);
                      if ($gh == '吉') {
                        $ohengjumsu = 100 ;
                        $ohengtitle = '上格' ;
			}
                      if ($gh == '中吉') {
                        $ohengjumsu = 70 ;
                        $ohengtitle = '中上格' ;
			}
                      if ($gh == '中凶') {
                        $ohengjumsu = 30 ;
                        $ohengtitle = '中下格' ;
			}
                      if ($gh == '凶') {
                        $ohengjumsu = 0 ;
                        $ohengtitle = '下格' ;
			}

		 }

if ($data) {$dataoheng = $data;}


if (($my_month_e == '寅')||($my_month_e == '卯')||($my_month_e == '辰')) {$jinyong = '金'; $banyong = '土'; $xuse_1 = '木';}
if (($my_month_e == '巳')||($my_month_e == '午')||($my_month_e == '未')) {$jinyong = '水'; $banyong = '金'; $xuse_1 = '火';}
if (($my_month_e == '申')||($my_month_e == '酉')||($my_month_e == '戌')) {$jinyong = '木'; $banyong = '水'; $xuse_1 = '金';$xuse_2 = '火';}
if (($my_month_e == '亥')||($my_month_e == '子')||($my_month_e == '丑')) {$jinyong = '火'; $banyong = '木'; $xuse_1 = '水';}



#인격,지격,총격을 계산 #####################
$in_guek = $hanjano1 + $hanjano2;
$je_guek = $hanjano2 + $hanjano3;
$chong_guek = $hanjano1 + $hanjano2 + $hanjano3;

//echo "$my_month_e / $jinyong / $banyong $xuse_1 /  $in_guek  $je_guek  $chong_guek  ";


if ($in_guek > 10) { $in_guek_su = $in_guek%10; }else{ $in_guek_su = $in_guek; }
if ($je_guek > 10) { $je_guek_su = $je_guek%10; }else{ $je_guek_su = $je_guek; }
if ($chong_guek > 10) { $chong_guek_su = $chong_guek%10; }else{ $chong_guek_su = $chong_guek; }

if (($in_guek_su == 1) || ($in_guek_su == 2)) {$in_guek_oheng = '木';}
if (($in_guek_su == 3) || ($in_guek_su == 4)) {$in_guek_oheng = '火';}
if (($in_guek_su == 5) || ($in_guek_su == 6)) {$in_guek_oheng = '土';}
if (($in_guek_su == 7) || ($in_guek_su == 8)) {$in_guek_oheng = '金';}
if (($in_guek_su == 9) || ($in_guek_su == 10)) {$in_guek_oheng = '水';}

if (($je_guek_su == 1) || ($je_guek_su == 2)) {$je_guek_oheng = '木';}
if (($je_guek_su == 3) || ($je_guek_su == 4)) {$je_guek_oheng = '火';}
if (($je_guek_su == 5) || ($je_guek_su == 6)) {$je_guek_oheng = '土';}
if (($je_guek_su == 7) || ($je_guek_su == 8)) {$je_guek_oheng = '金';}
if (($je_guek_su == 9) || ($je_guek_su == 10)) {$je_guek_oheng = '水';}

if (($chong_guek_su == 1) || ($chong_guek_su == 2)) {$chong_guek_oheng = '木';}
if (($chong_guek_su == 3) || ($chong_guek_su == 4)) {$chong_guek_oheng = '火';}
if (($chong_guek_su == 5) || ($chong_guek_su == 6)) {$chong_guek_oheng = '土';}
if (($chong_guek_su == 7) || ($chong_guek_su == 8)) {$chong_guek_oheng = '金';}
if (($chong_guek_su == 9) || ($chong_guek_su == 10)) {$chong_guek_oheng = '水';}



$guek_oheng = array($in_guek_oheng, $je_guek_oheng, $chong_guek_oheng); 


//echo "$in_guek_oheng, $je_guek_oheng, $chong_guek_oheng";

$jinyong_result = 0;
$banyong_result = 0;
$xuse_1_result = 0;
$xuse_2_result = 0;

for ($i = 0; $i < sizeOf($guek_oheng);$i++) { 
   if ($jinyong == $guek_oheng[$i]) {$jinyong_result++;}
   if ($banyong == $guek_oheng[$i]) {$banyong_result++;}
   if ($xuse_1 == $guek_oheng[$i]) {$xuse_1_result++;}
   if ($xuse_2 == $guek_oheng[$i]) {$xuse_2_result++;}
} 

//echo "$in_guek_oheng / $je_guek_oheng / $chong_guek_oheng";
//echo "<br>$jinyong / $banyong /$xuse_1 /$xuse_2 <br>$jinyong_result / $banyong_result / $xuse_1_result / $xuse_2_result ";

$xuse_tot_result = $xuse_1_result + $xuse_2_result;


//echo "$jinyong_result $banyong_result $xuse_tot_result";


if ($jinyong_result == 3) {$sajujumsu = 95;$sajutitle = '最上格'; }
if (($jinyong_result == 2) && ($banyong_result == 1)) {$sajujumsu = 95;$sajutitle = '最上格'; }
if (($jinyong_result == 1) && ($banyong_result == 2)) {$sajujumsu = 95;$sajutitle = '最上格'; }
if ($banyong_result == 3) {$sajujumsu = 90;$sajutitle = '上格'; }
if (($jinyong_result == 2) && ($banyong_result == 0)) {$sajujumsu = 90;$sajutitle = '上格'; }
if (($jinyong_result == 0) && ($banyong_result == 2)) {$sajujumsu = 90;$sajutitle = '上格'; }
if (($jinyong_result == 1) && ($banyong_result == 1) && ($xuse_tot_result == 0)) {$sajujumsu = 85;$sajutitle = '上格'; }
if (($jinyong_result == 1) && ($banyong_result == 1) && ($xuse_tot_result == 1)) {$sajujumsu = 80;$sajutitle = '上格'; }
if (($jinyong_result == 1) && ($banyong_result == 0) && ($xuse_tot_result == 0)) {$sajujumsu = 75;$sajutitle = '中格'; }
if (($jinyong_result == 2) && ($banyong_result == 0) && ($xuse_tot_result == 1)) {$sajujumsu = 70;$sajutitle = '中格'; }
if (($jinyong_result == 0) && ($banyong_result == 2) && ($xuse_tot_result == 1)) {$sajujumsu = 65;$sajutitle = '中格'; }
if (($jinyong_result == 0) && ($banyong_result == 1) && ($xuse_tot_result == 0)) {$sajujumsu = 60;$sajutitle = '中格'; }
if (($jinyong_result == 0) && ($banyong_result == 0) && ($xuse_tot_result == 0)) {$sajujumsu = 55;$sajutitle = '下格'; }
if (($jinyong_result == 1) && ($banyong_result == 0) && ($xuse_tot_result == 1)) {$sajujumsu = 50;$sajutitle = '下格'; }
if (($jinyong_result == 0) && ($banyong_result == 1) && ($xuse_tot_result == 1)) {$sajujumsu = 45;$sajutitle = '下格'; }
if (($jinyong_result == 0) && ($banyong_result == 0) && ($xuse_tot_result == 1)) {$sajujumsu = 30;$sajutitle = '不調化'; }
if (($jinyong_result == 1) && ($banyong_result == 0) && ($xuse_tot_result == 2)) {$sajujumsu = 25;$sajutitle = '不調化'; }
if (($jinyong_result == 0) && ($banyong_result == 1) && ($xuse_tot_result == 2)) {$sajujumsu = 20;$sajutitle = '不調化'; }
if (($jinyong_result == 0) && ($banyong_result == 0) && ($xuse_tot_result == 2)) {$sajujumsu = 10;$sajutitle = '不調化'; }

############### 초년운세 #############################################
$all = 0;

$choun_no = $hanjano2 + $hanjano3;
if ($choun_no >= 82) {
       $choun_no = $choun_no - 80;
   }

$sql = "SELECT * FROM N002 WHERE DB_num like  '$choun_no'";

if (!$sql) {
   echo("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

   		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$no = stripslashes($row[DB_num]);
			$mangh = stripslashes($row[DB_express]);
			$womangh = stripslashes($row[DB_express_1]);
                            if ($sex == '남') {
			         $cho_gh = $mangh;
                                 }else{
				 $cho_gh = $womangh;
                                 }
                             if ($cho_gh == '吉') {
                              $chojumsu = 100 ;
                              $chotitle = '上格' ;
		        	}
                             if ($cho_gh == '中吉') {
                              $chojumsu = 70 ;
                              $chotitle = '中上格' ;
			        }
                             if ($cho_gh == '中凶') {
                              $chojumsu = 30 ;
                              $chotitle = '中下格' ;
			        }
                             if ($cho_gh == '凶') {
                              $chojumsu = 0 ;
                              $chotitle = '下格' ;
			        }
                        $chounse = stripslashes($row[DB_data]); 
		 }
############### 장년운세 #############################################

$jangun_no = $hanjano1 + $hanjano2;
if ($jangun_no >= 82) {
       $jangun_no = $jangun_no - 80;
   }

if($sex == "남"){
	$choie_data = "DB_data_m";
}Else{
	$choie_data = "DB_data_w";
} 

//$sql = "SELECT ".$choie_data." as result_var, DB_num, DB_express, DB_express_1 FROM N003 WHERE DB_num = '".$jangun_no."'";
$sql = "SELECT DB_data as result_var, DB_num, DB_express, DB_express_1 FROM N003 WHERE DB_num = '".$jangun_no."'";

if (!$sql) {
   echo("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

   		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$no = stripslashes($row[DB_num]);
			$mangh = stripslashes($row[DB_express]);
			$womangh = stripslashes($row[DB_express_1]);
                            if ($sex == '남') {
			         $jang_gh = $mangh;
                                 }else{
				 $jang_gh = $womangh;
                                 }
                      if ($jang_gh == '吉') {
                        $jangjumsu = 100 ;
                        $jangtitle = '上格' ;
			}
                      if ($jang_gh == '中吉') {
                        $jangjumsu = 70 ;
                        $jangtitle = '中上格' ;
			}
                      if ($jang_gh == '中凶') {
                        $jangjumsu = 30 ;
                        $jangtitle = '中下格' ;
			}
                      if ($jang_gh == '凶') {
                        $jangjumsu = 0 ;
                        $jangtitle = '下格' ;
			}
		       
			
			$jangunse = stripslashes($row[result_var]); 
		 }

############### 중년운세 #############################################
$jungun_no = $hanjano1 + $hanjano3;
if ($jungun_no >= 82) {
       $jungun_no = $jungun_no - 80;
   }

$sql ="SELECT * FROM N004 WHERE DB_num = '".$jungun_no."'";

if (!$sql) {
   echo("QUERY_ERROR");
   exit;
}


$query = mysql_query($sql);
$all = mysql_affected_rows();

   		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$no = stripslashes($row[DB_num]);
			$mangh = stripslashes($row[DB_express]);
			$womangh = stripslashes($row[DB_express_1]);
                            if ($sex == '남') {
			         $jung_gh = $mangh;
                                 }else{
				 $jung_gh = $womangh;
                                 }
                      if ($jung_gh == '吉') {
                        $jungjumsu = 100 ;
                        $jungtitle = '上格' ;
			}
                      if ($jung_gh == '中吉') {
                        $jungjumsu = 70 ;
                        $jungtitle = '中上格' ;
			}
                      if ($jung_gh == '中凶') {
                        $jungjumsu = 30 ;
                        $jungtitle = '中下格' ;
			}
                      if ($jung_gh == '凶') {
                        $jungjumsu = 0 ;
                        $jungtitle = '下格' ;
			}
                        $jungunse = stripslashes($row[DB_data]); 
		 }


############### 말년운세 #############################################
$malun_no = $hanjano1 + $hanjano2 + $hanjano3;
if ($malun_no >= 82) {
       $malun_no = $malun_no - 80;
   }

$sql = "SELECT * FROM N005 WHERE DB_num = '$malun_no'";

if (!$sql) {
   echo("QUERY_ERROR");
   exit;
}


$query = mysql_query($sql);
$all = mysql_affected_rows();

   		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$no = stripslashes($row[DB_num]);
			$mangh = stripslashes($row[DB_express]);
			$womangh = stripslashes($row[DB_express_1]);
                            if ($sex == '남') {
			         $mal_gh = $mangh;
                                 }else{
				 $mal_gh = $womangh;
                                 }
                                    if ($mal_gh == '吉') {
                                        $maljumsu = 100 ;
                                        $maltitle = '上格' ;
		      	            }
                                    if ($mal_gh == '中吉') {
                                    $maljumsu = 70 ;
                                    $maltitle = '中上格' ;
                		    }
                                    if ($mal_gh == '中凶') {
                                    $maljumsu = 30 ;
                                    $maltitle = '中下格' ;
          			    }
                                    if ($mal_gh == '凶') {
                                    $maljumsu = 0 ;
                                    $maltitle = '下格' ;
			            }
                        $malunse = stripslashes($row[DB_data]); 
		 }


############### 불용문자 #############################################
######################용자나 난자등은 한자로 2개가 검색됨에따른 조처#######
$bulno = '0';

if ($bulcomment2) {$bulno++;}
if ($bulcomment3) {$bulno++;}
##############################################################################

################################################## 토탈점수평가 ############################
$totaljumsu = $ohengjumsu+$chojumsu+$jangjumsu+$jungjumsu+$maljumsu+$sajujumsu;

if ((520 <= $totaljumsu) && ($totaljumsu <= 600)){
   $color1 = "red";
   }
if ((360 <= $totaljumsu) && ($totaljumsu <= 519)){
   $color2 = "red";
   }
if ((240 <= $totaljumsu) && ($totaljumsu <= 359)){
   $color3 = "red";
   }
if ((120 <= $totaljumsu) && ($totaljumsu <= 239)){
   $color4 = "red";
   }
if ((0 <= $totaljumsu) && ($totaljumsu <= 119)){
   $color5 = "red";
   }
?>
        <table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr bgcolor=f8f8f8>
	  
          <td width=86 align=center>음오행</td>
	  <td width=86 align=center>초년운</td>
	  <td width=86 align=center>장년운</td>
	  <td width=86 align=center>중년운</td>
	  <td width=86 align=center>말년운</td>
	  <td width=86 align=center>사주조화</td>
         </tr>

	 <tr bgcolor=f8f8f8>
	  
          <td  width=86 align=center><?=$ohengtitle?>(<?=$ohengjumsu?>)</td>
	  <td  width=86 align=center><?=$chotitle?>(<?=$chojumsu?>)</td>
	  <td  width=86 align=center><?=$jangtitle?>(<?=$jangjumsu?>)</td>
	  <td  width=86 align=center><?=$jungtitle?>(<?=$jungjumsu?>)</td>
	  <td  width=86 align=center><?=$maltitle?>(<?=$maljumsu?>)</td>
	  <td  width=86 align=center><?=$sajutitle?>(<?=$sajujumsu?>)</td>
         </tr>
	 <tr bgcolor=f8f8f8>
	  <td  colspan=6 align=center><font  color='navy'>이름풀이 총평가  <?=$totaljumsu?> 점</font></td>
         </tr>
	 </table>
         
	 <br>
	
	<table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr bgcolor=f8f8f8>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color1?>>520점 ~ 600점</td>
          <td  width=350 align=left><font  color=<?=$color1?>>성명학적으로 이름이 아주 좋습니다.</td>
         </tr>
	 <tr bgcolor=f8f8f8>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color2?>>360점 ~ 519점</td>
          <td  width=350 align=left><font  color=<?=$color2?>>무난한 이름으로 보통 입니다.</td>
         </tr>
	 <tr bgcolor=f8f8f8>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color3?>>240점 ~ 359점</td>
          <td  width=350 align=left><font  color=<?=$color3?>>이름이 귀하의 운명을 나쁘게 합니다.</td>
         </tr>
	<tr bgcolor=f8f8f8>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color4?>>120점 ~ 239점</td>
          <td  width=350 align=left><font  color=<?=$color4?>>개명을 고려하셔야 할 이름입니다.</td>
         </tr>
	 <tr bgcolor=f8f8f8>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color5?>>0점 ~ 119점</td>
          <td  width=350 align=left><font  color=<?=$color5?>>아주 흉한 이름으로 개명을 하셔야 합니다.</td>
         </tr>
	</table>

<?
if (($bulcomment2) && (!$bulcomment3)) {
?>
       <br>
        <table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr>
	  <td  bgcolor=f8f8f8 colspan=2 align=center>귀하의 이름자에 이름에 사용하지 않는 불용문자가 있습니다.</td>
         </tr>
	 <tr>
	  <td  bgcolor=f8f8f8 width=100 align=center>설명</td>
	  <td   width=412 align=left><font size=5><?=$hanja2?></font> : <?=$bulcomment2?></td>
	 </tr>
      </table>
<?
} 
	
if ((!$bulcomment2) && ($bulcomment3)) {
?>
       <br>
        <table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr>
	  <td  bgcolor=f8f8f8 colspan=2 align=center>귀하의 이름자에 이름에 사용하지 않는 불용문자가 있습니다.</td>
         </tr>
	 <tr>
	  <td  bgcolor=f8f8f8 width=100 align=center>설명</td>
	  <td   width=412 align=left><font size=5><?=$hanja3?></font> : <?=$bulcomment3?></td>
	 </tr>
      </table>
<?
} 

if (($bulcomment2) && ($bulcomment3)) {
?>
       <br>
        <table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr>
	  <td  bgcolor=f8f8f8 colspan=2 align=center>귀하의 이름자에 이름에 사용하지 않는 불용문자가 있습니다.</td>
         </tr>
	 <tr>
	  <td  bgcolor=f8f8f8 width=100 align=center>설명</td>
	  <td   width=412 align=left><font size=5><?=$hanja2?></font> : <?=$bulcomment2?><br><font size=5><?=$hanja3?></font> : <?=$bulcomment3?></td>
	 </tr>
      </table>
<?
} 
?>
<br>
<table width=510 border=0 cellspacing=1 cellpadding=10 bgcolor=FFFFFF align='center'>
							<?S_SB_img("N015", $solution_var)?>
	<tr><td style="<?=$fontcolor?>"><?=$dataoheng?></td></tr>
							<?=$include_bottom_Top_B2?>
							<?S_SB_img("N002", $solution_var)?>
	<tr><td style="<?=$fontcolor?>"><?=$chounse?></td></tr>
							<?=$include_bottom_Top_B2?>
							<?S_SB_img("N003", $solution_var)?>
	<tr><td style="<?=$fontcolor?>"><?=$jangunse?></td></tr>
							<?=$include_bottom_Top_B2?>
							<?S_SB_img("N004", $solution_var)?>
	<tr><td style="<?=$fontcolor?>"><?=$jungunse?></td></tr>
							<?=$include_bottom_Top_B2?>
							<?S_SB_img("N005", $solution_var)?>
	<tr><td style="<?=$fontcolor?>"><?=$malunse?></td></tr>
</table>