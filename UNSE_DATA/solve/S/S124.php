<?
$td_sipsin_h2 = $td_sipsin_h[3];
$td_y = $td_y3;
$td_umyear_e2 = $td_umyear_e[3];
$td_sal = $td3_sal;

####################################################################
##########    데이터베이스에 연결한다.   ####################################
###################################################################################


//$td_dae_sipsin $td_sipsin_h $td_sipsin_e


if (($my_year_e == '子') && ($td_umyear_e == '寅')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '丑') && ($td_umyear_e == '卯')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '寅') && ($td_umyear_e == '辰')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '卯') && ($td_umyear_e == '巳')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '辰') && ($td_umyear_e == '午')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '巳') && ($td_umyear_e == '未')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '午') && ($td_umyear_e == '申')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '未') && ($td_umyear_e == '酉')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '申') && ($td_umyear_e == '戌')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '酉') && ($td_umyear_e == '亥')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '戌') && ($td_umyear_e == '子')) {$sangmun = '상문';$gukgak = '격각';}
if (($my_year_e == '亥') && ($td_umyear_e == '丑')) {$sangmun = '상문';$gukgak = '격각';}

if (($my_year_e == '子') && ($td_umyear_e == '寅')) {$gosin = '고신';}
if (($my_year_e == '丑') && ($td_umyear_e == '寅')) {$gosin = '고신';}
if (($my_year_e == '寅') && ($td_umyear_e == '巳')) {$gosin = '고신';}
if (($my_year_e == '卯') && ($td_umyear_e == '巳')) {$gosin = '고신';}
if (($my_year_e == '辰') && ($td_umyear_e == '巳')) {$gosin = '고신';}
if (($my_year_e == '巳') && ($td_umyear_e == '申')) {$gosin = '고신';}
if (($my_year_e == '午') && ($td_umyear_e == '申')) {$gosin = '고신';}
if (($my_year_e == '未') && ($td_umyear_e == '申')) {$gosin = '고신';}
if (($my_year_e == '申') && ($td_umyear_e == '亥')) {$gosin = '고신';}
if (($my_year_e == '酉') && ($td_umyear_e == '亥')) {$gosin = '고신';}
if (($my_year_e == '戌') && ($td_umyear_e == '亥')) {$gosin = '고신';}
if (($my_year_e == '亥') && ($td_umyear_e == '寅')) {$gosin = '고신';}

if (($my_year_e == '子') && ($td_umyear_e == '戌')) {$guasuk = '과숙';}
if (($my_year_e == '丑') && ($td_umyear_e == '戌')) {$guasuk = '과숙';}
if (($my_year_e == '寅') && ($td_umyear_e == '丑')) {$guasuk = '과숙';}
if (($my_year_e == '卯') && ($td_umyear_e == '丑')) {$guasuk = '과숙';}
if (($my_year_e == '辰') && ($td_umyear_e == '丑')) {$guasuk = '과숙';}
if (($my_year_e == '巳') && ($td_umyear_e == '辰')) {$guasuk = '과숙';}
if (($my_year_e == '午') && ($td_umyear_e == '辰')) {$guasuk = '과숙';}
if (($my_year_e == '未') && ($td_umyear_e == '辰')) {$guasuk = '과숙';}
if (($my_year_e == '申') && ($td_umyear_e == '未')) {$guasuk = '과숙';}
if (($my_year_e == '酉') && ($td_umyear_e == '未')) {$guasuk = '과숙';}
if (($my_year_e == '戌') && ($td_umyear_e == '未')) {$guasuk = '과숙';}
if (($my_year_e == '亥') && ($td_umyear_e == '戌')) {$guasuk = '과숙';}

if (($my_year_e == '子') && ($td_umyear_e == '戌')) {$jogek = '조객';}
if (($my_year_e == '丑') && ($td_umyear_e == '亥')) {$jogek = '조객';}
if (($my_year_e == '寅') && ($td_umyear_e == '子')) {$jogek = '조객';}
if (($my_year_e == '卯') && ($td_umyear_e == '丑')) {$jogek = '조객';}
if (($my_year_e == '辰') && ($td_umyear_e == '寅')) {$jogek = '조객';}
if (($my_year_e == '巳') && ($td_umyear_e == '卯')) {$jogek = '조객';}
if (($my_year_e == '午') && ($td_umyear_e == '辰')) {$jogek = '조객';}
if (($my_year_e == '未') && ($td_umyear_e == '巳')) {$jogek = '조객';}
if (($my_year_e == '申') && ($td_umyear_e == '午')) {$jogek = '조객';}
if (($my_year_e == '酉') && ($td_umyear_e == '未')) {$jogek = '조객';}
if (($my_year_e == '戌') && ($td_umyear_e == '申')) {$jogek = '조객';}
if (($my_year_e == '亥') && ($td_umyear_e == '酉')) {$jogek = '조객';}

if (($my_year_e == '子') && ($td_umyear_e == '申')) {$chenmo = '천모';}
if (($my_year_e == '丑') && ($td_umyear_e == '戌')) {$chenmo = '천모';}
if (($my_year_e == '寅') && ($td_umyear_e == '子')) {$chenmo = '천모';}
if (($my_year_e == '卯') && ($td_umyear_e == '寅')) {$chenmo = '천모';}
if (($my_year_e == '辰') && ($td_umyear_e == '辰')) {$chenmo = '천모';}
if (($my_year_e == '巳') && ($td_umyear_e == '午')) {$chenmo = '천모';}
if (($my_year_e == '午') && ($td_umyear_e == '申')) {$chenmo = '천모';}
if (($my_year_e == '未') && ($td_umyear_e == '戌')) {$chenmo = '천모';}
if (($my_year_e == '申') && ($td_umyear_e == '子')) {$chenmo = '천모';}
if (($my_year_e == '酉') && ($td_umyear_e == '寅')) {$chenmo = '천모';}
if (($my_year_e == '戌') && ($td_umyear_e == '辰')) {$chenmo = '천모';}
if (($my_year_e == '亥') && ($td_umyear_e == '午')) {$chenmo = '천모';}

if (($my_year_e == '子') && ($td_umyear_e == '巳')) {$jimo = '지모';}
if (($my_year_e == '丑') && ($td_umyear_e == '未')) {$jimo = '지모';}
if (($my_year_e == '寅') && ($td_umyear_e == '酉')) {$jimo = '지모';}
if (($my_year_e == '卯') && ($td_umyear_e == '亥')) {$jimo = '지모';}
if (($my_year_e == '辰') && ($td_umyear_e == '丑')) {$jimo = '지모';}
if (($my_year_e == '巳') && ($td_umyear_e == '卯')) {$jimo = '지모';}
if (($my_year_e == '午') && ($td_umyear_e == '巳')) {$jimo = '지모';}
if (($my_year_e == '未') && ($td_umyear_e == '未')) {$jimo = '지모';}
if (($my_year_e == '申') && ($td_umyear_e == '酉')) {$jimo = '지모';}
if (($my_year_e == '酉') && ($td_umyear_e == '亥')) {$jimo = '지모';}
if (($my_year_e == '戌') && ($td_umyear_e == '丑')) {$jimo = '지모';}
if (($my_year_e == '亥') && ($td_umyear_e == '卯')) {$jimo = '지모';}

if (($my_year_e == '子') && ($td_umyear_e == '午')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '丑') && ($td_umyear_e == '未')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '寅') && ($td_umyear_e == '申')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '卯') && ($td_umyear_e == '酉')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '辰') && ($td_umyear_e == '戌')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '巳') && ($td_umyear_e == '亥')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '午') && ($td_umyear_e == '子')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '未') && ($td_umyear_e == '丑')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '申') && ($td_umyear_e == '寅')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '酉') && ($td_umyear_e == '卯')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '戌') && ($td_umyear_e == '辰')) {$daemo = '대모';$bokum = '복음';}
if (($my_year_e == '亥') && ($td_umyear_e == '巳')) {$daemo = '대모';$bokum = '복음';}

if (($my_year_e == '子') && ($td_umyear_e == '巳')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '丑') && ($td_umyear_e == '午')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '寅') && ($td_umyear_e == '未')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '卯') && ($td_umyear_e == '申')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '辰') && ($td_umyear_e == '酉')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '巳') && ($td_umyear_e == '戌')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '午') && ($td_umyear_e == '亥')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '未') && ($td_umyear_e == '子')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '申') && ($td_umyear_e == '丑')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '酉') && ($td_umyear_e == '寅')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '戌') && ($td_umyear_e == '卯')) {$somo = '소모';$sabu = '사부';}
if (($my_year_e == '亥') && ($td_umyear_e == '辰')) {$somo = '소모';$sabu = '사부';}

if (($my_year_e == '子') && ($td_umyear_e == '申')) {$pagun = '파군';}
if (($my_year_e == '丑') && ($td_umyear_e == '巳')) {$pagun = '파군';}
if (($my_year_e == '寅') && ($td_umyear_e == '寅')) {$pagun = '파군';}
if (($my_year_e == '卯') && ($td_umyear_e == '亥')) {$pagun = '파군';}
if (($my_year_e == '辰') && ($td_umyear_e == '申')) {$pagun = '파군';}
if (($my_year_e == '巳') && ($td_umyear_e == '巳')) {$pagun = '파군';}
if (($my_year_e == '午') && ($td_umyear_e == '寅')) {$pagun = '파군';}
if (($my_year_e == '未') && ($td_umyear_e == '亥')) {$pagun = '파군';}
if (($my_year_e == '申') && ($td_umyear_e == '申')) {$pagun = '파군';}
if (($my_year_e == '酉') && ($td_umyear_e == '巳')) {$pagun = '파군';}
if (($my_year_e == '戌') && ($td_umyear_e == '寅')) {$pagun = '파군';}
if (($my_year_e == '亥') && ($td_umyear_e == '亥')) {$pagun = '파군';}

if (($my_year_e == '子') && ($td_umyear_e == '卯')) {$gusin = '구신';}
if (($my_year_e == '丑') && ($td_umyear_e == '辰')) {$gusin = '구신';}
if (($my_year_e == '寅') && ($td_umyear_e == '巳')) {$gusin = '구신';}
if (($my_year_e == '卯') && ($td_umyear_e == '午')) {$gusin = '구신';}
if (($my_year_e == '辰') && ($td_umyear_e == '未')) {$gusin = '구신';}
if (($my_year_e == '巳') && ($td_umyear_e == '申')) {$gusin = '구신';}
if (($my_year_e == '午') && ($td_umyear_e == '酉')) {$gusin = '구신';}
if (($my_year_e == '未') && ($td_umyear_e == '戌')) {$gusin = '구신';}
if (($my_year_e == '申') && ($td_umyear_e == '亥')) {$gusin = '구신';}
if (($my_year_e == '酉') && ($td_umyear_e == '子')) {$gusin = '구신';}
if (($my_year_e == '戌') && ($td_umyear_e == '丑')) {$gusin = '구신';}
if (($my_year_e == '亥') && ($td_umyear_e == '寅')) {$gusin = '구신';}

if (($my_year_e == '子') && ($td_umyear_e == '酉')) {$guyosin = '교신';}
if (($my_year_e == '丑') && ($td_umyear_e == '戌')) {$guyosin = '교신';}
if (($my_year_e == '寅') && ($td_umyear_e == '亥')) {$guyosin = '교신';}
if (($my_year_e == '卯') && ($td_umyear_e == '子')) {$guyosin = '교신';}
if (($my_year_e == '辰') && ($td_umyear_e == '丑')) {$guyosin = '교신';}
if (($my_year_e == '巳') && ($td_umyear_e == '寅')) {$guyosin = '교신';}
if (($my_year_e == '午') && ($td_umyear_e == '卯')) {$guyosin = '교신';}
if (($my_year_e == '未') && ($td_umyear_e == '辰')) {$guyosin = '교신';}
if (($my_year_e == '申') && ($td_umyear_e == '巳')) {$guyosin = '교신';}
if (($my_year_e == '酉') && ($td_umyear_e == '午')) {$guyosin = '교신';}
if (($my_year_e == '戌') && ($td_umyear_e == '未')) {$guyosin = '교신';}
if (($my_year_e == '亥') && ($td_umyear_e == '申')) {$guyosin = '교신';}

if (($my_year_e == '子') && ($td_umyear_e == '子')) {$banum = '반음';}
if (($my_year_e == '丑') && ($td_umyear_e == '丑')) {$banum = '반음';}
if (($my_year_e == '寅') && ($td_umyear_e == '寅')) {$banum = '반음';}
if (($my_year_e == '卯') && ($td_umyear_e == '卯')) {$banum = '반음';}
if (($my_year_e == '辰') && ($td_umyear_e == '辰')) {$banum = '반음';}
if (($my_year_e == '巳') && ($td_umyear_e == '巳')) {$banum = '반음';}
if (($my_year_e == '午') && ($td_umyear_e == '午')) {$banum = '반음';}
if (($my_year_e == '未') && ($td_umyear_e == '未')) {$banum = '반음';}
if (($my_year_e == '申') && ($td_umyear_e == '申')) {$banum = '반음';}
if (($my_year_e == '酉') && ($td_umyear_e == '酉')) {$banum = '반음';}
if (($my_year_e == '戌') && ($td_umyear_e == '戌')) {$banum = '반음';}
if (($my_year_e == '亥') && ($td_umyear_e == '亥')) {$banum = '반음';}

if (($my_year_e == '子') && ($td_umyear_e == '亥')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '丑') && ($td_umyear_e == '子')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '寅') && ($td_umyear_e == '丑')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '卯') && ($td_umyear_e == '寅')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '辰') && ($td_umyear_e == '卯')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '巳') && ($td_umyear_e == '辰')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '午') && ($td_umyear_e == '巳')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '未') && ($td_umyear_e == '午')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '申') && ($td_umyear_e == '未')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '酉') && ($td_umyear_e == '申')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '戌') && ($td_umyear_e == '酉')) {$beungbu = '병부';$taeum = '태음';}
if (($my_year_e == '亥') && ($td_umyear_e == '戌')) {$beungbu = '병부';$taeum = '태음';}

if (($my_year_e == '子') && ($td_umyear_e == '辰')) {$guanbu = '관부';}
if (($my_year_e == '丑') && ($td_umyear_e == '巳')) {$guanbu = '관부';}
if (($my_year_e == '寅') && ($td_umyear_e == '午')) {$guanbu = '관부';}
if (($my_year_e == '卯') && ($td_umyear_e == '未')) {$guanbu = '관부';}
if (($my_year_e == '辰') && ($td_umyear_e == '申')) {$guanbu = '관부';}
if (($my_year_e == '巳') && ($td_umyear_e == '酉')) {$guanbu = '관부';}
if (($my_year_e == '午') && ($td_umyear_e == '戌')) {$guanbu = '관부';}
if (($my_year_e == '未') && ($td_umyear_e == '亥')) {$guanbu = '관부';}
if (($my_year_e == '申') && ($td_umyear_e == '子')) {$guanbu = '관부';}
if (($my_year_e == '酉') && ($td_umyear_e == '丑')) {$guanbu = '관부';}
if (($my_year_e == '戌') && ($td_umyear_e == '寅')) {$guanbu = '관부';}
if (($my_year_e == '亥') && ($td_umyear_e == '卯')) {$guanbu = '관부';}

