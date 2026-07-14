<?php

function IsNullOrWhiteSpace($str) {
  return !isset($str) || trim($str) === '';
}

echo IsNullOrWhiteSpace(" ");
die();