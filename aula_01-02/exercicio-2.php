<?php
echo "<hr>";
echo "############       while     #####################";
$x = 1;
while($x <= 100){
	if($x%2 == 0){
		echo "<br/>".$x."-par";	
	}
	if($x%2 != 0){
		echo "<br/>".$x."-impar";	
	}
	if($x%5 == 0){
		echo "<br/>".$x."-multiplo de 5";
	}
	$x++;
}
echo "<hr>";
echo "############    do while     #####################";
$x = 0;
do{
	if($x%2 == 0){
		echo "<br/>".$x."-par";	
	}
	if($x%2 != 0){
		echo "<br/>".$x."-impar";	
	}
	if($x%5 == 0){
		echo "<br/>".$x."-multiplo de 5";
	}
	$x++;
}while($x <= 100);
echo "<hr>";
echo "################   for   #########################";
for($x = 0;$x<=100;$x++){
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

