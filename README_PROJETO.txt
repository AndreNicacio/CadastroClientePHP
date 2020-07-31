-------Cadastro de Clientes PHP(back-end)-------

Sistema de cadastro de clientes desenvolvido em PHP e utilizado o banco MySQL, o sistema permite adicionar, alterar e excluir clientes no banco de dados, exibe uma tabela para consulta dos clientes já cadastrados, foi utilizado o padrão de arquitetura de software MVC, GIT para controle de versão e arquivo Log para controle de ações importantes. Este sistema teve como base de consulta a documentação oficial da linguagem PHP v7.4.8 (https://www.php.net/manual/pt_BR/).

----Pré-Requisitos----

Este sistema foi desenvlvido em um notebook com as seguintes configurações:

---
Sistema Operacional: Windows 10 Pro
Processador: Intel(R) Core(TM) i5-3210M CPU @ 2.50GHz 2.50GHz
Memória instalada (RAM): 8,00 GB
Tipo de sistema: Sistema Operacional de 64 bits
---
Linguagem de Programação: PHP v7.4.8
IDE(Editor): Visual Studio Code v1.47.1
Servidor de banco de dados: MySQL Server v8.0.20
SGBD: MySQL WorkBbench v8.0 CE
---

----Como Funciona----

O sistema de cadastro de clientes possui um formulário em seu documento "index.html" para se obter a resposta do usuário, ao clicar no botão "SALVAR" a página será direcionada para "data.php", arquivo responsável por inserir os dados no banco, importando a conexão do banco a partir de "conexao.php" é possível se comunicar com o servidor e assim utilizar as funções da biblioteca MySQLi (encontrada na documentação oficial PHP v7.4.8) e isso se extende a todos os arquivos que necessitam de acesso ao banco. Após os dados terem sido inseridos com sucesso, o "data.php" importa os resultados obtidos por "table.php" e assim vai exibir para o usuário em uma tabela o cadastro atualizado, o sistema não aceita o cadastro caso os campos obrigatórios não estejam preenchidos, fazendo uma verificação a cada inserção de dados. Para se alterar um cliente é necessário informar qual o ID do cadastro, nesse caso o transformando em um campo obrigatório de "update.php", funcionando de forma semelhante a inserção de dados é feito uma verificação a cada alteração para não permitir campos obrigatórios em branco. O arquivo "delete.php" pega o ID do cadastro indicado pelo usuário e faz a exclusão do cliente do banco, e como padrão a tabela atualizada é exibida. ID também se torna campo obrigátorio e sendo assim uma verificação é feita.

----Iniciar o Sistema----

No terminal do próprio Visual Studio Code e na pasta do projeto, primeiro é necessário ativar o servidor PHP (utilizei o proprio servidor PHP, disponibilizado após o PHP v5.4.0):

	php -S localhost:8081;   (Note que a porta:8081 foi a utilizada em meu projeto, não sendo obrigatório o uso desta porta)

Após iniciar o servidor, no navegador(de sua escolha) iremos colocar a URL "localhost:8081/view/index.html".

----Versão----

Versão Final: 1.6.1


----Autoria----
André Ferreira Nicácio
nicaciodagga@gmail.com
https://github.com/AndreNicacio?tab=repositories
 