if (($my_year_e == '子') && ($td_umyear_e == '酉')) {$sepa = '세파';}
if (($my_year_e == '丑') && ($td_umyear_e == '辰')) {$sepa = '세파';}
if (($my_year_e == '寅') && ($td_umyear_e == '亥')) {$sepa = '세파';}
if (($my_year_e == '卯') && ($td_umyear_e == '午')) {$sepa = '세파';}
if (($my_year_e == '辰') && ($td_umyear_e == '丑')) {$sepa = '세파';}
if (($my_year_e == '巳') && ($td_umyear_e == '申')) {$sepa = '세파';}
if (($my_year_e == '午') && ($td_umyear_e == '卯')) {$sepa = '세파';}
if (($my_year_e == '未') && ($td_umyear_e == '戌')) {$sepa = '세파';}
if (($my_year_e == '申') && ($td_umyear_e == '巳')) {$sepa = '세파';}
if (($my_year_e == '酉') && ($td_umyear_e == '子')) {$sepa = '세파';}
if (($my_year_e == '戌') && ($td_umyear_e == '未')) {$sepa = '세파';}
if (($my_year_e == '亥') && ($td_umyear_e == '寅')) {$sepa = '세파';}


#########

if ($sangmun)  {
$sangmun_disp = "특히 이 세운에서는 상복을 입을 운이 있으며 가족이나 친척중에 운명할 사람이 있다.
";}

if ($gosin)  {
$gosin_disp = "특히 이 세운에서는 아내의 신체에 질병이 생기거나 몸이 좋지 않을 확률이 많으니 조심하라.
";}

if ($guasuk)  {
$guasuk_disp = "특히 이운은 강제적인 구속이나 감금, 형벌등과 관계가 깊으니 유의하시기 바란다.
";}

if ($jogek)  {
$jogek_disp = "특히 이 세운에서는 집안의 친척이 아니더래도 문상할 일이 생기며 질병운을 강하게 암시하고 있다.
";}

if ($chenmo)  {
$chenmo_disp = "특히 이 세운에서는 상사나 윗사람에 의해 모함에 빠지거나 재물의 손실을 입거나 명예가 실추될 운이 강하다.
";}

if ($jimo)  {
$jimo_disp = "특히 이 세운에서는 아랫사람이나 부하등에 의해 재물을 잃거나 손재를 당할 운이 강하므로 조심하시기 바란다.
";}

if ($daemo)  {
$daemo_disp = "특히 이 세운에서는 재물을 얻어도 빈독에 물 붓듯 저축이 되지 않으며 허무하게 사라져 버리는 운이므로 조심하시기 바란다.
";}

if ($somo)  {
$somo_disp = "특히 이 세운에서는 재물을 얻어도 빈독에 물 붓듯 저축이 되지 않으며 벌어들이는것 보다 나가는것이 많은 운이다.
";}

if ($gukgak)  {
$gukgak_disp = "특히 이 세운에서는 강제적인 구속을 당하거나 몸에 이상이 생길운을 강하게 암시한다.
";}

if ($pagun)  {
$pagun_disp = "특히 이 세운에서는 관재나 구설수가 강하게 내포되어 있고 부모의 유산을 물려 받아도 탕진하기 쉽고 보존하기가 어렵다.
";}

if ($gusin)  {
$gusin_disp = "특히 이 세운에서는 사고와 갑작스러운 질병에 조심하여야 한다.
";}

if ($guyosin)  {
$guyosin_disp = "특히 이 세운에서는 몸에 뜻빡의 질병이 생길운이며 그렇지 않으면 명예가 실추되는 운이 강하다.
";}

if ($banum)  {
$banum_disp = "특히 이 세운에서는 아내와 자식에게 문제가 생길 확률이 높고 여명이면 독수공방에 눈물이 마를 날이 없다고 본다.
";}

if ($bokum)  {
$bokum_disp = "특히 이 세운에서는 집안이 시끄럽고 눈물 흘릴 일이 자주 생기며 재산이 흩어지고 명예가 실추되는 운이 강하다.
";}

if ($beungbu)  {
$beungbu_disp = "특히 이 세운에서는 질병을 앓기 쉬우며 병원 드나드는 일이 잦다. 미리 건강진단을 받아두는것이 좋을것이다. 
";}

if ($taeum)  {
$taeum_disp = "특히 이 세운에서는 매사 용기가 없어지기 쉬우며 주색에 탐닉하여 자포자기할 경우가 많으니 조심하여야 한다. 
";}

if ($sabu)  {
$sabu_disp = "특히 이 세운에서는 시비와 질병으로 인하여 목숨이 위태로워질 확률이 많으니 싸움이나 분쟁을 되도록이면 피하라.
";}

if ($guanbu)  {
$guanbu_disp = "특히 이 세운에서는 구설수로 인해 관청이나 경찰서에 출입한 운이 강하다. 
";}

if ($sepa)  {
$sepa_disp = "특히 이 세운에서는 직장문제가 불안하고 친척과의 인연이 좋지 않게 되고 무슨일이든 용두사미격이 되어 시작은 좋은듯 보이나 끝이 좋지 않는 경우가 많다.
";}

$sql = "SELECT DB_data FROM S122 WHERE DB_express like '".$td_sal."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $data_seun = stripslashes($row[data_seun]);

}

echo $sangmun_disp;
echo $gosin_disp;
echo $guasuk_disp;
echo $jogek_disp;
echo $chenmo_disp;
echo $jimo_disp;
echo $daemo_disp;
echo $somo_disp;
echo $gukgak_disp;
echo $pagun_disp;
echo $gusin_disp;
echo $guyosin_disp;
echo $banum_disp;
echo $bokum_disp;
echo $beungbu_disp;
echo $taeum_disp;
echo $sabu_disp;
echo $guanbu_disp;
echo $sepa_disp;

$temp = '0201';
$td_y_search = $td_y.$temp;


$sql = "SELECT month_h, month_e FROM mansedata WHERE no = '".$td_y_search."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();


		for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$month_h = stripslashes($row[month_h]);
			$month_e = stripslashes($row[month_e]);
			}

if ($month_h == 'A') {$td1_month_h = '甲';
                                 $td2_month_h = '乙';
				 $td3_month_h = '丙';
				 $td4_month_h = '丁';
				 $td5_month_h = '戊';
				 $td6_month_h = '己';
				 $td7_month_h = '庚';
				 $td8_month_h = '辛';
				 $td9_month_h = '壬';
				 $td10_month_h = '癸';
				 $td11_month_h = '甲';
				 $td12_month_h = '乙';}

if ($month_h == 'B'){$td1_month_h = '乙';
                                 $td2_month_h = '丙';
				 $td3_month_h = '丁';
				 $td4_month_h = '戊';
				 $td5_month_h = '己';
				 $td6_month_h = '庚';
				 $td7_month_h = '辛';
				 $td8_month_h = '壬';
				 $td9_month_h = '癸';
				 $td10_month_h = '甲';
				 $td11_month_h = '乙';
				 $td12_month_h = '丙';}


if ($month_h == 'C')  {$td1_month_h = '丙';
                                 $td2_month_h = '丁';
				 $td3_month_h = '戊';
				 $td4_month_h = '己';
				 $td5_month_h = '庚';
				 $td6_month_h = '辛';
				 $td7_month_h = '壬';
				 $td8_month_h = '癸';
				 $td9_month_h = '甲';
				 $td10_month_h = '乙';
				 $td11_month_h = '丙';
				 $td12_month_h = '丁';}

if ($month_h == 'D') {$td1_month_h = '丁';
                                 $td2_month_h = '戊';
				 $td3_month_h = '己';
				 $td4_month_h = '庚';
				 $td5_month_h = '辛';
				 $td6_month_h = '壬';
				 $td7_month_h = '癸';
				 $td8_month_h = '甲';
				 $td9_month_h = '乙';
				 $td10_month_h = '丙';
				 $td11_month_h = '丁';
				 $td12_month_h = '戊';}

if ($month_h == 'E') {$td1_month_h = '戊';
                                 $td2_month_h = '己';
				 $td3_month_h = '庚';
				 $td4_month_h = '辛';
				 $td5_month_h = '壬';
				 $td6_month_h = '癸';
				 $td7_month_h = '甲';
				 $td8_month_h = '乙';
				 $td9_month_h = '丙';
				 $td10_month_h = '丁';
				 $td11_month_h = '戊';
				 $td12_month_h = '己';}



if ($month_h == 'F')  {$td1_month_h = '己';
                                 $td2_month_h = '庚';
				 $td3_month_h = '辛';
				 $td4_month_h = '壬';
				 $td5_month_h = '癸';
				 $td6_month_h = '甲';
				 $td7_month_h = '乙';
				 $td8_month_h = '丙';
				 $td9_month_h = '丁';
				 $td10_month_h = '戊';
				 $td11_month_h = '己';
				 $td12_month_h = '庚';}



if ($month_h == 'G') {$td1_month_h = '庚';
                                 $td2_month_h = '辛';
				 $td3_month_h = '壬';
				 $td4_month_h = '癸';
				 $td5_month_h = '甲';
				 $td6_month_h = '乙';
				 $td7_month_h = '丙';
				 $td8_month_h = '丁';
				 $td9_month_h = '戊';
				 $td10_month_h = '己';
				 $td11_month_h = '庚';
				 $td12_month_h = '辛';}



if ($month_h == 'H') {$td1_month_h = '辛';
                                 $td2_month_h = '壬';
				 $td3_month_h = '癸';
				 $td4_month_h = '甲';
				 $td5_month_h = '乙';
				 $td6_month_h = '丙';
				 $td7_month_h = '丁';
				 $td8_month_h = '戊';
				 $td9_month_h = '己';
				 $td10_month_h = '庚';
				 $td11_month_h = '辛';
				 $td12_month_h = '壬';}


if ($month_h == 'I') {$td1_month_h = '壬';
                                 $td2_month_h = '癸';
				 $td3_month_h = '甲';
				 $td4_month_h = '乙';
				 $td5_month_h = '丙';
				 $td6_month_h = '丁';
				 $td7_month_h = '戊';
				 $td8_month_h = '己';
				 $td9_month_h = '庚';
				 $td10_month_h = '辛';
				 $td11_month_h = '壬';
				 $td12_month_h = '癸';}


if ($month_h == 'J') {$td1_month_h = '癸';
                                 $td2_month_h = '甲';
				 $td3_month_h = '乙';
				 $td4_month_h = '丙';
				 $td5_month_h = '丁';
				 $td6_month_h = '戊';
				 $td7_month_h = '己';
				 $td8_month_h = '庚';
				 $td9_month_h = '辛';
				 $td10_month_h = '壬';
				 $td11_month_h = '癸';
				 $td12_month_h = '甲';}

################################################
if ($month_e == '09') {$td1_month_e = '戌';
                                 $td2_month_e = '亥';
				 $td3_month_e = '子';
				 $td4_month_e = '丑';
				 $td5_month_e = '寅';
				 $td6_month_e = '卯';
				 $td7_month_e = '辰';
				 $td8_month_e = '巳';
				 $td9_month_e = '午';
				 $td10_month_e = '未';
				 $td11_month_e = '申';
				 $td12_month_e = '酉';}



if ($month_e == '10') {$td1_month_e = '亥';
                                 $td2_month_e = '子';
				 $td3_month_e = '丑';
				 $td4_month_e = '寅';
				 $td5_month_e = '卯';
				 $td6_month_e = '辰';
				 $td7_month_e = '巳';
				 $td8_month_e = '午';
				 $td9_month_e = '未';
				 $td10_month_e = '申';
				 $td11_month_e = '酉';
				 $td12_month_e = '戌';}



if ($month_e == '11') {$td1_month_e = '子';
                                 $td2_month_e = '丑';
				 $td3_month_e = '寅';
				 $td4_month_e = '卯';
				 $td5_month_e = '辰';
				 $td6_month_e = '巳';
				 $td7_month_e = '午';
				 $td8_month_e = '未';
				 $td9_month_e = '申';
				 $td10_month_e = '酉';
				 $td11_month_e = '戌';
				 $td12_month_e = '亥';}



if ($month_e == '12') {$td1_month_e = '丑';
                                 $td2_month_e = '寅';
				 $td3_month_e = '卯';
				 $td4_month_e = '辰';
				 $td5_month_e = '巳';
				 $td6_month_e = '午';
				 $td7_month_e = '未';
				 $td8_month_e = '申';
				 $td9_month_e = '酉';
				 $td10_month_e = '戌';
				 $td11_month_e = '亥';
				 $td12_month_e = '子';}



if ($month_e == '01') {$td1_month_e = '寅';
                                 $td2_month_e = '卯';
				 $td3_month_e = '辰';
				 $td4_month_e = '巳';
				 $td5_month_e = '午';
				 $td6_month_e = '未';
				 $td7_month_e = '申';
				 $td8_month_e = '酉';
				 $td9_month_e = '戌';
				 $td10_month_e = '亥';
				 $td11_month_e = '子';
				 $td12_month_e = '丑';}



if ($month_e == '02') {$td1_month_e = '卯';
                                 $td2_month_e = '辰';
				 $td3_month_e = '巳';
				 $td4_month_e = '午';
				 $td5_month_e = '未';
				 $td6_month_e = '申';
				 $td7_month_e = '酉';
				 $td8_month_e = '戌';
				 $td9_month_e = '亥';
				 $td10_month_e = '子';
				 $td11_month_e = '丑';
				 $td12_month_e = '寅';}



if ($month_e == '03') {$td1_month_e = '辰';
                                 $td2_month_e = '巳';
				 $td3_month_e = '午';
				 $td4_month_e = '未';
				 $td5_month_e = '申';
				 $td6_month_e = '酉';
				 $td7_month_e = '戌';
				 $td8_month_e = '亥';
				 $td9_month_e = '子';
				 $td10_month_e = '丑';
				 $td11_month_e = '寅';
				 $td12_month_e = '卯';}



if ($month_e == '04') {$td1_month_e = '巳';
                                 $td2_month_e = '午';
				 $td3_month_e = '未';
				 $td4_month_e = '申';
				 $td5_month_e = '酉';
				 $td6_month_e = '戌';
				 $td7_month_e = '亥';
				 $td8_month_e = '子';
				 $td9_month_e = '丑';
				 $td10_month_e = '寅';
				 $td11_month_e = '卯';
				 $td12_month_e = '辰';}



if ($month_e == '05') {$td1_month_e = '午';
                                 $td2_month_e = '未';
				 $td3_month_e = '申';
				 $td4_month_e = '酉';
				 $td5_month_e = '戌';
				 $td6_month_e = '亥';
				 $td7_month_e = '子';
				 $td8_month_e = '丑';
				 $td9_month_e = '寅';
				 $td10_month_e = '卯';
				 $td11_month_e = '辰';
				 $td12_month_e = '巳';}



if ($month_e == '06') {$td1_month_e = '未';
                                 $td2_month_e = '申';
				 $td3_month_e = '酉';
				 $td4_month_e = '戌';
				 $td5_month_e = '亥';
				 $td6_month_e = '子';
				 $td7_month_e = '丑';
				 $td8_month_e = '寅';
				 $td9_month_e = '卯';
				 $td10_month_e = '辰';
				 $td11_month_e = '巳';
				 $td12_month_e = '午';}



if ($month_e == '07') {$td1_month_e = '申';
                                 $td2_month_e = '酉';
				 $td3_month_e = '戌';
				 $td4_month_e = '亥';
				 $td5_month_e = '子';
				 $td6_month_e = '丑';
				 $td7_month_e = '寅';
				 $td8_month_e = '卯';
				 $td9_month_e = '辰';
				 $td10_month_e = '巳';
				 $td11_month_e = '午';
				 $td12_month_e = '未';}



if ($month_e == '08') {$td1_month_e = '酉';
                                 $td2_month_e = '戌';
				 $td3_month_e = '亥';
				 $td4_month_e = '子';
				 $td5_month_e = '丑';
				 $td6_month_e = '寅';
				 $td7_month_e = '卯';
				 $td8_month_e = '辰';
				 $td9_month_e = '巳';
				 $td10_month_e = '午';
				 $td11_month_e = '未';
				 $td12_month_e = '申';}


#############################################################


$ilgan_chengan = array(
'甲甲','甲乙','甲丙','甲丁','甲戊','甲己','甲庚','甲辛','甲壬','甲癸',
'乙甲','乙乙','乙丙','乙丁','乙戊','乙己','乙庚','乙辛','乙壬','乙癸',
'丙甲','丙乙','丙丙','丙丁','丙戊','丙己','丙庚','丙辛','丙壬','丙癸',
'丁甲','丁乙','丁丙','丁丁','丁戊','丁己','丁庚','丁辛','丁壬','丁癸',
'戊甲','戊乙','戊丙','戊丁','戊戊','戊己','戊庚','戊辛','戊壬','戊癸',
'己甲','己乙','己丙','己丁','己戊','己己','己庚','己辛','己壬','己癸',
'庚甲','庚乙','庚丙','庚丁','庚戊','庚己','庚庚','庚辛','庚壬','庚癸',
'辛甲','辛乙','辛丙','辛丁','辛戊','辛己','辛庚','辛辛','辛壬','辛癸',
'壬甲','壬乙','壬丙','壬丁','壬戊','壬己','壬庚','壬辛','壬壬','壬癸',
'癸甲','癸乙','癸丙','癸丁','癸戊','癸己','癸庚','癸辛','癸壬','癸癸'
);

$ilgan_chengan_sipsin = array(
'비견','겁재','식신','상관','편재','정재','편관','정관','편인','정인',
'겁재','비견','상관','식신','정재','편재','정관','편관','정인','편인',
'편인','정인','비견','겁재','식신','상관','편재','정재','편관','정관',
'정인','편인','겁재','비견','상관','식신','정재','편재','정관','편관',
'편관','정관','편인','정인','비견','겁재','식신','상관','편재','정재',
'정관','편관','정인','편인','겁재','비견','상관','식신','정재','편재',
'편재','정재','편관','정관','편인','정인','비견','겁재','식신','상관',
'정재','편재','정관','편관','정인','편인','겁재','비견','정인','식신',
'식신','상관','편재','정재','편관','정관','편인','정인','비견','겁재',
'상관','식신','정재','편재','정관','편관','정인','편인','겁재','비견'
);

$ilgan_jiji = array(
'甲子','甲丑','甲寅','甲卯','甲辰','甲巳','甲午','甲未','甲申','甲酉','甲戌','甲亥',
'乙子','乙丑','乙寅','乙卯','乙辰','乙巳','乙午','乙未','乙申','乙酉','乙戌','乙亥',
'丙子','丙丑','丙寅','丙卯','丙辰','丙巳','丙午','丙未','丙申','丙酉','丙戌','丙亥',
'丁子','丁丑','丁寅','丁卯','丁辰','丁巳','丁午','丁未','丁申','丁酉','丁戌','丁亥',
'戊子','戊丑','戊寅','戊卯','戊辰','戊巳','戊午','戊未','戊申','戊酉','戊戌','戊亥',
'己子','己丑','己寅','己卯','己辰','己巳','己午','己未','己申','己酉','己戌','己亥',
'庚子','庚丑','庚寅','庚卯','庚辰','庚巳','庚午','庚未','庚申','庚酉','庚戌','庚亥',
'辛子','辛丑','辛寅','辛卯','辛辰','辛巳','辛午','辛未','辛申','辛酉','辛戌','辛亥',
'壬子','壬丑','壬寅','壬卯','壬辰','壬巳','壬午','壬未','壬申','壬酉','壬戌','壬亥',
'癸子','癸丑','癸寅','癸卯','癸辰','癸巳','癸午','癸未','癸申','癸酉','癸戌','癸亥'
);

$ilgan_jiji_sipsin = array(
'편인','정재','비견','겁재','편재','상관','식신','정재','편관','정관','편재','정인',
'정인','편재','겁재','비견','정재','식신','상관','편재','정관','편관','정재','편인',
'편관','상관','편인','정인','식신','겁재','비견','상관','편재','정재','식신','정관',
'정관','식신','정인','편인','상관','비견','겁재','식신','정재','편재','상관','편관',
'편재','겁재','편관','정관','비견','정인','편인','겁재','식신','상관','비견','정재',
'정재','비견','정관','편관','겁재','편인','정인','비견','상관','식신','겁재','편재',
'식신','정인','편재','정재','편인','정관','편관','정인','비견','겁재','편인','편관',
'상관','편인','정재','편재','정인','편관','정관','편인','겁재','비견','정인','식신',
'비견','정관','식신','상관','편관','정재','편재','정관','편인','정인','편관','겁재',
'겁재','편관','상관','식신','정관','편재','정재','편관','정인','편인','정관','비견'
);
/*
$ilgan_jiji_12un = array(
'목욕','관대','건록','제왕','쇄','병','사','묘','절','태','양','장생',
'병','쇄','제왕','건록','관대','목욕','장생','양','태','절','묘','사',
'태','양','장생','목욕','관대','건록','제왕','쇄','병','사','묘','절',
'절','묘','사','병','쇄','제왕','건록','관대','목욕','장생','양','태',
'태','양','장생','목욕','관대','건록','제왕','쇄','병','사','묘','절',
'절','묘','사','병','쇄','제왕','건록','관대','목욕','장생','양','태',
'사','묘','절','태','양','장생','목욕','관대','건록','제왕','쇄','병',
'장생','양','태','절','묘','사','병','쇄','제왕','건록','관대','목욕',
'제왕','쇄','병','사','묘','절','태','양','장생','목욕','관대','건록',
'건록','관대','목욕','장생','양','태','절','묘','사','병','쇄','제왕'
);
*/
///////////////////////일간$my_day_h : 월별 천간십신 구하기

$td_month_h[1] = $td1_month_h;
$td_month_h[2] = $td2_month_h;
$td_month_h[3] = $td3_month_h;
$td_month_h[4] = $td4_month_h;
$td_month_h[5] = $td5_month_h;
$td_month_h[6] = $td6_month_h;
$td_month_h[7] = $td7_month_h;
$td_month_h[8] = $td8_month_h;
$td_month_h[9] = $td9_month_h;
$td_month_h[10] = $td10_month_h;
$td_month_h[11] = $td11_month_h;
$td_month_h[12] = $td12_month_h;




for ($j = 1 ; $j<13; $j++) {
$temp_mh_search[$j] = $my_day_h.$td_month_h[$j];
		for ($i = 0 ; $i<99; $i++) {
			if ($ilgan_chengan[$i] == $temp_mh_search[$j])
			     {$k = $i;}
         		}
$td_sipsin_m_h[$j] = $ilgan_chengan_sipsin[$k];



}

/////////////////////일간$my_day_h : 월별 지지십신 구하기
$td_month_e[1] = $td1_month_e;
$td_month_e[2] = $td2_month_e;
$td_month_e[3] = $td3_month_e;
$td_month_e[4] = $td4_month_e;
$td_month_e[5] = $td5_month_e;
$td_month_e[6] = $td6_month_e;
$td_month_e[7] = $td7_month_e;
$td_month_e[8] = $td8_month_e;
$td_month_e[9] = $td9_month_e;
$td_month_e[10] = $td10_month_e;
$td_month_e[11] = $td11_month_e;
$td_month_e[12] = $td12_month_e;

for ($j = 1 ; $j<13; $j++) {
$temp_me_search[$j] = $my_day_h.$td_month_e[$j];
		for ($i = 0 ; $i<119; $i++) {
			if ($ilgan_jiji[$i] == $temp_me_search[$j])
			     {$k = $i;}
         		}
$$td_sipsin_m_e[$j] = $ilgan_jiji_sipsin[$k];
}


if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "寅")){
$td1_sal = "겁살";$td_unsung1 = '절';
$td2_sal = "재살";$td_unsung2 = '태';
$td3_sal = "천살";$td_unsung3 = '양';
$td4_sal = "지살";$td_unsung4 = '장생';
$td5_sal = "도화";$td_unsung5 = '목욕';
$td6_sal = "월살";$td_unsung6 = '관대';
$td7_sal = "망신";$td_unsung7 = '건록';
$td8_sal = "장성";$td_unsung8 = '제왕';
$td9_sal = "반안";$td_unsung9 = '쇄';
$td10_sal = "역마";$td_unsung10 = '병';
$td11_sal = "역마";$td_unsung11 = '사';
$td12_sal = "역마";$td_unsung12 = '묘';
}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "卯")){
$td1_sal = "재살";$td_unsung1 = '태';
$td2_sal = "천살";$td_unsung2 = '양';
$td3_sal = "지살";$td_unsung3 = '장생';
$td4_sal = "도화";$td_unsung4 = '목욕';
$td5_sal = "월살";$td_unsung5 = '관대';
$td6_sal = "망신";$td_unsung6 = '건록';
$td7_sal = "장성";$td_unsung7 = '제왕';
$td8_sal = "반안";$td_unsung8 = '쇄';
$td9_sal = "역마";$td_unsung9 = '병';
$td10_sal = "육해";$td_unsung10 = '사';
$td11_sal = "역마";$td_unsung11 = '묘';
$td12_sal = "역마";$td_unsung12 = '절';
}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "辰")){
$td1_sal = "천살";$td_unsung1 = '양';
$td2_sal = "지살";$td_unsung2 = '장생';
$td3_sal = "도화";$td_unsung3 = '목욕';
$td4_sal = "월살";$td_unsung4 = '관대';
$td5_sal = "망신";$td_unsung5 = '건록';
$td6_sal = "장성";$td_unsung6 = '제왕';
$td7_sal = "반안";$td_unsung7 = '쇄';
$td8_sal = "역마";$td_unsung8 = '병';
$td9_sal = "육해";$td_unsung9 = '사';
$td10_sal = "화개";$td_unsung10 = '묘';
$td11_sal = "역마";$td_unsung11 = '절';
$td12_sal = "역마";$td_unsung12 = '태';
}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "巳")){

$td1_sal = "지살";$td_unsung1 = '장생';
$td2_sal = "도화";$td_unsung2 = '목욕';
$td3_sal = "월살";$td_unsung3 = '관대';
$td4_sal = "망신";$td_unsung4 = '건록';
$td5_sal = "장성";$td_unsung5 = '제왕';
$td6_sal = "반안";$td_unsung6 = '쇄';
$td7_sal = "역마";$td_unsung7 = '병';
$td8_sal = "육해";$td_unsung8 = '사';
$td9_sal = "화개";$td_unsung9 = '묘';
$td10_sal = "겁살";$td_unsung10 = '절';
$td11_sal = "역마";$td_unsung11 = '태';
$td12_sal = "역마";$td_unsung12 = '양';
}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "午")){
$td1_sal = "도화";$td_unsung1 = '목욕';
$td2_sal = "월살";$td_unsung2 = '관대';
$td3_sal = "망신";$td_unsung3 = '건록';
$td4_sal = "장성";$td_unsung4 = '제왕';
$td5_sal = "반안";$td_unsung5 = '쇄';
$td6_sal = "역마";$td_unsung6 = '병';
$td7_sal = "육해";$td_unsung7 = '사';
$td8_sal = "화개";$td_unsung8 = '묘';
$td9_sal = "겁살";$td_unsung9 = '절';
$td10_sal = "재살";$td_unsung10 = '태';
$td11_sal = "역마";$td_unsung11 = '양';
$td12_sal = "역마";$td_unsung12 = '생';
}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "未")){
$td1_sal = "월살";$td_unsung1 = '관대';
$td2_sal = "망신";$td_unsung2 = '건록';
$td3_sal = "장성";$td_unsung3 = '제왕';
$td4_sal = "반안";$td_unsung4 = '쇄';
$td5_sal = "역마";$td_unsung5 = '병';
$td6_sal = "육해";$td_unsung6 = '사';
$td7_sal = "화개";$td_unsung7 = '묘';
$td8_sal = "겁살";$td_unsung8 = '절';
$td9_sal = "재살";$td_unsung9 = '태';
$td10_sal = "천살";$td_unsung10 = '양';
$td11_sal = "역마";$td_unsung11 = '장생';
$td12_sal = "역마";$td_unsung12 = '목욕';
}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "申")){
$td1_sal = "망신";$td_unsung1 = '건록';
$td2_sal = "장성";$td_unsung2 = '제왕';
$td3_sal = "반안";$td_unsung3 = '쇄';
$td4_sal = "역마";$td_unsung4 = '병';
$td5_sal = "육해";$td_unsung5 = '사';
$td6_sal = "화개";$td_unsung6 = '묘';
$td7_sal = "겁살";$td_unsung7 = '절';
$td8_sal = "재살";$td_unsung8 = '태';
$td9_sal = "천살";$td_unsung9 = '양';
$td10_sal = "지살";$td_unsung10 = '장생';
$td11_sal = "역마";$td_unsung11 = '목욕';
$td12_sal = "역마";$td_unsung12 = '관대';
}


if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "酉")){
$td1_sal = "장성";$td_unsung1 = '제왕';
$td2_sal = "반안";$td_unsung2 = '쇄';
$td3_sal = "역마";$td_unsung3 = '병';
$td4_sal = "육해";$td_unsung4 = '사';
$td5_sal = "화개";$td_unsung5 = '묘';
$td6_sal = "겁살";$td_unsung6 = '절';
$td7_sal = "재살";$td_unsung7 = '태';
$td8_sal = "천살";$td_unsung8 = '양';
$td9_sal = "지살";$td_unsung9 = '장생';
$td10_sal = "도화";$td_unsung10 = '목욕';
$td11_sal = "역마";$td_unsung11 = '';
$td12_sal = "역마";$td_unsung12 = '';
}

if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "戌")){
$td1_sal = "반안";$td_unsung1 = '쇄';
$td2_sal = "역마";$td_unsung2 = '병';
$td3_sal = "육해";$td_unsung3 = '사';
$td4_sal = "화개";$td_unsung4 = '묘';
$td5_sal = "겁살";$td_unsung5 = '절';
$td6_sal = "재살";$td_unsung6 = '태';
$td7_sal = "천살";$td_unsung7 = '양';
$td8_sal = "지살";$td_unsung8 = '장생';
$td9_sal = "도화";$td_unsung9 = '목욕';
$td10_sal = "월살";$td_unsung10 = '관대';
$td11_sal = "역마";$td_unsung11 = '건록';
$td12_sal = "역마";$td_unsung12 = '제왕';
}


