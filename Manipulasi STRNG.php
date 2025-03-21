<?php

$name = "Alfurqan Pallawagau";

echo "name : ". $name . PHP_EOL;
echo "Value : ". 100 .PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

$nama = "Eko";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
//parsing
echo "Hello $nama, Selamat Belajar" . PHP_EOL;
//curly brace
echo "Hello {$nama}\n ADIOS, Selamat Belajar" . PHP_EOL;
