#!/data/data/com.termux/files/usr/bin/php
<?php
$local_ver = "0.0.2";
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
system("chmod +x 1php.txt");
$g = "\e[92m";
$r = "\e[91m";
$y = "\e[93m";
$b = "\e[36m";
$empt = "   ";
$gr = "OOO";
$next_line = "\n";
for ($x=0; $x<1000000 ; $x++){
   $move = trim(fgets(STDIN));
   if ($move == "w"){
      goto exit_1:
   }
   system("clear");
   for ($i=0; $i<47; $i++){
      echo $empt;
   }
   echo $next_line;
   for ($i=0; $i<47; $i++){
      echo $empt;
   }
   echo $next_line;
   for ($i=0; $i<47; $i++){
      echo $empt;
   }
   echo $next_line;
   for ($i=0; $i<47; $i++){
      echo $empt;
   }
   echo $next_line;
   for ($i=0; $i<47; $i++){
      echo $empt;
   }
   echo $next_line;
   for ($i=0; $i<47; $i++){
       echo $empt;
   }
   echo $next_line;
   for ($i=0; $i<47; $i++){
      echo $empt;
   }
   echo $next_line;
   for ($i=0; $i<47; $i++){
      echo $gr;
   }
   echo $next_line;
}
exit_1:
echo $next_line;
echo $next_line;
echo $next_line;

