<?
/*on error resume Next

Dim Tb_G003, Tb_G003_numerical

serial_no = F_woonsung(daygi, daygan)*/

$serial_no = F_woonsung($daygi, $daygan);

If ($serial_no == ""){$serial_no = 1;}


$serial_no = $serial_no*1;
If($serial_no >7) {$serial_no = $serial_no % 7;};



$sql ="select DB_data, DB_numerical from G003 where DB_express = '". $serial_no ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G003 = stripslashes($row[DB_data]);
       $Tb_G003_numerical = stripslashes($row[DB_numerical]);
}

?>