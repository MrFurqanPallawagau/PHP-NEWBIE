<?php

$first = [
  "first_name" => "Eko"
];

$last = [
  "First_name" => "Budi",
  "Last_name" => "Khannedy"
];

$full = $first + $last;
var_dump($full);

$A = [
  "First_name" => "Eko",
  "Last_name" => "Khannedy"
];

$B = [
  "First_name" => "Eko",
  "Last_name" => "Khannedy"
];
//Equality == true jika a dan b memiliki key value sama
var_dump($A == $B);
//Identity === true jika $a dan $b memiliki key-value sama dan posisi sama
var_dump($A === $B);