<?


$sql ="select DB_data from G019 where DB_express = '". $star_name ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G019 = stripslashes($row[DB_data]);

}


$Tb_G019=str_replace("<FONT color=#001932>","",$Tb_G019);

?>