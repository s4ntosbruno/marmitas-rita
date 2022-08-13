<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/cd4d26d4af.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="icon.svg" />
  <title>Marmitas</title>
</head>

<body>
  <header>
    <img src="img.png"></img>
    <h1>Marmitas da Rita</h1>
    <div class="menu">
      <a>home</a>
      <a>blog</a>
      <a>sobre</a>
      <a>vagas</a>
    </div>
  </header>
  <main>
    <?php
    include("dados.php");
    foreach ($marmitas as $key => $value) : ?>
      <div class="marmita">
        <a href="detalhe.php?marmita=<?= $value[0]; ?>">
          <img src="<? echo $value[3]; ?>" alt="<?= $value[0]; ?>">
          <p class="description"><?= $value[0]; ?>marmita</p>
        </a>
      </div>
    <?php endforeach; ?>
  </main>
  <footer>
    <p>Desenvolvido por <a>Bruno</a></p>
    <div class="social-media">
      <a><i class="fa-brands fa-facebook"></i></a>
      <a><i class="fa-brands fa-instagram"></i></a>
      <a><i class="fa-brands fa-twitter"></i></a>
      <a><i class="fa-brands fa-google"></i></a>
    </div>
  </footer>
</body>

</html>