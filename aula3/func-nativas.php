<?php
	echo "<pre>";
	var_damp(empty(0));//considera o valor vazio entao retorna true.
	var_damp(empty(1));

	$nome = '4Linux';

	if(!empty($nome)){
		echo $nome;
	}else{
		ech "Preencha o nome:";
	}
	echo "<hr>";

	var_dump(isset($idade));

	$pessoa = ['nome' => 'Fernando']

	var_dump(isset($pessoa[ídade]));//para verificar se avariavel existe

	echo "<hr>";

	$num ='1';
	var_dump(is_int($num));//para verificar o tipo da varavel
	echo "<hr>";

	$selecao = 'brasil';
	var_dump(isset($selecao));
	unset($selecao);// distroi a variavel
	var_dump(isset($selecao));
	echo "<hr>";


?>