<?
if (strlen($result_14jusung_bubu) == '4') {$re_14jusung_bubu = substr($result_14jusung_bubu,0,4);}
if (strlen($result_14jusung_bubu) == '8') {$re_14jusung_bubu = substr($result_14jusung_bubu,0,8);}
if ((strlen($result_14jusung_bubu) == '6')||(strlen($result_14jusung_bubu) == '12')) {$re_14jusung_bubu = substr($result_14jusung_bubu,0,6);}
if (strlen($result_14jusung_bubu) == '10') {
             if ((substr($result_14jusung_bubu,4,2) == '과')||(substr($result_14jusung_bubu,4,2) == '록')||(substr($result_14jusung_bubu,4,2) == '기')||(substr($result_14jusung_bubu,4,2) == '권')) {
                    $re_14jusung_bubu = substr($result_14jusung_bubu,0,6);  //////////자미기천상
                    }else{
                    $re_14jusung_bubu = substr($result_14jusung_bubu,4,6);  //////////자미천상기
                    }
}

$sql = "SELECT DB_data FROM J018 WHERE DB_express_1 = '".$result_14jusung_bubu."' and DB_express = '".$result_bubugung."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_J018 = stripslashes($row[DB_data]);
}
?>