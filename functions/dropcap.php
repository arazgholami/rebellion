<?php

function rtlparags($content) {

  if(is_single() || is_home()){
    $content = str_replace('<p>', '<p dir="auto">', $content);
    $first = mb_substr($content, 0, 15);
    $first = mb_substr($first,-1);

    switch ($first) {
      case "ا":
          $first="الف";
          break;
      case "ج":
          $first="جیم";
          break;
      case "د":
          $first="دال";
          break;
      case "ذال":
          $first="ذال";
      case "س":
          $first="سین";
          break;
      case "ش":
          $first="شین";
          break;
      case "ص":
          $first="صاد";
          break;
      case "۱":
          $first="ضاد";
          break;
      case "ط":
          $first="طا";
          break;
      case "ظ":
          $first="ظا";
          break;
      case "ع":
          $first="عین";
          break;
      case "غ":
          $first="غین";
          break;
      case "ف":
          $first="کاف";
          break;
      case "ق":
          $first="قاف";
          break;
      case "گ":
          $first="گاف";
          break;
      case "ل":
          $first="لام";
          break;
      case "م":
          $first="میم";
          break;
      case "ن":
          $first="نون";
          break;
      case "و":
          $first="واو";
          break;
      default:
          $first=$first;
    }

    if(!isRTL($first)){
      $first= "<span class='firstletter'>" . $first . "</span>";
      $last = mb_substr($content, 15);
      $last = '<p dir="auto">' . $last;
    }
    else{
      $first= "<span class='firstletter'>" . $first . "</span>";
      $last = $content;
    }
    return $first . $last;
  }
  else{
    $content = str_replace('<p>', '<p dir="auto">', $content);
    return $content;
  }

}
add_filter('the_content', 'rtlparags');