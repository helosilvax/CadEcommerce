# CadEcommerce
Tarefa realizada em sala na aula de Programação Web sobre um projeto de cadastro de produtos, com aplicações utilizando HTML, CSS, JavaScript e PHP.

## Estrutura 
- **HTML**: Layout das páginas.
- **CSS**: Estilos das páginas.
- **JavaScript**: Funcionalidades interativas.
- **PHP**: Backend para a manipulação de dados.

## PROJETOS

### 1. Carrinho de Compras 

Estrutura de genreciamento web para um carrinho para compras.

###### Arquivos
 
1. `index.php`: Página principal do carrinho.
2. `css/style.css`: Estilos.
3. `js/jquery-2.1.4.min.js`: jQuery.
4. `js/script.js`: Scripts personalizados.
5. `controller/carrinho-busca.php`: Busca de produtos.
 
#### Execução

1. Clone o repositório.
2. Use um servidor web com PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php`.
 
---
 
### 2. Cadastro de Categorias
 
Estrutura de aplicação web para cadastrar categorias.
 
#### Arquivos
 
1. `index.php`: Formulário de cadastro.
2. `css/style.css`: Estilos.
3. `insere-categoria.php`: Cadastro de categoria.
  
#### Execução
 
1. Clone o repositório.
2. Use um servidor web com PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php`.
 
---
 
### 3. Pedido de Compra
 
Estrutura de aplicação web para gerenciar pedidos de compra.
 
#### Arquivos
 
1. `index.php`: Página de produtos.
2. `css/style.css`: Estilos.
3. `js/jquery-2.1.4.min.js`: jQuery.
4. `js/script.js`: Scripts personalizados.
5. `controller/produtos-busca.php`: Busca de produtos.
6. `carrinho.php`: Página do carrinho.
 
#### Execução
 
1. Clone o repositório.
2. Use um servidor web com PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php`.
 
---
 
### 4. Cadastro de Marcas
 
Estrutura de aplicação web para cadastrar marcas.
 
#### Arquivos
 
1. `index.php`: Formulário de cadastro.
2. `css/style.css`: Estilos.
3. `insere-marca.php`: Cadastro de marca.
 
#### Execução
 
1. Clone o repositório.
2. Use um servidor web com PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php`.
 
---
 
### 5. Resumo de Pedido
 
Estrutura de aplicação web para mostrar o resumo de um pedido.
 
#### Arquivos
 
1. `index.php`: Página do resumo.
2. `css/style.css`: Estilos.
3. `js/jquery-2.1.4.min.js`: jQuery.
4. `js/script.js`: Scripts personalizados.
5. `controller/produtos-resumo.php`: Resumo do pedido.
 
#### Execução
 
1. Clone o repositório.
2. Use um servidor web com PHP.
3. Coloque os arquivos no servidor.
4. Acesse `index.php`.
 
---
 
### 6. Cadastro de Produtos
 
Estrutura de aplicação web para cadastrar produtos com seleção de categoria e marca.
 
#### Arquivos
 
1. `index.php`: Formulário de cadastro.
2. `css/style.css`: Estilos.
3. `insere-produto.php`: Inserção de produto.
4. `controller/conexao.php`: Conexão com o banco de dados.
 
#### Execução

1. Clone o repositório.
2. Use um servidor web com PHP e MySQL.
3. Coloque os arquivos no servidor e configure o banco de dados.
4. Acesse `index.php`.
 
---
## Métodos 

1. **mysqli:** Este objeto representa a conexão com o banco de dados MySQL, fornecendo uma interface rica com diversos métodos e propriedades para facilitar a interação com os dados.

 // Criando uma nova conexão com o banco de dados
$servername = "localhost";
$username = "username";
$password = "password";
$database = "myDatabase";

$conn = new mysqli($servername, $username, $password, $database);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

2. **mysqli_query:** Este método é utilizado para executar consultas SQL no banco de dados, permitindo a manipulação e recuperação de dados conforme necessário.

// Executando uma consulta SQL
$sql = "SELECT id, name FROM users";
$result = $conn->query($sql);

// Verificando se a consulta retornou resultados
if ($result->num_rows > 0) {
    // Saindo os dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nome: " . $row["name"]. "<br>";
    }
} else {
    echo "0 resultados";
}

3. **mysqli_close:** Este método encerra a conexão previamente estabelecida com o banco de dados, liberando os recursos associados a ela.

// Encerrando a conexão com o banco de dados
$conn->close();
echo "Conexão encerrada com sucesso.";

4. **mysqli_error:** Este método retorna uma string que descreve o erro mais recente ocorrido durante uma operação com MySQLi, ajudando na identificação e solução de problemas.

// Executando uma consulta SQL com erro para ilustrar o uso de mysqli_error
$sql = "SELECT * FROM non_existent_table"; // Tabela que não existe
$result = $conn->query($sql);

if (!$result) {
    echo "Erro na consulta: " . $conn->error; // Exibindo a mensagem de erro
}

## Imagens dos Trabalhos
Abaixo, algumas imagens do projeto com as realizações descritas anteriormente.

### Pedido de Compra

 


 

 



 

 



 

 



