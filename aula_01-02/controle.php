<?php

$idade = 15;
$temHabilitacao = true;
  if($idade >=18 && $temHabilitacao ){
  	echo "Pode dirigir.";
  }else if($idade >= 18 && !$temHabilitacao ){
  	echo "Se habilitar.";
  }else{
  	echo "Habilitar.";
  }