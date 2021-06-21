<?php
 include('conexao.php');
 $quarto = $_GET['id_quarto'];
 $sql = "Select * from quarto where
 id_quarto=$quarto";
 
 $res =mysql_query($sql);
 While ($linha = mysql_fetch_array($res)){ ?>
	<table align='center' border='2'>
	<form method='post' action='updateQuarto.php'>
	  <input type="hidden" name="id_quarto" value="<?php echo $linha['id_quarto']; ?>">
	<tr>
		<td>Numero do Quarto:<input type='text' name='numero' value="<?php echo $linha['numero']; ?>" ></td>
	</tr>
	<tr>
		<td>tipo:<input type='text' name='tipo' value="<?php echo $linha['tipo']; ?>"></td>
	</tr>
	<tr>
		<td>valor:<input type='text' name='valor' value="<?php echo $linha['valor']; ?>"></td>
	</tr>
	<tr>
		<td>Status do Quarto:
		Disponivel<input type='radio' name='status' value='V'>
		Alocado<input type='radio' name='status' value='O'></td>
	</tr>
	<tr>
		<td align='center'><input type='submit' value='Enviar'></td>
	</tr>
 <?php } ?>
	</form>
	</table>