if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "亥")){
$td1_sal = "역마";$td_unsung1 = '병';
$td2_sal = "육해";$td_unsung2 = '사';
$td3_sal = "화개";$td_unsung3 = '묘';
$td4_sal = "겁살";$td_unsung4 = '절';
$td5_sal = "재살";$td_unsung5 = '태';
$td6_sal = "천살";$td_unsung6 = '양';
$td7_sal = "지살";$td_unsung7 = '장생';
$td8_sal = "도화";$td_unsung8 = '목욕';
$td9_sal = "월살";$td_unsung9 = '관대';
$td10_sal = "망신";$td_unsung10 = '건록';
$td11_sal = "역마";$td_unsung11 = '제왕';
$td12_sal = "역마";$td_unsung12 = '쇄';
}


if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "子")){
$td1_sal = "육해";$td_unsung1 = '사';
$td2_sal = "화개";$td_unsung2 = '묘';
$td3_sal = "겁살";$td_unsung3 = '절';
$td4_sal = "재살";$td_unsung4 = '태';
$td5_sal = "천살";$td_unsung5 = '양';
$td6_sal = "지살";$td_unsung6 = '장생';
$td7_sal = "도화";$td_unsung7 = '목욕';
$td8_sal = "월살";$td_unsung8 = '관대';
$td9_sal = "망신";$td_unsung9 = '건록';
$td10_sal = "장성";$td_unsung10 = '제왕';
$td11_sal = "역마";$td_unsung11 = '쇄';
$td12_sal = "역마";$td_unsung12 = '병';
}


