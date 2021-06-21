<html>
<meta charset="UTF-8">
<table align='center' border='2'>
<tr>
<th> Codigo do Quarto</th>
<th> numero </th>
<th> tipo </th>
<th> valor </th>
<th> Status do Quarto </th>
<th> Editar </th>
<th> Remover </th>
</tr>
<?php
 include('conexao.php');
 $sql= "Select * from quarto";
 $res =mysql_query($sql);
 While ($linha = mysql_fetch_array($res)){ ?>
  <tr>
  <td><?php echo $linha['id_quarto'] ?></td>
  <td><?php echo $linha['numero'] ?></td>  
  <td><?php echo $linha['tipo'] ?></td> 
  <td><?php echo $linha['valor'] ?></td>
  <td><?php echo $linha['Status_ocupado'] ?></td>
 
  <td align='center'><a href="form_editaQuarto.php?id_quarto=
  <?php echo $linha['id_quarto'];?>">
  <img width='20px' height='20px' align='center' src='editar.png'></a></td>
  
  <td align='center'><a href="deletarQuarto.php?id_quarto=
  <?php echo $linha['id_quarto']; ?>">
  <img width='20px' height='20px' src='remover.png' ></a></td>
  </tr>
 <?php  }  ?>
  </table>
  <a href= "http://127.0.0.1/ProjetoHotel/Menu.html">Para voltar ao menu clique aqui! </a> <br>
</html>