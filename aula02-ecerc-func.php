<?php

function numero($a){
	$numero ; 

	if($a % 2 ==0){
		$numero = "par";
		
	}else{
		$numero = "ïmpar";
	}

function maior($x,$y){

	if($x > $y){
		return $x;
	}else{
		return $y;
	}
}
function pessoa($pessoa){
	$maior;

	if($pessoa[1] > 18){
		$maior = "maior de idade";
	}else{
		$maior = "menor de idade";
	}
	return $maior;
}
function pessoa2($pessoa){
	
	if($pessoa[2] == true){
		$pessoa[3] = "pode dirigir";
	}else{
		$pessoa[3] = "Nao pode dirigir";
	}
	return $pessoa;
}
}
	
echo numero(4);
echo "<br/>";

echo maior(3,4);
echo "<br/>";

$pessoa =[
	'nome'=> 'rafael',
	'idade' = > 29,

];

echo pessoa($pessoa);
echo "<br/>";