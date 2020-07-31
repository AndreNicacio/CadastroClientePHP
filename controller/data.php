
<?php
#importando a conexão MySQL
include '../model/conexao.php';


$name = '';
$email = '';
$cpf = '';
$fone = '';
$today = date("F j, Y, g:i a");


mysqli_autocommit($link, FALSE);


if (isset ($_POST['name'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];
}

#Checando campos obrigatorios e escrevendo query
if($name==null || $email==null || $cpf==null){
    error_log("{$today} - Os campos obrigatorios não foram preenchidos(data.php)\n",3,"../my_errors.log");
    echo "Os campos obrigatórios não foram preenchidos";
}else{
    $query = "INSERT INTO cliente(nome,email, cpf, fone) VALUES ";
    $query .= "('$name', '$email', '$cpf', '$fone')";
}

#Inserindo dados no banco
if(!mysqli_query($link, $query)) {
    error_log("{$today} - Não foi possivel inserir os dados no banco(data.php), erro no query\n",3,"../my_errors.log");
}else{
    echo "Inserido Dados com sucesso";
}

mysqli_commit($link);

mysqli_close($link);

#importando a tabela
include '../model/table.php';

echo "Finalizado!!";
?>