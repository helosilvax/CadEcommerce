<!DOCTYPE html>
<html>
  <head>
    <!-- Indica que o material foi disponibilizado pelo professor Anderson Macedo -->
    <meta charset="utf-8"> <!-- Define a codificação de caracteres para UTF-8 -->
    <title>Produtos</title> <!-- Título da página -->
    <!-- Link para o arquivo CSS que define o estilo da página -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <!-- Inclusão do jQuery, uma biblioteca JavaScript -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Inclusão do arquivo JavaScript personalizado -->
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <!-- Título da página exibido no cabeçalho -->
        <h1 style="text-align: center">Programação Web II - Pedido de compra</h1>
        <!-- Link para a página do carrinho de compras, abre em uma nova aba -->
        <a href="carrinho.php" target="_blank">Carrinho</a>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <!-- Inclusão do script PHP que busca produtos -->
          <?php require_once('controller/produtos-busca.php'); ?>
        </div>
    </section>
  </body>
</html>
