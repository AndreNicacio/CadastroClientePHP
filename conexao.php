<?php
$user = 'root';
$password = 'Neuromancer@1312';
$database = 'clientesdb';
$hostname = 'localhost';


# Conectando com o servidor MySQL
$link =  mysqli_connect($hostname, $user, $password, $database);

if (!$link) {
    echo "ERROR: NÃO FOI POSSIVEL CONECTAR AO MYSQL";
}else{
    echo "Conectado com Sucesso";
}
?>