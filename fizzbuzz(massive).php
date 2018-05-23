<?php
function massivefizzbuzz($a) {
global $fizz, $buzz;
if ( $a % $fizz == 0 && $a % $buzz == 0) {
  return "FB ";
}elseif ( $a % $buzz == 0) {
  return "B ";
}elseif ( $a % $fizz == 0) {
  return "F ";
}else {
  return  "$a "; }
}
$file_handle = fopen ("C:/php/fizzbuzz.txt", "r+" );
while (!feof ($file_handle)){
	$s = fgets ($file_handle);
	$int = explode (" ", $s);
}
list ($fizz, $buzz, $len) = $int;
fclose ($file_handle);
$arr = range(1, $len);
print_r(array_map('massivefizzbuzz', $arr));
