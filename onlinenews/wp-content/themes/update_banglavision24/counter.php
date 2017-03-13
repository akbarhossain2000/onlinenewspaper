<?php
//session_start();
$counter_name = "counter.txt";
//echo realpath($counter_name);
// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(is_home()){
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
}
}
$counterVal = str_pad($counterVal, 6, "0", STR_PAD_LEFT);
$chars = str_split($counterVal);

echo $chars[0]." ".$chars[1]." ".$chars[2]." ".$chars[3]." ".$chars[4]." ".$chars[5];
