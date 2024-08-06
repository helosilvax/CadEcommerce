<?php
// Inclui o arquivo de conexão com o banco de dados
include_once('controller/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura a visualização para dispositivos móveis -->
    <title>Cadastrar Produto</title> <!-- Título da página -->
    <link rel="stylesheet" href="css/style.css"> <!-- Inclui o arquivo de estilo CSS -->
</head>
<body>
    <header>
        <div class="center">
            <h1>Cadastro de Produtos</h1> <!-- Cabeçalho da página -->
            <a href="index.php" target="_self">Voltar</a> <!-- Link para voltar à página inicial -->
        </div>
    </header>
    <section id="produtos">
        <!-- Formulário para cadastrar um novo produto -->
        <form action="insere-produto.php" method="post">
            Nome: <input type="text" name="nome"><br> <!-- Campo para o nome do produto -->
            Descrição: <input type="text" name="descricao"><br> <!-- Campo para a descrição do produto -->
            Estoque: <input type="number" name="estoque"><br> <!-- Campo para a quantidade em estoque -->
            Preço: <input type="number" name="preco" min="0.00" max="100000.00" step="0.01"><br> <!-- Campo para o preço do produto -->
            Categoria:
            <select name="Seleciona_categoria" id=""> <!-- Menu suspenso para selecionar a categoria -->
                <option value="">Selecione</option>
                <?php
                // Consulta todas as categorias no banco de dados
                $resultado_categoria = "SELECT * FROM categoria";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);

                // Loop para exibir cada categoria como uma opção no menu suspenso
                while($row_categorias = mysqli_fetch_assoc($resultcategoria)){ ?>
                    <option value="<?php echo $row_categorias['IDCATEGORIA'];?>">
                        <?php echo $row_categorias['DESCRICAO']; ?>
                    </option>
                <?php
                }
                ?>
            </select><br>
            Marca:
            <select name="Seleciona_marca" id=""> <!-- Menu suspenso para selecionar a marca -->
                <option value="">Selecione</option>
                <?php
                // Consulta todas as marcas no banco de dados
                $resultado_marca = "SELECT * FROM marca";
                $resultadomarca = mysqli_query($mysqli, $resultado_marca);

                // Loop para exibir cada marca como uma opção no menu suspenso
                while($row_marca = mysqli_fetch_assoc($resultadomarca)){ ?>
                    <option value="<?php echo $row_marca['IDMARCA'];?>">
                        <?php echo $row_marca['DESCRICAO']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
            <br><br>
            <input type="submit" value="Cadastrar"> <!-- Botão para enviar o formulário -->
        </form>
    </section>    
</body>
</html>
