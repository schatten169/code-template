<?php

function IsNullOrWhiteSpace($str) {
  return $str === null || preg_match("/^ *$/", $str) == true;
}

echo IsNullOrWhiteSpace(" ");
die();