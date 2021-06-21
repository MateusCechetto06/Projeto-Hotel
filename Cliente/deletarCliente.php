<?php
include('conexao.php');
$id = $_GET['id_cliente'];

$sql = "Delete from cliente where id_cliente=".$id;
$res = mysql_query($sql);

echo mysql_affected_rows() ." Registro(s) Apagado(s) com sucesso.";
 
?>