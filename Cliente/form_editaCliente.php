<?php
 include('conexao.php');
 $cliente = $_GET['id_cliente'];
 $sql = "Select * from cliente where
 Id_cliente=$cliente";
 
 $res =mysql_query($sql);
 While ($linha = mysql_fetch_array($res)){ ?>
	<table border='2' align='center'>
	<form method='post' action='updateCliente.php'>
	    <input type="hidden" name="id_cliente" value="<?php echo $linha['id_cliente']; ?>">
		<tr>
			<td>Nome:<input type='text' name='nome' value="<?php echo $linha['nome']; ?>"></td>
		</tr>
		<tr>
			<td>cpf:<input type='text' name='cpf' value="<?php echo $linha['cpf']; ?>" ></td>
		</tr>
		<tr>
			<td>sexo:
			Masculino<input type='radio' name='sexo' value= 'M'>
			Feminino<input type='radio' name='sexo' value= 'F'></td>
		</tr>
		<tr>
			<td>telefone:<input type='text' name='telefone' value="<?php echo $linha['telefone']; ?>"></td>
		</tr>
		<tr>
			<td>endereço:<input type='text' name='endereco' value="<?php echo $linha['endereco']; ?>"></td>
		</tr>
		<tr>
			<td>Data de nascimento:<input type='date' name='data_nascimento' value="<?php echo $linha['data_nascimento']; ?>"></td>
		</tr>
		<tr>
			<td align='center'><input type='submit' value='Enviar'></td>
		</tr>
 <?php } ?>
	</form>
	</table>

