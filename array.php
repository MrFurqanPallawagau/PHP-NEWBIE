<?php

$values = array(10, 9 ,8, 7.5);
var_dump($values);

$names = ["Eko", "Kurniawan" , "Khannedy"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "joko";
var_dump($names);

var_dump(count($names));

$eko = array(
  "id" => "eko",
  "name" => "eko kurniawan",
  "age" => "30"
);

$budi = [
  "id" => "budi",
  "name" => "Budi Nugraha",
  "age" => 35,[
    "country" => "indonesia",
    "adress" => "parepare"
  ]
];
var_dump($budi);
