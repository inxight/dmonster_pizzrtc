<?
$user_name = $_POST["hanja1"];

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

<SCRIPT LANGUAGE="JavaScript">
<!--
function check_hanja(){
/*	
	var count = 0;
	var num = document.choiceform.hanja_select2.length
	for(i=0; i<num; i++)
	{
		if(document.choiceform.hanja_select2[i].checked == true)
		{
		count += 1;
		}
	}

	if(count == 0)
	{
		alert("중간 한자를 선택해주세요.");
		return;
	}

	var count2 = 0;
	var num = document.choiceform.hanja_select3.length
	
	for(i=0; i<num; i++)
	{
		if(document.choiceform.hanja_select3[i].checked == true)
		{
		count2 += 1;
		}
	}

	if(count2 == 0)
	{
		alert("끝 한자를 선택해주세요.");
		return;
	}
*/
	choiceform.submit();
}
//-->
</SCRIPT>

	       <table cellpadding='5' cellspacing='1' width='512' border=0 bgcolor=CCCCCC align="center">
                  <tr><td align=center bgcolor=f8f8f8> 사주오행기운 </td></tr></table>
	       <table cellpadding='5' cellspacing='0' width='512' border=0 align="center">
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
                 <td align=center><b>[ 용신셀프작명 총 4 단계에서 4 단계 진행중입니다. ]</b></td>
             </tr>
</table>
<br>
	    <table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	     <tr>
             <td width='100'  bgcolor=f8f8f8> 
             <div align='center'>성씨</div>
             </td>
	     <td width='100' bgcolor=ffffff>
             <div align='center' ><font size=5> <?=$hanja1;?></font> (<?=$hangul1;?>)</div>
             </td>
	     <td width='100'  bgcolor=f8f8f8> 
             <div align='center'>성씨오행</div>
             </td>            
	     <td width='100' bgcolor=ffffff> 
             <div align='center' ><?=$mokwha1;?></div>
             </td>            
	     <td width='100'  bgcolor=f8f8f8> 
             <div align='center'>성별</div>
             </td>            
	     <td width='100' bgcolor=ffffff> 
             <div align='center' ><?=$sex;?></div>
             </td>            
	    </tr>
	</table>
<br>
<form name='choiceform' method='post' action=<?=$action_var;?>>  
							  <input type='hidden' name='cate' value="<?=$cate;?>">
							  <input type='hidden' name='sel' value="<?=$sel;?>">
<table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align="center">
<tr bgcolor=a3d1c7><td colspan=4>
<br>
&nbsp;&nbsp;&nbsp; <b>이름한자를 선택하는 단계입니다. 다음의 내용을 숙지하시고 한자를 선택하십시요.</b>
<ul>
<li>부귀와 재물에 대한 노골적인 글자는 오히려 천박하고 나쁜 반작용을 일으킵니다.
<li>발음이 쉽고 부드러워야 하며 별명의 소지가 있는 글자는 피해야 합니다.
<li>이름 전체가 좋은 뜻을 나타내고 남에게 혐오감이나 거부감을 주지 않아야 합니다.
<li>불용문자는 되도록이면 피하는 것이 좋습니다.
</ul>
</td></tr>
<tr bgcolor=f8f8f8>
<td width=30 align=center>구분</td>
<td width=170 align=center>성씨</td>
<td width=170 align=center>중간자</td>
<td width=170 align=center>끝자</td>
</tr>
<tr bgcolor=f8f8f8>
<td width=30 align=center>오행</td>
<td width=170 align=center><?=$mokwha1;?></td>
<td width=170 align=center><?=$mokwha2;?></td>
<td width=170 align=center><?=$mokwha3;?></td>
</tr>
<tr bgcolor=f8f8f8>
<td width=30 align=center>획수</td>
<td width=170 align=center><font size=5> <?=$hanja1;?></font> (<?=$hangul1;?>) <font color=blue><?=$hanjano1;?></font> 획</td>
<td width=170 align=center><font color=blue><?=$j?></font> 획</td>
<td width=170 align=center><font color=blue><?=$k?></font> 획</td>
</tr>
</table>
<?
if ($mokwha2 == '木') {$mokwha2_ch = '1';} 
if ($mokwha2 == '火') {$mokwha2_ch = '2';}
if ($mokwha2 == '土') {$mokwha2_ch = '3';}
if ($mokwha2 == '金') {$mokwha2_ch = '4';}
if ($mokwha2 == '水') {$mokwha2_ch = '5';}

if ($mokwha3 == '木') {$mokwha3_ch = '1';} 
if ($mokwha3 == '火') {$mokwha3_ch = '2';}
if ($mokwha3 == '土') {$mokwha3_ch = '3';}
if ($mokwha3 == '金') {$mokwha3_ch = '4';}
if ($mokwha3 == '水') {$mokwha3_ch = '5';}
?>
<table width=512 align="center"><tr><td align=left>

<div id='Layer1' style='width:253px; height:155px; z-index:1; overflow: auto'> 
<table width=235 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC>
<tr bgcolor=a3d1c7><td colspan=4>중간자(<font color=blue><?=j?></font> 획)</td></tr>
<tr bgcolor=f8f8f8><td align=center>한자</td><td align=center>뜻</td><td align=center>음</td><td align=center>선택</td></tr>

<?
$sql = "SELECT * FROM namedata WHERE hanjawin <> '' and hanjano = '$j'  and mokwha = '$mokwha2_ch' and newold = 0 order by hanjano";

