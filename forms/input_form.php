		<table width="431" cellpadding="0" cellspacing="0">
			<tr>
				<tD><input type="hidden" name="ggggbb" value="1">
				<table cellpadding="0" cellspacing="0">
					<?
					if($urlinfo == "name"){
					?>
					</tR>
						<tD width="107" height="27" align="center" style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>성 별</b></tD>
					</tR>
					<?}else{?>
					<tR>
						<tD width="107" height="27" align="center" style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>이 름</b></tD>
					</tr>
					<?}?>
					<tR>
						<tD height="4"></tD>
					</tr>
					<tR>
						<tD width="107" height="27" align="center" style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>생년월일시</b></tD>
					</tr>
					<tR>
						<tD height="4"></tD>
					</tr>
					<tR>
						<tD width="107" height="27" align="center" style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>양력/음력</b></tD>
					</tr>
					<tR>
						<tD height="4"></tD>
					</tr>
					<tR>
						<tD width="107" height="27" align="center" style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>평달/윤달</b></tD>
					</tr>
				</table>
				</td>
				<tD width="4"></tD>
				<td>
				<table cellpadding="0" cellspacing="0" bgcolor="#F9F9F9" style="padding-left:1px;">
					<?
					if($urlinfo == "name"){
					?>
					<tR>
						<td width="320" height="27"><input type="radio"  name="sex" value="남" checked>남자 <input type="radio" name="sex" value="여">여자</td>
					</tr>
					<?}else{?>
					<tR>
						<td width="320" height="27"><input class="inputb" type="text"  name="user_name" value=""  maxlength="12" size="12">&nbsp;&nbsp;&nbsp;<input type="radio"  name="sex" value="남" checked onclick="chpart()">남자 <input type="radio" name="sex" value="여" onclick="chpart()">여자</td>
					</tr>
					<?}?>
					<tR>
						<tD height="4"></tD>
					</tr>
					<tR>
						<td width="320" height="27">
						<select name=year class="inputb">
		<SCRIPT LANGUAGE="JavaScript">
		<!--
				var date = new Date();
				with(date)
				{
				var Cuyy = getFullYear();
				var Cumm= getMonth()+1;
				var Cudd = getDate();
				var Cuhh = getHours();
				var Cumi = getMinutes();
				}

				for(n=Cuyy-70; n<=Cuyy; n++){
					s	= "";
					if(n==Cuyy)	s = " selected";
					document.write("<option value=" + n + s + ">" + n);
				}
		//-->
		</SCRIPT>

						</select>&nbsp;년
						<select name=month class="inputb">
		<script language="JavaScript">
		for(n=1; n<=12; n++){
			s	= "";
			dn=n;if(dn<10){dn="0"+dn}
			if(n==Cumm)	s = " selected";
			document.write("<option value=" + dn + s + ">" + n);
		}
		</script>
						</select>&nbsp;월
						<select name=day class="inputb">
		<script language="JavaScript">
		for(n=1; n<=31; n++){
			s	= "";
			dn=n;if(dn<10){dn="0"+dn}
			if(n==Cudd)	s = " selected";
			document.write("<option value=" + dn + s + ">" + n);
		}
		</script>
						</select>&nbsp;일
	<select name="hour"class="inputb">
	                   <option value="0" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;모름</option>
	                   <option value="01"> 子 (23:30 ~ 01:29)</option>
                        <option value="02"  > 丑 (01:30 ~ 03:29)</option>
                        <option value="04"  > 寅 (03:30 ~ 05:29)</option>
                        <option value="06"  > 卯 (05:30 ~ 07:29)</option>
                        <option value="08"  > 辰 (07:30 ~ 09:29)</option>
                        <option value="10"  > 巳 (09:30 ~ 11:29)</option>
                        <option value="12"  > 午 (11:30 ~ 13:29)</option>
                        <option value="14"  > 未 (13:30 ~ 15:29)</option>
                        <option value="16"  > 申 (15:30 ~ 17:29)</option>
                        <option value="18" > 酉 (17:30 ~ 19:29)</option>
                        <option value="20" > 戌 (19:30 ~ 21:29)</option>
                        <option value="22" > 亥 (21:30 ~ 23:29)</option>
         </select>
<input type=hidden name="min" value='00'>
						</td>
					</tr>
					<tR>
						<tD height="4"></tD>
					</tr>
					<tR>
						<td width="320" height="27"><input type="radio"  name="solunar" value="solar" checked>양력 <input type="radio" name="solunar" value="lunar">음력</td>
					</tr>
					<tR>
						<tD height="4"></tD>
					</tr>
					<tR>
						<td width="320" height="27"><input type="radio"  name="youn" value="0" checked>평달 <input type="radio"  name="youn" value="1">윤달</td>
					</tR>
				</tablE>
				</tD>
			</tr>
		</table>


<?
	$MyStrPar = explode("|",$_COOKIE[mystring]);
	$gender 	= $MyStrPar[0];
	$birthday	= $MyStrPar[1];
	$solunar	= $MyStrPar[2];
	$yoon			= $MyStrPar[3];
	if($birthday)
	{
		$userday = explode("-",$birthday);
?>

<script>
	f = document.signform;
	m_gender = "<?=$gender?>";
	if(m_gender==1) f.sex[0].checked = true;
	if(m_gender==2) f.sex[1].checked = true;
	f.year.value 	= "<?=$userday[0]?>";
	f.month.value = "<?=$userday[1]?>";
	f.day.value 	= "<?=$userday[2]?>";
	f.hour.value	= "<?=$userday[3]?>";
	f.min.value		= "<?=$userday[4]?>";
	solunar = "<?=$solunar?>";
	if(solunar==1) f.solunar[0].checked = true;
	if(solunar==2) f.solunar[1].checked = true;
	yoon = "<?=$yoon?>";
	if(yoon==1) f.youn[0].checked = true;
	if(yoon==2) f.youn[1].checked = true;
</script>
<?
	}
?>




<SCRIPT LANGUAGE="JavaScript">
<!--
function chpart()
{
if (signform.ggggbb.value!='1'){
cbmass(1)
}}
//-->
</SCRIPT>