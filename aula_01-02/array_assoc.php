<?php  
	$pessoa =[
		'nome' => 'rafael',
		'sbrenome'=>'conceicao',
		'email' => 'faelferreira@'
	];
	print_r($pessoa);

	echo "<hr>";
	echo $pessoa['nome']."<br/>";
	echo $pessoa['sobrenome']."<br/>";
	echo $pessoa['email']."<br/>";

	foreach($pessoa as $key => $value){
		echo $key . '-->'.$value."<br/>";
		
	}
?>