<?php
function noOdds($arr) {
    return array_filter($arr, function($even) {
      return !($even & 1);
    });
  }  
?>
