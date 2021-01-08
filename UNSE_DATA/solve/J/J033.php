<?
$intstick1 = $_REQUEST['intstick1'];
$intstick2 = $_REQUEST['intstick2'];
$intstick3 = $_REQUEST['intstick3'];
$intstick4 = $_REQUEST['intstick4'];
$intstick5 = $_REQUEST['intstick5'];
$intstick6 = $_REQUEST['intstick6'];

$intstick1z = $_REQUEST['intstick1z'];
$intstick2z = $_REQUEST['intstick2z'];
$intstick3z = $_REQUEST['intstick3z'];
$intstick4z = $_REQUEST['intstick4z'];
$intstick5z = $_REQUEST['intstick5z'];
$intstick6z = $_REQUEST['intstick6z'];

$intstick1zz = $_REQUEST['intstick1zz'];
$intstick2zz = $_REQUEST['intstick2zz'];
$intstick3zz = $_REQUEST['intstick3zz'];
$intstick4zz = $_REQUEST['intstick4zz'];
$intstick5zz = $_REQUEST['intstick5zz'];
$intstick6zz = $_REQUEST['intstick6zz'];
 
$rd = $_REQUEST['rd'];

###################################################################
if ($rd == 1 ) {$color1 = 'red';}
if ($rd == 2 ) {$color2 = 'red';}
if ($rd == 3 ) {$color3 = 'red';}
if ($rd == 4 ) {$color4 = 'red';}
if ($rd == 5 ) {$color5 = 'red';}
if ($rd == 6 ) {$color6 = 'red';}

if ($intstick1 == 0) {$intstick1 = $intstick1+2;}
if ($intstick2 == 0) {$intstick2 = $intstick2+2;}
if ($intstick3 == 0) {$intstick3 = $intstick3+2;}
if ($intstick4 == 0) {$intstick4 = $intstick4+2;}
if ($intstick5 == 0) {$intstick5 = $intstick5+2;}
if ($intstick6 == 0) {$intstick6 = $intstick6+2;}

if ($intstick1z == 0) {$intstick1z = $intstick1z+2;}
if ($intstick2z == 0) {$intstick2z = $intstick2z+2;}
if ($intstick3z == 0) {$intstick3z = $intstick3z+2;}
if ($intstick4z == 0) {$intstick4z = $intstick4z+2;}
if ($intstick5z == 0) {$intstick5z = $intstick5z+2;}
if ($intstick6z == 0) {$intstick6z = $intstick6z+2;}

if ($intstick1zz == 0) {$intstick1zz = $intstick1zz+2;}
if ($intstick2zz == 0) {$intstick2zz = $intstick2zz+2;}
if ($intstick3zz == 0) {$intstick3zz = $intstick3zz+2;}
if ($intstick4zz == 0) {$intstick4zz = $intstick4zz+2;}
if ($intstick5zz == 0) {$intstick5zz = $intstick5zz+2;}
if ($intstick6zz == 0) {$intstick6zz = $intstick6zz+2;}

if ($intstick1 == 1) {$intstick1_img = 'bar1.gif ';}else{$intstick1_img = 'bar0.gif ';}
if ($intstick2 == 1) {$intstick2_img = 'bar1.gif ';}else{$intstick2_img = 'bar0.gif ';}
if ($intstick3 == 1) {$intstick3_img = 'bar1.gif ';}else{$intstick3_img = 'bar0.gif ';}
if ($intstick4 == 1) {$intstick4_img = 'bar1.gif ';}else{$intstick4_img = 'bar0.gif ';}
if ($intstick5 == 1) {$intstick5_img = 'bar1.gif ';}else{$intstick5_img = 'bar0.gif ';}
if ($intstick6 == 1) {$intstick6_img = 'bar1.gif ';}else{$intstick6_img = 'bar0.gif ';}


if ($intstick1z == 1) {$intstick1_imgz = 'bar1.gif ';}else{$intstick1_imgz = 'bar0.gif ';}
if ($intstick2z == 1) {$intstick2_imgz = 'bar1.gif ';}else{$intstick2_imgz = 'bar0.gif ';}
if ($intstick3z == 1) {$intstick3_imgz = 'bar1.gif ';}else{$intstick3_imgz = 'bar0.gif ';}
if ($intstick4z == 1) {$intstick4_imgz = 'bar1.gif ';}else{$intstick4_imgz = 'bar0.gif ';}
if ($intstick5z == 1) {$intstick5_imgz = 'bar1.gif ';}else{$intstick5_imgz = 'bar0.gif ';}
if ($intstick6z == 1) {$intstick6_imgz = 'bar1.gif ';}else{$intstick6_imgz = 'bar0.gif ';}

