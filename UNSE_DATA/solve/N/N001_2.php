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

$url=$_POST["url"];

$hanja1 = $_REQUEST["hanja1"];

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
                 <td align=center><b>[ 용신셀프작명 총 4 단계에서 3 단계 진행중입니다. ]</b></td>
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

<table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align="center">

<tr bgcolor=FFFFFF><td colspan=5>
<br>

<table width="100%" cellpadding="0" cellspacing="0">
	<tR>
		<tD style="padding-left:24px;"><b>획수를 확인하세요</b></tD>
		<TD align="right" style="padding-right:18px;"><input type=button value="이전단계로 되돌아가기" onclick=javascript:history.go(-2); onfocus=this.blur();></tD>
	</tR>
</table>
<ul>


<li>본인 사주의 용신을 적용하여 사주와 조화되지 않는 획수는 제거하여 나타납니다. 
<li>천인지 삼재법과 수리오행의 상생상극을 적용하여 좋은 길수 만을 적용하였습니다.
<li>너무 획수가 많은 글자는 되도록이면 피하는 것이 좋습니다.
<li><font color="#025BFD">4단계로 진행하셔도 다시 3단계에서 시작하실 수 있습니다.</font><br><font color="#FD0214">(단, 3단계에서 2단계로의 진행은 3회로 제한 됩니다)</font>
</ul>

</td>
</tr>

<tr bgcolor=f8f8f8>
   <td width=30 align=center>구분</td>
   <td width=150 align=center>성씨</td>
   <td width=150 align=center>중간자</td>
   <td width=150 align=center>끝자</td>
   <td width=30 align=center>.</td>
</tr>

<tr bgcolor=f8f8f8>
   <td width=30 align=center>오행</td>
   <td width=150 align=center><?=$mokwha1;?></td>
   <td width=150 align=center><?=$mokwha2;?></td>
   <td width=150 align=center><?=$mokwha3;?></td>
   <td width=30 align=center>.</td>
</tr>
<?
if ($sex == '남'){$suri_no = array(1,3,5,6,7,8,11,13,15,16,18,21,23,24,25,29,31,32,33,35,37,39,41,45,47,48,52,57,61,63,65,67,68,81);}
 else{$suri_no = array(1,3,5,6,7,8,11,13,15,16,17,18,24,25,29,31,35,37,38,41,45,47,48,52,57,58,61,63,65,67,68,81);}

$same01 = 0;
$same02 = 0;
$xsame01 = 0;



$i = $hanjano1; ////성획수

//if (($my_month_e == '寅')||($my_month_e == '卯')||($my_month_e == '辰')) {$jinyong = '金'; $banyong = '土'; $xuse_1 = '木';}
//if (($my_month_e == '巳')||($my_month_e == '午')||($my_month_e == '未')) {$jinyong = '水'; $banyong = '金'; $xuse_1 = '火';}
//if (($my_month_e == '申')||($my_month_e == '酉')||($my_month_e == '戌')) {$jinyong = '木'; $banyong = '水'; $xuse_1 = '金';$xuse_2 = '火';}
//if (($my_month_e == '亥')||($my_month_e == '子')||($my_month_e == '丑')) {$jinyong = '火'; $banyong = '木'; $xuse_1 = '水';}

