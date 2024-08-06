<!DOCTYPE html>
<html>
  <head>
    <!-- Define o conjunto de caracteres do documento como UTF-8 -->
    <meta charset="utf-8">
    
    <!-- Define o título da página -->
    <title>Carrinho</title>
    
    <!-- Link para o arquivo CSS para estilos da página -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    
    <!-- Link para o arquivo JavaScript da biblioteca jQuery -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    
    <!-- Link para o arquivo JavaScript com scripts personalizados -->
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <!-- Título da página na área do cabeçalho -->
        <h1>Programação Web II - Carrinho</h1>
        
        <!-- Link para a página inicial -->
        <a href="index.php">Inicial</a>
      </div>
    </header>
    
    <section id="produtos">
      <div class="center">
        <!-- Inclui o arquivo PHP que busca os dados do carrinho -->
        <?php require_once('controller/carrinho-busca.php'); ?>
      </div>
    </section>
  </body>
</html>
