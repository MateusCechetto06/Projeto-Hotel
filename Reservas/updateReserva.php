<?php 
 include('conexao.php');
 $id = $_POST ['id_reserva'];
 $valor = $_POST ['valor'];
 $quarto = $_POST ['quarto'];
 $servico= $_POST ['servico'];
 $cliente = $_POST ['cliente'];
 $pagamento = $_POST ['pagamento'];

$sql = "Update reservas set 
id_reserva=$id,
valor_total=$valor,
id_quarto=$quarto,
id_servico=$servico,
ID_CLIENTE=$cliente,
flag_pagamento='$pagamento'  where id_reserva=$id";


$res = mysql_query($sql);

echo mysql_affected_rows(). "Alterados com sucesso";
?>