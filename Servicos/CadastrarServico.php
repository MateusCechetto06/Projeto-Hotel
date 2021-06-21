<?php
include('conexao.php');
$nome=$_POST ['nome'];
$tipo=$_POST ['tipo'];
$valor=$_POST['valor'];
 
$sql = "Insert into servicos(nome,tipo,valor) 
             values('".$nome."',
				    '".$tipo."',
				       $valor)";            
					   
 $res = mysql_query($sql);
 if ($res){
	 echo"Cadastrado com sucesso";
 }
 else{
	 echo "Erro ao cadastrar";
 }
?>