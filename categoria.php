<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags para definir o charset e a viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da página -->
    <title>Cadastrar categoria</title>
    <!-- Link para o arquivo CSS externo -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <div class="center">
            <!-- Título principal da página -->
            <h1>Cadastro de Categoria</h1>
            <!-- Link para voltar à página inicial -->
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <!-- Seção para o formulário de cadastro de categorias -->
    <section id="produtos">
        <!-- Formulário para inserir uma nova categoria -->
        <form action="insere-categoria.php" method="post">
            <!-- Rótulo para o campo de descrição -->
            <label for="">Descrição:</label>
            <!-- Campo de entrada de texto para a descrição da categoria -->
            <input type="text" name="descricao">
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="cadastrar">
        </form>
    </section>    
</body>
</html>
