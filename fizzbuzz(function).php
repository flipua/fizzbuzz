<?php
function solutionFizzBuzz ($fizzbuzz, $buzz, $len) {
$i = 3;
while ($i < $len){
if ($i % $fizz == 0 && $i % $buzz == 0) {
  echo "FB ";
}elseif ($i % $buzz == 0) {
  echo "B ";
}elseif ($i % $fizz == 0) {
  echo "F ";
}else {
	echo  "$i "; 
}


$i++;}
echo "$i";
}
echo solutionFizzBuzz (3, 5, 18)
?>