if (($my_month_e == '寅')||($my_month_e == '卯')||($my_month_e == '辰')) {$yong01 = 7; $yong02 = 8; $yong03 = 5; $yong04 = 6; $xyong01 = 1; $xyong02 = 2;}
if (($my_month_e == '巳')||($my_month_e == '午')||($my_month_e == '未')) {$yong01 = 9; $yong02 = 0; $yong03 = 7; $yong04 = 8; $xyong01 = 3; $xyong02 = 4;}
if (($my_month_e == '申')||($my_month_e == '酉')||($my_month_e == '戌')) {$yong01 = 1; $yong02 = 2; $yong03 = 9; $yong04 = 0; $xyong01 = 7; $xyong02 = 8;}
if (($my_month_e == '亥')||($my_month_e == '子')||($my_month_e == '丑')) {$yong01 = 3; $yong02 = 4; $yong03 = 1; $yong04 = 2; $xyong01 = 9; $xyong02 = 0;}

    
      
      for ($j = 1; $j <30; $j++) { 

	   for ($k = 1; $k < 30; $k++) { 
      
                for ($s = 1; $s<sizeof($suri_no);$s++){

                   if (($i+$j+$k) == $suri_no[$s]){
		   
		        for ($ss = 1; $ss<sizeof($suri_no);$ss++){
		   
			     if (($i+$j) == $suri_no[$ss]){

	      		           for ($sss = 1; $sss<sizeof($suri_no);$sss++){
		                   
				          if (($j+$k) == $suri_no[$sss]){
		   
			      		        for ($ssss = 1; $ssss<sizeof($suri_no);$ssss++){
		                        
						     
						      $same01 = 0;$same02 = 0;$xsame01 = 0;
						      
						      
						      if (($i+$k) == $suri_no[$ssss]){
		   
							 
							 $in = ($i+$j)%10;

							     if (($in == $yong01)||($in == $yong02)){$same01 = $same01 + 1;}
							     if (($in == $yong03)||($in == $yong04)){$same02 = $same02 + 1;}
							     if (($in == $xyong01)||($in == $xyong02)){$xsame01 = $xsame01 + 1;}


							 $je = ($j+$k)%10;

							     if (($je == $yong01)||($je == $yong02)){$same01 = $same01 + 1;}
							     if (($je == $yong03)||($je == $yong04)){$same02 = $same02 + 1;}
							     if (($je == $xyong01)||($je == $xyong02)){$xsame01 = $xsame01 + 1;}


							 $ch = ($i+$j+$k)%10;

							     if (($ch == $yong01)||($ch == $yong02)){$same01 = $same01 + 1;}
							     if (($ch == $yong03)||($ch == $yong04)){$same02 = $same02 + 1;}
							     if (($ch == $xyong01)||($ch == $xyong02)){$xsame01 = $xsame01 + 1;}
										  
						      if (($same01 + $same02 - $xsame01) > 2) 
                                                         {$no1 = 'yes';


                                                        $form = $suri_no[$ssss];
							$str="<input type=submit value=선택 onfocus=this.blur()>";
?>
<tr bgcolor=f8f8f8>
	<form name=<?=$form?> method=post action=<?=$action_var;?>>     
	<input type='hidden' name='cate' value="<?=$cate;?>">
	<input type='hidden' name='sel' value="<?=$sel;?>">
	<td width=30 align=center>획수</td>
	<td width=150 align=center><font size=5> <?=$hanja1;?></font> (<?=$hangul1;?>) <font color=blue><?=$hanjano1;?></font> 획</td>
	<td width=150 align=center><font color=blue><?=$j?></font> 획</td>
	<td width=150 align=center><font color=blue><?=$k?></font> 획</td>
	<td width=30 align=center>
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

	<?=$str?>    
	</td>
	</form> 
</tr>
<?								
	
								
							}


		                                      
						      }
						}
					  }
		                   }
		             }
		        }
                    }
                }      
            }      
      }   


if ($no1 == ''){

      for ($j = 1; $j <30; $j++) { 

	   for ($k = 1; $k < 30; $k++) { 
      
                for ($s = 1; $s<sizeof($suri_no);$s++){

                   if (($i+$j+$k) == $suri_no[$s]){
		   
		        for ($ss = 1; $ss<sizeof($suri_no);$ss++){
		   
			     if (($i+$j) == $suri_no[$ss]){

	      		           for ($sss = 1; $sss<sizeof($suri_no);$sss++){
		                   
				          if (($j+$k) == $suri_no[$sss]){
		   
			      		        for ($ssss = 1; $ssss<sizeof($suri_no);$ssss++){
		                        
						     
						      $same01 = 0;$same02 = 0;$xsame01 = 0;
						      
						      
						      if (($i+$k) == $suri_no[$ssss]){
		   
							 
							 $in = ($i+$j)%10;

							     if (($in == $yong01)||($in == $yong02)){$same01 = $same01 + 1;}
							     if (($in == $yong03)||($in == $yong04)){$same02 = $same02 + 1;}
							     if (($in == $xyong01)||($in == $xyong02)){$xsame01 = $xsame01 + 1;}


							 $je = ($j+$k)%10;

							     if (($je == $yong01)||($je == $yong02)){$same01 = $same01 + 1;}
							     if (($je == $yong03)||($je == $yong04)){$same02 = $same02 + 1;}
							     if (($je == $xyong01)||($je == $xyong02)){$xsame01 = $xsame01 + 1;}


							 $ch = ($i+$j+$k)%10;

							     if (($ch == $yong01)||($ch == $yong02)){$same01 = $same01 + 1;}
							     if (($ch == $yong03)||($ch == $yong04)){$same02 = $same02 + 1;}
							     if (($ch == $xyong01)||($ch == $xyong02)){$xsame01 = $xsame01 + 1;}


							
					              
						      
						      if (($same01 + $same02 - $xsame01) > 1) 

                                                         {$no1 = 'yes';



//                                                        echo "<font color=red>$same01 + $same02 - $xsame01</font> <br>";

                                                        $form = $suri_no[$ssss];
							$str="<input type=submit value=선택 onfocus=this.blur()>";
?>
<tr bgcolor=f8f8f8>
	<form name=<?=$form?> method=post action=<?=$action_var;?>>      
	<input type='hidden' name='cate' value="<?=$cate;?>">
	<input type='hidden' name='sel' value="<?=$sel;?>">
	<td width=30 align=center>획수</td>
	<td width=150 align=center><font size=5> <?=$hanja1;?></font> (<?=$hangul1;?>) <font color=blue><?=$hanjano1;?></font> 획</td>
	<td width=150 align=center><font color=blue><?=$j?></font> 획</td>
	<td width=150 align=center><font color=blue><?=$k?></font> 획</td>
	<td width=30 align=center>
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
   
	<?=$str?>   
	</td>
	</form> 
</tr>
<?	
								}


		                                      
						      }
						}
					  }
		                   }
		             }
		        }
                    }
                }      
            }      
      }   






}



