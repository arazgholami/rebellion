<?php

  //convert date to Persan
  function toRTL($input){

      $input = explode(",",$input);
      $w = $input[0];
      $d = $input[1];
      $m = $input[2];
      $y = $input[3];

      $en=array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
      $pn=array("۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹");

      $ew=array("Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
      $pw=array("شنبه", "یک‌شنبه", "دوشنبه", "سه‌شنبه", "چهارشنبه", "پنج‌شنبه", "جمعه");


      $em=array("01", "02", "03", "04", "05", "06", "07", "08", "09",  "10",  "11",  "12");
      $pm=array("ژانویه", "فوریه", "مارس", "آوریل", "مه", "ژوئن", "ژوئیه", "اوت", "سپتامبر", "اکتبر", "نوامبر", "دسامبر");


      $w = str_replace($ew,$pw,$w);
      $d = str_replace($en,$pn,$d);
      $m = str_replace($em,$pm,$m);
      $y = str_replace($en,$pn,$y);

      echo $w . "، " . $d . " " . $m . " " . $y;
  }

    function virgool(){
       if(isRTL(get_the_title())) return "، ";
       else return ", ";
    }