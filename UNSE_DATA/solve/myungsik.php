
<?

if ($solunar == 'solar') {$k_check = '양력';}else{$k_check = '음력';}
if (($youn == '1')&&($solunar == 'lunar')) {$kk_check = '윤';}
     elseif (($youn == '0')&&($solunar == 'lunar')) {$kk_check = '';}
     else  {$kk_check = '';}



//echo "$my_day_h";
//echo "$sex";

if ($my_day_h == '甲') {
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}

}


###########################################################################################


if ($my_day_h == '乙') {
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}
}


###########################################################################################

if ($my_day_h == '丙') {
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}


}

###########################################################################################

if ($my_day_h == '丁') {
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}

}

###########################################################################################

if ($my_day_h == '戊') {
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}

}

###########################################################################################

if ($my_day_h == '己') {
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}

}

###########################################################################################

if ($my_day_h == '庚') {
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}

}

###########################################################################################

if ($my_day_h == '辛') {
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}

}

###########################################################################################

if ($my_day_h == '壬') {
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}

}


###########################################################################################

if ($my_day_h == '癸') {
  if ($jijanggan_year10 == '계') {$jijanggan_year10_d = '비견';}
  if ($jijanggan_year10 == '임') {$jijanggan_year10_d = '겁재';}
  if ($jijanggan_year10 == '을') {$jijanggan_year10_d = '식신';}
  if ($jijanggan_year10 == '갑') {$jijanggan_year10_d = '상관';}
  if ($jijanggan_year10 == '정') {$jijanggan_year10_d = '편재';}
  if ($jijanggan_year10 == '병') {$jijanggan_year10_d = '정재';}
  if ($jijanggan_year10 == '기') {$jijanggan_year10_d = '편관';}
  if ($jijanggan_year10 == '무') {$jijanggan_year10_d = '정관';}
  if ($jijanggan_year10 == '신') {$jijanggan_year10_d = '편인';}
  if ($jijanggan_year10 == '경') {$jijanggan_year10_d = '정인';}
  if ($jijanggan_year10 == '') {$jijanggan_year10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_year20 == '계') {$jijanggan_year20_d = '비견';}
  if ($jijanggan_year20 == '임') {$jijanggan_year20_d = '겁재';}
  if ($jijanggan_year20 == '을') {$jijanggan_year20_d = '식신';}
  if ($jijanggan_year20 == '갑') {$jijanggan_year20_d = '상관';}
  if ($jijanggan_year20 == '정') {$jijanggan_year20_d = '편재';}
  if ($jijanggan_year20 == '병') {$jijanggan_year20_d = '정재';}
  if ($jijanggan_year20 == '기') {$jijanggan_year20_d = '편관';}
  if ($jijanggan_year20 == '무') {$jijanggan_year20_d = '정관';}
  if ($jijanggan_year20 == '신') {$jijanggan_year20_d = '편인';}
  if ($jijanggan_year20 == '경') {$jijanggan_year20_d = '정인';}
  if ($jijanggan_year20 == '') {$jijanggan_year20_d = '&nbsp;&nbsp;&nbsp;';}
  
  if ($jijanggan_year30 == '계') {$jijanggan_year30_d = '비견';}
  if ($jijanggan_year30 == '임') {$jijanggan_year30_d = '겁재';}
  if ($jijanggan_year30 == '을') {$jijanggan_year30_d = '식신';}
  if ($jijanggan_year30 == '갑') {$jijanggan_year30_d = '상관';}
  if ($jijanggan_year30 == '정') {$jijanggan_year30_d = '편재';}
  if ($jijanggan_year30 == '병') {$jijanggan_year30_d = '정재';}
  if ($jijanggan_year30 == '기') {$jijanggan_year30_d = '편관';}
  if ($jijanggan_year30 == '무') {$jijanggan_year30_d = '정관';}
  if ($jijanggan_year30 == '신') {$jijanggan_year30_d = '편인';}
  if ($jijanggan_year30 == '경') {$jijanggan_year30_d = '정인';}
  if ($jijanggan_year30 == '') {$jijanggan_year30_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month10 == '계') {$jijanggan_month10_d = '비견';}
  if ($jijanggan_month10 == '임') {$jijanggan_month10_d = '겁재';}
  if ($jijanggan_month10 == '을') {$jijanggan_month10_d = '식신';}
  if ($jijanggan_month10 == '갑') {$jijanggan_month10_d = '상관';}
  if ($jijanggan_month10 == '정') {$jijanggan_month10_d = '편재';}
  if ($jijanggan_month10 == '병') {$jijanggan_month10_d = '정재';}
  if ($jijanggan_month10 == '기') {$jijanggan_month10_d = '편관';}
  if ($jijanggan_month10 == '무') {$jijanggan_month10_d = '정관';}
  if ($jijanggan_month10 == '신') {$jijanggan_month10_d = '편인';}
  if ($jijanggan_month10 == '경') {$jijanggan_month10_d = '정인';}
  if ($jijanggan_month10 == '') {$jijanggan_month10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_month20 == '계') {$jijanggan_month20_d = '비견';}
  if ($jijanggan_month20 == '임') {$jijanggan_month20_d = '겁재';}
  if ($jijanggan_month20 == '을') {$jijanggan_month20_d = '식신';}
  if ($jijanggan_month20 == '갑') {$jijanggan_month20_d = '상관';}
  if ($jijanggan_month20 == '정') {$jijanggan_month20_d = '편재';}
  if ($jijanggan_month20 == '병') {$jijanggan_month20_d = '정재';}
  if ($jijanggan_month20 == '기') {$jijanggan_month20_d = '편관';}
  if ($jijanggan_month20 == '무') {$jijanggan_month20_d = '정관';}
  if ($jijanggan_month20 == '신') {$jijanggan_month20_d = '편인';}
  if ($jijanggan_month20 == '경') {$jijanggan_month20_d = '정인';}
  if ($jijanggan_month20 == '') {$jijanggan_month20_d = '&nbsp;&nbsp;&nbsp;';}
  
  if ($jijanggan_month30 == '계') {$jijanggan_month30_d = '비견';}
  if ($jijanggan_month30 == '임') {$jijanggan_month30_d = '겁재';}
  if ($jijanggan_month30 == '을') {$jijanggan_month30_d = '식신';}
  if ($jijanggan_month30 == '갑') {$jijanggan_month30_d = '상관';}
  if ($jijanggan_month30 == '정') {$jijanggan_month30_d = '편재';}
  if ($jijanggan_month30 == '병') {$jijanggan_month30_d = '정재';}
  if ($jijanggan_month30 == '기') {$jijanggan_month30_d = '편관';}
  if ($jijanggan_month30 == '무') {$jijanggan_month30_d = '정관';}
  if ($jijanggan_month30 == '신') {$jijanggan_month30_d = '편인';}
  if ($jijanggan_month30 == '경') {$jijanggan_month30_d = '정인';}
  if ($jijanggan_month30 == '') {$jijanggan_month30_d = '&nbsp;&nbsp;&nbsp;';}


  if ($jijanggan_day10 == '계') {$jijanggan_day10_d = '비견';}
  if ($jijanggan_day10 == '임') {$jijanggan_day10_d = '겁재';}
  if ($jijanggan_day10 == '을') {$jijanggan_day10_d = '식신';}
  if ($jijanggan_day10 == '갑') {$jijanggan_day10_d = '상관';}
  if ($jijanggan_day10 == '정') {$jijanggan_day10_d = '편재';}
  if ($jijanggan_day10 == '병') {$jijanggan_day10_d = '정재';}
  if ($jijanggan_day10 == '기') {$jijanggan_day10_d = '편관';}
  if ($jijanggan_day10 == '무') {$jijanggan_day10_d = '정관';}
  if ($jijanggan_day10 == '신') {$jijanggan_day10_d = '편인';}
  if ($jijanggan_day10 == '경') {$jijanggan_day10_d = '정인';}
  if ($jijanggan_day10 == '') {$jijanggan_day10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_day20 == '계') {$jijanggan_day20_d = '비견';}
  if ($jijanggan_day20 == '임') {$jijanggan_day20_d = '겁재';}
  if ($jijanggan_day20 == '을') {$jijanggan_day20_d = '식신';}
  if ($jijanggan_day20 == '갑') {$jijanggan_day20_d = '상관';}
  if ($jijanggan_day20 == '정') {$jijanggan_day20_d = '편재';}
  if ($jijanggan_day20 == '병') {$jijanggan_day20_d = '정재';}
  if ($jijanggan_day20 == '기') {$jijanggan_day20_d = '편관';}
  if ($jijanggan_day20 == '무') {$jijanggan_day20_d = '정관';}
  if ($jijanggan_day20 == '신') {$jijanggan_day20_d = '편인';}
  if ($jijanggan_day20 == '경') {$jijanggan_day20_d = '정인';}
  if ($jijanggan_day20 == '') {$jijanggan_day20_d = '&nbsp;&nbsp;&nbsp;';}
  
  if ($jijanggan_day30 == '계') {$jijanggan_day30_d = '비견';}
  if ($jijanggan_day30 == '임') {$jijanggan_day30_d = '겁재';}
  if ($jijanggan_day30 == '을') {$jijanggan_day30_d = '식신';}
  if ($jijanggan_day30 == '갑') {$jijanggan_day30_d = '상관';}
  if ($jijanggan_day30 == '정') {$jijanggan_day30_d = '편재';}
  if ($jijanggan_day30 == '병') {$jijanggan_day30_d = '정재';}
  if ($jijanggan_day30 == '기') {$jijanggan_day30_d = '편관';}
  if ($jijanggan_day30 == '무') {$jijanggan_day30_d = '정관';}
  if ($jijanggan_day30 == '신') {$jijanggan_day30_d = '편인';}
  if ($jijanggan_day30 == '경') {$jijanggan_day30_d = '정인';}
  if ($jijanggan_day30 == '') {$jijanggan_day30_d = '&nbsp;&nbsp;&nbsp;';}


  if ($jijanggan_hour10 == '계') {$jijanggan_hour10_d = '비견';}
  if ($jijanggan_hour10 == '임') {$jijanggan_hour10_d = '겁재';}
  if ($jijanggan_hour10 == '을') {$jijanggan_hour10_d = '식신';}
  if ($jijanggan_hour10 == '갑') {$jijanggan_hour10_d = '상관';}
  if ($jijanggan_hour10 == '정') {$jijanggan_hour10_d = '편재';}
  if ($jijanggan_hour10 == '병') {$jijanggan_hour10_d = '정재';}
  if ($jijanggan_hour10 == '기') {$jijanggan_hour10_d = '편관';}
  if ($jijanggan_hour10 == '무') {$jijanggan_hour10_d = '정관';}
  if ($jijanggan_hour10 == '신') {$jijanggan_hour10_d = '편인';}
  if ($jijanggan_hour10 == '경') {$jijanggan_hour10_d = '정인';}
  if ($jijanggan_hour10 == '') {$jijanggan_hour10_d = '&nbsp;&nbsp;&nbsp;';}

  if ($jijanggan_hour20 == '계') {$jijanggan_hour20_d = '비견';}
  if ($jijanggan_hour20 == '임') {$jijanggan_hour20_d = '겁재';}
  if ($jijanggan_hour20 == '을') {$jijanggan_hour20_d = '식신';}
  if ($jijanggan_hour20 == '갑') {$jijanggan_hour20_d = '상관';}
  if ($jijanggan_hour20 == '정') {$jijanggan_hour20_d = '편재';}
  if ($jijanggan_hour20 == '병') {$jijanggan_hour20_d = '정재';}
  if ($jijanggan_hour20 == '기') {$jijanggan_hour20_d = '편관';}
  if ($jijanggan_hour20 == '무') {$jijanggan_hour20_d = '정관';}
  if ($jijanggan_hour20 == '신') {$jijanggan_hour20_d = '편인';}
  if ($jijanggan_hour20 == '경') {$jijanggan_hour20_d = '정인';}
  if ($jijanggan_hour20 == '') {$jijanggan_hour20_d = '&nbsp;&nbsp;&nbsp;';}
  
  if ($jijanggan_hour30 == '계') {$jijanggan_hour30_d = '비견';}
  if ($jijanggan_hour30 == '임') {$jijanggan_hour30_d = '겁재';}
  if ($jijanggan_hour30 == '을') {$jijanggan_hour30_d = '식신';}
  if ($jijanggan_hour30 == '갑') {$jijanggan_hour30_d = '상관';}
  if ($jijanggan_hour30 == '정') {$jijanggan_hour30_d = '편재';}
  if ($jijanggan_hour30 == '병') {$jijanggan_hour30_d = '정재';}
  if ($jijanggan_hour30 == '기') {$jijanggan_hour30_d = '편관';}
  if ($jijanggan_hour30 == '무') {$jijanggan_hour30_d = '정관';}
  if ($jijanggan_hour30 == '신') {$jijanggan_hour30_d = '편인';}
  if ($jijanggan_hour30 == '경') {$jijanggan_hour30_d = '정인';}
  if ($jijanggan_hour30 == '') {$jijanggan_hour30_d = '&nbsp;&nbsp;&nbsp;';}



}



