
<?php
echo $_SERVER['REQUEST_METHOD'];
include 'conexao.php';

$name = '';
$email = '';
$cpf = '';
$fone = '';

mysqli_autocommit($link, FALSE);

if (isset ($_POST['name'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];
}

$sql = "INSERT INTO cliente(nome, email, cpf, fone) VALUES ";
$sql .= "('$name', '$email', '$cpf', '$fone')";

if(!mysqli_query($link, $sql)) {
    echo "Error message: %s\n", mysqli_error($link);
}else{
    echo "Inserido Dados com sucesso";
}

mysqli_commit($link);

mysqli_close($link);

include 'table.php';

echo "Finalizado!!";
?>