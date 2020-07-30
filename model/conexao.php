<?php
$user = 'root';
$password = 'Neuromancer@1312';
$database = 'clientesdb';
$hostname = 'localhost';


# Conectando com o servidor MySQL
$link =  mysqli_connect($hostname, $user, $password, $database);

if (!$link) {
    error_log("{$today} - Não foi possivel criar a conexão com o banco de dados(conexao.php), erro no connect\n",3,"../my_errors.log");
}else{
    echo "Conectado com Sucesso";
}
?>