<?php

require('pessoa.php');
echo "$nome $sobrenome";

echo "<br/>";

require_once('pessoa.php');
$nome = "Rafael";
echo "$nome $sobrenome";