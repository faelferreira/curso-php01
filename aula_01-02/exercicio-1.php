<?php

$aluno = "rafael";
$nota = 5;
$frequencia = 9;

if($nota >= 7 && $frequencia >= 8){
	echo "Aluno ".$aluno ." aprovado!";

} else if($nota >= 5 && $frequencia >= 8){
	echo "Aluno ".$aluno ." recuperacão!";

} else if($nota < 5 || $frequencia < 8){
	echo "Aluno ".$aluno ." reprovado!";
}

echo "<br/>";

switch (true){
	case ($nota >= 7 && $frequencia >= 8):
		echo "Aluno ".$aluno ." aprovado!";
	break;
	case ($nota >= 5 && $frequencia >= 8):
		echo "Aluno ".$aluno ." recuperacão!";
	break;
	case ($nota < 5 || $frequencia < 8):
		echo "Aluno ".$aluno ." reprovado!";
	break;
	default:
 		# code...
 		break;

}