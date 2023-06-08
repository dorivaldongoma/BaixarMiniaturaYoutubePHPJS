<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Baixar a miniatura do vídeo do YouTube | Dorivaldo Ngoma</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dorivaldo Ngoma">
    <meta name="description" content="Baixe a miniatura do vídeo do YouTube em PHP e JavaScript">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <header>Baixar Miniatura</header>
    <div class="entrada-de-url">
      <span class="titulo">Colar a url do vídeo:</span>
      <div class="campo">
          <label>
              <input type="text" placeholder="https://www.youtube.com/watch?v=lqwdD2ivIbM" required>
          </label>
          <input class="entrada-oculta" type="hidden" name="imgurl">
        <span class="linha-inferior"></span>
      </div>
    </div>
    <div class="area-de-visualizacao">
      <img class="miniatura" src="" alt="">
      <i class="icon fas fa-cloud-download-alt"></i>
      <span>Cole o URL do vídeo para ver a visualização</span>
    </div>
    <button class="botao-baixar" type="submit" name="botao">Baixar Miniatura</button>
      <?php require_once "config/buscar.php"; ?>
  </form>
  <script src="js/script.js"></script>
</body>
</html>
