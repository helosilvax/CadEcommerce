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

## Métodos PHP
 
### mysqli

1. mysqli: Este objeto representa a conexão com o banco de dados MySQL, fornecendo uma interface rica com diversos métodos e propriedades para facilitar a interação com os dados.

### mysqli_query

2. mysqli_query: Este método é utilizado para executar consultas SQL no banco de dados, permitindo a manipulação e recuperação de dados conforme necessário.

- **Exemplo de uso**:
    ```php
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Processar os resultados
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
    ```
 
### mysqli_close
 
3. mysqli_close: Este método encerra a conexão previamente estabelecida com o banco de dados, liberando os recursos associados a ela.

- **Exemplo de uso**:
    ```php
    mysqli_close($conn);
    ```
 
### mysqli_error
 
4. mysqli_error: Este método retorna uma string que descreve o erro mais recente ocorrido durante uma operação com MySQLi, ajudando na identificação e solução de problemas.

- **Exemplo de uso**:
    ```php
    if (!$result) {
        echo "Erro: " . mysqli_error($conn);
    }
    ```
## Imagens dos Trabalhos
Abaixo, algumas imagens do projeto com as realizações descritas anteriormente.

### Pedido de Compra

![Captura de tela 2024-08-06 082555](https://github.com/user-attachments/assets/af3a9fdd-8fd1-4d0b-ba16-8b90946ee1f8)

### Cadastro de marcas

![Captura de tela 2024-08-06 083114](https://github.com/user-attachments/assets/51fd9040-6cd7-4336-a983-807335be61da)

### Cadastro de categorias 

![Captura de tela 2024-08-06 083344](https://github.com/user-attachments/assets/1451d9a2-02e1-4503-8440-d661cd4e2ece)

### Base de dados

![Captura de tela 2024-08-06 082836](https://github.com/user-attachments/assets/3b46a2f8-dcf9-49e7-b192-4ce30571d9ff)

## Fonte consultadas
-[O que são os métodos PHP] https://www.php.net

## Autores
- Heloise Ribeiro
- Leonardo Rocha





 


 

 



 

 



 

 



