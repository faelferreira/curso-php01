<php
	require_once("conexao.php");

function lista_periodos(){
	$con = conecta();
	$sql = "SELECT * FROM tb_periodos";
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