if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {echo "해당하는 한자가 인명용에는 없습니다.";}
      else{
                 $p=0;
		
		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$hanja2 = stripslashes($row[hanjawin]);
			$hanjano2 = stripslashes($row[hanjano]);
			$hangul2 = stripslashes($row[hangul]);
			$what2 = stripslashes($row[what]);
		        $bulcomment2 = stripslashes($row[bulcomment]);

 
		        if ($bulcomment2) {$color='aa9999'; $bull2[$p] = $bulcomment2; $hanja2_bull[$p] = $hanja2; $p++;}else{$color='FFFFFF';}
		 
		 
		 echo "
		 <tr bgcolor=$color><td align=center><font size=5>$hanja2</font> </td><td align=center>$what2</td><td align=center>$hangul2</td>
		 <td align=center><input type='radio' name='hanja_select2' value=$hanja2></td></tr>
		 
		 ";
		 
		 }


}
?>
</table></div>
</td><td align=right>

<div id='Layer2' style='width:253px; height:155px; z-index:2; overflow: auto'> 
<table width=235 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC>
<tr bgcolor=a3d1c7><td colspan=4>끝자(<font color=blue><?=$k?></font> 획)</td></tr>
<tr bgcolor=f8f8f8><td align=center>한자</td><td align=center>뜻</td><td align=center>음</td><td align=center>선택</td></tr>
<?
$sql = "SELECT * FROM namedata WHERE hanjawin <> '' and hanjano = '$k'  and mokwha = '$mokwha3_ch' and newold = 0 order by hanjano";

if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {echo "해당하는 한자가 인명용에는 없습니다.";}
      else{
                 $q=0;
		
		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$hanja3 = stripslashes($row[hanjawin]);
			$hanjano3 = stripslashes($row[hanjano]);
			$hangul3 = stripslashes($row[hangul]);
			$what3 = stripslashes($row[what]);
		        $bulcomment3 = stripslashes($row[bulcomment]);

	 
		        if ($bulcomment3) {
			
			     if (($j == $k)&&($mokwha2 == $mokwha3)) {$color='aa9999';}else{$color='aa9999'; $bull3[$q] = $bulcomment3; $hanja3_bull[$q] = $hanja3; $q++;}
			
			}else{$color='FFFFFF';}
		 
		 
		 echo "
		 <tr bgcolor=$color><td align=center><font size=5>$hanja3</font> </td><td align=center>$what3</td><td align=center>$hangul3</td>
		 <td align=center><input type=radio name=hanja_select3 value=$hanja3></td></tr>
		 ";
		 
		 }
}

?>
</table></div>
</td></tr></table>
<br><br>
<?
for ($p = 0 ; $p<sizeof($bull2); $p++) {
echo "
<table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align=center>
<tr bgcolor=aa9999>
<td colspan=2 align=center>불용문자</td>
</tr>
<tr bgcolor=FFFFFF>
<td width=50 align=center><font size=5>$hanja2_bull[$p]</font></td>
<td>$bull2[$p]</td>
</tr>
</table><br>
";
}


for ($q = 0 ; $q<sizeof($bull3); $q++) {
echo "
<table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align=center>
<tr bgcolor=aa9999>
<td colspan=2 align=center>불용문자</td>
</tr>
<tr bgcolor=FFFFFF>
<td width=50 align=center><font size=5>$hanja3_bull[$q]</font></td>
<td>$bull3[$q]</td>
</tr>
</table><br>
";
}
?>
<input type=hidden name=i value="<?=$i?>">
<input type=hidden name=j value="<?=$j?>">
<input type=hidden name=k value="<?=$k?>">
<input type=hidden name=mokwha1 value="<?=$mokwha1;?>">
<input type=hidden name=mokwha2 value="<?=$mokwha2;?>">
<input type=hidden name=mokwha3 value="<?=$mokwha3;?>">
<input type=hidden name=hanja1 value="<?=$hanja1;?>">
<input type=hidden name=hanjano1 value="<?=$hanjano1;?>">
<input type=hidden name=hangul1 value="<?=$hangul1;?>">
<input type=hidden name=sex value="<?=$sex;?>">
<input type=hidden name=my_solnuar value="<?=$my_solnuar;?>">
<input type=hidden name=request_year value="<?=$request_year;?>">
<input type=hidden name=request_month value="<?=$request_month;?>">
<input type=hidden name=request_day value="<?=$request_day;?>">
<input type=hidden name=request_hour value="<?=$request_hour;?>">
<input type=hidden name=request_min value="<?=$request_min;?>">
<input type=hidden name=youn value="<?=$youn;?>">
<input type=hidden name=mok_power_ww value="<?=$mok_power_ww;?>"> 
<input type=hidden name=wha_power_ww value="<?=$wha_power_ww;?>"> 
<input type=hidden name=suu_power_ww value="<?=$suu_power_ww;?>"> 
<input type=hidden name=gum_power_ww value="<?=$gum_power_ww;?>"> 
<input type=hidden name=to_power_ww value="<?=$to_power_ww;?>"> 

<input type=hidden name=url value="<?=$url;?>"> 
<input type=hidden name=urltemp value="<?=$urltemp;?>">  

<table width=510 align=center><tr><td align=center><input type=button value="이전단계로 되돌아가기" onclick=javascript:history.go(-2); onfocus=this.blur();><input type=button value="용신셀프작명 결과보기" onclick=javascript:check_hanja(); onfocus=this.blur();></td></tr></table>

</form>