if ($intstick1zz == 1) {$intstick1_imgzz = 'bar1.gif ';}else{$intstick1_imgzz = 'bar0.gif ';}
if ($intstick2zz == 1) {$intstick2_imgzz = 'bar1.gif ';}else{$intstick2_imgzz = 'bar0.gif ';}
if ($intstick3zz == 1) {$intstick3_imgzz = 'bar1.gif ';}else{$intstick3_imgzz = 'bar0.gif ';}
if ($intstick4zz == 1) {$intstick4_imgzz = 'bar1.gif ';}else{$intstick4_imgzz = 'bar0.gif ';}
if ($intstick5zz == 1) {$intstick5_imgzz = 'bar1.gif ';}else{$intstick5_imgzz = 'bar0.gif ';}
if ($intstick6zz == 1) {$intstick6_imgzz = 'bar1.gif ';}else{$intstick6_imgzz = 'bar0.gif ';}

$num_tot = $intstick1.$intstick2.$intstick3.$intstick4.$intstick5.$intstick6 ;
$num_totz = $intstick1z.$intstick2z.$intstick3z.$intstick4z.$intstick5z.$intstick6z ;
$num_totzz = $intstick1zz.$intstick2zz.$intstick3zz.$intstick4zz.$intstick5zz.$intstick6zz ;

$sql = "SELECT * FROM J033 WHERE DB_express like  '$num_tot'";


if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if ($all) {


			mysql_data_seek($query,0);
				$row = mysql_fetch_array($query);
						$no = stripslashes($row[DB_express]);
						$juyek = stripslashes($row[DB_title]);
                        $data0 = stripslashes($row[DB_data_1]);
                        $data1 = stripslashes($row[DB_data_2]);
                        $data01 = stripslashes($row[DB_data_3]);
                        $data02 = stripslashes($row[DB_data_4]);
                        $data03 = stripslashes($row[DB_data_5]);
                        $data04 = stripslashes($row[DB_data_6]);
                        $data05 = stripslashes($row[DB_data_7]);
                        $data06 = stripslashes($row[DB_data_8]);
						$data_yoyak = stripslashes($row[DB_data]);

          }

##############################################################################

$sql = "SELECT * FROM J033 WHERE DB_express like  '$num_totz'";

if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if ($all) {


			mysql_data_seek($query,0);
			$row = mysql_fetch_array($query);
						$noz = stripslashes($row[DB_express]);
						$juyekz = stripslashes($row[DB_title]);
                        $data0z = stripslashes($row[DB_data_1]);
                        $data1z = stripslashes($row[DB_data_2]);
                        $data01z = stripslashes($row[DB_data_3]);
                        $data02z = stripslashes($row[DB_data_4]);
                        $data03z = stripslashes($row[DB_data_5]);
                        $data04z = stripslashes($row[DB_data_6]);
                        $data05z = stripslashes($row[DB_data_7]);
                        $data06z = stripslashes($row[DB_data_8]);
						$data_yoyakz = stripslashes($row[DB_data]);

 
	  }
##############################################################################

$sql = "SELECT * FROM J033 WHERE DB_express like  '$num_totzz'";

if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if ($all) {


			mysql_data_seek($query,0);
			$row = mysql_fetch_array($query);
						$nozz = stripslashes($row[DB_express]);
						$juyekzz = stripslashes($row[DB_title]);
                        $data0zz = stripslashes($row[DB_data_1]);
                        $data1zz = stripslashes($row[DB_data_2]);
                        $data01zz = stripslashes($row[DB_data_3]);
                        $data02zz = stripslashes($row[DB_data_4]);
                        $data03zz = stripslashes($row[DB_data_5]);
                        $data04zz = stripslashes($row[DB_data_6]);
                        $data05zz = stripslashes($row[DB_data_7]);
                        $data06zz = stripslashes($row[DB_data_8]);
						$data_yoyakzz = stripslashes($row[DB_data]);

	  
	  }



$juyek = eregi_replace("hanja_img/", "/images/result_img/jum_img/juyek_img/hanja_img/", $juyek);
$juyekz = eregi_replace("hanja_img/", "/images/result_img/jum_img/juyek_img/hanja_img/", $juyekz);
$juyekzz = eregi_replace("hanja_img/", "/images/result_img/jum_img/juyek_img/hanja_img/", $juyekzz);

echo"

