<?php
	if(!empty($_POST)){
		$num1 = (int)$_POST['numero1'];
		$num2 = (int)$_POST['numero2'];
		

		function multiplicar($num1,$num2){
			$resultado = $num1 * $num2;
			
			return $resultado;
		}

		function dividir($num1,$num2){
			if($num1 == 0 && $num2 !=0){
				$resultado = "Nao é possivel dividir";
			}else {
				$resultado = $num1 / $num2;
			}
			return $resultado;
		}

		function somar($num1,$num2){
			$resultado = $num1 + $num2;
			
			return $resultado;

		}

		function subtrair($num1,$num2){
			if($num1 == 0 && $num2 !=0){
				$resultado = "nao é possivel subtrair";
			}else{
				$resultado = $num1 - $num2;	
			}
			
			return $resultado;
		}
		echo "multiplicacao: ".multiplicar($num1,$num2)."<br/>";
		echo "Divisao: ".dividir($num1,$num2)."<br/>";
		echo "Soma: ".somar($num1,$num2)."<br/>";
		echo "subtracao: ".subtrair($num1,$num2);
	}else{
		echo "Campo não pode ser vazio!";
	}
	?>