<html>
<meta charset="UTF-8">
<table align='center' border='2'>
<tr>
<th> Codigo do Serviço</th>
<th> Nome </th>
<th> tipo </th>
<th> valor </th>
<th> Editar </th>
<th> Remover </th>
</tr>
<?php
 include('conexao.php');
 $sql= "Select * from servicos";
 $res =mysql_query($sql);
 While ($linha = mysql_fetch_array($res)){ ?>
  <tr>
  <td><?php echo $linha['id_servico'] ?></td>
  <td><?php echo $linha['nome'] ?></td>  
  <td><?php echo $linha['tipo'] ?></td> 
  <td><?php echo $linha['valor'] ?></td>
 
  <td align='center'><a href="form_editaServico.php?id_servico=
  <?php echo $linha['id_servico'];?>">
  <img width='20px' height='20px' align='center' src='editar.png'></a></td>
  
  <td align='center'><a href="deletarServico.php?id_servico=
  <?php echo $linha['id_servico']; ?>">
  <img width='20px' height='20px' src='remover.png' ></a></td>
  </tr>
 <?php  }  ?>
  </table>
  <a href= "http://127.0.0.1/ProjetoHotel/Menu.html"> Para voltar ao menu clique aqui! </a> <br>
</html>