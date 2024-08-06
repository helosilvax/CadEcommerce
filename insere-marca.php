<?php
// Inclui o arquivo de conexão com o banco de dados
include('controller/conexao.php');

// Obtém a descrição enviada pelo formulário através do método POST
$descricao = $_POST['descricao'];

// Exibe a descrição recebida em uma tag HTML
echo "<h3>Descrição: $descricao </h3></br>";

// Cria a query SQL para inserir uma nova marca na tabela 'marca'
$cad_marca = "INSERT INTO marca(DESCRICAO) VALUES ('$descricao')";

// Executa a query SQL e verifica se foi bem-sucedida
if(mysqli_query($mysqli, $cad_marca)){
    // Se a query foi executada com sucesso, exibe uma mensagem de sucesso
    echo "<h1>Marca cadastrada com sucesso</h1></br>";
}else{
    // Se houve um erro na execução da query, exibe uma mensagem de erro
    echo "Erro: " . $cad_marca . "</br>". mysqli_error($mysqli);
}

// Fecha a conexão com o banco de dados
mysqli_close($mysqli);
?>
