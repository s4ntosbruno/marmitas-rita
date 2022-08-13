<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Detalhe</title>
</head>

<body>
  <?php
  $marmita = $_GET['marmita'];
  foreach ($marmitas as $key => $value) {
    if ($value[0] == $marmita) {
  ?>
      <h2><? $value[0] ?></h2>
      <p>tamanho: <? $value[1] ?></p>
      <p>preço: <? $value[2] ?></p>
      <img src="<? echo $value[3]; ?>" alt="<?= $value[0]; ?>"></img>
      <p>ingredientes: <? $value[4] ?></p>
  <?php
    }
  }
  ?>
</body>

</html>