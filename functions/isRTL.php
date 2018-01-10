<?php


function isRTL($input){
        $input=substr($input, 0, 1);
        if (preg_match('/[^A-Za-z0-9]/', $input)) {
          return true;
      }
      else{
          return false;
        }
}
