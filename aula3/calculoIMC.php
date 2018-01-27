<?php

echo "<html>
<head>
	<title>Calculadora</title>
	
</head>

<body>
	<h2>Minha calculadora IMC</h2>
	<pre>
			<fieldset>";
	$nome = $_POST['nome'];
	$peso = (float)$_POST['peso'];
	$altura = (float)$_POST['altura'];	

	function imc($peso,$altura){

		$result = $peso / ($altura*2);
		
		if($result < 17){
			$msg = "Muito abaixo do peso";
		}else if($result >= 17 && $result <= 18.49){
			$msg = "Abaixo do peso";
		}else if($result >= 18.5 && $result <= 29.99){
			$msg = "Peso normal";
		}else if($result >= 30 && $result <= 34.99){
			$msg = "Obesidade 1";
		}else if($result >= 35 && $result <= 39.99){
			$msg = "Obesidade 2(Severa)";
		}else {
			$msg = "Obesidade 3 (morbita)";
		}
		return $msg;
	}
		echo "$nome: ".imc($peso,$altura);

echo"</fieldset>
		</form>
	</pre>
</body>
</html>";
?>