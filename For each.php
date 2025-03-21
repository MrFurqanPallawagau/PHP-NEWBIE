<?php

$names = ["Eko", "Kurniawan", "Khannedy"];

for ($i = 0; $i < count($names);$i++){
  echo "Data ke $1 = $names[$i]". PHP_EOL;
}

foreach ($names as $name){
  echo "Data $name" . PHP_EOL;
}

$person = [
  "first_name" => "Eko",
  "middle_name" => "Kurniawan",
  "Last_name" => "Khaeneddy"
];

foreach ($person as $key => $value){
  echo "$key : $value". PHP_EOL;
}