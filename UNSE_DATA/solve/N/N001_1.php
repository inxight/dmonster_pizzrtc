<?

$name12_1 = str_replace("柳", "柳", $name12_1);
$name12_1 = str_replace("劉", "劉", $name12_1);

$sql = "SELECT * FROM namedata WHERE hanjawin =  '".$name12_1."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$hanjano1 = stripslashes($row[hanjano]);
	$hanja1 = stripslashes($row[hanjawin]);
	$hangul1 = stripslashes($row[hangul]);
	$what1 = stripslashes($row[what]);
	$mokwha1 = stripslashes($row[mokwha]);
}



if($mokwha1 == "1"){$mokwha1 = "木";}
if($mokwha1 == "2"){$mokwha1 = "火";}
if($mokwha1 == "3"){$mokwha1 = "土";}
if($mokwha1 == "4"){$mokwha1 = "金";}
if($mokwha1 == "5"){$mokwha1 = "水";}


$mok_power_ww = $mok_power_w * 3;
$wha_power_ww = $wha_power_w * 3;
$to_power_ww = $to_power_w * 3;
$gum_power_ww = $gum_power_w * 3;
$suu_power_ww = $suu_power_w * 3;


$sql = "SELECT * FROM N015 WHERE gh like  '吉'";

if (!$sql) {
   echo("QUERY_ERROR");
   exit;
}


$query = mysql_query($sql);
$all = mysql_affected_rows();


$j = 0;

   		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$no = stripslashes($row[no]);
			$oheng = stripslashes($row[oheng]);

                 
                 $oheng_first = substr($oheng,0,2);


		 if ($mokwha1 == $oheng_first) {
		 
//		 echo "$oheng<br>";
		 
		 $oheng123[$j] = $oheng;
		 
//		 echo "$oheng123[$j]<br>";

		 $j++;

		 }
		 }


?>

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
                 <td align=center><b>[ 용신셀프작명 총 4 단계에서 2 단계 진행중입니다. ]</b></td>
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
<?
$power_sort = array ($mok_power_w, $wha_power_w, $to_power_w, $gum_power_w, $suu_power_w); 



$x = $power_sort[0]; 

for ($i = 1; $i < sizeOf($power_sort);$i++) { 
   if ($x > $power_sort[$i]) {
     $x = $power_sort[$i];
$k = $i;
     }
} 

if ($k == '')   {$bigyo =  '木'; $power_sort_re = array($wha_power_w, $to_power_w, $gum_power_w, $suu_power_w);}
if ($k == '1') {$bigyo =  '火'; $power_sort_re = array($mok_power_w, $to_power_w, $gum_power_w, $suu_power_w);}
if ($k == '2') {$bigyo =  '土'; $power_sort_re = array($mok_power_w, $wha_power_w, $gum_power_w, $suu_power_w);}
if ($k == '3') {$bigyo =  '金'; $power_sort_re = array($mok_power_w, $wha_power_w, $to_power_w, $suu_power_w);}
if ($k == '4') {$bigyo =  '水'; $power_sort_re = array($mok_power_w, $wha_power_w, $to_power_w, $gum_power_w);}



$x_re = $power_sort_re[0]; 

for ($i = 1; $i < sizeOf($power_sort_re);$i++) { 
   if ($x_re > $power_sort_re[$i]) {
     $x_re = $power_sort_re[$i];
$k_re = $i;
     }
} 

if ($k == ''){
      if ($k_re == '')   {$bigyo_re =  '火';}
      if ($k_re == '1')   {$bigyo_re =  '土';}
      if ($k_re == '2')   {$bigyo_re =  '金';}
      if ($k_re == '3')   {$bigyo_re =  '水';}
}

if ($k == '1'){
      if ($k_re == '')   {$bigyo_re =  '木';}
      if ($k_re == '1')   {$bigyo_re =  '土';}
      if ($k_re == '2')   {$bigyo_re =  '金';}
      if ($k_re == '3')   {$bigyo_re =  '水';}
}

if ($k == '2'){
      if ($k_re == '')   {$bigyo_re =  '木';}
      if ($k_re == '1')   {$bigyo_re =  '火';}
      if ($k_re == '2')   {$bigyo_re =  '金';}
      if ($k_re == '3')   {$bigyo_re =  '水';}
}

if ($k == '3'){
      if ($k_re == '')   {$bigyo_re =  '木';}
      if ($k_re == '1')   {$bigyo_re =  '火';}
      if ($k_re == '2')   {$bigyo_re =  '土';}
      if ($k_re == '3')   {$bigyo_re =  '水';}
}

