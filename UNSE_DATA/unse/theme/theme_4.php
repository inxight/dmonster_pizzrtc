<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>

<!-- #yourCheck# -->

<?include "../../common/requestBuffer.php";?>

<!-- #autoMyBuffer# -->
<!-- #autoYourBuffer# -->

<?include "../../solve/setting_var.php";?>
<?include "../../solve/sajujowha.php";?>
<?include "../../solve/saju_made.php";?>
<?include "../../solve/saju_date.php";?>
<?include "../../solve/saju_made_mate.php";?>

<!-- #sajujowha_your.php# -->

<?include "../../solve/12sinsal.php";?>
<?include "../../solve/12unsung.php";?>
<?include "../../solve/sinyaksingang.php";?>
<?include "../../solve/sipsin.php";?>
<?include "../../solve/daeun_sipsin.php";?>

<?include "../../solve/T/Janimal.php";?>
<!-- #Nanimal.php# -->


<?
$UNSE_TITLE = "탄생석점";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>탄생석점</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";
$week_data = "N";
$puritime_data = "Y";
$puritime_data1 = "Y";
$puritime_data2 = "Y";
$puritime_data3 = "Y";
$puritime_data4 = "Y";
?>

<?include "../../common/include_top_c2.php";?>

<!-- 운세결과물 출력 시작 -->

<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/66.jpg'></td></tr>

<!-- #S_S046_sol.php# -->
<!-- #S_S047_sol.php# -->

<!-- #S_S129_sol.php# -->

<!-- #S_S131_sol.php# -->
<!-- #S_S132_sol.php# -->
<!-- #S_S128_sol.php# -->

<!-- #S_S087_S092_sol.php# -->

<!-- #S_S094_S101_sol.php# -->

<!-- #S_S103_S110_sol.php# -->

<!-- #S_S136_S141_sol.php# -->

<!-- #S_J017_J030_sol.php# -->

<!-- #S_N008_N014_sol_Rand.php# -->

<!-- #S_N008_N014_sol.php# -->

<!-- #S_G030_G034_sol.php# -->


<?S_SB_img("T052", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T052.php";?>
<?S_CI_img(substr("T052",0, 1), intval(str_Replace(substr("T052",0, 1), "", "T052")).".jpg")?>
<?=$Tb_T052?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S040", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S040.php";?>
<?S_CI_img(substr("S040",0, 1), intval(str_Replace(substr("S040",0, 1), "", "S040")).".jpg")?>
<?=$Tb_S040?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("T013", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T013.php";?>
<?S_CI_img(substr("T013",0, 1), intval(str_Replace(substr("T013",0, 1), "", "T013")).".jpg")?>
<?=$Tb_T013?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("F019", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/F/F019.php";?>
<?S_CI_img(substr("F019",0, 1), intval(str_Replace(substr("F019",0, 1), "", "F019")).".jpg")?>
<?=$Tb_F019?>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>