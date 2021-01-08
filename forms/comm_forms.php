<!-- =============================================================================== -->
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> 
<?
include "../incs/function.php";
include "../incs/comm_form.php";
?>
<!-- =============================================================================== -->
<html>
<heaD>
<body topmargin="0" leftmargin="0">
<?
$v_strFname 			= "../data/etcDATA.dat";
$arr_adminInfo		= f_Arr_readAdmin($v_strFname);

?>
<table cellpadding="0" cellspacing="0" border="0" align="center">


	<tR>
		<Td valign="top">
		<table cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF" height=100%>
			<tR>
				<tD width="791" valign="top" align="CenteR">
				<?
					include "../forms/saju_form.php";
				?>
				</tD>
			</tR>
		</table>
	
		</td>

	</tR>

</table>


</body>
</html>