if ($k == '4'){
      if ($k_re == '')   {$bigyo_re =  '木';}
      if ($k_re == '1')   {$bigyo_re =  '火';}
      if ($k_re == '2')   {$bigyo_re =  '土';}
      if ($k_re == '3')   {$bigyo_re =  '金';}
}


$search_01 = $mokwha1.$bigyo.$bigyo;
$search_02 = $mokwha1.$bigyo.$bigyo_re;
$search_03 = $mokwha1.$bigyo_re.$bigyo;
$search_04 = $mokwha1.$bigyo_re.$bigyo_re;

?>
<table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align="center">
<tr bgcolor=FFFFFF><td colspan=4>
<br>

&nbsp;&nbsp;&nbsp;<b>음오행을 정하는 단계입니다.  다음 내용을 숙지하시고 오행을 선택하십시요.</b>
<ul>


<li>본인 사주의 오행분석결과 가장 조화를 이루는 오행이 선택되었습니다.
<li>아래중 하나를 선택하여 진행하시면 됩니다.
<li><font color="#FD4902">오행의 의미해석을 보시려면 <b><a href="#" onmouseover="F_showtext('1')"><font color="#FD4902">[이곳]</a></b> 에 마우스커서를 올려주시기 바랍니다.</font></font>
<li><font color="#025BFD">3단계로 진행하셔도 다시 2단계에서 시작하실 수 있습니다.</font><br><font color="#FD0214">(단, 3단계에서 2단계로의 진행은 3회로 제한 됩니다)</font>
</ul>

<div style='position:absolute; z-index: 1'>
	<div id="divMenu2" name="divMenu2" style='position:absolute; left:0; top:-350;z-index: 0 ;display:none'>
	<table  width="400" cellpadding="0" cellspacing="0" border="1" onmouseout="F_showtext('0')">
		<tr>
			<tD bgcolor="#F9EFC1"  onmouseout="F_showtext('0')">
<div style='width:410px; height:350px;background-color:#F9EFC1;border:0px;font-family:굴림; font-size:9pt; padding:5px;z-index: 10;overflow: auto'>
<pre>▶ 오행의 상징적의미

목(木) : 나무는 곧고 굳은 것으로써 자라남, 성장, 의욕, 
         힘, 만물이 자라나는 봄을 뜻한다. 
         또한 색으로는 청색, 맛으로는 신 것을 뜻함

화(火) : 불은 타오르고 위로 치솟아 오르는 것으로써 분산, 
         전쟁, 폐허, 온도, 계절, 애정을 뜻한다. 또한 
         색으로는 적색, 맛으로는 쓴 것을 뜻함

토(土) : 흙은 심고 거두며 일하고 쉬는 것으로써 모든 
         만물의 중용, 안식, 치부, 재물을 뜻한다. 
         또한 색으로는 황색, 맛으로는 단 것을 뜻함

금(金) : 쇠는 바꾸고 변형시켜 따르게 하는 것으로써 병기, 
         토대, 인덕, 주춧돌을 뜻한다. 
         또한 색으로는 백색, 맛으로는 매운 것을 뜻함

수(水) : 물은 적시고 내려가는 것으로써 교합, 대물림을 
         뜻한다.또한 색으로는 흑색, 맛으로는 짠것을 뜻함



▶ 특정 五行이 많을 때

木多則 (3개 이상) - 女子氣運(여자, 성장, 의욕) 하고자 
                    하는 일은 많으나 현실에 맞지 않으므로 
                    정신질환이 따른다. 발전적인 의욕과 
                    용감성에 여자가 따른다.

火多則 (3개 이상) - 身病多有 (애정, 온도, 계절, 폐허, 생성) 
                    열기는 열의로 정열을 태우니 과열(過熱)이 
                    우환이 되어 화근이 병을 유발.

土多則 (3개 이상) - 財金旺盛(물상[物想], 기본, 토대, 중앙, 
                    분열),  3개이면 천복성(天福星)

金多則 (3개 이상) - 人物特殊(반석, 기초, 인불, 강직) 인간 
                    유대 관계 원만, 과하면 까다롭고 권모술수
                    에 능함

水多則 (3개 이상) - 可知淫亂(음란, Sex, 번성), 수다스럽고 
                    혁명적 (변혁, 변동을 잘한다) Sex 와 연관



▶ 특정 五行이 적을때

木이 없을 때 - 의식주의 어려움이 있다. 발전적인 의욕이 미약, 
               타인의 지배하에서 헤어나질 못함. 뚜렷한 목적이 
               없다.

火가 없을 때 - 男女 多結合, 애정 결함으로 부부 사이가 길게 
               연속되지 못하고 자식에게도 냉정하고 대인 관계도 
               길게 인연을 맺지 못함. 이혼율이 많다.
               화목한 가정을 못 이룸.

