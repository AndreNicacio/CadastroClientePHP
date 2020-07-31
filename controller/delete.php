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
}

if($id==null){
    error_log("{$today} - Os campos obrigatorios não foram preenchidos(delete.php)\n",3,"../my_errors.log");
    echo "Os campos obrigatorios não foram preenchidos";
}else{
    $query ="DELETE FROM cliente WHERE id='$id'";
}

#Escrevendo a query e deletando dados do banco
if(!mysqli_query($link, $query)) {
    error_log("{$today} - Não foi possivel deletar os dados no banco(delete.php), erro no query\n",3,"../my_errors.log");
}else{
    echo "Dados deletados com sucesso";
}


mysqli_commit($link);

mysqli_close($link);

#Importando a tabela
include '../model/table.php';

echo "Finalizado!!";
?>