if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($td1_month_e == "丑")){
$td1_sal = "화개";$td_unsung1 = '묘';
$td2_sal = "겁살";$td_unsung2 = '절';
$td3_sal = "재살";$td_unsung3 = '태';
$td4_sal = "천살";$td_unsung4 = '양';
$td5_sal = "지살";$td_unsung5 = '장생';
$td6_sal = "도화";$td_unsung6 = '목욕';
$td7_sal = "월살";$td_unsung7 = '관대';
$td8_sal = "망신";$td_unsung8 = '건록';
$td9_sal = "장성";$td_unsung9 = '제왕';
$td10_sal = "반안";$td_unsung10 = '쇄';
$td11_sal = "역마";$td_unsung11 = '병';
$td12_sal = "역마";$td_unsung12 = '사';
}


if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "寅")){
$td1_sal = "역마";$td_unsung1 = '병';
$td2_sal = "육해";$td_unsung2 = '사';
$td3_sal = "화개";$td_unsung3 = '묘';
$td4_sal = "겁살";$td_unsung4 = '절';
$td5_sal = "재살";$td_unsung5 = '태';
$td6_sal = "천살";$td_unsung6 = '양';
$td7_sal = "지살";$td_unsung7 = '장생';
$td8_sal = "도화";$td_unsung8 = '목욕';
$td9_sal = "월살";$td_unsung9 = '관대';
$td10_sal = "망신";$td_unsung10 = '건록';
$td11_sal = "역마";$td_unsung11 = '제왕';
$td12_sal = "역마";$td_unsung12 = '쇄';
}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "卯")){
$td1_sal = "육해";$td_unsung1 = '사';
$td2_sal = "화개";$td_unsung2 = '묘';
$td3_sal = "겁살";$td_unsung3 = '절';
$td4_sal = "재살";$td_unsung4 = '태';
$td5_sal = "천살";$td_unsung5 = '양';
$td6_sal = "지살";$td_unsung6 = '장생';
$td7_sal = "도화";$td_unsung7 = '목욕';
$td8_sal = "월살";$td_unsung8 = '관대';
$td9_sal = "망신";$td_unsung9 = '건록';
$td10_sal = "장성";$td_unsung10 = '제왕';
$td11_sal = "역마";$td_unsung11 = '쇄';
$td12_sal = "역마";$td_unsung12 = '병';
}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "辰")){
$td1_sal = "화개";$td_unsung1 = '묘';
$td2_sal = "겁살";$td_unsung2 = '절';
$td3_sal = "재살";$td_unsung3 = '태';
$td4_sal = "천살";$td_unsung4 = '양';
$td5_sal = "지살";$td_unsung5 = '장생';
$td6_sal = "도화";$td_unsung6 = '목욕';
$td7_sal = "월살";$td_unsung7 = '관대';
$td8_sal = "망신";$td_unsung8 = '건록';
$td9_sal = "장성";$td_unsung9 = '제왕';
$td10_sal = "반안";$td_unsung10 = '쇄';
$td11_sal = "역마";$td_unsung11 = '병';
$td12_sal = "역마";$td_unsung12 = '사';
}


if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "巳")){
$td1_sal = "겁살";$td_unsung1 = '절';
$td2_sal = "재살";$td_unsung2 = '태';
$td3_sal = "천살";$td_unsung3 = '양';
$td4_sal = "지살";$td_unsung4 = '장생';
$td5_sal = "도화";$td_unsung5 = '목욕';
$td6_sal = "월살";$td_unsung6 = '관대';
$td7_sal = "망신";$td_unsung7 = '건록';
$td8_sal = "장성";$td_unsung8 = '제왕';
$td9_sal = "반안";$td_unsung9 = '쇄';
$td10_sal = "역마";$td_unsung10 = '병';
$td11_sal = "역마";$td_unsung11 = '사';
$td12_sal = "역마";$td_unsung12 = '묘';
}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "午")){
$td1_sal = "재살";$td_unsung1 = '태';
$td2_sal = "천살";$td_unsung2 = '양';
$td3_sal = "지살";$td_unsung3 = '장생';
$td4_sal = "도화";$td_unsung4 = '목욕';
$td5_sal = "월살";$td_unsung5 = '관대';
$td6_sal = "망신";$td_unsung6 = '건록';
$td7_sal = "장성";$td_unsung7 = '제왕';
$td8_sal = "반안";$td_unsung8 = '쇄';
$td9_sal = "역마";$td_unsung9 = '병';
$td10_sal = "육해";$td_unsung10 = '사';
$td11_sal = "역마";$td_unsung11 = '묘';
$td12_sal = "역마";$td_unsung12 = '절';
}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "未")){
$td1_sal = "천살";$td_unsung1 = '양';
$td2_sal = "지살";$td_unsung2 = '장생';
$td3_sal = "도화";$td_unsung3 = '목욕';
$td4_sal = "월살";$td_unsung4 = '관대';
$td5_sal = "망신";$td_unsung5 = '건록';
$td6_sal = "장성";$td_unsung6 = '제왕';
$td7_sal = "반안";$td_unsung7 = '쇄';
$td8_sal = "역마";$td_unsung8 = '병';
$td9_sal = "육해";$td_unsung9 = '사';
$td10_sal = "화개";$td_unsung10 = '묘';
$td11_sal = "역마";$td_unsung11 = '절';
$td12_sal = "역마";$td_unsung12 = '태';
}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "申")){
$td1_sal = "지살";$td_unsung1 = '장생';
$td2_sal = "도화";$td_unsung2 = '목욕';
$td3_sal = "월살";$td_unsung3 = '관대';
$td4_sal = "망신";$td_unsung4 = '건록';
$td5_sal = "장성";$td_unsung5 = '제왕';
$td6_sal = "반안";$td_unsung6 = '쇄';
$td7_sal = "역마";$td_unsung7 = '병';
$td8_sal = "육해";$td_unsung8 = '사';
$td9_sal = "화개";$td_unsung9 = '묘';
$td10_sal = "겁살";$td_unsung10 = '절';
$td11_sal = "역마";$td_unsung11 = '태';
$td12_sal = "역마";$td_unsung12 = '양';
}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "酉")){
$td1_sal = "도화";$td_unsung1 = '목욕';
$td2_sal = "월살";$td_unsung2 = '관대';
$td3_sal = "망신";$td_unsung3 = '건록';
$td4_sal = "장성";$td_unsung4 = '제왕';
$td5_sal = "반안";$td_unsung5 = '쇄';
$td6_sal = "역마";$td_unsung6 = '병';
$td7_sal = "육해";$td_unsung7 = '사';
$td8_sal = "화개";$td_unsung8 = '묘';
$td9_sal = "겁살";$td_unsung9 = '절';
$td10_sal = "재살";$td_unsung10 = '태';
$td11_sal = "역마";$td_unsung11 = '양';
$td12_sal = "역마";$td_unsung12 = '장생';
}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "戌")){
$td1_sal = "월살";$td_unsung1 = '관대';
$td2_sal = "망신";$td_unsung2 = '건록';
$td3_sal = "장성";$td_unsung3 = '제왕';
$td4_sal = "반안";$td_unsung4 = '쇄';
$td5_sal = "역마";$td_unsung5 = '병';
$td6_sal = "육해";$td_unsung6 = '사';
$td7_sal = "화개";$td_unsung7 = '묘';
$td8_sal = "겁살";$td_unsung8 = '절';
$td9_sal = "재살";$td_unsung9 = '태';
$td10_sal = "천살";$td_unsung10 = '양';
$td11_sal = "역마";$td_unsung11 = '장생';
$td12_sal = "역마";$td_unsung12 = '목욕';
}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "亥")){
$td1_sal = "망신";$td_unsung1 = '건록';
$td2_sal = "장성";$td_unsung2 = '제왕';
$td3_sal = "반안";$td_unsung3 = '쇄';
$td4_sal = "역마";$td_unsung4 = '병';
$td5_sal = "육해";$td_unsung5 = '사';
$td6_sal = "화개";$td_unsung6 = '묘';
$td7_sal = "겁살";$td_unsung7 = '절';
$td8_sal = "재살";$td_unsung8 = '태';
$td9_sal = "천살";$td_unsung9 = '양';
$td10_sal = "지살";$td_unsung10 = '장생';
$td11_sal = "역마";$td_unsung11 = '목욕';
$td12_sal = "역마";$td_unsung12 = '관대';
}

if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "子")){
$td1_sal = "장성";$td_unsung1 = '제왕';
$td2_sal = "반안";$td_unsung2 = '쇄';
$td3_sal = "역마";$td_unsung3 = '병';
$td4_sal = "육해";$td_unsung4 = '사';
$td5_sal = "화개";$td_unsung5 = '묘';
$td6_sal = "겁살";$td_unsung6 = '절';
$td7_sal = "재살";$td_unsung7 = '태';
$td8_sal = "천살";$td_unsung8 = '양';
$td9_sal = "지살";$td_unsung9 = '장생';
$td10_sal = "도화";$td_unsung10 = '목욕';
$td11_sal = "역마";$td_unsung11 = '관대';
$td12_sal = "역마";$td_unsung12 = '건록';
}


if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($td1_month_e == "丑")){
$td1_sal = "반안";$td_unsung1 = '쇄';
$td2_sal = "역마";$td_unsung2 = '병';
$td3_sal = "육해";$td_unsung3 = '사';
$td4_sal = "화개";$td_unsung4 = '묘';
$td5_sal = "겁살";$td_unsung5 = '절';
$td6_sal = "재살";$td_unsung6 = '태';
$td7_sal = "천살";$td_unsung7 = '양';
$td8_sal = "지살";$td_unsung8 = '장생';
$td9_sal = "도화";$td_unsung9 = '목욕';
$td10_sal = "월살";$td_unsung10 = '관대';
$td11_sal = "역마";$td_unsung11 = '건록';
$td12_sal = "역마";$td_unsung12 = '제왕';
}


