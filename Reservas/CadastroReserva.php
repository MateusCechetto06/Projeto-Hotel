<?php
include('conexao.php');
$valor=$_POST ['valor'];
$quarto=$_POST ['quarto'];
$servico=$_POST['servico'];
$cliente=$_POST['cliente'];
$pagamento=$_POST['pagamento'];
 
$sql = "Insert into reservas(valor_total,id_quarto,id_servico,ID_CLIENTE,flag_pagamento) 
             values(   $valor,
			           $quarto,
					   $servico,
					   $cliente,
				    '".$pagamento."')";            			   
 $res = mysql_query($sql);
 if ($res){
	 echo"Cadastrado com sucesso";
 }
 else{
	 echo "Erro ao cadastrar";
 }
?>