###########################################################################################

?>

						<table width=512 height=30 border=0 cellspacing=1 cellpadding=5 align=center bgcolor=CCCCCC>
                                                  <tr><td align=center bgcolor=f8f8f8><b>이름 <font color=CC0000>:::</font> </b><?=$user_name;?></td><td align=center bgcolor=FFFFFF><b>생년월일 <font color=CC0000>:::</font> </b><?=$k_check;?>  <?=$year;?> 년 <?=$kk_check;?> <?=$month;?> 월 <?=$day;?> 일 <?=$hour;?> 시 <?=$min;?> 분생 (<?=$sex;?>)</td></tr>
                                                </table>
                                               
                                                <br>

						<table width=512 border=0 cellspacing=1 cellpadding=3 align=center bgcolor=CCCCCC>
						
						<tr align=center> 
							<td bgcolor=C8C8C8 width=70>사주</td>
							<td bgcolor=F8F8F8 width=110>시주</td>
							<td bgcolor=F8F8F8 width=110>일주</td>
							<td bgcolor=F8F8F8 width=110>월주</td>
							<td bgcolor=F8F8F8 width=110>년주</td>
							
						</tr>

						<tr align=center> 
							<td bgcolor=F8F8F8>천간</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$my_hour_hh;?></td><td bgcolor=dddddd><?=$my_oheng_hour_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$sin_hour_h;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$my_day_hh;?></td><td bgcolor=dddddd><?=$my_oheng_day_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd>日元</td></tr>
							  </table>
							</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$my_month_hh;?></td><td bgcolor=dddddd><?=$my_oheng_month_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$sin_month_h;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$my_year_hh;?></td><td bgcolor=dddddd><?=$my_oheng_year_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$sin_year_h;?></td></tr>
							  </table>
							</td>
							
						</tr>
						
						<tr align=center> 
							
							<td bgcolor=F8F8F8>지지</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$my_hour_ee;?></td><td bgcolor=dddddd><?=$my_oheng_hour_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$sin_hour_e;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$my_day_ee;?></td><td bgcolor=dddddd><?=$my_oheng_day_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$sin_day_e;?></td></tr>
							  </table>
							</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$my_month_ee;?></td><td bgcolor=dddddd><?=$my_oheng_month_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$sin_month_e;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$my_year_ee;?></td><td bgcolor=dddddd><?=$my_oheng_year_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$sin_year_e;?></td></tr>
							  </table>
							</td>
							
						</tr>
