<?php
$pageTitle = $pageTitle ?? "UCMA - Universidad";
$pageDescription = $pageDescription ?? "Sitio oficial de la Universidad UCMA. Formación académica con excelencia.";
?>
<?php include_once(__DIR__ . '/../config/config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $pageDescription ?>">
  <meta name="keywords" content="universidad, educación, UCMA, licenciatura, ingeniería">
  <meta name="author" content="UCMA">
  <title><?= $pageTitle ?></title>
  <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"></noscript>
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>
  <link rel="stylesheet" href="<?= $baseUrl ?>/static/css/styles.css">
  <link rel="icon" href="<?= $baseUrl ?>/static/img/favicon_ucma.png" type="image/png">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" as="style">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <link rel="preload" as="image" href="<?=$baseUrl?>/static/img/ucma_azul.png">

</head>
<body>