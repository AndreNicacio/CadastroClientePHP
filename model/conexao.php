<?php
#Declaração dos parametros do servidor MySQL
$user = 'root';
$password = 'Neuromancer@1312';
$database = 'clientes_db';
$hostname = 'localhost';



$link =  mysqli_connect($hostname, $user, $password, $database);

#Checando conexão com o servidor
if (!$link) {
    error_log("{$today} - Não foi possivel criar a conexão com o banco de dados(conexao.php), erro no connect\n",3,"../my_errors.log");
}else{
    echo "Conectado com Sucesso";
}
?>