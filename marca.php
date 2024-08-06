<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags para definir o charset e viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da página -->
    <title>Cadastrar marca</title>
    <!-- Link para o arquivo CSS externo -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <div class="center">
            <!-- Título principal -->
            <h1>Cadastro de Marcas</h1>
            <!-- Link para voltar à página principal -->
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <!-- Seção para o formulário de cadastro -->
    <section id="produtos">
        <!-- Formulário para inserção de novas marcas -->
        <form action="insere-marca.php" method="post">
            <!-- Campo para descrição da marca -->
            <label for="">Descrição:</label>
            <input type="text" name="descricao">
            <!-- Botão para enviar o formulário -->
            <input type="submit" value="cadastrar">
        </form>
    </section>    
</body>
</html>
