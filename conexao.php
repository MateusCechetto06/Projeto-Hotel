<?php
$dbname = 'loja';
if (!($res = @mysql_connect("localhost","root"))){
	 echo "Não foi possivel conectar com o servidor";	
}
if (!($id = @mysql_select_db($dbname,$res))){
	echo "Não foi possivel selecionar o banco de dados";
}



?>