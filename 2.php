#!/data/data/com.termux/files/usr/bin/php
<?php
$local_ver = "0.0.2";
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
for ($d = 1; $d <= 10000; $d++) { 
  echo "...................\n";
  sleep(0.5);
  echo "...\m";
  sleep(0.5);
  echo "....\n";
  sleep(0.5);
  echo ".....\n";
  sleep(0.5);
  echo ".............\n";
  sleep(0.5);
  echo "........\n";
  sleep(0.5);
}
echo "$red====================================>".$green."\n";
echo "$red=====================================>".$green."\n";
