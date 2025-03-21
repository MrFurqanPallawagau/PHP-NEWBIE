<?php

goto a;

a:
echo "Hello World" . PHP_EOL;


echo "Hello A" . PHP_EOL;

$counter = 1;

$counter = 1;

while (true){
  echo "ini adalah for loop ke-$counter".PHP_EOL;
  $counter++;

  if($counter > 10){
    goto b;
  }
}

b:
echo "End Loop";