if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "寅")){
$td1_sal = "망신";$td_unsung1 = '건록';
$td2_sal = "장성";$td_unsung2 = '제왕';
$td3_sal = "반안";$td_unsung3 = '쇄';
$td4_sal = "역마";$td_unsung4 = '병';
$td5_sal = "육해";$td_unsung5 = '사';
$td6_sal = "화개";$td_unsung6 = '묘';
$td7_sal = "겁살";$td_unsung7 = '절';
$td8_sal = "재살";$td_unsung8 = '태';
$td9_sal = "천살";$td_unsung9 = '양';
$td10_sal = "지살";$td_unsung10 = '장생';
$td11_sal = "역마";$td_unsung11 = '목욕';
$td12_sal = "역마";$td_unsung12 = '관대';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "卯")){
$td1_sal = "장성";$td_unsung1 = '제왕';
$td2_sal = "반안";$td_unsung2 = '쇄';
$td3_sal = "역마";$td_unsung3 = '병';
$td4_sal = "육해";$td_unsung4 = '사';
$td5_sal = "화개";$td_unsung5 = '묘';
$td6_sal = "겁살";$td_unsung6 = '절';
$td7_sal = "재살";$td_unsung7 = '태';
$td8_sal = "천살";$td_unsung8 = '양';
$td9_sal = "지살";$td_unsung9 = '장생';
$td10_sal = "도화";$td_unsung10 = '목욕';
$td11_sal = "역마";$td_unsung11 = '관대';
$td12_sal = "역마";$td_unsung12 = '건록';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "辰")){
$td1_sal = "반안";$td_unsung1 = '쇄';
$td2_sal = "역마";$td_unsung2 = '병';
$td3_sal = "육해";$td_unsung3 = '사';
$td4_sal = "화개";$td_unsung4 = '묘';
$td5_sal = "겁살";$td_unsung5 = '절';
$td6_sal = "재살";$td_unsung6 = '태';
$td7_sal = "천살";$td_unsung7 = '양';
$td8_sal = "지살";$td_unsung8 = '장생';
$td9_sal = "도화";$td_unsung9 = '목욕';
$td10_sal = "월살";$td_unsung10 = '관대';
$td11_sal = "역마";$td_unsung11 = '건록';
$td12_sal = "역마";$td_unsung12 = '제왕';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "巳")){
$td1_sal = "역마";$td_unsung1 = '병';
$td2_sal = "육해";$td_unsung2 = '사';
$td3_sal = "화개";$td_unsung3 = '묘';
$td4_sal = "겁살";$td_unsung4 = '절';
$td5_sal = "재살";$td_unsung5 = '태';
$td6_sal = "천살";$td_unsung6 = '양';
$td7_sal = "지살";$td_unsung7 = '장생';
$td8_sal = "도화";$td_unsung8 = '목욕';
$td9_sal = "월살";$td_unsung9 = '관대';
$td10_sal = "망신";$td_unsung10 = '건록';
$td11_sal = "역마";$td_unsung11 = '제왕';
$td12_sal = "역마";$td_unsung12 = '쇄';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "午")){
$td1_sal = "육해";$td_unsung1 = '사';
$td2_sal = "화개";$td_unsung2 = '묘';
$td3_sal = "겁살";$td_unsung3 = '절';
$td4_sal = "재살";$td_unsung4 = '태';
$td5_sal = "천살";$td_unsung5 = '양';
$td6_sal = "지살";$td_unsung6 = '장생';
$td7_sal = "도화";$td_unsung7 = '목욕';
$td8_sal = "월살";$td_unsung8 = '관대';
$td9_sal = "망신";$td_unsung9 = '건록';
$td10_sal = "장성";$td_unsung10 = '제왕';
$td11_sal = "역마";$td_unsung11 = '쇄';
$td12_sal = "역마";$td_unsung12 = '병';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "未")){
$td1_sal = "화개";$td_unsung1 = '묘';
$td2_sal = "겁살";$td_unsung2 = '절';
$td3_sal = "재살";$td_unsung3 = '태';
$td4_sal = "천살";$td_unsung4 = '양';
$td5_sal = "지살";$td_unsung5 = '장생';
$td6_sal = "도화";$td_unsung6 = '목욕';
$td7_sal = "월살";$td_unsung7 = '관대';
$td8_sal = "망신";$td_unsung8 = '건록';
$td9_sal = "장성";$td_unsung9 = '제왕';
$td10_sal = "반안";$td_unsung10 = '쇄';
$td11_sal = "역마";$td_unsung11 = '병';
$td12_sal = "역마";$td_unsung12 = '사';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "申")){
$td1_sal = "겁살";$td_unsung1 = '절';
$td2_sal = "재살";$td_unsung2 = '태';
$td3_sal = "천살";$td_unsung3 = '양';
$td4_sal = "지살";$td_unsung4 = '장생';
$td5_sal = "도화";$td_unsung5 = '목욕';
$td6_sal = "월살";$td_unsung6 = '관대';
$td7_sal = "망신";$td_unsung7 = '건록';
$td8_sal = "장성";$td_unsung8 = '제왕';
$td9_sal = "반안";$td_unsung9 = '쇄';
$td10_sal = "역마";$td_unsung10 = '병';
$td11_sal = "역마";$td_unsung11 = '사';
$td12_sal = "역마";$td_unsung12 = '묘';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "酉")){
$td1_sal = "재살";$td_unsung1 = '태';
$td2_sal = "천살";$td_unsung2 = '양';
$td3_sal = "지살";$td_unsung3 = '장생';
$td4_sal = "도화";$td_unsung4 = '목욕';
$td5_sal = "월살";$td_unsung5 = '관대';
$td6_sal = "망신";$td_unsung6 = '건록';
$td7_sal = "장성";$td_unsung7 = '제왕';
$td8_sal = "반안";$td_unsung8 = '쇄';
$td9_sal = "역마";$td_unsung9 = '병';
$td10_sal = "육해";$td_unsung10 = '사';
$td11_sal = "역마";$td_unsung11 = '묘';
$td12_sal = "역마";$td_unsung12 = '절';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "戌")){
$td1_sal = "천살";$td_unsung1 = '양';
$td2_sal = "지살";$td_unsung2 = '장생';
$td3_sal = "도화";$td_unsung3 = '목욕';
$td4_sal = "월살";$td_unsung4 = '관대';
$td5_sal = "망신";$td_unsung5 = '건록';
$td6_sal = "장성";$td_unsung6 = '제왕';
$td7_sal = "반안";$td_unsung7 = '쇄';
$td8_sal = "역마";$td_unsung8 = '병';
$td9_sal = "육해";$td_unsung9 = '사';
$td10_sal = "화개";$td_unsung10 = '묘';
$td11_sal = "역마";$td_unsung11 = '절';
$td12_sal = "역마";$td_unsung12 = '태';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "亥")){
$td1_sal = "지살";$td_unsung1 = '장생';
$td2_sal = "도화";$td_unsung2 = '목욕';
$td3_sal = "월살";$td_unsung3 = '관대';
$td4_sal = "망신";$td_unsung4 = '건록';
$td5_sal = "장성";$td_unsung5 = '제왕';
$td6_sal = "반안";$td_unsung6 = '쇄';
$td7_sal = "역마";$td_unsung7 = '병';
$td8_sal = "육해";$td_unsung8 = '사';
$td9_sal = "화개";$td_unsung9 = '묘';
$td10_sal = "겁살";$td_unsung10 = '절';
$td11_sal = "역마";$td_unsung11 = '태';
$td12_sal = "역마";$td_unsung12 = '양';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "子")){
$td1_sal = "도화";$td_unsung1 = '목욕';
$td2_sal = "월살";$td_unsung2 = '관대';
$td3_sal = "망신";$td_unsung3 = '건록';
$td4_sal = "장성";$td_unsung4 = '제왕';
$td5_sal = "반안";$td_unsung5 = '쇄';
$td6_sal = "역마";$td_unsung6 = '병';
$td7_sal = "육해";$td_unsung7 = '사';
$td8_sal = "화개";$td_unsung8 = '묘';
$td9_sal = "겁살";$td_unsung9 = '절';
$td10_sal = "재살";$td_unsung10 = '태';
$td11_sal = "역마";$td_unsung11 = '양';
$td12_sal = "역마";$td_unsung12 = '장생';
}

if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($td1_month_e == "丑")){
$td1_sal = "월살";$td_unsung1 = '관대';
$td2_sal = "망신";$td_unsung2 = '건록';
$td3_sal = "장성";$td_unsung3 = '제왕';
$td4_sal = "반안";$td_unsung4 = '쇄';
$td5_sal = "역마";$td_unsung5 = '병';
$td6_sal = "육해";$td_unsung6 = '사';
$td7_sal = "화개";$td_unsung7 = '묘';
$td8_sal = "겁살";$td_unsung8 = '절';
$td9_sal = "재살";$td_unsung9 = '태';
$td10_sal = "천살";$td_unsung10 = '양';
$td11_sal = "역마";$td_unsung11 = '장생';
$td12_sal = "역마";$td_unsung12 = '목욕';
}




if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "寅")){
$td1_sal = "지살";$td_unsung1 = '장생';
$td2_sal = "도화";$td_unsung2 = '목욕';
$td3_sal = "월살";$td_unsung3 = '관대';
$td4_sal = "망신";$td_unsung4 = '건록';
$td5_sal = "장성";$td_unsung5 = '제왕';
$td6_sal = "반안";$td_unsung6 = '쇄';
$td7_sal = "역마";$td_unsung7 = '병';
$td8_sal = "육해";$td_unsung8 = '사';
$td9_sal = "화개";$td_unsung9 = '묘';
$td10_sal = "겁살";$td_unsung10 = '절';
$td11_sal = "역마";$td_unsung11 = '태';
$td12_sal = "역마";$td_unsung12 = '양';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "卯")){
$td1_sal = "도화";$td_unsung1 = '목욕';
$td2_sal = "월살";$td_unsung2 = '관대';
$td3_sal = "망신";$td_unsung3 = '건록';
$td4_sal = "장성";$td_unsung4 = '제왕';
$td5_sal = "반안";$td_unsung5 = '쇄';
$td6_sal = "역마";$td_unsung6 = '병';
$td7_sal = "육해";$td_unsung7 = '사';
$td8_sal = "화개";$td_unsung8 = '묘';
$td9_sal = "겁살";$td_unsung9 = '절';
$td10_sal = "재살";$td_unsung10 = '태';
$td11_sal = "역마";$td_unsung11 = '양';
$td12_sal = "역마";$td_unsung12 = '장생';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "辰")){
$td1_sal = "월살";$td_unsung1 = '관대';
$td2_sal = "망신";$td_unsung2 = '건록';
$td3_sal = "장성";$td_unsung3 = '제왕';
$td4_sal = "반안";$td_unsung4 = '쇄';
$td5_sal = "역마";$td_unsung5 = '병';
$td6_sal = "육해";$td_unsung6 = '사';
$td7_sal = "화개";$td_unsung7 = '묘';
$td8_sal = "겁살";$td_unsung8 = '절';
$td9_sal = "재살";$td_unsung9 = '태';
$td10_sal = "천살";$td_unsung10 = '양';
$td11_sal = "역마";$td_unsung11 = '장생';
$td12_sal = "역마";$td_unsung12 = '목욕';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "巳")){
$td1_sal = "망신";$td_unsung1 = '건록';
$td2_sal = "장성";$td_unsung2 = '제왕';
$td3_sal = "반안";$td_unsung3 = '쇄';
$td4_sal = "역마";$td_unsung4 = '병';
$td5_sal = "육해";$td_unsung5 = '사';
$td6_sal = "화개";$td_unsung6 = '묘';
$td7_sal = "겁살";$td_unsung7 = '절';
$td8_sal = "재살";$td_unsung8 = '태';
$td9_sal = "천살";$td_unsung9 = '양';
$td10_sal = "지살";$td_unsung10 = '장생';
$td11_sal = "역마";$td_unsung11 = '목욕';
$td12_sal = "역마";$td_unsung12 = '관대';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "午")){
$td1_sal = "장성";$td_unsung1 = '제왕';
$td2_sal = "반안";$td_unsung2 = '쇄';
$td3_sal = "역마";$td_unsung3 = '병';
$td4_sal = "육해";$td_unsung4 = '사';
$td5_sal = "화개";$td_unsung5 = '묘';
$td6_sal = "겁살";$td_unsung6 = '절';
$td7_sal = "재살";$td_unsung7 = '태';
$td8_sal = "천살";$td_unsung8 = '양';
$td9_sal = "지살";$td_unsung9 = '장생';
$td10_sal = "도화";$td_unsung10 = '목욕';
$td11_sal = "역마";$td_unsung11 = '관대';
$td12_sal = "역마";$td_unsung12 = '건록';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "未")){
$td1_sal = "반안";$td_unsung1 = '쇄';
$td2_sal = "역마";$td_unsung2 = '병';
$td3_sal = "육해";$td_unsung3 = '사';
$td4_sal = "화개";$td_unsung4 = '묘';
$td5_sal = "겁살";$td_unsung5 = '절';
$td6_sal = "재살";$td_unsung6 = '태';
$td7_sal = "천살";$td_unsung7 = '양';
$td8_sal = "지살";$td_unsung8 = '장생';
$td9_sal = "도화";$td_unsung9 = '목욕';
$td10_sal = "월살";$td_unsung10 = '관대';
$td11_sal = "역마";$td_unsung11 = '건록';
$td12_sal = "역마";$td_unsung12 = '제왕';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "申")){
$td1_sal = "역마";$td_unsung1 = '병';
$td2_sal = "육해";$td_unsung2 = '사';
$td3_sal = "화개";$td_unsung3 = '묘';
$td4_sal = "겁살";$td_unsung4 = '절';
$td5_sal = "재살";$td_unsung5 = '태';
$td6_sal = "천살";$td_unsung6 = '양';
$td7_sal = "지살";$td_unsung7 = '장생';
$td8_sal = "도화";$td_unsung8 = '목욕';
$td9_sal = "월살";$td_unsung9 = '관대';
$td10_sal = "망신";$td_unsung10 = '건록';
$td11_sal = "역마";$td_unsung11 = '제왕';
$td12_sal = "역마";$td_unsung12 = '쇄';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "酉")){
$td1_sal = "육해";$td_unsung1 = '사';
$td2_sal = "화개";$td_unsung2 = '묘';
$td3_sal = "겁살";$td_unsung3 = '절';
$td4_sal = "재살";$td_unsung4 = '태';
$td5_sal = "천살";$td_unsung5 = '양';
$td6_sal = "지살";$td_unsung6 = '장생';
$td7_sal = "도화";$td_unsung7 = '목욕';
$td8_sal = "월살";$td_unsung8 = '관대';
$td9_sal = "망신";$td_unsung9 = '건록';
$td10_sal = "장성";$td_unsung10 = '제왕';
$td11_sal = "역마";$td_unsung11 = '쇄';
$td12_sal = "역마";$td_unsung12 = '병';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "戌")){
$td1_sal = "화개";$td_unsung1 = '묘';
$td2_sal = "겁살";$td_unsung2 = '절';
$td3_sal = "재살";$td_unsung3 = '태';
$td4_sal = "천살";$td_unsung4 = '양';
$td5_sal = "지살";$td_unsung5 = '장생';
$td6_sal = "도화";$td_unsung6 = '목욕';
$td7_sal = "월살";$td_unsung7 = '관대';
$td8_sal = "망신";$td_unsung8 = '건록';
$td9_sal = "장성";$td_unsung9 = '제왕';
$td10_sal = "반안";$td_unsung10 = '쇄';
$td11_sal = "역마";$td_unsung11 = '병';
$td12_sal = "역마";$td_unsung12 = '사';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "亥")){
$td1_sal = "겁살";$td_unsung1 = '절';
$td2_sal = "재살";$td_unsung2 = '태';
$td3_sal = "천살";$td_unsung3 = '양';
$td4_sal = "지살";$td_unsung4 = '장생';
$td5_sal = "도화";$td_unsung5 = '목욕';
$td6_sal = "월살";$td_unsung6 = '관대';
$td7_sal = "망신";$td_unsung7 = '건록';
$td8_sal = "장성";$td_unsung8 = '제왕';
$td9_sal = "반안";$td_unsung9 = '쇄';
$td10_sal = "역마";$td_unsung10 = '병';
$td11_sal = "역마";$td_unsung11 = '사';
$td12_sal = "역마";$td_unsung12 = '묘';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "子")){
$td1_sal = "재살";$td_unsung1 = '태';
$td2_sal = "천살";$td_unsung2 = '양';
$td3_sal = "지살";$td_unsung3 = '장생';
$td4_sal = "도화";$td_unsung4 = '목욕';
$td5_sal = "월살";$td_unsung5 = '관대';
$td6_sal = "망신";$td_unsung6 = '건록';
$td7_sal = "장성";$td_unsung7 = '제왕';
$td8_sal = "반안";$td_unsung8 = '쇄';
$td9_sal = "역마";$td_unsung9 = '병';
$td10_sal = "육해";$td_unsung10 = '사';
$td11_sal = "역마";$td_unsung11 = '묘';
$td12_sal = "역마";$td_unsung12 = '절';
}

