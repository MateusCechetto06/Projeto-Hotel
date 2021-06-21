<?php
include('conexao.php');
$id = $_GET['id_reserva'];

$sql = "Delete from reservas where id_reserva=".$id;
$res = mysql_query($sql);

echo mysql_affected_rows() ." Registro(s) Apagado(s)com sucesso.";
 
?>