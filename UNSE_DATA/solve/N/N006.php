<?

switch($showInputFN2){
	Case "0" :
		$sung_num = "1";
		break;
	Case "1" :
		$sung_num = "2";
		break;
}

If($showInputNN2 == "0" && $showInputNN3 == "0"){ 
	$name_num = "1";
}ElseIf($showInputNN2 == "1" && $showInputNN3 == "0"){ 
	$name_num = "2";
}Else{
	$name_num = "3";
} 
?>
<table width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	<tr bgcolor=f8f8f8>
		<td align=center><b>[ 성(姓) <?=$sung_num;?> 자 , 이름 <?=$name_num;?> 자 풀이 ]</b></td>
	</tr>
</table>

<br>
<table width='500' border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>   
	<tr bgcolor=f8f8f8> 
		<td><div align='center'>구분</div></td>
		<td><div align='center'>성1</div></td>
<?if($showInputFN2 == "1"){?><td><div align='center'>성2</div></td><?}?>
		<td><div align='center'>이름1</div></td>
<?if($showInputNN2 == "1"){?><td><div align='center'>이름2</div></td><?}?>
<?if($showInputNN3 == "1"){?><td><div align='center'>이름3</div></td><?}?>
	</tr>
	<tr> 
		<td  bgcolor=f8f8f8><div align='center'>한글</div></td>
		<td  bgcolor=FFFFFF><div align='center'><?=$hangul1;?></div></td>
		<?if($showInputFN2 == "1"){?><td  bgcolor=FFFFFF><div align='center'><?=$hangul2;?></div></td><?}?>
		<td  bgcolor=FFFFFF><div align='center'><?if($showInputFN2 == "1"){echo $hangul3;}else{echo $hangul2;}?></div></td>
		<?if($showInputNN2 == "1"){?><td  bgcolor=FFFFFF><div align='center'><?if($showInputFN2 == "1"){echo $hangul4;}else{echo $hangul3;}?></div></td><?}?>
		<?if($showInputNN3 == "1"){?><td  bgcolor=FFFFFF><div align='center'><?=$hangul4;?></div></td><?}?>
	</tr>
	<tr> 
		<td  bgcolor=f8f8f8><div align='center'>한자</div></td>
		<td   bgcolor=FFFFFF><div align='center'><font size=5><?=$hanja1;?></font></div></td>
		<?if($showInputFN2 == "1"){?><td   bgcolor=FFFFFF><div align='center'><font size=5><?=$hanja2;?></font></div></td><?}?>
		<td   bgcolor=FFFFFF><div align='center'><font size=5><?if($showInputFN2 == "1"){echo $hanja3;}else{echo $hanja2;}?></font></div></td>
		<?if($showInputNN2 == "1"){?><td   bgcolor=FFFFFF><div align='center'><font size=5><?if($showInputFN2 == "1"){echo $hanja4;}else{echo $hanja3;}?></font></div></td><?}?>
		<?if($showInputNN3 == "1"){?><td   bgcolor=FFFFFF><div align='center'><font size=5><?=$hanja4;?></font></div></td><?}?>
	</tr>
	<tr> 
		<td bgcolor=f8f8f8><div align='center'>뜻</div></td>
		<td  bgcolor=FFFFFF><div align='center'><?=$what1;?></div></td>
		<?if($showInputFN2 == "1"){?><td bgcolor=FFFFFF><div align='center'><?=$what2;?></div></td><?}?>
		<td   bgcolor=FFFFFF><div align='center'><?if($showInputFN2 == "1"){echo $what3;}else{echo $what2;}?></div></td>
		<?if($showInputNN2 == "1"){?><td bgcolor=FFFFFF><div align='center'><?if($showInputFN2 == "1"){echo $what4;}else{echo $what3;}?></div></td><?}?>
		<?if($showInputNN3 == "1"){?><td bgcolor=FFFFFF><div align='center'><?=$what4;?></div></td><?}?>
	</tr>
	<tr> 
		<td bgcolor=f8f8f8><div align='center'>획수</div></td>
		<td <?if($showInputFN2 == "1"){echo "colspan=2 width='200'";}else{echo "width='150'";}?>  bgcolor=FFFFFF ><div align='center'><?=$hanjano1?><?//=$hanjasunghapw;?>
		<td <?=$widthvar;?> bgcolor=FFFFFF><div align='center'><?if($showInputFN2 == "1"){echo $hanjano3;}else{echo $hanjano2;}?></div></td>	    
		<?if($showInputNN2 == "1"){?><td bgcolor=FFFFFF><div align='center'><?if($showInputFN2 == "1"){echo $hanjano4;}else{echo $hanjano3;}?></div></td><?}?>
		<?if($showInputNN3 == "1"){?><td bgcolor=FFFFFF><div align='center'><?=$hanjano4;?></div></td><?}?>
	</tr>
	<tr> 
		<td  bgcolor=f8f8f8><div align='center'>음오행</div></td>
		<td    bgcolor=FFFFFF><div align='center'><?=$mokwha1;?></div></td>
		<?if($showInputFN2 == "1"){?><td bgcolor=FFFFFF><div align='center'><?=$mokwha2;?></div></td><?}?>
		<td    bgcolor=FFFFFF><div align='center'><?if($showInputFN2 == "1"){echo $mokwha3;}else{echo $mokwha2;}?></div></td>
		<?if($showInputNN2 == "1"){?><td bgcolor=FFFFFF><div align='center'><?if($showInputFN2 == "1"){echo $mokwha4;}else{echo $mokwha3;}?></div></td><?}?>
		<?if($showInputNN3 == "1"){?><td bgcolor=FFFFFF><div align='center'><?=$mokwha4;?></div></td><?}?>
	</tr>		