if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($td1_month_e == "丑")){
$td1_sal = "천살";$td_unsung1 = '양';
$td2_sal = "지살";$td_unsung2 = '장생';
$td3_sal = "도화";$td_unsung3 = '목욕';
$td4_sal = "월살";$td_unsung4 = '관대';
$td5_sal = "망신";$td_unsung5 = '건록';
$td6_sal = "장성";$td_unsung6 = '제왕';
$td7_sal = "반안";$td_unsung7 = '쇄';
$td8_sal = "역마";$td_unsung8 = '병';
$td9_sal = "육해";$td_unsung9 = '사';
$td10_sal = "화개";$td_unsung10 = '묘';
$td11_sal = "역마";$td_unsung11 = '절';
$td12_sal = "역마";$td_unsung12 = '태';
}
####################################################################################################
#################################################################################################   
##########################################################################################################################################


switch ($my_month_e) {

  case ("子") : 
   
if ($td1_month_e == '巳') {$td1_cduck = "천귀";}
if ($td2_month_e == '巳') {$td2_cduck = "천귀";}
if ($td3_month_e == '巳') {$td3_cduck = "천귀";}
if ($td4_month_e == '巳') {$td4_cduck = "천귀";}
if ($td5_month_e == '巳') {$td5_cduck = "천귀";}
if ($td6_month_e == '巳') {$td6_cduck = "천귀";}
if ($td7_month_e == '巳') {$td7_cduck = "천귀";}
if ($td8_month_e == '巳') {$td8_cduck = "천귀";}
if ($td9_month_e == '巳') {$td9_cduck = "천귀";}
if ($td10_month_e == '巳') {$td10_cduck = "천귀";}
if ($td11_month_e == '巳') {$td11_cduck = "천귀";}
if ($td12_month_e == '巳') {$td12_cduck = "천귀";}

if ($td1_month_e == '申') {$td1_chap = "천합";}
if ($td2_month_e == '申') {$td2_chap = "천합";}
if ($td3_month_e == '申') {$td3_chap = "천합";}
if ($td4_month_e == '申') {$td4_chap = "천합";}
if ($td5_month_e == '申') {$td5_chap = "천합";}
if ($td6_month_e == '申') {$td6_chap = "천합";}
if ($td7_month_e == '申') {$td7_chap = "천합";}
if ($td8_month_e == '申') {$td8_chap = "천합";}
if ($td9_month_e == '申') {$td9_chap = "천합";}
if ($td10_month_e == '申') {$td10_chap = "천합";}
if ($td11_month_e == '申') {$td11_chap = "천합";}
if ($td12_month_e == '申') {$td12_chap = "천합";}

break;

  case ("丑") : 
   
if ($td1_month_h == '乙') {$td1_chap = "천합";}
if ($td2_month_h == '乙') {$td2_chap = "천합";}
if ($td3_month_h == '乙') {$td3_chap = "천합";}
if ($td4_month_h == '乙') {$td4_chap = "천합";}
if ($td5_month_h == '乙') {$td5_chap = "천합";}
if ($td6_month_h == '乙') {$td6_chap = "천합";}
if ($td7_month_h == '乙') {$td7_chap = "천합";}
if ($td8_month_h == '乙') {$td8_chap = "천합";}
if ($td9_month_h == '乙') {$td9_chap = "천합";}
if ($td10_month_h == '乙') {$td10_chap = "천합";}
if ($td11_month_h == '乙') {$td11_chap = "천합";}
if ($td12_month_h == '乙') {$td12_chap = "천합";}

if ($td1_month_h == '庚') {$td1_cduck = "천귀";}
if ($td2_month_h == '庚') {$td2_cduck = "천귀";}
if ($td3_month_h == '庚') {$td3_cduck = "천귀";}
if ($td4_month_h == '庚') {$td4_cduck = "천귀";}
if ($td5_month_h == '庚') {$td5_cduck = "천귀";}
if ($td6_month_h == '庚') {$td6_cduck = "천귀";}
if ($td7_month_h == '庚') {$td7_cduck = "천귀";}
if ($td8_month_h == '庚') {$td8_cduck = "천귀";}
if ($td9_month_h == '庚') {$td9_cduck = "천귀";}
if ($td10_month_h == '庚') {$td10_cduck = "천귀";}
if ($td11_month_h == '庚') {$td11_cduck = "천귀";}
if ($td12_month_h == '庚') {$td12_cduck = "천귀";}

break;

  case ("寅") : 
   
if ($td1_month_h == '丁') {$td1_cduck = "천귀";}
if ($td2_month_h == '丁') {$td2_cduck = "천귀";}
if ($td3_month_h == '丁') {$td3_cduck = "천귀";}
if ($td4_month_h == '丁') {$td4_cduck = "천귀";}
if ($td5_month_h == '丁') {$td5_cduck = "천귀";}
if ($td6_month_h == '丁') {$td6_cduck = "천귀";}
if ($td7_month_h == '丁') {$td7_cduck = "천귀";}
if ($td8_month_h == '丁') {$td8_cduck = "천귀";}
if ($td9_month_h == '丁') {$td9_cduck = "천귀";}
if ($td10_month_h == '丁') {$td10_cduck = "천귀";}
if ($td11_month_h == '丁') {$td11_cduck = "천귀";}
if ($td12_month_h == '丁') {$td12_cduck = "천귀";}

if ($td1_month_h == '壬') {$td1_chap = "천합";}
if ($td2_month_h == '壬') {$td2_chap = "천합";}
if ($td3_month_h == '壬') {$td3_chap = "천합";}
if ($td4_month_h == '壬') {$td4_chap = "천합";}
if ($td5_month_h == '壬') {$td5_chap = "천합";}
if ($td6_month_h == '壬') {$td6_chap = "천합";}
if ($td7_month_h == '壬') {$td7_chap = "천합";}
if ($td8_month_h == '壬') {$td8_chap = "천합";}
if ($td9_month_h == '壬') {$td9_chap = "천합";}
if ($td10_month_h == '壬') {$td10_chap = "천합";}
if ($td11_month_h == '壬') {$td11_chap = "천합";}
if ($td12_month_h == '壬') {$td12_chap = "천합";}
  
break;

  case ("卯") : 
   
if ($td1_month_e == '巳') {$td1_chap = "천합";}
if ($td2_month_e == '巳') {$td2_chap = "천합";}
if ($td3_month_e == '巳') {$td3_chap = "천합";}
if ($td4_month_e == '巳') {$td4_chap = "천합";}
if ($td5_month_e == '巳') {$td5_chap = "천합";}
if ($td6_month_e == '巳') {$td6_chap = "천합";}
if ($td7_month_e == '巳') {$td7_chap = "천합";}
if ($td8_month_e == '巳') {$td8_chap = "천합";}
if ($td9_month_e == '巳') {$td9_chap = "천합";}
if ($td10_month_e == '巳') {$td10_chap = "천합";}
if ($td11_month_e == '巳') {$td11_chap = "천합";}
if ($td12_month_e == '巳') {$td12_chap = "천합";}

if ($td1_month_e == '申') {$td1_cduck = "천귀";}
if ($td2_month_e == '申') {$td2_cduck = "천귀";}
if ($td3_month_e == '申') {$td3_cduck = "천귀";}
if ($td4_month_e == '申') {$td4_cduck = "천귀";}
if ($td5_month_e == '申') {$td5_cduck = "천귀";}
if ($td6_month_e == '申') {$td6_cduck = "천귀";}
if ($td7_month_e == '申') {$td7_cduck = "천귀";}
if ($td8_month_e == '申') {$td8_cduck = "천귀";}
if ($td9_month_e == '申') {$td9_cduck = "천귀";}
if ($td10_month_e == '申') {$td10_cduck = "천귀";}
if ($td11_month_e == '申') {$td11_cduck = "천귀";}
if ($td12_month_e == '申') {$td12_cduck = "천귀";}

break;  
  
  case ("辰") : 
   
if ($td1_month_h == '丁') {$td1_chap = "천합";}
if ($td2_month_h == '丁') {$td2_chap = "천합";}
if ($td3_month_h == '丁') {$td3_chap = "천합";}
if ($td4_month_h == '丁') {$td4_chap = "천합";}
if ($td5_month_h == '丁') {$td5_chap = "천합";}
if ($td6_month_h == '丁') {$td6_chap = "천합";}
if ($td7_month_h == '丁') {$td7_chap = "천합";}
if ($td8_month_h == '丁') {$td8_chap = "천합";}
if ($td9_month_h == '丁') {$td9_chap = "천합";}
if ($td10_month_h == '丁') {$td10_chap = "천합";}
if ($td11_month_h == '丁') {$td11_chap = "천합";}
if ($td12_month_h == '丁') {$td12_chap = "천합";}

if ($td1_month_h == '壬') {$td1_cduck = "천귀";}
if ($td2_month_h == '壬') {$td2_cduck = "천귀";}
if ($td3_month_h == '壬') {$td3_cduck = "천귀";}
if ($td4_month_h == '壬') {$td4_cduck = "천귀";}
if ($td5_month_h == '壬') {$td5_cduck = "천귀";}
if ($td6_month_h == '壬') {$td6_cduck = "천귀";}
if ($td7_month_h == '壬') {$td7_cduck = "천귀";}
if ($td8_month_h == '壬') {$td8_cduck = "천귀";}
if ($td9_month_h == '壬') {$td9_cduck = "천귀";}
if ($td10_month_h == '壬') {$td10_cduck = "천귀";}
if ($td11_month_h == '壬') {$td11_cduck = "천귀";}
if ($td12_month_h == '壬') {$td12_cduck = "천귀";}
  
break;

  case ("巳") : 
   
if ($td1_month_h == '丙') {$td1_chap = "천합";}
if ($td2_month_h == '丙') {$td2_chap = "천합";}
if ($td3_month_h == '丙') {$td3_chap = "천합";}
if ($td4_month_h == '丙') {$td4_chap = "천합";}
if ($td5_month_h == '丙') {$td5_chap = "천합";}
if ($td6_month_h == '丙') {$td6_chap = "천합";}
if ($td7_month_h == '丙') {$td7_chap = "천합";}
if ($td8_month_h == '丙') {$td8_chap = "천합";}
if ($td9_month_h == '丙') {$td9_chap = "천합";}
if ($td10_month_h == '丙') {$td10_chap = "천합";}
if ($td11_month_h == '丙') {$td11_chap = "천합";}
if ($td12_month_h == '丙') {$td12_chap = "천합";}

if ($td1_month_h == '辛') {$td1_cduck = "천귀";}
if ($td2_month_h == '辛') {$td2_cduck = "천귀";}
if ($td3_month_h == '辛') {$td3_cduck = "천귀";}
if ($td4_month_h == '辛') {$td4_cduck = "천귀";}
if ($td5_month_h == '辛') {$td5_cduck = "천귀";}
if ($td6_month_h == '辛') {$td6_cduck = "천귀";}
if ($td7_month_h == '辛') {$td7_cduck = "천귀";}
if ($td8_month_h == '辛') {$td8_cduck = "천귀";}
if ($td9_month_h == '辛') {$td9_cduck = "천귀";}
if ($td10_month_h == '辛') {$td10_cduck = "천귀";}
if ($td11_month_h == '辛') {$td11_cduck = "천귀";}
if ($td12_month_h == '辛') {$td12_cduck = "천귀";}

break;
  
  case ("午") : 
   
if ($td1_month_e == '寅') {$td1_chap = "천합";}
if ($td2_month_e == '寅') {$td2_chap = "천합";}
if ($td3_month_e == '寅') {$td3_chap = "천합";}
if ($td4_month_e == '寅') {$td4_chap = "천합";}
if ($td5_month_e == '寅') {$td5_chap = "천합";}
if ($td6_month_e == '寅') {$td6_chap = "천합";}
if ($td7_month_e == '寅') {$td7_chap = "천합";}
if ($td8_month_e == '寅') {$td8_chap = "천합";}
if ($td9_month_e == '寅') {$td9_chap = "천합";}
if ($td10_month_e == '寅') {$td10_chap = "천합";}
if ($td11_month_e == '寅') {$td11_chap = "천합";}
if ($td12_month_e == '寅') {$td12_chap = "천합";}

if ($td1_month_e == '亥') {$td1_cduck = "천귀";}  
if ($td2_month_e == '亥') {$td2_cduck = "천귀";}  
if ($td3_month_e == '亥') {$td3_cduck = "천귀";}  
if ($td4_month_e == '亥') {$td4_cduck = "천귀";}  
if ($td5_month_e == '亥') {$td5_cduck = "천귀";}  
if ($td6_month_e == '亥') {$td6_cduck = "천귀";}  
if ($td7_month_e == '亥') {$td7_cduck = "천귀";}  
if ($td8_month_e == '亥') {$td8_cduck = "천귀";}  
if ($td9_month_e == '亥') {$td9_cduck = "천귀";}  
if ($td10_month_e == '亥') {$td10_cduck = "천귀";}  
if ($td11_month_e == '亥') {$td11_cduck = "천귀";}  
if ($td12_month_e == '亥') {$td12_cduck = "천귀";}  
			
break;

  case ("未") : 
   
if ($td1_month_h == '甲') {$td1_cduck = "천귀";}
if ($td2_month_h == '甲') {$td2_cduck = "천귀";}
if ($td3_month_h == '甲') {$td3_cduck = "천귀";}
if ($td4_month_h == '甲') {$td4_cduck = "천귀";}
if ($td5_month_h == '甲') {$td5_cduck = "천귀";}
if ($td6_month_h == '甲') {$td6_cduck = "천귀";}
if ($td7_month_h == '甲') {$td7_cduck = "천귀";}
if ($td8_month_h == '甲') {$td8_cduck = "천귀";}
if ($td9_month_h == '甲') {$td9_cduck = "천귀";}
if ($td10_month_h == '甲') {$td10_cduck = "천귀";}
if ($td11_month_h == '甲') {$td11_cduck = "천귀";}
if ($td12_month_h == '甲') {$td12_cduck = "천귀";}

if ($td1_month_h == '己') {$td1_chap = "천합";}
if ($td2_month_h == '己') {$td2_chap = "천합";}
if ($td3_month_h == '己') {$td3_chap = "천합";}
if ($td4_month_h == '己') {$td4_chap = "천합";}
if ($td5_month_h == '己') {$td5_chap = "천합";}
if ($td6_month_h == '己') {$td6_chap = "천합";}
if ($td7_month_h == '己') {$td7_chap = "천합";}
if ($td8_month_h == '己') {$td8_chap = "천합";}
if ($td9_month_h == '己') {$td9_chap = "천합";}
if ($td10_month_h == '己') {$td10_chap = "천합";}
if ($td11_month_h == '己') {$td11_chap = "천합";}
if ($td12_month_h == '己') {$td12_chap = "천합";}

break;

  case ("申") : 
   
if ($td1_month_h == '戊') {$td1_chap = "천합";}
if ($td2_month_h == '戊') {$td2_chap = "천합";}
if ($td3_month_h == '戊') {$td3_chap = "천합";}
if ($td4_month_h == '戊') {$td4_chap = "천합";}
if ($td5_month_h == '戊') {$td5_chap = "천합";}
if ($td6_month_h == '戊') {$td6_chap = "천합";}
if ($td7_month_h == '戊') {$td7_chap = "천합";}
if ($td8_month_h == '戊') {$td8_chap = "천합";}
if ($td9_month_h == '戊') {$td9_chap = "천합";}
if ($td10_month_h == '戊') {$td10_chap = "천합";}
if ($td11_month_h == '戊') {$td11_chap = "천합";}
if ($td12_month_h == '戊') {$td12_chap = "천합";}

if ($td1_month_h == '癸') {$td1_cduck = "천귀";}  
if ($td2_month_h == '癸') {$td2_cduck = "천귀";}  
if ($td3_month_h == '癸') {$td3_cduck = "천귀";}  
if ($td4_month_h == '癸') {$td4_cduck = "천귀";}  
if ($td5_month_h == '癸') {$td5_cduck = "천귀";}  
if ($td6_month_h == '癸') {$td6_cduck = "천귀";}  
if ($td7_month_h == '癸') {$td7_cduck = "천귀";}  
if ($td8_month_h == '癸') {$td8_cduck = "천귀";}  
if ($td9_month_h == '癸') {$td9_cduck = "천귀";}  
if ($td10_month_h == '癸') {$td10_cduck = "천귀";}  
if ($td11_month_h == '癸') {$td11_cduck = "천귀";}  
if ($td12_month_h == '癸') {$td12_cduck = "천귀";}  

break;
			
  case ("酉") : 
   
if ($td1_month_e == '寅') {$td1_cduck = "천귀";}
if ($td2_month_e == '寅') {$td2_cduck = "천귀";}
if ($td3_month_e == '寅') {$td3_cduck = "천귀";}
if ($td4_month_e == '寅') {$td4_cduck = "천귀";}
if ($td5_month_e == '寅') {$td5_cduck = "천귀";}
if ($td6_month_e == '寅') {$td6_cduck = "천귀";}
if ($td7_month_e == '寅') {$td7_cduck = "천귀";}
if ($td8_month_e == '寅') {$td8_cduck = "천귀";}
if ($td9_month_e == '寅') {$td9_cduck = "천귀";}
if ($td10_month_e == '寅') {$td10_cduck = "천귀";}
if ($td11_month_e == '寅') {$td11_cduck = "천귀";}
if ($td12_month_e == '寅') {$td12_cduck = "천귀";}

if ($td1_month_e == '亥') {$td1_chap = "천합";}  
if ($td2_month_e == '亥') {$td2_chap = "천합";}  
if ($td3_month_e == '亥') {$td3_chap = "천합";}  
if ($td4_month_e == '亥') {$td4_chap = "천합";}  
if ($td5_month_e == '亥') {$td5_chap = "천합";}  
if ($td6_month_e == '亥') {$td6_chap = "천합";}  
if ($td7_month_e == '亥') {$td7_chap = "천합";}  
if ($td8_month_e == '亥') {$td8_chap = "천합";}  
if ($td9_month_e == '亥') {$td9_chap = "천합";}  
if ($td10_month_e == '亥') {$td10_chap = "천합";}  
if ($td11_month_e == '亥') {$td11_chap = "천합";}  
if ($td12_month_e == '亥') {$td12_chap = "천합";}  
			
break;

case ("戌") : 
   
if ($td1_month_h == '丙') {$td1_cduck = "천귀";}
if ($td2_month_h == '丙') {$td2_cduck = "천귀";}
if ($td3_month_h == '丙') {$td3_cduck = "천귀";}
if ($td4_month_h == '丙') {$td4_cduck = "천귀";}
if ($td5_month_h == '丙') {$td5_cduck = "천귀";}
if ($td6_month_h == '丙') {$td6_cduck = "천귀";}
if ($td7_month_h == '丙') {$td7_cduck = "천귀";}
if ($td8_month_h == '丙') {$td8_cduck = "천귀";}
if ($td9_month_h == '丙') {$td9_cduck = "천귀";}
if ($td10_month_h == '丙') {$td10_cduck = "천귀";}
if ($td11_month_h == '丙') {$td11_cduck = "천귀";}
if ($td12_month_h == '丙') {$td12_cduck = "천귀";}

if ($td1_month_h == '辛') {$td1_chap = "천합";}
if ($td2_month_h == '辛') {$td2_chap = "천합";}
if ($td3_month_h == '辛') {$td3_chap = "천합";}
if ($td4_month_h == '辛') {$td4_chap = "천합";}
if ($td5_month_h == '辛') {$td5_chap = "천합";}
if ($td6_month_h == '辛') {$td6_chap = "천합";}
if ($td7_month_h == '辛') {$td7_chap = "천합";}
if ($td8_month_h == '辛') {$td8_chap = "천합";}
if ($td9_month_h == '辛') {$td9_chap = "천합";}
if ($td10_month_h == '辛') {$td10_chap = "천합";}
if ($td11_month_h == '辛') {$td11_chap = "천합";}
if ($td12_month_h == '辛') {$td12_chap = "천합";}
			
break;

case ("亥") : 
   
if ($td1_month_h == '乙') {$td1_cduck = "천귀";}
if ($td2_month_h == '乙') {$td2_cduck = "천귀";}
if ($td3_month_h == '乙') {$td3_cduck = "천귀";}
if ($td4_month_h == '乙') {$td4_cduck = "천귀";}
if ($td5_month_h == '乙') {$td5_cduck = "천귀";}
if ($td6_month_h == '乙') {$td6_cduck = "천귀";}
if ($td7_month_h == '乙') {$td7_cduck = "천귀";}
if ($td8_month_h == '乙') {$td8_cduck = "천귀";}
if ($td9_month_h == '乙') {$td9_cduck = "천귀";}
if ($td10_month_h == '乙') {$td10_cduck = "천귀";}
if ($td11_month_h == '乙') {$td11_cduck = "천귀";}
if ($td12_month_h == '乙') {$td12_cduck = "천귀";}

if ($td1_month_h == '庚') {$td1_chap = "천합";}
if ($td2_month_h == '庚') {$td2_chap = "천합";}
if ($td3_month_h == '庚') {$td3_chap = "천합";}
if ($td4_month_h == '庚') {$td4_chap = "천합";}
if ($td5_month_h == '庚') {$td5_chap = "천합";}
if ($td6_month_h == '庚') {$td6_chap = "천합";}
if ($td7_month_h == '庚') {$td7_chap = "천합";}
if ($td8_month_h == '庚') {$td8_chap = "천합";}
if ($td9_month_h == '庚') {$td9_chap = "천합";}
if ($td10_month_h == '庚') {$td10_chap = "천합";}
if ($td11_month_h == '庚') {$td11_chap = "천합";}
if ($td12_month_h == '庚') {$td12_chap = "천합";}

break;
}

