<?

switch($sel){
	case "1" :
	case "2" :
	case "4" :
		$mokwha_all = $mokwha1.$mokwha2.$mokwha3;  
		break;
	case "3" :
	case "5" :
		$mokwha_all = $mokwha2.$mokwha3.$mokwha4; 
		break;
}

$sql = "SELECT DB_express, DB_title_1, DB_title, DB_data, DB_numerical FROM N015 WHERE DB_title_1 like '%".$mokwha_all."%'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$no = stripslashes($row[DB_express]);
	$oheng = stripslashes($row[DB_title_1]);
	$gh = stripslashes($row[DB_title]);
	$data = stripslashes($row[DB_data]);
	$Tb_N015_numerical = stripslashes($row[DB_numerical]);
}
	switch(Str_Replace(" ", "", $gh)){
		Case "吉" : 
			$ohengjumsu = 100;
			$ohengtitle = "上格";
			break;
		Case "中吉" : 
			$ohengjumsu = 70;
			$ohengtitle = "中上格";
			break;
		Case "中凶" : 
			$ohengjumsu = 30;
			$ohengtitle = "中下格";
			break;
		Case "凶" : 
			$ohengjumsu = 0;
			$ohengtitle = "下格";
			break;
	}

if($data != ""){$ataoheng = $data;}

$Tb_N015 = $data;
?>