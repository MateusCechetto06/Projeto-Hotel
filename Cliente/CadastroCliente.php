<?php
include('conexao.php');
$nome=$_POST ['nome'];
$cpf=$_POST ['cpf'];
$sexo=$_POST ['sexo'];
$telefone=$_POST['telefone'];
$endereco=$_POST ['endereco'];
$data_nascimento=$_POST ['data_nascimento'];
 
$sql = "Insert into cliente(nome,cpf,sexo,telefone,endereco,data_nascimento) 
             values('".$nome."',
				    '".$cpf."',
					'".$sexo."',
					   $telefone,
					'".$endereco."',
				    '".$data_nascimento."')";            
			         				 
 $res = mysql_query($sql);
 if ($res){
	 echo"Cadastrado com sucesso";
 }
 else{
	 echo "Erro ao cadastrar";
 }
?>