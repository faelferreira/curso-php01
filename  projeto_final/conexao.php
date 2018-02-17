<?php
$host = 'localhost';
$port = '5432';
$dbname = 'dexterescola';
$user = 'fael';
$pass = '123';

$con_string = "host = {$host} port={$port} dbname ={$dbname} user={$user} password={$pass} ";

function conecta(){

	global $con_string;
	return pg_connect($con_string);

}
function desconecta($con){
	pg_close($con);
}

function lista_turmas_cursos_periodos(){
	$con = conecta();
	$sql = <<< SQL
	SELECT 
		tb_turmas.id AS id, 
		tb_cursos.nome AS curso, 
		tb_periodos.descricao AS periodo,
		tb_turmas.instrutor_id AS instrutor
	FROM tb_turmas 
	INNER JOIN tb_cursos 
		ON tb_turmas.curso_id = tb_cursos.id 
	INNER JOIN tb_periodos 
		ON tb_turmas.periodo_id = tb_periodos.id
SQL;
	$result = pg_query($con, $sql);
    $found = pg_fetch_all($result);
    desconecta($con);
    return $found;
}