//if ($no1 == ''){echo "두번째 실패 또 새로돌려";}
//if ($no1 == 'yes'){echo "두번째 성공됐다";}

if ($no1 == ''){

      for ($j = 1; $j <30; $j++) { 

	   for ($k = 1; $k < 30; $k++) { 
      
                for ($s = 1; $s<sizeof($suri_no);$s++){

                   if (($i+$j+$k) == $suri_no[$s]){
		   
		        for ($ss = 1; $ss<sizeof($suri_no);$ss++){
		   
			     if (($i+$j) == $suri_no[$ss]){

	      		           for ($sss = 1; $sss<sizeof($suri_no);$sss++){
		                   
				          if (($j+$k) == $suri_no[$sss]){
		   
			      		        for ($ssss = 1; $ssss<sizeof($suri_no);$ssss++){
		                        
						     
						      $same01 = 0;$same02 = 0;$xsame01 = 0;
						      
						      
						      if (($i+$k) == $suri_no[$ssss]){
		   
							 
							 $in = ($i+$j)%10;

							     if (($in == $yong01)||($in == $yong02)){$same01 = $same01 + 1;}
							     if (($in == $yong03)||($in == $yong04)){$same02 = $same02 + 1;}
							     if (($in == $xyong01)||($in == $xyong02)){$xsame01 = $xsame01 + 1;}


							 $je = ($j+$k)%10;

							     if (($je == $yong01)||($je == $yong02)){$same01 = $same01 + 1;}
							     if (($je == $yong03)||($je == $yong04)){$same02 = $same02 + 1;}
							     if (($je == $xyong01)||($je == $xyong02)){$xsame01 = $xsame01 + 1;}


							 $ch = ($i+$j+$k)%10;

							     if (($ch == $yong01)||($ch == $yong02)){$same01 = $same01 + 1;}
							     if (($ch == $yong03)||($ch == $yong04)){$same02 = $same02 + 1;}
							     if (($ch == $xyong01)||($ch == $xyong02)){$xsame01 = $xsame01 + 1;}


							
					              
						      
						      if (($same01 + $same02 - $xsame01) >= 0) 

                                                         {$no1 = 'yes';



//                                                        echo "<font color=red>$same01 + $same02 - $xsame01</font> <br>";

                                                        $form = $suri_no[$ssss];
							$str="<input type=submit value=선택 onfocus=this.blur()>";
?>
<tr bgcolor=f8f8f8>
	<form name=<?=$form?> method=post action=<?=$action_var;?>>    
	<input type='hidden' name='cate' value="<?=$cate;?>">
	<input type='hidden' name='sel' value="<?=$sel;?>">
	<td width=30 align=center>획수</td>
	<td width=150 align=center><font size=5> <?=$hanja1;?></font> (<?=$hangul1;?>) <font color=blue><?=$hanjano1;?></font> 획</td>
	<td width=150 align=center><font color=blue><?=$j?></font> 획</td>
	<td width=150 align=center><font color=blue><?=$k?></font> 획</td>
	<td width=30 align=center>
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

	<?=$str?>
	</td>
	</form> 
</tr>
<?
							}


		                                      
						      }
						}
					  }
		                   }
		             }
		        }
                    }
                }      
            }      
      }   


}

?>
</table>