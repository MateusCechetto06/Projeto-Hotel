<html>
<meta charset="UTF-8">
<table align='center' border='2'>
<tr>
<th> Codigo da reserva </th>
<th> valor total </th>
<th> Código do Quarto </th>
<th> Código do serviço</th>
<th> Código do Cliente </th>
<th> Status do Pagamento </th>
<th> Editar </th>
<th> Remover </th>
</tr>
<?php
 include('conexao.php');
 $sql= "Select * from reservas";
 $res =mysql_query($sql);
 While ($linha = mysql_fetch_array($res)){ ?>
  <tr>
  <td><?php echo $linha['id_reserva'] ?></td>
  <td><?php echo $linha['valor_total'] ?></td>  
  <td><?php echo $linha['id_quarto'] ?></td> 
  <td><?php echo $linha['id_servico'] ?></td>
  <td><?php echo $linha['ID_CLIENTE'] ?></td>
  <td><?php echo $linha['flag_pagamento'] ?></td>
  
  <td align='center'><a href="form_editaReserva.php?id_reserva=
  <?php echo $linha['id_reserva'];?>">
  <img width='20px' height='20px' align='center' src='editar.png'></a></td>
  
  <td align='center'><a href="deletarReserva.php?id_reserva=
  <?php echo $linha['id_reserva']; ?>">
  <img width='20px' height='20px' src='remover.png' ></a></td>
  </tr>  
 <?php  }  ?>
  </table>
  <a href= "http://127.0.0.1/ProjetoHotel/Menu.html"> Para voltar ao menu clique aqui! </a> <br>
</html>