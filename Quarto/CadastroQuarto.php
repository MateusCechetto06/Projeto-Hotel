<?php
include('conexao.php');
$numero=$_POST ['numero'];
$tipo=$_POST ['tipo'];
$valor=$_POST['valor'];
$status=$_POST ['status'];
 
$sql = "Insert into quarto(numero,tipo,valor,status_ocupado) 
             values(   $numero,
				    '".$tipo."',
					   $valor,
				    '".$status."')";            
			         				 
 $res = mysql_query($sql);
 if ($res){
	 echo"Cadastrado com sucesso";
 }
 else{
	 echo "Erro ao cadastrar";
 }
?>