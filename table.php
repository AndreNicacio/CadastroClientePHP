<?php
include 'conexao.php';

$sqlTable = "SELECT id, nome, email, cpf,fone FROM cliente";
$result = mysqli_query($link, $sqlTable);



echo '<table>
            <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>CPF</td>                    
                    <td>Telefone</td>
            </tr>
';
    while($row = mysqli_fetch_array($result)){
        echo '
            <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['nome'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['cpf'].'</td>                
                <td>'.$row['fone'].'</td>
            </tr>
        ';
    };
echo '
    </table>
';

mysqli_close($link);
?>