<?php
	echo "<pre>";

	$artilheiro = 'ronaldo';
	$gols = 9;

	$texto = 'O artilheiro do campeonato, %s tem %d gols';

	printf($texto,$artilheiro,$campeonato);
	echo "<hr>";

	$texto = 'ola mundo';
	echo str_replace('ola','tchau',$texto);
	$msg = 'olá';
	echo str_replace('olá', 'ola', $msg);
	echo "<br/>";

	$pessoa = ['nome' => 'maria','sexo'=> 'f'];
	$msg = "ola menino"



	echo "<hr>";

	$string = '    php   ';
	var_dump($string);
	var_dump(trim($string));
	echo "<hr>";


	$string = 'ola mundo';
	echo ucfirst($string);//primeira string em miusculo
	echo ucwords($string);
	echo lcfirst($string);
	echo "<hr>";

	$email = 'linux@linux.org';
	$dominio = strstr($email, '@');
	echo $dominio;
	echo΅"<br/>";
	$user = strstr(@email, '@',true);////(((((())))))
	echo $user;
	echo "<hr>";

	$string = 'ola mundo';
	echo strlen(trim($string));
	echo "<hr>";

	$string  = "0123456789";
	$procurar = "5";
	$pos = strpos($string, $procurar);
	var_dump($pos);
	echo "<hr>";

	$string = '0123456789';
	echo substr($string, 2);
	echo "<br/>";
	cho substr($string, 2, -3);
	echo "<br/>";
	$sqtd = substr($string, 2);
	echo substr($string, 2,-$qtd)
	echo "<hr>";

	$string  = 'Hoje eu Acordei Cedo';
	echo substr_replace($string, 'tarde', -5,-1);// troca a palavra
	echo "<hr>";

	$string = "ola mundo";
	echo strtoupper($string);
	echo strtolower($string);
	echo "<hr>";

	$string  = 'RAFAEL FERREIRA';
	echo ucwords(strtolower($string));
