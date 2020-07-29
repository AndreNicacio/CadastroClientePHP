
<?php
echo $_SERVER['REQUEST_METHOD'];

include '../model/conexao.php';

$name = '';
$email = '';
$cpf = '';
$fone = '';
$query = '';

mysqli_autocommit($link, FALSE);
if (isset ($_POST['id'])) 
{
    $id = $_POST['id'];
}

$query ="DELETE FROM cliente WHERE id='$id'";
if(!mysqli_query($link, $query)) {
    echo "Error message: %s\n", mysqli_error($link);
}else{
    echo "Inserido Dados com sucesso";
}


mysqli_commit($link);

mysqli_close($link);

include '../controller/table.php';

echo "Finalizado!!";
?>