<?php
include('conexao.php');
$id = $_GET['id_servico'];

$sql = "Delete from servicos where id_servico=".$id;
$res = mysql_query($sql);

echo mysql_affected_rows() ." Registro(s) Apagado(s)com sucesso.";
 
?>