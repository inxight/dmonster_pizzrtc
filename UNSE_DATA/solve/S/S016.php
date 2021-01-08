<?
if ($Xyeargan==1 || $Xyeargan==6){$dan1 = "9";}
if ($Xyeargan==2 || $Xyeargan==7){$dan1 = "8";}
if ($Xyeargan==3 || $Xyeargan==8){$dan1 = "7";}
if ($Xyeargan==4 || $Xyeargan==9){$dan1 = "6";}
	$dan2 = "4";
if ($Xyeargi==1 || $Xyeargi==7){$dan2 = "9";}
if ($Xyeargi==2 || $Xyeargi==8){$dan2 = "8";}
if ($Xyeargi==3 || $Xyeargi==9){$dan2 = "7";}
if ($Xyeargi==4 || $Xyeargi==10){$dan2 = "6";}
if ($Xyeargi==5 || $Xyeargi==11){$dan2 = "5";}
	$dan3 = "5";
if ($todaygan==1 || $todaygan==6){$dan3 = "9";}
if ($todaygan==2 || $todaygan==7){$dan3 = "8";}
if ($todaygan==3 || $todaygan==8){$dan3 = "7";}
if ($todaygan==4 || $todaygan==9){$dan3 = "6";}
	$dan4 = "5";
if ($totime==0 || $totime==1 || $totime==12 || $totime==13){$dan4 = "9";}
if ($totime==2 || $totime==3 || $totime==14 || $totime==15){$dan4 = "8";}
if ($totime==4 || $totime==5 || $totime==16 || $totime==17){$dan4 = "7";}
if ($totime==6 || $totime==7 || $totime==18 || $totime==19){$dan4 = "6";}

if ($bsex==1){$dan5=$dan1+$dan3+$dan4;}else{$dan5=$dan2+$dan3+$dan4;}

$dan5 = $dan5 - 1;

if($dan5 == 0){$dan5 = 15;}

$sql = "select DB_data, DB_numerical from S016 where DB_express = '". $dan5 ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S016 = stripslashes($row[DB_data]);
	$Tb_S016_numerical = stripslashes($row[DB_numerical]);
}

$Tb_S016=str_replace("◐","▣",$Tb_S016)

?> 