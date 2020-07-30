
<?php
echo $_SERVER['REQUEST_METHOD'];

include '../model/conexao.php';

$name = '';
$email = '';
$cpf = '';
$fone = '';
$query = '';
$today = date("F j, Y, g:i a");

mysqli_autocommit($link, FALSE);
if (isset ($_POST['id'])) 
{
    $id = $_POST['id'];
}

$query ="DELETE FROM cliente WHERE id='$id'";
if(!mysqli_query($link, $query)) {
    error_log("{$today} - Não foi possivel deletar os dados no banco(delete.php), erro no query\n",3,"../my_errors.log");
}else{
    echo "Dados deletados com sucesso";
}


mysqli_commit($link);

mysqli_close($link);

include '../controller/table.php';

echo "Finalizado!!";
?>