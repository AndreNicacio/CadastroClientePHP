
<?php
echo $_SERVER['REQUEST_METHOD'];

include 'conexao.php';

$name = '';
$email = '';
$cpf = '';
$fone = '';
$query = '';
mysqli_autocommit($link, FALSE);
if (isset ($_POST['id'])) 
{
    $id = $_POST['id'];
    $name = $_POST['nameUpdate'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];

}

$query ="UPDATE cliente SET nome = '$name',email='$email',cpf='$cpf',fone='$fone' where id ='$id'";
if(!mysqli_query($link, $query)) {
    echo "Error message: %s\n", mysqli_error($link);
}else{
    echo "Inserido Dados com sucesso";
}


mysqli_commit($link);

mysqli_close($link);

include 'table.php';

echo "Finalizado!!";
?>