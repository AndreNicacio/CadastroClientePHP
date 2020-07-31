
<?php
#Importando conexão
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

#Checando campos obrigatorios e escrevendo query
if($id==null || $name==null || $email==null || $cpf==null){
    error_log("{$today} - Os campos obrigatorios não foram preenchidos(update.php)\n",3,"../my_errors.log");
    echo "Os campos obrigatorios não foram preenchidos";
}else{
    $query ="UPDATE cliente SET nome = '$name',email='$email',cpf='$cpf',fone='$fone' where id ='$id'";
}

#Inserindo dados no banco
if(!mysqli_query($link, $query)) {
    error_log("{$today} - Não foi possivel alterar os dados no banco(update.php), erro no query\n",3,"../my_errors.log");
}else{
    echo "Dados alterados com sucesso";
}


mysqli_commit($link);

mysqli_close($link);

#Importando tabela
include '../model/table.php';

echo "Finalizado!!";
?>