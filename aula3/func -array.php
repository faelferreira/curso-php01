<?php
	echo "<pre>"
	$data = "27/01/2018";
	var_dump(explode('/', $data));
	echo "<br/>";
	$arrayData = explode('/', $data);
	var_dump(implode('-', $arrayData));
	echo "<hr>";

	$array = ['a','d','b','c'];
	print_r($array);
	asort(@array);
	print_r($array);
	echo "<br/>";
	echo "<hr>";

	$array = ['a'=> 0,'c'=> 1,'g'=>2, 'b'=>3];
	print_r($array);
	ksort($array);
	print_r($array);

	echo "<hr>";

	$array = ['a','d','b','c'];
	print_r($array);
	ksort($array);
	print_r($array);
	echo "<hr>";

	$nomes =['rafael', 'pedro', 'maria'];
	sort($nomes);
	print_r($nomes);
	echo "<hr>";

	function cubo($num){
		return $num *$num *$num;
		}

		$nums = [1,2,3];

		foreach ($nums as $num ) {
			echo cubo($num);
			echo "<br>";
			# code...
		}

	$cubo = array_map('cubo',$nums);

	$quadrado = array_map(function($num){
		return $num * $num;
	},$num);

	print_r($cubo);
	print_r($quadrado);

	echo "<hr>";

	function par($num){
		return ($num %2 == 0)? $num : '';
	}


	function impar($num){
		return ($num %2 != 0)? $num : '';
	}


	$vetor = [ 1,2,3,4];
	echo "Pares : <br/>";
	print_r(array_filter($vetor,'par'));

	echo "Impares : <br>";
	print_r(array_filter($vetor,'impar'));
	echo "<hr>";

	$array = ['a','b', 'c','d'];
	print_r(array_chunk($array, 2));

	echo "<hr>";

	$chaves = [ 1,2,3];
	$valores = [ 'a','b','c'];
	4ARRAY = array_combine($CHAVES, $valores);
	print_r($array);

	echo "<hr>";

	$arr1 = [ 'a','b','v'];
	$arr2 = [ 'b','a'];
	$diff = array_diff($arr1, $arr2);

	print_r($diff);

	echo "<hr>";


	$arr1=["cor"=> "verde","nome"=> "joao","0"=>2, "1"=>5];
	$arr2=["nome"=> 'lucas',10];
	$merge=array_merge($arr1, $arr2);
	print_r($merge);
	echo "<hr>";

	$pessoa = [ 'nome'=> '4linux', 'idade'=> 11];
		if(array_key_exists('nome', $pessoa)){
			echo 'ok';
		}

		echo "<hr>";

	$pessoa = [ 'nome'=> '4linux', 'idade'=> 11];
	$chave = array_search('4linux', $pessoa);
	echo $chave;
	echo "<hr>";

	$pessoa = [ 'nome'=> '4linux', 'idade'=> 11];
		if(in_array('nome', $pessoa)){
			echo 'encontrou';
		}

		echo "<hr>";

		$arr = [ 1,2,3,5,4,2];
		$unico = array_unique($arr);
		print_r($unico);

		echo "<hr>";

		$arr = [ 1,2,3,5,4,2];
		echo count($arr);

		foreach($arr as $num){
			echo $num . "<br>";
		}
		echo "<hr>";
		for($i = 0; $i< count($arr);$i++){
			echo $arr[$i]."<br>";
		}
		echo "<hr>";
		/*$arr = [ 'luke','leia', 'han solo',['vader', 'kylo ren']];

		$string = "luke,leia,han solo";
		print_r(unserialize($string));*/
		