switch ($my_day_h) {

  case ("甲") : 
   
if ($td1_month_e == '卯') {$td1_yangin = "양인";}
if ($td2_month_e == '卯') {$td2_yangin = "양인";}
if ($td3_month_e == '卯') {$td3_yangin = "양인";}
if ($td4_month_e == '卯') {$td4_yangin = "양인";}
if ($td5_month_e == '卯') {$td5_yangin = "양인";}
if ($td6_month_e == '卯') {$td6_yangin = "양인";}
if ($td7_month_e == '卯') {$td7_yangin = "양인";}
if ($td8_month_e == '卯') {$td8_yangin = "양인";}
if ($td9_month_e == '卯') {$td9_yangin = "양인";}
if ($td10_month_e == '卯') {$td10_yangin = "양인";}
if ($td11_month_e == '卯') {$td11_yangin = "양인";}
if ($td12_month_e == '卯') {$td12_yangin = "양인";}

break;


  case ("乙") : 
   
if ($td1_month_e == '辰') {$td1_yangin = "양인";}
if ($td2_month_e == '辰') {$td2_yangin = "양인";}
if ($td3_month_e == '辰') {$td3_yangin = "양인";}
if ($td4_month_e == '辰') {$td4_yangin = "양인";}
if ($td5_month_e == '辰') {$td5_yangin = "양인";}
if ($td6_month_e == '辰') {$td6_yangin = "양인";}
if ($td7_month_e == '辰') {$td7_yangin = "양인";}
if ($td8_month_e == '辰') {$td8_yangin = "양인";}
if ($td9_month_e == '辰') {$td9_yangin = "양인";}
if ($td10_month_e == '辰') {$td10_yangin = "양인";}
if ($td11_month_e == '辰') {$td11_yangin = "양인";}
if ($td12_month_e == '辰') {$td12_yangin = "양인";}

break;

  case ("丙") : 
   
if ($td1_month_e == '午') {$td1_yangin = "양인";}
if ($td2_month_e == '午') {$td2_yangin = "양인";}
if ($td3_month_e == '午') {$td3_yangin = "양인";}
if ($td4_month_e == '午') {$td4_yangin = "양인";}
if ($td5_month_e == '午') {$td5_yangin = "양인";}
if ($td6_month_e == '午') {$td6_yangin = "양인";}
if ($td7_month_e == '午') {$td7_yangin = "양인";}
if ($td8_month_e == '午') {$td8_yangin = "양인";}
if ($td9_month_e == '午') {$td9_yangin = "양인";}
if ($td10_month_e == '午') {$td10_yangin = "양인";}
if ($td11_month_e == '午') {$td11_yangin = "양인";}
if ($td12_month_e == '午') {$td12_yangin = "양인";}

break;

  case ("丁") : 
   
if ($td1_month_e == '未') {$td1_yangin = "양인";}
if ($td2_month_e == '未') {$td2_yangin = "양인";}
if ($td3_month_e == '未') {$td3_yangin = "양인";}
if ($td4_month_e == '未') {$td4_yangin = "양인";}
if ($td5_month_e == '未') {$td5_yangin = "양인";}
if ($td6_month_e == '未') {$td6_yangin = "양인";}
if ($td7_month_e == '未') {$td7_yangin = "양인";}
if ($td8_month_e == '未') {$td8_yangin = "양인";}
if ($td9_month_e == '未') {$td9_yangin = "양인";}
if ($td10_month_e == '未') {$td10_yangin = "양인";}
if ($td11_month_e == '未') {$td11_yangin = "양인";}
if ($td12_month_e == '未') {$td12_yangin = "양인";}

break;

  case ("戊") : 
   
if ($td1_month_e == '午') {$td1_yangin = "양인";}
if ($td2_month_e == '午') {$td2_yangin = "양인";}
if ($td3_month_e == '午') {$td3_yangin = "양인";}
if ($td4_month_e == '午') {$td4_yangin = "양인";}
if ($td5_month_e == '午') {$td5_yangin = "양인";}
if ($td6_month_e == '午') {$td6_yangin = "양인";}
if ($td7_month_e == '午') {$td7_yangin = "양인";}
if ($td8_month_e == '午') {$td8_yangin = "양인";}
if ($td9_month_e == '午') {$td9_yangin = "양인";}
if ($td10_month_e == '午') {$td10_yangin = "양인";}
if ($td11_month_e == '午') {$td11_yangin = "양인";}
if ($td12_month_e == '午') {$td12_yangin = "양인";}

break;

  case ("己") : 
   
if ($td1_month_e == '未') {$td1_yangin = "양인";}
if ($td2_month_e == '未') {$td2_yangin = "양인";}
if ($td3_month_e == '未') {$td3_yangin = "양인";}
if ($td4_month_e == '未') {$td4_yangin = "양인";}
if ($td5_month_e == '未') {$td5_yangin = "양인";}
if ($td6_month_e == '未') {$td6_yangin = "양인";}
if ($td7_month_e == '未') {$td7_yangin = "양인";}
if ($td8_month_e == '未') {$td8_yangin = "양인";}
if ($td9_month_e == '未') {$td9_yangin = "양인";}
if ($td10_month_e == '未') {$td10_yangin = "양인";}
if ($td11_month_e == '未') {$td11_yangin = "양인";}
if ($td12_month_e == '未') {$td12_yangin = "양인";}

break;

  case ("庚") : 
   
if ($td1_month_e == '酉') {$td1_yangin = "양인";}
if ($td2_month_e == '酉') {$td2_yangin = "양인";}
if ($td3_month_e == '酉') {$td3_yangin = "양인";}
if ($td4_month_e == '酉') {$td4_yangin = "양인";}
if ($td5_month_e == '酉') {$td5_yangin = "양인";}
if ($td6_month_e == '酉') {$td6_yangin = "양인";}
if ($td7_month_e == '酉') {$td7_yangin = "양인";}
if ($td8_month_e == '酉') {$td8_yangin = "양인";}
if ($td9_month_e == '酉') {$td9_yangin = "양인";}
if ($td10_month_e == '酉') {$td10_yangin = "양인";}
if ($td11_month_e == '酉') {$td11_yangin = "양인";}
if ($td12_month_e == '酉') {$td12_yangin = "양인";}

break;

  case ("辛") : 
   
if ($td1_month_e == '戌') {$td1_yangin = "양인";}
if ($td2_month_e == '戌') {$td2_yangin = "양인";}
if ($td3_month_e == '戌') {$td3_yangin = "양인";}
if ($td4_month_e == '戌') {$td4_yangin = "양인";}
if ($td5_month_e == '戌') {$td5_yangin = "양인";}
if ($td6_month_e == '戌') {$td6_yangin = "양인";}
if ($td7_month_e == '戌') {$td7_yangin = "양인";}
if ($td8_month_e == '戌') {$td8_yangin = "양인";}
if ($td9_month_e == '戌') {$td9_yangin = "양인";}
if ($td10_month_e == '戌') {$td10_yangin = "양인";}
if ($td11_month_e == '戌') {$td11_yangin = "양인";}
if ($td12_month_e == '戌') {$td12_yangin = "양인";}

break;

  case ("壬") : 
   
if ($td1_month_e == '子') {$td1_yangin = "양인";}
if ($td2_month_e == '子') {$td2_yangin = "양인";}
if ($td3_month_e == '子') {$td3_yangin = "양인";}
if ($td4_month_e == '子') {$td4_yangin = "양인";}
if ($td5_month_e == '子') {$td5_yangin = "양인";}
if ($td6_month_e == '子') {$td6_yangin = "양인";}
if ($td7_month_e == '子') {$td7_yangin = "양인";}
if ($td8_month_e == '子') {$td8_yangin = "양인";}
if ($td9_month_e == '子') {$td9_yangin = "양인";}
if ($td10_month_e == '子') {$td10_yangin = "양인";}
if ($td11_month_e == '子') {$td11_yangin = "양인";}
if ($td12_month_e == '子') {$td12_yangin = "양인";}

break;

  case ("癸") : 
   
if ($td1_month_e == '丑') {$td1_yangin = "양인";}
if ($td2_month_e == '丑') {$td2_yangin = "양인";}
if ($td3_month_e == '丑') {$td3_yangin = "양인";}
if ($td4_month_e == '丑') {$td4_yangin = "양인";}
if ($td5_month_e == '丑') {$td5_yangin = "양인";}
if ($td6_month_e == '丑') {$td6_yangin = "양인";}
if ($td7_month_e == '丑') {$td7_yangin = "양인";}
if ($td8_month_e == '丑') {$td8_yangin = "양인";}
if ($td9_month_e == '丑') {$td9_yangin = "양인";}
if ($td10_month_e == '丑') {$td10_yangin = "양인";}
if ($td11_month_e == '丑') {$td11_yangin = "양인";}
if ($td12_month_e == '丑') {$td12_yangin = "양인";}

break;



}


