<?php
function massivefizzbuzz($x) {
global $fizz, $buzz;
if ( $x % $fizz == 0 && $x % $buzz == 0) {
  return "FB ";
}elseif ( $x % $buzz == 0) {
  return "B ";
}elseif ( $x % $fizz == 0) {
  return "F ";
}else {
  return  "$x "; }
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