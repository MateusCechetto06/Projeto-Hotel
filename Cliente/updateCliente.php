<?php 
 include('conexao.php');
 $id = $_POST ['id_cliente'];
 $nome = $_POST ['nome'];
 $cpf = $_POST ['cpf'];
 $sexo= $_POST ['sexo'];
 $telefone = $_POST ['telefone'];
 $endereco = $_POST ['endereco'];
 $data_nascimento = $_POST ['data_nascimento'];


$sql = "Update cliente set 
id_cliente=$id,
nome='$nome',
cpf='$cpf',
sexo='$sexo',
telefone=$telefone,
endereco='$endereco',
data_nascimento='$data_nascimento'  where Id_cliente=$id";


$res = mysql_query($sql);

echo mysql_affected_rows(). "Alterados com sucesso";
?>