$my_day_tot = $my_day_h.$my_day_e;

switch ($my_day_tot) {

  case ("甲子") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("甲戌") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("甲申") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("甲午") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("甲辰") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}


break;
  
  
  case ("甲寅") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;


  case ("乙丑") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("乙亥") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("乙酉") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("乙未") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("乙巳") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}

break;
  
  
  case ("乙卯") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;

  case ("丙寅") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("丙子") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("丙戌") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("丙申") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("丙午") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}

break;
  
  
  case ("丙辰") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;

  case ("丁卯") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("丁丑") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("丁亥") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("丁酉") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("丁未") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}

break;
  
  
  case ("丁巳") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;


  case ("戊辰") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("戊寅") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("戊子") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("戊戌") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("戊申") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}

break;
  
  
  case ("戊午") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;

  case ("己巳") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("己卯") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("己丑") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("己亥") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("己酉") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}

break;
  
  
  case ("己未") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;

  case ("庚午") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("庚辰") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("庚寅") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("庚子") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("庚戌") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}

break;
  
  
  case ("庚申") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;


  case ("辛未") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("辛巳") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("辛卯") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("辛丑") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("辛亥") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}

break;
  
  
  case ("辛酉") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;

  case ("壬申") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("壬午") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("壬辰") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("壬寅") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("壬子") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}

break;
  
  
  case ("壬戌") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;

  case ("癸酉") : 
   
if (($td1_month_e == '戌') || ($td1_month_e == '亥')) {$td1_gongmang = "공망";}
if (($td2_month_e == '戌') || ($td2_month_e == '亥')) {$td2_gongmang = "공망";}
if (($td3_month_e == '戌') || ($td3_month_e == '亥')) {$td3_gongmang = "공망";}
if (($td4_month_e == '戌') || ($td4_month_e == '亥')) {$td4_gongmang = "공망";}
if (($td5_month_e == '戌') || ($td5_month_e == '亥')) {$td5_gongmang = "공망";}
if (($td6_month_e == '戌') || ($td6_month_e == '亥')) {$td6_gongmang = "공망";}
if (($td7_month_e == '戌') || ($td7_month_e == '亥')) {$td7_gongmang = "공망";}
if (($td8_month_e == '戌') || ($td8_month_e == '亥')) {$td8_gongmang = "공망";}
if (($td9_month_e == '戌') || ($td9_month_e == '亥')) {$td9_gongmang = "공망";}
if (($td10_month_e == '戌') || ($td10_month_e == '亥')) {$td10_gongmang = "공망";}
if (($td11_month_e == '戌') || ($td11_month_e == '亥')) {$td11_gongmang = "공망";}
if (($td12_month_e == '戌') || ($td12_month_e == '亥')) {$td12_gongmang = "공망";}

break;

  case ("癸未") : 
   
if (($td1_month_e == '申') || ($td1_month_e == '酉')) {$td1_gongmang = "공망";}
if (($td2_month_e == '申') || ($td2_month_e == '酉')) {$td2_gongmang = "공망";}
if (($td3_month_e == '申') || ($td3_month_e == '酉')) {$td3_gongmang = "공망";}
if (($td4_month_e == '申') || ($td4_month_e == '酉')) {$td4_gongmang = "공망";}
if (($td5_month_e == '申') || ($td5_month_e == '酉')) {$td5_gongmang = "공망";}
if (($td6_month_e == '申') || ($td6_month_e == '酉')) {$td6_gongmang = "공망";}
if (($td7_month_e == '申') || ($td7_month_e == '酉')) {$td7_gongmang = "공망";}
if (($td8_month_e == '申') || ($td8_month_e == '酉')) {$td8_gongmang = "공망";}
if (($td9_month_e == '申') || ($td9_month_e == '酉')) {$td9_gongmang = "공망";}
if (($td10_month_e == '申') || ($td10_month_e == '酉')) {$td10_gongmang = "공망";}
if (($td11_month_e == '申') || ($td11_month_e == '酉')) {$td11_gongmang = "공망";}
if (($td12_month_e == '申') || ($td12_month_e == '酉')) {$td12_gongmang = "공망";}

break;

  
  case ("癸巳") : 
   
if (($td1_month_e == '午') || ($td1_month_e == '未')) {$td1_gongmang = "공망";}
if (($td2_month_e == '午') || ($td2_month_e == '未')) {$td2_gongmang = "공망";}
if (($td3_month_e == '午') || ($td3_month_e == '未')) {$td3_gongmang = "공망";}
if (($td4_month_e == '午') || ($td4_month_e == '未')) {$td4_gongmang = "공망";}
if (($td5_month_e == '午') || ($td5_month_e == '未')) {$td5_gongmang = "공망";}
if (($td6_month_e == '午') || ($td6_month_e == '未')) {$td6_gongmang = "공망";}
if (($td7_month_e == '午') || ($td7_month_e == '未')) {$td7_gongmang = "공망";}
if (($td8_month_e == '午') || ($td8_month_e == '未')) {$td8_gongmang = "공망";}
if (($td9_month_e == '午') || ($td9_month_e == '未')) {$td9_gongmang = "공망";}
if (($td10_month_e == '午') || ($td10_month_e == '未')) {$td10_gongmang = "공망";}
if (($td11_month_e == '午') || ($td11_month_e == '未')) {$td11_gongmang = "공망";}
if (($td12_month_e == '午') || ($td12_month_e == '未')) {$td12_gongmang = "공망";}

break;

  case ("癸卯") : 
   
if (($td1_month_e == '辰') || ($td1_month_e == '巳')) {$td1_gongmang = "공망";}
if (($td2_month_e == '辰') || ($td2_month_e == '巳')) {$td2_gongmang = "공망";}
if (($td3_month_e == '辰') || ($td3_month_e == '巳')) {$td3_gongmang = "공망";}
if (($td4_month_e == '辰') || ($td4_month_e == '巳')) {$td4_gongmang = "공망";}
if (($td5_month_e == '辰') || ($td5_month_e == '巳')) {$td5_gongmang = "공망";}
if (($td6_month_e == '辰') || ($td6_month_e == '巳')) {$td6_gongmang = "공망";}
if (($td7_month_e == '辰') || ($td7_month_e == '巳')) {$td7_gongmang = "공망";}
if (($td8_month_e == '辰') || ($td8_month_e == '巳')) {$td8_gongmang = "공망";}
if (($td9_month_e == '辰') || ($td9_month_e == '巳')) {$td9_gongmang = "공망";}
if (($td10_month_e == '辰') || ($td10_month_e == '巳')) {$td10_gongmang = "공망";}
if (($td11_month_e == '辰') || ($td11_month_e == '巳')) {$td11_gongmang = "공망";}
if (($td12_month_e == '辰') || ($td12_month_e == '巳')) {$td12_gongmang = "공망";}

break;
  
  case ("癸丑") : 
   
if (($td1_month_e == '寅') || ($td1_month_e == '卯')) {$td1_gongmang = "공망";}
if (($td2_month_e == '寅') || ($td2_month_e == '卯')) {$td2_gongmang = "공망";}
if (($td3_month_e == '寅') || ($td3_month_e == '卯')) {$td3_gongmang = "공망";}
if (($td4_month_e == '寅') || ($td4_month_e == '卯')) {$td4_gongmang = "공망";}
if (($td5_month_e == '寅') || ($td5_month_e == '卯')) {$td5_gongmang = "공망";}
if (($td6_month_e == '寅') || ($td6_month_e == '卯')) {$td6_gongmang = "공망";}
if (($td7_month_e == '寅') || ($td7_month_e == '卯')) {$td7_gongmang = "공망";}
if (($td8_month_e == '寅') || ($td8_month_e == '卯')) {$td8_gongmang = "공망";}
if (($td9_month_e == '寅') || ($td9_month_e == '卯')) {$td9_gongmang = "공망";}
if (($td10_month_e == '寅') || ($td10_month_e == '卯')) {$td10_gongmang = "공망";}
if (($td11_month_e == '寅') || ($td11_month_e == '卯')) {$td11_gongmang = "공망";}
if (($td12_month_e == '寅') || ($td12_month_e == '卯')) {$td12_gongmang = "공망";}

break;
  
  
  case ("癸亥") : 
   
if (($td1_month_e == '子') || ($td1_month_e == '丑')) {$td1_gongmang = "공망";}
if (($td2_month_e == '子') || ($td2_month_e == '丑')) {$td2_gongmang = "공망";}
if (($td3_month_e == '子') || ($td3_month_e == '丑')) {$td3_gongmang = "공망";}
if (($td4_month_e == '子') || ($td4_month_e == '丑')) {$td4_gongmang = "공망";}
if (($td5_month_e == '子') || ($td5_month_e == '丑')) {$td5_gongmang = "공망";}
if (($td6_month_e == '子') || ($td6_month_e == '丑')) {$td6_gongmang = "공망";}
if (($td7_month_e == '子') || ($td7_month_e == '丑')) {$td7_gongmang = "공망";}
if (($td8_month_e == '子') || ($td8_month_e == '丑')) {$td8_gongmang = "공망";}
if (($td9_month_e == '子') || ($td9_month_e == '丑')) {$td9_gongmang = "공망";}
if (($td10_month_e == '子') || ($td10_month_e == '丑')) {$td10_gongmang = "공망";}
if (($td11_month_e == '子') || ($td11_month_e == '丑')) {$td11_gongmang = "공망";}
if (($td12_month_e == '子') || ($td12_month_e == '丑')) {$td12_gongmang = "공망";}

break;









}


############################
if (!$td1_cduck) {$td1_cduck = '&nbsp;';}
if (!$td2_cduck) {$td2_cduck = '&nbsp;';}
if (!$td3_cduck) {$td3_cduck = '&nbsp;';}
if (!$td4_cduck) {$td4_cduck = '&nbsp;';}
if (!$td5_cduck) {$td5_cduck = '&nbsp;';}
if (!$td6_cduck) {$td6_cduck = '&nbsp;';}
if (!$td7_cduck) {$td7_cduck = '&nbsp;';}
if (!$td8_cduck) {$td8_cduck = '&nbsp;';}
if (!$td9_cduck) {$td9_cduck = '&nbsp;';}
if (!$td10_cduck) {$td10_cduck = '&nbsp;';}
if (!$td11_cduck) {$td11_cduck = '&nbsp;';}
if (!$td12_cduck) {$td12_cduck = '&nbsp;';}

if (!$td1_chap) {$td1_chap = '&nbsp;';}
if (!$td2_chap) {$td2_chap = '&nbsp;';}
if (!$td3_chap) {$td3_chap = '&nbsp;';}
if (!$td4_chap) {$td4_chap = '&nbsp;';}
if (!$td5_chap) {$td5_chap = '&nbsp;';}
if (!$td6_chap) {$td6_chap = '&nbsp;';}
if (!$td7_chap) {$td7_chap = '&nbsp;';}
if (!$td8_chap) {$td8_chap = '&nbsp;';}
if (!$td9_chap) {$td9_chap = '&nbsp;';}
if (!$td10_chap) {$td10_chap = '&nbsp;';}
if (!$td11_chap) {$td11_chap = '&nbsp;';}
if (!$td12_chap) {$td12_chap = '&nbsp;';}

if (!$td1_yangin) {$td1_yangin = '&nbsp;';}
if (!$td2_yangin) {$td2_yangin = '&nbsp;';}
if (!$td3_yangin) {$td3_yangin = '&nbsp;';}
if (!$td4_yangin) {$td4_yangin = '&nbsp;';}
if (!$td5_yangin) {$td5_yangin = '&nbsp;';}
if (!$td6_yangin) {$td6_yangin = '&nbsp;';}
if (!$td7_yangin) {$td7_yangin = '&nbsp;';}
if (!$td8_yangin) {$td8_yangin = '&nbsp;';}
if (!$td9_yangin) {$td9_yangin = '&nbsp;';}
if (!$td10_yangin) {$td10_yangin = '&nbsp;';}
if (!$td11_yangin) {$td11_yangin = '&nbsp;';}
if (!$td12_yangin) {$td12_yangin = '&nbsp;';}


if (!$td1_gongmang) {$td1_gongmang = '&nbsp;';}
if (!$td2_gongmang) {$td2_gongmang = '&nbsp;';}
if (!$td3_gongmang) {$td3_gongmang = '&nbsp;';}
if (!$td4_gongmang) {$td4_gongmang = '&nbsp;';}
if (!$td5_gongmang) {$td5_gongmang = '&nbsp;';}
if (!$td6_gongmang) {$td6_gongmang = '&nbsp;';}
if (!$td7_gongmang) {$td7_gongmang = '&nbsp;';}
if (!$td8_gongmang) {$td8_gongmang = '&nbsp;';}
if (!$td9_gongmang) {$td9_gongmang = '&nbsp;';}
if (!$td10_gongmang) {$td10_gongmang = '&nbsp;';}
if (!$td11_gongmang) {$td11_gongmang = '&nbsp;';}
if (!$td12_gongmang) {$td12_gongmang = '&nbsp;';}

?>
<table cellpadding="0" cellspacing="0">
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/1.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[1], $td_sipsin_m_e[1])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/2.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[2], $td_sipsin_m_e[2])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/3.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[3], $td_sipsin_m_e[3])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/4.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[4], $td_sipsin_m_e[4])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/5.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[5], $td_sipsin_m_e[5])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/6.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[6], $td_sipsin_m_e[6])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/7.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[7], $td_sipsin_m_e[7])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/8.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[8], $td_sipsin_m_e[8])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/9.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[9], $td_sipsin_m_e[9])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/10.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[10], $td_sipsin_m_e[10])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/11.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[11], $td_sipsin_m_e[11])?></tD>
	</tR>
	<tR>
		<tD style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/B2_img/month_img/12.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.gif'><BR><?S_epos2($td_sipsin_h2, $td_sipsin_m_h[12], $td_sipsin_m_e[12])?></tD>
	</tR>
</table>