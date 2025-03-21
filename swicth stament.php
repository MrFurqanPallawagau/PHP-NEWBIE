<?php

echo "Masukkan nilai Anda (A/B/C/D): ";
$nilai = trim(fgets(STDIN)); // Membaca input dari terminal

switch($nilai){
  case "A":
    echo "Anda Lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda Tidak lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin Anda salah jurusan" . PHP_EOL;
}


