<?php
 include('conexao.php');
 $servico = $_GET['id_servico'];
 $sql = "Select * from servicos where
 id_servico=$servico";
 
 $res =mysql_query($sql);
 While ($linha = mysql_fetch_array($res)){ ?>
	<table align='center' border='2'>
	<form method='post' action='updateServico.php'>
		      <input type="hidden" name="id_servico" value="<?php echo $linha['id_servico']; ?>">
		<tr>
			<td>Nome do Serviço:<input type='text' name='nome' value="<?php echo $linha['nome']; ?>"></td>
		</tr>
		<tr>
			<td>tipo:<input type='text' name='tipo' value="<?php echo $linha['tipo']; ?>"></td>
		</tr>
		<tr>
			<td>valor:<input type='text' name='valor' value="<?php echo $linha['valor']; ?>"></td>
		</tr>
		<tr>
			<td align='center'><input type='submit' value='Enviar'></td>
		</tr>
 <?php } ?>
	</form>
	</table>
