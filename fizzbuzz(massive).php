<?php
function massivefizzbuzz($z) {
global $fizz, $buzz;
if ( $z % $fizz == 0 && $z % $buzz == 0) {
  return "FB ";
}elseif ( $z % $buzz == 0) {
  return "B ";
}elseif ( $z % $fizz == 0) {
  return "F ";
}else {
  return  "$z "; }
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