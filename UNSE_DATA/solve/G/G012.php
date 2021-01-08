<?

switch($Xdaygi){
	Case 1 : 
	case 2 : 
	case 3 : 
		$plusVar = $Xdaygi + 1;
		break;
	Case 4 : 
	case 5 : 
	case 6 : 
		$plusVar = $Xdaygi - 1;
		break;
	Case 7 : 
	case 8 : 
	case 9 : 
		$plusVar = $Xdaygi + 1;
		break;
	default : 
		$plusVar = $Xdaygi;
		break;
} 

If($plusVar == 0){$plusVar = 12;}
If($plusVar == 13){$plusVar = 1;}

$serial_no = "5".$plusVar;

$sql ="select DB_data, DB_numerical from G012 where DB_express = '". $serial_no ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G012 = stripslashes($row[DB_data]);
       $Tb_G012_numerical = stripslashes($row[DB_numerical]);
}

?>