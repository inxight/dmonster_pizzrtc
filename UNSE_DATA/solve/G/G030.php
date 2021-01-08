<?
for ($i = 1 ; $i<9; $i++) {
   if ($h_array[$i] == '정재') {$k1[$i] = $i; $counter1 = $counter1 + 1;}
   if ($h_array[$i] == '편재') {$k2[$i] = $i; $counter2 = $counter2 + 1;}
}
?>
<BR>
<?S_CI_img("G", "30.jpg");?>

귀하는 처궁이 위의 명식에서 붉게 표시된 일지궁 입니다.<br>

남자는 십성중에 정재나 편재가 아내성에 해당합니다.(정재와 편재를 합해서 재성이라고 합니다)<br>
<?
If($sex == "남"){
	if (($counter1 <> "") && ($counter2 <> "")) { echo "사주상에 드러난 재성(妻星)은 정재가 ". $counter1 ." 개가 있고 편재가 ". $counter2 ." 개가 있군요<br>";}
	if (($counter1 <> "") && ($counter2 == "")) { echo "사주상에 드러난 재성(妻星)은 정재가 ". $counter1 ." 개가 있고  편재는 없습니다.<br>";}
	if (($counter1 == "") && ($counter2 <> "")) { echo "사주상에 드러난 재성(妻星)은 편재가 ". $counter2 ." 개가 있고  정재는 없습니다.<br>";}
	if (($counter1 == "") && ($counter2 == "")) { echo "사주상에 드러난 재성(妻星)은 없습니다. 아쉽네요. 지장간에서 찾아봅니다.)<br>";}

//////////////////////////////////////////////////////////////////////////////////////////////////////

	if (($counter3 <> "") && ($counter4 <> "")) { echo "지장간에 숨은 재성(妻星)은 정재가 ". $counter3 ." 개가 있고 편재가 ". $counter4 ." 개가 있군요.<br>";}
	if (($counter3 <> "") && ($counter4 == "")) { echo "지장간에 숨은 재성(妻星)은 정재가 ". $counter3 ." 개가 있고  편재는 없습니다.<br>";}
	if (($counter3 == "") && ($counter4 <> "")) { echo "지장간에 숨은 재성(妻星)은  편재가 ". $counter4 ." 개가 있고  정재는 없습니다. <br>";}
	if (($counter3 == "") && ($counter4 == "")) { echo "지장간에 숨은 재성(妻星)은 없습니다.<br>";}

///////////////////////////////////////////////////////////////////////////////////////////////////////

	if (($counter1 == "") && ($counter2 == "") && ($counter3 == "") && ($counter4 == "")) { echo "하여 귀하의 사주에는 재성(妻星)이 없습니다. 아쉽네요.<br>그러나 실망 하실 필요는 없습니다.<br>대운(십년단위로 보는 운)이나 세운(년운)에서 재성(妻星)이 들어오면 좋은 인연을 만들 수 도 있습니다.";}
	if (($counter1 <> "") && ($counter2 <> "") && ($counter3 <> "") && ($counter4 <> "")) { echo "하여 귀하의 사주에는 재성(妻星)이 혼잡하게 많다고 봅니다.<br>이런경우는 주위에 여자가 많다고 보고 아내에게만 오직 마음을 두는 일편단심은 아니라고 봅니다.";}

	##########################################################################################################3처성보기

	echo "다음은 처성(妻星)의 희기(喜忌)를 보기로 합니다.";

	if (($my_day_h == "甲") || ($my_day_h == "乙")) { $my_oday = "목(木) 이므로 토(土)가 재성이 되고 사주에서 토(土)는" ; $osearch = "土" ; $osearch1 = "토";}
	if (($my_day_h == "丙") || ($my_day_h == "丁")) { $my_oday = "화(火) 이므로 금(金)이 재성이 되고 사주에서 금(金)은" ; $osearch = "金" ; $osearch1 = "금";}
	if (($my_day_h == "戊") || ($my_day_h == "己")) { $my_oday = "토(土) 이므로 수(水)가 재성이 되고 사주에서 수(水)는" ; $osearch = "水" ; $osearch1 = "수";}
	if (($my_day_h == "庚") || ($my_day_h == "辛")) { $my_oday = "금(金) 이므로 목(木)이 재성이 되고 사주에서 목(木)은" ; $osearch = "木" ; $osearch1 = "목";}
	if (($my_day_h == "壬") || ($my_day_h == "癸")) { $my_oday = "수(水) 이므로 화(火)가 재성이 되고 사주에서 화(火)는" ; $osearch = "火" ; $osearch1 = "화";}

	echo "".$my_day_h." 일간은(나 자신;日元) 오행이 ".$my_oday;

	for($i=0; $i < 4; $i++){
		if( $oheng_array[$i] == $osearch) { $temp_i = $i;	}	}

	$my_osin = $sin_array[$temp_i];

	echo  $my_osin ." 이 되겠습니다.";

	echo "다음은 처궁(妻宮)의 희기(喜忌)를 봅니다.<Br>처궁은 위의 명식에서 붉게 표시된 궁입니다.<Br>처궁은 ". $my_day_eee ." 이군요.";

	$counter13  = $counter1 + $counter3;
	$counter24  = $counter2 + $counter4;

	if ($counter13 == "") { $counter13 = "없음";}
	if ($counter24 == "") { $counter24 = "없음";}
?>
귀하의 사주에서 아내와 관계된 항목을 요약하면 아래표와 같습니다.<br><br>
<table width=460 bgcolor=CCCCCC align=center border=0 cellpadding=10 cellspacing=1>
		<tr bgcolor=ddddff>
			<td align=center width=115>정재(正財)</td>
		    <td align=center width=115>편재(偏財)</td>
		    <td align=center width=115>처성(妻星)</td>
		    <td align=center width=115>처궁(妻宮)</td>
		</tr>
		<tr bgcolor=FFFFFF>
			<td align=center><?=$counter13?></td>
		    <td align=center><?=$counter24?></td>
		    <td align=center><?=$my_osin?></td>
		    <td align=center><?=$my_day_eee?></td>
        </tr>
</table>
<br>
<?
	}Else{
	if (($counter1 <> "") && ($counter2 <> "")) { echo "사주상에 드러난 관성(夫星)은 정관이 ". $counter1 ."  개가 있고 편관이 ". $counter2 ." 개가 있군요<br>";}
	if (($counter1 <> "") && ($counter2 == "")) { echo "사주상에 드러난 관성(夫星)은 정관이 ". $counter1 ." 개가 있고  편관은 없습니다.<br>";}
	if (($counter1 == "") && ($counter2 <> "")) { echo "사주상에 드러난 관성(夫星)은 편관이 ". $counter2 ." 개가 있고  정관은 없습니다.<br>";}
	if (($counter1 == "") && ($counter2 == "")) { echo "사주상에 드러난 관성(夫星)은 없습니다. 아쉽네요. 땅속을 파 보아야 하겠습니다.(지장간에서 찾는다는 말입니다)<br>";}

	//////////////////////////////////////////////////////////////////////////////////////////////////////

	if (($counter3 <> "") && ($counter4 <> "")) { echo "지장간에 숨은 관성(夫星)은 정관이 ". $counter3 ." 개가 있고 편관이 ". $counter4 ." 개가 있군요.<br>";}
	if (($counter3 <> "") && ($counter4 == "")) { echo "지장간에 숨은 관성(夫星)은 정관이 ". $counter3 ." 개가 있고  편관은 없습니다.<br>";}
	if (($counter3 == "") && ($counter4 <> "")) { echo "지장간에 숨은 관성(夫星)은  편관이 ". $counter4 ." 개가 있고  정관은 없습니다. <br>";}
	if (($counter3 == "") && ($counter4 == "")) { echo "지장간에 숨은 관성(夫星)은 없습니다.<br>";}

	///////////////////////////////////////////////////////////////////////////////////////////////////////

	if (($counter1 == "") && ($counter2 == "") && ($counter3 == "") && ($counter4 == "")) { echo "하여 귀하의 사주에는 관성(夫星)이 없습니다. 아쉽네요.<br>그러나 실망 하실 필요는 없습니다.<br>대운(십년단위로 보는 운)이나 세운(년운)에서 관성(夫星)이 들어오면 좋은 인연을 만들 수 도 있습니다.";}
	if (($counter1 <> "") && ($counter2 <> "") && ($counter3 <> "") && ($counter4 <> "")) { echo "하여 귀하의 사주에는 관성(夫星)이 혼잡하게 많다고 봅니다.<BR>이런경우는 주위에 남자가 많다고 보고 오직 남편에게만 마음을 두는 일편단심은 아니라고 봅니다.";}

	##########################################################################################################3처성보기

	echo "다음은 부성(夫星)의 희기(喜忌)를 보기로 합니다.";

	if (($my_day_h == "甲") || ($my_day_h == "乙")){$my_oday = "목(木) 이므로 금(金)이 관성이 되고 사주에서 금(金)은"; $osearch = "金"; $osearch1 = "금";}
	if (($my_day_h == "丙") || ($my_day_h == "丁")){$my_oday = "화(火) 이므로 수(水)가 관성이 되고 사주에서 수(水)는"; $osearch = "水"; $osearch1 = "수";}
	if (($my_day_h == "戊") || ($my_day_h == "己")){$my_oday = "토(土) 이므로 목(木)이 관성이 되고 사주에서 목(木)은"; $osearch = "木"; $osearch1 = "목";}
	if (($my_day_h == "庚") || ($my_day_h == "辛")){$my_oday = "금(金) 이므로 화(火)가 관성이 되고 사주에서 화(火)는"; $osearch = "火"; $osearch1 = "화";}
	if (($my_day_h == "壬") || ($my_day_h == "癸")){$my_oday = "수(水) 이므로 토(土)가 관성이 되고 사주에서 토(土)는"; $osearch = "土"; $osearch1 = "토";}

	echo "". $my_day_h ." 일간은(나 자신;日元) 오행이 ". $my_oday;

	for($i=0; $i < 4; $i++){
		if($oheng_array[$i] == $osearch){$temp_i = $i;}
	}

	$my_osin = $sin_array[$temp_i];

	echo $my_osin." 이 되겠습니다.";

	echo "다음은 부궁(夫宮)의 희기(喜忌)를 봅니다.<br>부궁은 위의 명식에서 붉게 표시된 궁입니다.<br>부궁은 ".$my_month_eee." 이군요.";

	$counter13  = $counter1 + $counter3;
	$counter24  = $counter2 + $counter4;
	if($counter13 == ""){$counter13 = "없음";}
	if($counter24 == ""){$counter24 = "없음";}
?>
귀하의 사주에서 남편과 관계된 항목을 요약하면 아래표와 같습니다.<br><br>
<table width=460 bgcolor=CCCCCC align=center border=0 cellpadding=10 cellspacing=1>
                  <tr bgcolor=ddddff>
                    <td align=center width=115>정관(正財)</td>
		    <td align=center width=115>편관(偏財)</td>
		    <td align=center width=115>부성(夫星)</td>
		    <td align=center width=115>부궁(夫宮)</td>
                   </tr>
		   <tr bgcolor=FFFFFF>
                    <td align=center><?=$counter13?></td>
		    <td align=center><?=$counter24?></td>
		    <td align=center><?=$my_osin?></td>
		    <td align=center>1212<?=$my_month_eee?></td>
                   </tr>
		   </table>
<?}?>