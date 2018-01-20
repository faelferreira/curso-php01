<?php

//Exibir o nome completo de cada pessoa;
	$pessoas = [
	'0'=>[
		'nome'=> 'rafael',
		'sobrenome'=> 'ferreira',
		'idade'=> 29,
		'peso'=> 85,],

	'1'=>[
		'nome'=> 'ana',
		'sobrenome'=> 'pereira',
		'idade'=> 22,
		'peso'=> 90,],

	'2'=>[
		'nome'=> 'endre',
		'sobrenome'=> 'silva',
		'idade'=> 30,
		'peso'=> 70,],

		];

		foreach($pessoas as $pessoa){
			echo "$pessoa[idade]<br/>";
			echo"<hr>";

		}

		foreach($pessoas as $pessoa){
			if($pessoa['idade'] >= 18){
			echo "$pessoa[nome]<br/>";
			echo "$pessoa[idade]<br/>";
			echo"<hr>";
		}
		}

		foreach($pessoas as $pessoa){
			if($pessoa['peso'] > 80){
				echo "$pessoa[nome] ";
				echo "$pessoa[sobrenome]<br/>";
				echo"<hr>";
			}
		}




	

// exxibir a idade de cada pessoa ;

// exibir o nome completo das pessoas maiores de idade;

//exibir o nome completo das pessoas com peso maior que 80kg;
?>