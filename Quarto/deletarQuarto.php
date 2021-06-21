<?php
include('conexao.php');
$id = $_GET['id_quarto'];

$sql = "Delete from quarto where id_quarto=".$id;
$res = mysql_query($sql);

echo mysql_affected_rows() ." Registro(s) Apagado(s)com sucesso.";
 
?>