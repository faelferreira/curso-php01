<?php
require_once 'conexao.php';



$usuario = "ferreira";
$senha = "456";

$con_string = "host ={$host} port={$port} dbname ={$dbname} user={$user} password={$pass}";
//var_dump($con_string);
$con = pg_connect($con_string);
//var_dump($con); 

$query = "INSERT INTO usuarios (usuario,senha)VALUES('{$usuario}','{$senha}');";
echo $query;


$result = pg_query($query);
var_dump($result);