土가 없을 때 - 住宅의 어려움. 자신의 토대가 되어있지 않으며, 
               더부살이할 팔자, 열심히 돈을 모아도 자신의 것이 
               못된다.

金이 없을 때 - 인간 관계가 어려움. 인덕이 없고, 인간 유대가 
               잘 안됨. 기초가 빈곤하여 매사일 완성되지 못함. 
               사기 잘 당함 (방어능력 부족)

水가 없을 때 - 고향과 부부의 이별, 정서 부족, 갈등 번민 속에서 
               고지식. 융통성이 없다. 변동운 미약, 원 고향에 
               오래 머물지 못함. 물을 찾아 헤맴.</pre>
</div>
			</tD>
		</tR>
	</tablE>
	</div>
</div>

</td></tr>
<tr bgcolor=f8f8f8><td width=150 align=center>성씨의 오행</td><td width=150 align=center>중간자의 오행</td><td width=150 align=center>끝자의 오행</td><td width=50 align=center>선택</td></tr>

<?
$c=0;

   if ($search_01 == $oheng123[$j]) {
       $mokwha2 = substr($search_01,2,2); $mokwha3 = substr($search_01,4,2);
?>
	  <tr bgcolor=DDDDDD>
      
      <form name=form method=post action=<?=$action_var;?>>   
		  
	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

      <td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>
      <input type=hidden name=mokwha1 value="<?=$mokwha1;?>">
      <input type=hidden name=mokwha2 value="<?=$mokwha2;?>">
      <input type=hidden name=mokwha3 value="<?=$mokwha3;?>">
      <input type=hidden name=hanja1 value="<?=$hanja1;?>">
      <input type=hidden name=hanjano1 value="<?=$hanjano1;?>">
      <input type=hidden name=hangul1 value="<?=$hangul1;?>">
      <input type=hidden name=sex value="<?=$sex;?>">
      <input type=hidden name=my_solnuar value="<?=$my_solnuar;?>">
      <input type=hidden name=year value="<?=$request_year;?>">
      <input type=hidden name=month value="<?=$request_month;?>">      
      <input type=hidden name=day value="<?=$request_day;?>">
      <input type=hidden name=hour value="<?=$request_hour;?>">
      <input type=hidden name=min value="<?=$request_min;?>">
      <input type=hidden name=youn value="<?=$youn;?>">         
      <input type=hidden name=mok_power_ww value="<?=$mok_power_ww;?>">                  
      <input type=hidden name=wha_power_ww value="<?=$wha_power_ww;?>"> 
      <input type=hidden name=suu_power_ww value="<?=$suu_power_ww;?>"> 
      <input type=hidden name=gum_power_ww value="<?=$gum_power_ww;?>"> 
      <input type=hidden name=to_power_ww value="<?=$to_power_ww;?>"> 

      <input type=hidden name=url value="<?=$url;?>"> 
      <input type=hidden name=urltemp value="<?=$urltemp;?>">          

      <input type=button value=선택 onclick='form.submit()' onfocus=this.blur();>
         
      </td>
       </form>     
      </tr>
<?
     
     $c = $c + 1;
     }
   
   
   ###############################################################################################################################
   
   if ($search_02 == $oheng123[$j]) {
       $mokwha2 = substr($search_02,2,2); $mokwha3 = substr($search_02,4,2);
?>
	   <tr bgcolor=DDDDDD>
       <form name=form1 method=post action=<?=$action_var;?>>
       <td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>
       
	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>
      
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
      
      <input type=button value=선택 onclick='form1.submit()' onfocus=this.blur();>
                      
       </td>
       </form>       
       </tr>
<?
     $c = $c + 1;     
     }
   
   
   
   ###############################################################################################################################
   
   if ($search_03 == $oheng123[$j]) {
       $mokwha2 = substr($search_03,2,2); $mokwha3 = substr($search_03,4,2);
?>
	   <tr bgcolor=DDDDDD>
       <form name=form2 method=post action=<?=$action_var;?>>  
       <td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>
       
	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>
       
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
            
      <input type=button value=선택 onclick='form2.submit()' onfocus=this.blur();>
    
       </td>
        </form>      
       
       </tr>
<?
     $c = $c + 1;     
     }
   
   
###############################################################################################################################   
   if ($search_04 == $oheng123[$j]) {
       $mokwha2 = substr($search_04,2,2); $mokwha3 = substr($search_04,4,2);
?>
		<tr bgcolor=DDDDDD>
        <form name=form3 method=post action=<?=$action_var;?>>      
        <td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>
       
       
	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

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

      <input type=button value=선택 onclick='form3.submit()' onfocus=this.blur();>
       </td>
        </form>      
       </tr>
<?
     $c = $c + 1;     
     }


