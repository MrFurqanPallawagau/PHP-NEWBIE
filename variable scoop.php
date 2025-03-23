<?php

$name = "eko"; // Global Scope


function sayHello() 
{
  global $name; // global keyword
  echo "Hello $name" . PHP_EOL;

  echo $GLOBALS["name"] . PHP_EOL;
}

sayHello();