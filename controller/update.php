
<?php

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
    $name = $_POST['nameUpdate'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];

}

if($name==null || $email==null || $cpf==null){
    error_log("{$today} - Os campos obrigatorios não foram preenchidos(update.php)\n",3,"../my_errors.log");
}else{
    $query ="UPDATE cliente SET nome = '$name',email='$email',cpf='$cpf',fone='$fone' where id ='$id'";
}



if(!mysqli_query($link, $query)) {
    error_log("{$today} - Não foi possivel alterar os dados no banco(update.php), erro no query\n",3,"../my_errors.log");
}else{
    echo "Dados alterados com sucesso";
}


mysqli_commit($link);

mysqli_close($link);

include '../controller/table.php';

echo "Finalizado!!";
?>