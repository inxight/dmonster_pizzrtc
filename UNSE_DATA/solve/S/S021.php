<?
$sigi_code = F_sigi_code_change($sigi_var);

switch($Xyeargi){
	Case 1 :
	Case 5 :
	Case 9 : 
		switch($sigi_code){
			Case 6 : $dang14 = 1; break;
			Case 7 : $dang14 = 2; break;
			Case 8 : $dang14 = 3; break;
			Case 9 : $dang14 = 4; break;
			Case 10 : $dang14 = 5; break;
			Case 11 : $dang14 = 6; break;
			Case 12 : $dang14 = 7; break;
			Case 1 : $dang14 = 8; break;
			Case 2 : $dang14 = 9; break;
			Case 3 : $dang14 = 10; break;
			Case 4 : $dang14 = 11; break;
			default : $dang14 = 12; break;
		}

		break;
	Case 2 :
	Case 6 :
	Case 10 : 
		switch($sigi_code){
			Case 3 : $dang14 = 1; break;
			Case 4 : $dang14 = 2; break;
			Case 5 : $dang14 = 3; break;
			Case 6 : $dang14 = 4; break;
			Case 7 : $dang14 = 5; break;
			Case 8 : $dang14 = 6; break;
			Case 9 : $dang14 = 7; break;
			Case 10 : $dang14 = 8; break;
			Case 11 : $dang14 = 9; break;
			Case 12 : $dang14 = 10; break;
			Case 1 : $dang14 = 11; break;
			default : $dang14 = 12; break;
		}

		break;
	Case 3 : 
    case 7 : 
	case 11 :
		switch($sigi_code){
			Case 12 : $dang14 = 1; break;
			Case 1 : $dang14 = 2; break;
			Case 2 : $dang14 = 3; break;
			Case 3 : $dang14 = 4; break;
			Case 4 : $dang14 = 5; break;
			Case 5 : $dang14 = 6; break;
			Case 6 : $dang14 = 7; break;
			Case 7 : $dang14 = 8; break;
			Case 8 : $dang14 = 9; break;
			Case 9 : $dang14 = 10; break;
			Case 10 : $dang14 = 11; break;
			default : $dang14 = 12; break;
		} 

		break;
	default : 
		switch($sigi_code){
			Case 9 : $dang14 = 1; break;
			Case 10 : $dang14 = 2; break;
			Case 11 : $dang14 = 3; break;
			Case 12 : $dang14 = 4; break;
			Case 1 : $dang14 = 5; break;
			Case 2 : $dang14 = 6; break;
			Case 3 : $dang14 = 7; break;
			Case 4 : $dang14 = 8; break;
			Case 5 : $dang14 = 9; break;
			Case 6 : $dang14 = 10; break;
			Case 7 : $dang14 = 11; break;
			default : $dang14 = 12; break;
		}

		break;
}

$split_var = explode("|", F_dang4_6_db("S021", $dang14));

$Tb_S021 = $split_var[0];
$Tb_S021_numerical = $split_var[1];

?>