<?if($urlinfo != "saju" && $sel != "13"){?>						
						<tr align=center> 
							<td bgcolor=F8F8F8>지장간</td>
							<td bgcolor=FFFFFF><?=$jijanggan_hour1;?> <?=$jijanggan_hour2;?> <?=$jijanggan_hour3;?><br><?=$jijanggan_hour10_d;?> <?=$jijanggan_hour20_d;?> <?=$jijanggan_hour30_d;?></td>
							<td bgcolor=FFFFFF><?=$jijanggan_day1;?> <?=$jijanggan_day2;?> <?=$jijanggan_day3;?><br><?=$jijanggan_day10_d;?> <?=$jijanggan_day20_d;?> <?=$jijanggan_day30_d;?></td>
							<td bgcolor=FFFFFF><?=$jijanggan_month1;?> <?=$jijanggan_month2;?> <?=$jijanggan_month3;?><br><?=$jijanggan_month10_d;?> <?=$jijanggan_month20_d;?> <?=$jijanggan_month30_d;?></td>
							<td bgcolor=FFFFFF><?=$jijanggan_year1;?> <?=$jijanggan_year2;?> <?=$jijanggan_year3;?><br><?=$jijanggan_year10_d;?> <?=$jijanggan_year20_d;?> <?=$jijanggan_year30_d;?></td>
							
						</tr>

						
						
						<tr align=center> 
							<td bgcolor=F8F8F8>십이운성</td>
							<td bgcolor=FFFFFF><?=$star_hour;?></td>
							<td bgcolor=FFFFFF><?=$star_day;?></td>
							<td bgcolor=FFFFFF><?=$star_month;?></td>
							<td bgcolor=FFFFFF><?=$star_year;?></td>
							
						</tr>
<?}?>
						<tr align=center> 
							<td bgcolor=F8F8F8>신살</td>
							<td bgcolor=FFFFFF valign=top><?=$sal_hour;?> <?=$cheneul_h_title;?> <?=$chenbok_h_title;?> <?=$chenguan_h_title;?> <?=$chenju_h_title;?> <?=$wolduk_h_title;?> <?=$taeguk_h_title;?> <?=$guangui_h_title;?> <?=$munchang_h_title;?> <?=$mungok_h_title;?> <?=$amrok_h_title;?> <?=$hakdang_h_title;?> <?=$chene_h_title;?> <?=$guegangsal_h_title;?> <?=$bekhosal_h_title;?> <?=$wonjinsal_h_title;?> <?=$guimunsal_h_title;?> <?=$hongsal_h_title;?> <?=$yanginsal_h_title;?> <?=$gongmangsal_h_title;?> <?=$sangmunsal_h_title;?> <?=$suoksal_h_title;?> <?=$gepgaksal_h_title;?> 
							</td>
							<td bgcolor=FFFFFF valign=top><?=$sal_day;?> <?=$cheneul_d_title;?> <?=$chenbok_d_title;?> <?=$chenguan_d_title;?> <?=$chenju_d_title;?> <?=$wolduk_d_title;?> <?=$taeguk_d_title;?> <?=$guangui_d_title;?> <?=$munchang_d_title;?> <?=$mungok_d_title;?> <?=$amrok_d_title;?> <?=$gumrok_d_title;?> <?=$hakdang_d_title;?> <?=$chene_d_title;?> <?=$guegangsal_d_title;?> <?=$bekhosal_d_title;?> <?=$wonjinsal_d_title;?> <?=$guimunsal_d_title;?> <?=$hongsal_d_title;?> <?=$yanginsal_d_title;?> <?=$gongmangsal_d_title;?> <?=$sangmunsal_d_title;?> <?=$suoksal_d_title;?> <?=$gepgaksal_d_title;?> 
							</td>
							<td bgcolor=FFFFFF valign=top><?=$sal_month;?> <?=$cheneul_m_title;?> <?=$chenbok_m_title;?> <?=$chenguan_m_title;?> <?=$chenju_m_title;?> <?=$wolduk_m_title;?> <?=$taeguk_m_title;?> <?=$guangui_m_title;?> <?=$munchang_m_title;?> <?=$mungok_m_title;?> <?=$amrok_m_title;?> <?=$gumrok_m_title;?> <?=$hakdang_m_title;?> <?=$chene_m_title;?> <?=$guegangsal_m_title;?> <?=$bekhosal_m_title;?> <?=$wonjinsal_m_title;?> <?=$guimunsal_m_title;?> <?=$hongsal_m_title;?> <?=$yanginsal_m_title;?> <?=$gongmangsal_m_title;?> <?=$sangmunsal_m_title;?> <?=$suoksal_m_title;?> <?=$gepgaksal_m_title;?> <?=$gosinsal_m_title;?> <?=$guasuksal_m_title;?>
							</td>
							<td bgcolor=FFFFFF valign=top><?=$sal_year;?> <?=$cheneul_y_title;?> <?=$chenbok_y_title;?> <?=$chenguan_y_title;?> <?=$chenju_y_title;?> <?=$wolduk_y_title;?> <?=$taeguk_y_title;?> <?=$guangui_y_title;?> <?=$munchang_y_title;?> <?=$mungok_y_title;?> <?=$amrok_y_title;?> <?=$gumrok_y_title;?> <?=$hakdang_y_title;?> <?=$chene_y_title;?> <?=$guegangsal_y_title;?>  <?=$bekhosal_y_title;?> <?=$wonjinsal_y_title;?> <?=$guimunsal_y_title;?> <?=$hongsal_y_title;?> <?=$yanginsal_y_title;?> <?=$gongmangsal_y_title;?> <?=$sangmunsal_y_title;?> <?=$suoksal_y_title;?> <?=$gepgaksal_y_title;?> 
							</td>
							
						</tr>
						
