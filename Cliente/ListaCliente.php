<html>
<meta charset="UTF-8">
<table align='center' border='2'>
<tr>
<th> Codigo do Cliente</th>
<th> Nome </th>
<th> CPF </th>
<th> Sexo </th>
<th> telefone </th>
<th> endereço </th>
<th> Data de Nascimento </th>
<th>editar</th>
<th>remover</th>
</tr>
<?php
 include('conexao.php');
 $sql= "Select * from cliente";
 $res =mysql_query($sql);
 While ($linha = mysql_fetch_array($res)){ ?>
  <tr>
  <td><?php echo $linha['id_cliente'] ?></td>
  <td><?php echo $linha['nome'] ?></td>  
  <td><?php echo $linha['cpf'] ?></td> 
  <td><?php echo $linha['sexo'] ?></td>
  <td><?php echo $linha['telefone'] ?></td>
  <td><?php echo $linha['endereco'] ?></td>
  <td><?php echo $linha['data_nascimento'] ?></td>
  
  <td align='center'><a href="form_editaCliente.php?id_cliente=
  <?php echo $linha['id_cliente'];?>">
  <img width='20px' height='20px' align='center' src='editar.png'></a></td>
  
  <td align='center'><a href="deletarCliente.php?id_cliente=
  <?php echo $linha['id_cliente']; ?>">
  <img width='20px' height='20px' src='remover.png' ></a></td>
  </tr>
 
 <?php  }  ?>
 </table>
 <a href= "http://127.0.0.1/ProjetoHotel/Menu.html"> Para voltar ao menu clique aqui! </a> <br>
 </html>