</table>
<br>

<table width=510 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr bgcolor=f8f8f8>
	  
          <td width=85 align=center>음오행</td>
	  <td width=85 align=center>초년운</td>
	  <td width=85 align=center>장년운</td>
	  <td width=85 align=center>중년운</td>
	  <td width=85 align=center>말년운</td>
	  <td width=85 align=center>사주조화</td>
         </tr>

	 <tr bgcolor=FFFFFF>
	  
          <td align=center><?=$ohengtitle."(".$ohengjumsu.")";?></td>
	  <td align=center><?=$chotitle."(".$chojumsu.")";?></td>
	  <td align=center><?=$jangtitle."(".$jangjumsu.")";?></td>
	  <td align=center><?=$jungtitle."(".$jungjumsu.")";?></td>
	  <td align=center><?=$maltitle."(".$maljumsu.")";?></td>
	  <td align=center><?=$sajutitle."(".$sajujumsu.")";?></td>
         </tr>
	 <tr>
	  <td  colspan=6 align=center bgcolor=f8f8f8><font  color='blue'>자동이름풀이 총평가 점수  <?=$totaljumsu?> 점</font></td>
         </tr>
</table>

	 <br>
	
<table width=510 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color1?>>530점 ~ 600점</td>
          <td  width=350 align=left bgcolor=FFFFFF><font  color=<?=$color1?>>성명학적으로 이름이 아주 좋습니다.</td>
         </tr>
	 <tr>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color2?>>430점 ~ 529점</td>
          <td  width=350 align=left bgcolor=FFFFFF><font  color=<?=$color2?>>무난한 이름으로 보통 입니다.</td>
         </tr>
	 <tr>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color3?>>300점 ~ 429점</td>
          <td  width=350 align=left bgcolor=FFFFFF><font  color=<?=$color3?>>아호나 예명을 사용하여 나쁜운을 제거하시면 좋습니다.</td>
         </tr>
	 <tr>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color4?>>200점 ~ 299점</td>
          <td  width=350 align=left bgcolor=FFFFFF><font  color=<?=$color4?>>이름이 귀하의 운명을 나쁘게 합니다.</td>
         </tr>
	 <tr>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color5?>>100점 ~ 199점</td>
          <td  width=350 align=left bgcolor=FFFFFF><font  color=<?=$color5?>>개명을 고려하셔야 할 이름입니다.</td>
         </tr>
	 <tr>
          <td bgcolor=f8f8f8 width=160 align=center><font  color=<?=$color6?>>0점 ~ 99점</td>
          <td  width=350 align=left bgcolor=FFFFFF><font  color=<?=$color6?>>아주 흉한 이름으로 개명을 하셔야 합니다.</td>
         </tr>
</table>

<?if($bulcomment2 != ""){?>
       <br>
        <table width=510 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr>
	  <td  bgcolor=f8f8f8 colspan=2 align=center>귀하의 이름자에 이름에 사용하지 않는 불용문자가 있습니다.</td>
         </tr>
	 <tr>
	  <td  bgcolor=f8f8f8 width=60 align=center>설명</td>
	  <td   width=500 align=left bgcolor=FFFFFF><font size=5><?=$hanja2?></font> : <?=$bulcomment2?></td>
	 </tr>
      </table>
<?
} 

if($bulcomment3 != "" && $bulcomment4 == ""){
?>

       <br>
        <table width=510 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr>
	  <td  bgcolor=f8f8f8 colspan=2 align=center>귀하의 이름자에 이름에 사용하지 않는 불용문자가 있습니다.</td>
         </tr>
	 <tr>
	  <td  bgcolor=f8f8f8 width=100 align=center>설명</td>
	  <td   width=500 align=left><font size=5><?=$hanja3?></font> : <?=$bulcomment3?></td>
	 </tr>
<?
} 

if($bulcomment3 == "" && $bulcomment4 != ""){
?>
	   <br>
        <table width=510 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr>
	  <td  bgcolor=f8f8f8 colspan=2 align=center>귀하의 이름자에 이름에 사용하지 않는 불용문자가 있습니다.</td>
         </tr>
	 <tr>
	  <td  bgcolor=f8f8f8 width=100 align=center>설명</td>
	  <td   width=500 align=left><font size=5><?=$hanja4?></font> : <?=$bulcomment4?></td>
	 </tr>
      </table>
<?
} 

if($bulcomment3 != "" && $bulcomment4 != ""){
?>
       <br>
        <table width=510 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
	 <tr>
	  <td  bgcolor=f8f8f8 colspan=2 align=center>귀하의 이름자에 이름에 사용하지 않는 불용문자가 있습니다.</td>
         </tr>
	 <tr>
	  <td  bgcolor=f8f8f8 width=100 align=center>설명</td>
	  <td   width=500 align=left><font size=5><?=$hanja3?></font> : <?=$bulcomment3?><br><font size=5><?=$hanja4?></font> : <?=$bulcomment4?></td>
	 </tr>
      </table>
<?
}
?>