<?if($urlinfo == "saju" && $sel == "13"){?>
						<tr align=center> 
							<td bgcolor=FFBEE2>육친</td>
							
							<td bgcolor=F4E0EB>자식</td>
                					<td bgcolor=F4E0EB>부부</td>
							<td bgcolor=F4E0EB>부모/형제</td>
							<td bgcolor=F4E0EB>조상</td>
						</tr>


						<tr align=center> 
							<td bgcolor=AFCCCE>년령</td>
							
							<td bgcolor=DCE3E3>말년</td>
                					<td bgcolor=DCE3E3>중년</td>
							<td bgcolor=DCE3E3>장년</td>
							<td bgcolor=DCE3E3>초년</td>
						</tr>

						<tr align=center> 
							<td bgcolor=B3E5FF>신체</td>
							
							<td bgcolor=E8F2F7 colspan=2>하체</td>
                					<td bgcolor=E8F2F7 colspan=2>상체</td>
                				</tr>
						
						<tr align=center> 
							<td bgcolor=FFD7B2>내외</td>
							
							<td bgcolor=F5EBE2 colspan=2>집안일</td>
                					<td bgcolor=F5EBE2 colspan=2>바깥일</td>
                				</tr>
<?}?>
						</table>
<?
if(($urlinfo == "gunghap" && ($sel == "1" || $sel == "6")) || ($urlinfo == "selectDay" && $sel == "1")){

if ($your_solunar == 'solar') {$your_k = '양력';}else{$your_k = '음력';}
if (($your_youn == '1')&&($your_solunar == 'lunar')) {$your_kk = '윤';}
     elseif (($your_youn == '0')&&($your_solunar == 'lunar')) {$your_kk = '';}
     else  {$your_kk = '';}
if ($sex == '남') {$your_sex = '여';}else{$your_sex = '남';}
?>

<br>
						<table width=512 height=30 border=0 cellspacing=1 cellpadding=5 align=center bgcolor=CCCCCC>
                                                  <tr><td align=center bgcolor=eecccc><b>상대방이름 <font color=CC0000>:::</font> </b><?=$your_user_name;?></td><td align=center bgcolor=FFFFFF><b>생년월일 <font color=CC0000>:::</font> </b><?=$your_k;?>  <?=$your_year;?> 년 <?=$your_kk;?> <?=$your_month;?> 월 <?=$your_day;?> 일 <?=$your_hour;?> 시 <?=$your_min;?> 분생 (<?=$your_sex;?>)</td></tr>
                                                </table>
                                               
                                                <br>

						<table width=512 border=0 cellspacing=1 cellpadding=3 align=center bgcolor=CCCCCC>
						
						<tr align=center> 
							<td bgcolor=ffbbbb width=70>사주</td>
							<td bgcolor=eecccc width=110>시주</td>
							<td bgcolor=eecccc width=110>일주</td>
							<td bgcolor=eecccc width=110>월주</td>
							<td bgcolor=eecccc width=110>년주</td>
							
						</tr>

						<tr align=center> 
							<td bgcolor=eecccc>천간</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_hour_hh;?></td><td bgcolor=dddddd><?=$your_oheng_hour_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$your_sin_hour_h;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_day_hh;?></td><td bgcolor=dddddd><?=$your_oheng_day_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd>日元</td></tr>
							  </table>
							</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_month_hh;?></td><td bgcolor=dddddd><?=$your_oheng_month_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$your_sin_month_h;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_year_hh;?></td><td bgcolor=dddddd><?=$your_oheng_year_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$your_sin_year_h;?></td></tr>
							  </table>
							</td>
							
						</tr>
						
						<tr align=center> 
							
							<td bgcolor=eecccc>지지</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_hour_ee;?></td><td bgcolor=dddddd><?=$your_oheng_hour_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$your_sin_hour_e;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_day_ee;?></td><td bgcolor=dddddd><?=$your_oheng_day_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$your_sin_day_e;?></td></tr>
							  </table>
							</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_month_ee;?></td><td bgcolor=dddddd><?=$your_oheng_month_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$your_sin_month_e;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_year_ee;?></td><td bgcolor=dddddd><?=$your_oheng_year_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$your_sin_year_e;?></td></tr>
							  </table>
							</td>
							
						</tr>
						
						<tr align=center> 
							<td bgcolor=eecccc>지장간</td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_jijanggan_hour1;?> <?=$your_jijanggan_hour2;?> <?=$your_jijanggan_hour3;?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_jijanggan_day1;?> <?=$your_jijanggan_day2;?> <?=$your_jijanggan_day3;?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_jijanggan_month1;?> <?=$your_jijanggan_month2;?> <?=$your_jijanggan_month3;?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_jijanggan_year1;?> <?=$your_jijanggan_year2;?> <?=$your_jijanggan_year3;?></font></td>
							
						</tr>
						
						<tr align=center> 
							<td bgcolor=eecccc>십이운성</td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_star_hour;?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_star_day;?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_star_month;?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_star_year;?></font></td>
							
						</tr>
						
						<tr align=center> 
							<td bgcolor=eecccc>십이신살</td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_sal_hour;?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_sal_day;?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_sal_month;?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_sal_year;?></font></td>
							
						</tr>
						
						</table>

<?}?>