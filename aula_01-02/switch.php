<?php

$idade = 18;
switch ($idade){
	case ($idade > 18 && $idade <= 25):
	echo "Jovem";
	break;
	case ($idade > 13 && $idade <= 18):
	echo "Adolecente";
	break;
	case ($idade <= 13):
	echo "Crianca";
	break;
	default:
	echo "Não sei a idade";
}
