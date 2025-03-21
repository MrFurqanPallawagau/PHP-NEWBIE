<?php

function sayHello(string $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "hello $finalName". PHP_EOL;
}

sayHello("Alfurqan", "strtoupper");
sayHello("Alfurqan", "strtolower");
sayHello("Eko",function (string $name): string{
  return strtoupper($name);
});
sayHello("Alfurqan",fn($name) => strtoupper($name));