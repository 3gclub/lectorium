<?php
function passwordGenerator($chars) {
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

  return substr(str_shuffle($data), 0, $chars);
}

echo passwordGenerator(10);
