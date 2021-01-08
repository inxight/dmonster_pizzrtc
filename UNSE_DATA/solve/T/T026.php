<?
$serial = $star_year;

If($serial == ""){$serial = "장생(";}

$serialSplit = explode("(", $star_year);

$serialSplitVar = $serialSplit[0];

If($serialSplitVar == ""){$serial = "장생";}

$sql = "Select DB_data from T026 where DB_express_1 = '".$serialSplitVar."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T026 = stripslashes($row[DB_data]);
}
?>