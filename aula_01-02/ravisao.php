<?php
	$nome = "rafael";
	$idade =  29;
	$altura = 1.70;
	$lista = array("a","b","c" );
	$estudando = true;
	$pessoa = null;
	var_dump($nome,$idade,$altura,$lista,$estudando,$pessoa);
	echo "<br/><br/>";

	$nome = (String)"rafael";
	$idade = (int)29;
	$altura = (float)1.70;
	$lista = array("a","b","c" );
	$estudando = (boolean)true;
	$pessoa = null;

	var_dump($nome,$idade,$altura,$lista,$estudando,$pessoa);
	echo "<br/><br/>";

	$nome = "rafael";
	$idade =  29;
	$altura = 1.70;
	$lista = array("a","b","c" );
	$estudando = true;
	$pessoa = null;

	var_dump($nome,$idade,$altura,$lista,$estudando,$pessoa);
	echo "<br/><br/>";

	$tipo="carro";
	$$tipo = 'camaro';
	echo $carro;
	echo "<br/><br/>";

	define ("EMPOSTO",1.75 );
	echo "EMPOSTO<BR/<br/><br/>";

?>