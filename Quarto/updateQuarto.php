<?php 
 include('conexao.php');
 $id = $_POST ['id_quarto'];
 $numero = $_POST ['numero'];
 $tipo = $_POST ['tipo'];
 $valor= $_POST ['valor'];
 $status = $_POST ['status'];


$sql = "Update quarto set 
id_quarto=$id,
numero=$numero,
tipo='$tipo',
valor=$valor,
status_ocupado='$status'  where id_quarto=$id";


$res = mysql_query($sql);

echo mysql_affected_rows(). "Alterados com sucesso";
?>