<br>

                  <table width=400 border=0 cellpadding=5 cellspacing=1 align=center bgcolor=CCCCCC>
		     <tr bgcolor=dddddd><td align=center><font color=red>先天卦</font><br> $juyekzz</td><td align=center><font color=red>原卦</font><br> $juyek</td><td align=center><font color=red>之卦</font><br> $juyekz</td></tr>
		     <tr bgcolor=FFFFFF>
		     
		     <td>



                      <table width=60 cellpadding=1 cellspacing=0 border=0 align=center>
                        	<tr>
                                  	  <td bgcolor=f8f8f8>
                                          	   <table cellpadding=2 cellspacing=0 border=0>
                                           		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick6_imgzz></td></tr>
                                             		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick5_imgzz></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick4_imgzz></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/img/dum.gif width=1 height=4></td></tr>
                                          		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick3_imgzz></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick2_imgzz></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick1_imgzz></td></tr>
                                            	   </table>
                                     	 </td>
                              </tr>
                              <tr><td align=center>과거의 운</td></tr>
                      </table>	   
	   
                    </td>
		    
		     <td>
                             


                      <table width=60 cellpadding=1 cellspacing=0 border=0 align=center>
                        	<tr>
                                  	  <td bgcolor=f8f8f8>
                                          	   <table cellpadding=2 cellspacing=0 border=0>
                                           		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick6_img></td></tr>
                                             		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick5_img></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick4_img></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/img/dum.gif width=1 height=4></td></tr>
                                          		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick3_img></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick2_img></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick1_img></td></tr>
                                            	   </table>
                                     	 </td>
                              </tr>
                              <tr><td align=center>현재의 운</td></tr>
                      </table>	   
	   
                    </td>
		    
		    <td> 
                      
		      <table width=60 cellpadding=1 cellspacing=0 border=0 align=center>
                        	<tr>
                                  	  <td bgcolor=f8f8f8>
                                          	   <table cellpadding=2 cellspacing=0 border=0>
                                           		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick6_imgz></td></tr>
                                             		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick5_imgz></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick4_imgz></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/img/dum.gif width=1 height=4></td></tr>
                                          		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick3_imgz></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick2_imgz></td></tr>
                                              		<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/$intstick1_imgz></td></tr>
                                            	   </table>
                                     	 </td>
                              </tr>
                              <tr><td align=center>미래의 운</td></tr>
		      </table>	    
	            
		    
		    </td></tr>
	          </table>  
	    
            <br><br>
"; 

?>
<table cellpadding="0" cellspacing="0">
<?S_SB_img("J032", $solution_var);?>
</tablE>
<?
echo"<br><br>
		
	    <table width=510 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
            <tr><td bgcolor=DDDDDD align=center><font color=red>先天卦</font>(과거의 운)<br>$juyekzz 해설</td></tr>
	    <tr><td bgcolor=FFFFFF>	   
	    
	    $data0zz
	    $data1zz
	    $data01zz
	    $data02zz
	    $data03zz
	    $data04zz
	    $data05zz
	    $data06zz
	    
	    </td></tr>
	    </table>

                            <br>
"; 
?>
<table cellpadding="0" cellspacing="0">
							<?=$include_bottom_Top_B2;?>
<?S_SB_img("J033", $solution_var);?>
</tablE>
<?
$color1="black";$color2="black";$color3="black";$color4="black";$color5="black";$color6="black";

echo"<br><br>

	    <table width=510 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
            <tr><td bgcolor=DDDDDD align=center><font color=red>原卦</font>(현재의 운)<br>$juyek 해설</td></tr>
	    <tr><td bgcolor=FFFFFF>	   
	    
	                               $data0
	                               $data1
	    <font color=$color1>$data01</font>
	    <font color=$color2>$data02</font>
	    <font color=$color3>$data03</font>
	    <font color=$color4>$data04</font>
	    <font color=$color5>$data05</font>
	    <font color=$color6>$data06</font>
	    
	    </td></tr>
	    </table>

	    <br><br>

"; 

?>
<table cellpadding="0" cellspacing="0">
							<?=$include_bottom_Top_B2;?>
<?S_SB_img("J034", $solution_var);?>
</tablE>
<?
echo"<br><br>		
            <table width=510 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
            <tr><td bgcolor=DDDDDD align=center><font color=red>之卦</font>(미래의 운)<br>$juyekz 해설</td></tr>
	    <tr><td bgcolor=FFFFFF>	   
	    
	    $data0z
	    $data1z
	    $data01z
	    $data02z
	    $data03z
	    $data04z
	    $data05z
	    $data06z

	    
	    </td></tr>
	    </table>

	    <br><br>
	    
"; 

?> 
<table cellpadding="0" cellspacing="0">
							<?=$include_bottom_Top_B2;?>
</tablE>