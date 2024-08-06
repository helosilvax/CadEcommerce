<!DOCTYPE html>
<html>
  <head>
    <!-- Definição do conjunto de caracteres como UTF-8 -->
    <meta charset="utf-8">
    <!-- Título da página -->
    <title>Resumo de Pedido</title>
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <!-- Inclusão do jQuery -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Inclusão do arquivo JavaScript personalizado -->
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <!-- Título principal da página -->
        <h1>Programação Web II - Resumo do Pedido</h1>
        <!-- Link para a página inicial -->
        <a href="index.php">Inicial</a>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <div>
            <!-- Inclusão do script PHP para exibir o resumo dos produtos -->
            <?php require_once('controller/produtos-resumo.php'); ?>
          </div>
        </div>
    </section>
  </body>
</html>