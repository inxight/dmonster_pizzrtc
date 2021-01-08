<?
If($sex == "남"){
	$select_Var = $my_day_e;
	
	$c_start_year = $request_year - 3;
	$c_end_year = $request_year + 10;

	$sex_var = "여";
}Else{
	$select_Var = $my_month_e;
	
	$c_start_year = $request_year - 10;
	$c_end_year = $request_year + 3;

	$sex_var = "남";
}

if($select_Var=="亥"){$choice_var = "寅";}
if($select_Var=="寅"){$choice_var = "亥";}
if($select_Var=="子"){$choice_var = "丑";}
if($select_Var=="丑"){$choice_var = "子";}
if($select_Var=="卯"){$choice_var = "戌";}
if($select_Var=="戌"){$choice_var = "卯";}
if($select_Var=="辰"){$choice_var = "酉";}
if($select_Var=="酉"){$choice_var = "辰";}
if($select_Var=="巳"){$choice_var = "申";}
if($select_Var=="申"){$choice_var = "巳";}
if($select_Var=="午"){$choice_var = "未";}
if($select_Var=="未"){$choice_var = "午";}



$sql = "SELECT * FROM toC_manse_sub  WHERE umyear_e = '$choice_var'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

		for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$umyear_h = stripslashes($row[umyear_h]);
			$umyear_e = stripslashes($row[umyear_e]);

			$no = stripslashes($row[no]);

			if (($no >= $c_start_year) && ($no < $c_end_year)) {$no_cdis = $no; $umyear_h_cdis = $umyear_h; $umyear_e_cdis = $umyear_e;}
}

if ($umyear_e_cdis == '子') {$ddi_cdis = '쥐띠';}
if ($umyear_e_cdis == '丑') {$ddi_cdis = '소띠';}
if ($umyear_e_cdis == '寅') {$ddi_cdis = '범띠';}
if ($umyear_e_cdis == '卯') {$ddi_cdis = '토끼띠';}
if ($umyear_e_cdis == '辰') {$ddi_cdis = '용띠';}
if ($umyear_e_cdis == '巳') {$ddi_cdis = '뱀띠';}
if ($umyear_e_cdis == '午') {$ddi_cdis = '말띠';}
if ($umyear_e_cdis == '未') {$ddi_cdis = '양띠';}
if ($umyear_e_cdis == '申') {$ddi_cdis = '원숭이띠';}
if ($umyear_e_cdis == '酉') {$ddi_cdis = '닭띠';}
if ($umyear_e_cdis == '戌') {$ddi_cdis = '개띠';}
if ($umyear_e_cdis == '亥') {$ddi_cdis = '돼지띠';}

$um_total = $umyear_h_cdis.$umyear_e_cdis;

$sql ="select DB_data from G034 where DB_express = '".$um_total."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $DB_data = stripslashes($row[DB_data]);
}

$Tb_G034 = "귀하와 인연이 있는 ".$sex_var."자는 <b>".$no_cdis." (".$umyear_h_cdis.$umyear_e_cdis.")년생 ".$ddi_cdis."</b> ".$sex_var."성입니다. &nbsp;<br>".$DB_data;
?>