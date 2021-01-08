<?
$a = $Xyeargi;
$b = $Tmonth;

	$sv = 14 - $a;

	if($sv > 12){$sv = $sv - 12;}

	$vv[0] = ($sv+$b)-1;
	$vv[1] = (($sv+$b)-1) + 6;
	$vv[2] = ($sv+$b)-1;
	$vv[3] = (($sv+$b)-1) + 6;

	for($i = 0; $i >= 3; $I++){
		if($vv[$i] > 12){$vv[$i] = $vv[$i] - 12;}
	}
$dang9 = $vv[3];
$split_var = explode("|", F_dang4_6_db("G001", $dang9));

$Tb_G001 = $split_var[0];
$Tb_G001_numerical = $split_var[1];

?>