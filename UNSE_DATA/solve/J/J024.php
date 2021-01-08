<?
if (strlen($result_14jusung_hyungjae) == '4') {$re_14jusung_hyungjae = substr($result_14jusung_hyungjae,0,4);}
if (strlen($result_14jusung_hyungjae) == '8') {$re_14jusung_hyungjae = substr($result_14jusung_hyungjae,0,8);}
if ((strlen($result_14jusung_hyungjae) == '6')||(strlen($result_14jusung_hyungjae) == '12')) {$re_14jusung_hyungjae = substr($result_14jusung_hyungjae,0,6);}
if (strlen($result_14jusung_hyungjae) == '10') {
         if ((substr($result_14jusung_hyungjae,4,2) == '과')||(substr($result_14jusung_hyungjae,4,2) == '록')||(substr($result_14jusung_hyungjae,4,2) == '기')||(substr($result_14jusung_hyungjae,4,2) == '권')) {
                  $re_14jusung_hyungjae = substr($result_14jusung_hyungjae,0,6);  //////////자미기천상
                  }else{
                  $re_14jusung_hyungjae = substr($result_14jusung_hyungjae,4,6);  //////////자미천상기
                  }
}


$sql = "SELECT DB_data FROM J024 WHERE DB_express_1 = '".$result_14jusung_hyungjae."' and DB_express = '".$result_hyungjaegung."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_J024 = stripslashes($row[DB_data]);
}
?>