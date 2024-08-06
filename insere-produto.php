<?php
// Inclui o arquivo de conexão com o banco de dados
include_once('controller/conexao.php');

// Recebe os dados do formulário via método POST
$categoria       = $_POST['Seleciona_categoria'];
$marca           = $_POST['Seleciona_marca'];
$nome_produto    = $_POST['nome'];
$descricao       = $_POST['descricao'];
$estoque         = $_POST['estoque'];
$preco           = $_POST['preco'];

// Monta a query SQL para inserir um novo produto no banco de dados
$grava_produto = "INSERT INTO produtos(IDCATEGORIA, IDMARCA, NOME, DESCRICAO, ESTOQUE, PRECO) VALUES ('$categoria', '$marca', '$nome_produto', '$descricao', '$estoque', '$preco')";

// Executa a query SQL e armazena o resultado
$result_gravacao = mysqli_query($mysqli, $grava_produto);

// Verifica se a inserção foi bem-sucedida
if(mysqli_affected_rows($mysqli) != 0){
    // Se bem-sucedida, redireciona para produtos.php e exibe uma mensagem de sucesso
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = 'O;URL=produtos.php'>
        <script type=\"text/javascript\">
            alert('Produto cadastrado com sucesso');
        </script>
    ";
}else{
    // Se falhou, redireciona para produtos.php e exibe uma mensagem de erro
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = 'O;URL=produtos.php'>
        <script type=\"text/javascript\">
        alert('Produto não cadastrado, tente novamente');
        </script>
    ";
}
?>
