TENT = 'O;URL=produtos.php'> <!-- Parece ser uma linha incompleta ou incorreta. Talvez deveria ser algo como um redirecionamento de meta tag no HTML, mas precisa ser corrigida. -->

<?php
// Inclui o arquivo de conexão com o banco de dados
include('controller/conexao.php');

// Recebe o valor da descrição enviado pelo formulário via POST
$descricao = $_POST['descricao'];

// Exibe a descrição recebida na tela
echo "<h3>Descrição: $descricao </h3></br>";

// Cria a query SQL para inserir uma nova categoria na tabela 'categoria'
$cad_categoria = "INSERT INTO categoria(DESCRICAO) VALUES ('$descricao')";

// Executa a query e verifica se foi bem-sucedida
if (mysqli_query($mysqli, $cad_categoria)) {
    // Se a inserção foi bem-sucedida, exibe uma mensagem de sucesso
    echo "<h1>Nova categoria cadastrada com sucesso</h1></br>";
} else {
    // Se houve um erro na inserção, exibe a query e o erro retornado pelo MySQL
    echo "Erro: " . $cad_categoria . "</br>" . mysqli_error($mysqli);
}

// Fecha a conexão com o banco de dados
mysqli_close($mysqli);
?>
