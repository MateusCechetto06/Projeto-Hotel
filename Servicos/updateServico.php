<?php 
 include('conexao.php');
 $id = $_POST ['id_servico'];
 $nome = $_POST ['nome'];
 $tipo = $_POST ['tipo'];
 $valor= $_POST ['valor'];



$sql = "Update servicos set 
id_servico=$id,
nome='$nome',
tipo='$tipo',
valor=$valor  where id_servico=$id";

$res = mysql_query($sql);

echo mysql_affected_rows(). "Alterados com sucesso";
?>