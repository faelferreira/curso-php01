<?php
$y = 40;

for($x = 0;$x<=100;$x++){
	if($x == $y){
		echo "<br/><br/>Parou";
		break;
	}
	if($x % 10 == 0){
		echo "<br/><br/>continuou<br/>";
		continue;
	}
	if($x%2 == 0){
		echo "<br/>".$x."-par";	
	}
	if($x%2 != 0){
		echo "<br/>".$x."-impar";	
	}
	if($x%5 == 0){
		echo "<br/>".$x."-multiplo de 5";
	}
	
	
}