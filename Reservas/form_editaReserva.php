<?php
 include('conexao.php');
 $reserva = $_GET['id_reserva'];
 $sql = "Select * from reservas where
 id_reserva=$reserva";
 
 $res =mysql_query($sql);
 While ($linha = mysql_fetch_array($res)){ ?>
<table align='center' border='2'>
	<form method='post' action='updateReserva.php'>
		       <input type="hidden" name="id_reserva" value="<?php echo $linha['id_reserva']; ?>">
		<tr>
			<td>Valor Total:<input type='text' name='valor' value="<?php echo $linha['valor_total']; ?>"></td>
		</tr>
		<tr>
			<td>id do Quarto:<input type='text' name='quarto' value="<?php echo $linha['id_quarto']; ?>"></td>
		</tr>
		<tr>
			<td>Id do serviço:<input type='text' name='servico' value="<?php echo $linha['id_servico']; ?>"></td>
		</tr>
		<tr>
			<td>id do Cliente:<input type='text' name='cliente' value="<?php echo $linha['ID_CLIENTE']; ?>"></td>
		</tr>
		<tr>
			<td>Status do pagamento:
			    Não pago<input type='radio' name='pagamento' value='D'>
				Pago<input type='radio' name='pagamento' value='P'></td>
		</tr>
		<tr>
			<td align='center'><input type='submit' value='Enviar'></td>
		</tr>
 <?php } ?>
	</form>
	</table>