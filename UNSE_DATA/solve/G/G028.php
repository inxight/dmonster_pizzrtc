<?

if(($sasangm == "sym") && ($sasangw == "syw")){$result = "sysy";}
if(($sasangm == "sum") && ($sasangw == "syw")){$result = "sysu";}
if(($sasangm == "tym") && ($sasangw == "syw")){$result = "tysy";}
if(($sasangm == "tum") && ($sasangw == "syw")){$result = "sytu";}
if(($sasangm == "sym") && ($sasangw == "suw")){$result = "sysu";}
if(($sasangm == "sum") && ($sasangw == "suw")){$result = "susu";}
if(($sasangm == "tym") && ($sasangw == "suw")){$result = "tysu";}
if(($sasangm == "tum") && ($sasangw == "suw")){$result = "tusu";}
if(($sasangm == "sym") && ($sasangw == "tyw")){$result = "tysy";}
if(($sasangm == "sum") && ($sasangw == "tyw")){$result = "tysu";}
if(($sasangm == "tym") && ($sasangw == "tyw")){$result = "tyty";}
if(($sasangm == "tum") && ($sasangw == "tyw")){$result = "tytu";}
if(($sasangm == "sym") && ($sasangw == "tuw")){$result = "sytu";}
if(($sasangm == "sum") && ($sasangw == "tuw")){$result = "tusu";}
if(($sasangm == "tym") && ($sasangw == "tuw")){$result = "tytu";}
if(($sasangm == "tum") && ($sasangw == "tuw")){$result = "tutu";}


$sql = "select DB_data from G028 where DB_express = '".$result."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G028 = stripslashes($row[DB_data]);
}
?>
