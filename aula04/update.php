
<?php
require_once 'conexao.php';



$usuario = "ferreira";
$id = "4";


$con_string = "host ={$host} port={$port} dbname ={$dbname} user={$user} password={$pass}";
//var_dump($con_string);
$con = pg_connect($con_string);
//var_dump($con); 

$query = "update usuarios set usuario = '{$usuario}" where id = {$id};";
echo $query;


$result = pg_query($query);
var_dump($result);