###############################################################################################################################test
if (($c < '2')&&($mokwha1 == '木')) {$mokwha2 = '火';$mokwha3 = '木';
?>
	  <tr bgcolor=DDDDDD>
      <form name=form4 method=post action=<?=$action_var;?>>
	  <td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

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
            
      <input type=button value=선택 onclick='form4.submit()' onfocus=this.blur();>
</td>
      </form> 
</tr>
<?
}

###############################################################################################################################
if (($c < '2')&&($mokwha1 == '木')) {$mokwha2 = '火';$mokwha3 = '土';
?>
	  <tr bgcolor=DDDDDD>
      <form name=form41 method=post action=<?=$action_var;?>>
  	  <td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

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
            
      <input type=button value=선택 onclick='form41.submit()' onfocus=this.blur();>

</td>
      </form> 
</tr>
<?
}

###############################################################################################################################
if (($c < '2')&&($mokwha1 == '火')) {$mokwha2 = '木';$mokwha3 = '火';
?>
		<tr bgcolor=DDDDDD>
		<form name=form5 method=post action=<?=$action_var;?>>
		<td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

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
      
      <input type=button value=선택 onclick='form5.submit()' onfocus=this.blur();>
</td>
      </form> 
</tr>
<?
}

###############################################################################################################################
if (($c < '2')&&($mokwha1 == '火')) {$mokwha2 = '火';$mokwha3 = '木';
?>
		<tr bgcolor=DDDDDD>
        <form name=form51 method=post action=<?=$action_var;?>>
		<td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

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
            
      <input type=button value=선택 onclick='form51.submit()' onfocus=this.blur();>
</td>
      </form> 
</tr>
<?
}

###############################################################################################################################
if (($c < '2')&&($mokwha1 == '土')) {$mokwha2 = '火';$mokwha3 = '土';
?>
		<tr bgcolor=DDDDDD>
        <form name=form6 method=post action=<?=$action_var;?>>
		<td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>
 
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
      
      <input type=button value=선택 onclick='form6.submit();' onfocus=this.blur();>
</td>
      </form> 
</tr>
<?
}

####################################################################################################################################


if (($c < '2')&&($mokwha1 == '土')) {$mokwha2 = '土';$mokwha3 = '火';
?>
		<tr bgcolor=DDDDDD>
        <form name=form61 method=post action=<?=$action_var;?>>
		<td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>
 
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
      
      <input type=button value=선택 onclick='form61.submit()' onfocus=this.blur();>
</td>
      </form> 
</tr>
<?
}



###############################################################################################################################
if (($c < '2')&&($mokwha1 == '金')) {$mokwha2 = '水';$mokwha3 = '金';
?>
		<tr bgcolor=DDDDDD>
        <form name=form7 method=post action=<?=$action_var;?>>
		<td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

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
      
      <input type=button value=선택 onclick='form7.submit()' onfocus=this.blur();>
</td>
      </form>  
</tr>
<?
}

###############################################################################################################################
if (($c < '2')&&($mokwha1 == '金')) {$mokwha2 = '金';$mokwha3 = '水';
?>
		<tr bgcolor=DDDDDD>
        <form name=form71 method=post action=<?=$action_var;?>>
		<td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

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
      
      <input type=button value=선택 onclick='form71.submit()' onfocus=this.blur();>
</td>
      </form>  
</tr>
<?
}


###############################################################################################################################
if (($c < '2')&&($mokwha1 == '水')) {$mokwha2 = '木';$mokwha3 = '水';
?>
		<tr bgcolor=DDDDDD>
        <form name=form8 method=post action=<?=$action_var;?>>
		<td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

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
      
      <input type=button value=선택 onclick='form8.submit();' onfocus=this.blur();>
</td>
      </form>  
</tr>
<?

}
###############################################################################################################################
if (($c < '2')&&($mokwha1 == '水')) {$mokwha2 = '金';$mokwha3 = '土';
?>
		<tr bgcolor=DDDDDD>
        <form name=form81 method=post action=<?=$action_var;?>>
		<td align=center><?=$mokwha1;?></td><td align=center><?=$mokwha2;?></td><td align=center><?=$mokwha3;?></td><td align=center>

	  <input type='hidden' name='cate' value=<?=$cate;?>>
	  <input type='hidden' name='sel' value=<?=$sel;?>>

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
      
      <input type=button value=선택 onclick='form81.submit();' onfocus=this.blur();>
</td>
      </form>  
</tr>
<?
} 
?>
</table>
<br><br>