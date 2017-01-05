<?php

//演習問題１
function multiiplication($num1, $num2){
	$Mul = $num1 * $num2;
	echo $Mul;
	echo '<br>';
}

multiiplication(12134, 34556);

//演習問題２
function average($num1, $num2){
	$ave =($num1 + $num2) / 2;

 if ($ave < 10) {
 	return 0 ;
 } else {
 	echo $ave ;
 }
}
 average(5244, 3244);

 //演習問題３
function shopping($pos, $cost1, $cost2){
	$rest = $pos - $cost1 - $cost2 ;
	return $rest;
}
 shopping(14582, 4581, 6781);

 echo'<br>';

//演習問題４
function large($num1, $num2){
	if ($num1 >= $num2) {
		return $num1;
	} else {
		return $num2;
	}
}
 echo large(3, 9);
?>

