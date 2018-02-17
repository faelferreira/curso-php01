<?php

include_once("conexao.php");

function listaCursos(){
	$con = conecta();
	$sql = "select * from tb_cursos order by nome;";

	$result = pg_query($sql);
	$cursos = pg_fetch_all($result);

	desconecta($con);
	return $cursos;
}
	function insereCurso(array $curso){

	$co = conecta();
	$sql = "insert into tb_cursos(nome,tipo,carga_horaria,requisitos) values('{$curso['nome']}','{$curso['tipo']}','{$curso['carga_horaria']}','{$curso['requisitos']}');";

	pg_query($sql);
	desconecta($con);
}
function listarCursoPorId($id){

	$con = conneca();
	$sql = "select * from tb_cursos where id= {$id};";

	$result = pg_query($sql);
	$cursos = pg_fetch_assoc($result);

	desonecta($con);
	return $cursos;
}
function lista_cursos(){
	$con = conecta();
	$sql = "SELECT * FROM tb_cursos";
    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);
    desconecta($con);
    return $found;
    }

    function lista_periodos(){
	$con = conecta();
	$sql = "SELECT * FROM tb_periodos";
    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);
    desconecta($con);
    return $found;
}