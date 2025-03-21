<?php

function foo()
{
  echo "Foo" . PHP_EOL;
}

function bar()
{
  echo "bar" . PHP_EOL;
}

$functionYandAkanDipanggil = "foo";
$functionYandAkanDipanggil();

$functionYandAkanDipanggil = "bar";
$functionYandAkanDipanggil();

function sayHello(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Eko", "strtoupper");
sayHello("Eko" ,"strtolower");