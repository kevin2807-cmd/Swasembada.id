<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= $data['title'] ?? 'Swasembada.id – Informasi Ketahanan Pangan'; ?></title>
  
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/global.css">
  <?php if (isset($data['css'])) : ?>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/<?= $data['css']; ?>">
  <?php endif; ?>
</head>
<body>

<nav>
  <div class="logo">Swa<span>sembada</span>.id</div>
  <ul class="nav-links">
    <li><a href="<?= BASEURL; ?>">Beranda</a></li>
    <li><a href="<?= BASEURL; ?>/statistik">Data & Statistik</a></li>
    <li><a href="<?= BASEURL; ?>/komoditas">Komoditas</a></li>

    <?php if (isset($_SESSION['user_id'])) : ?>
        <li><a href="<?= BASEURL; ?>/auth/logout" class="nav-btn" style="background:#e74c3c; color:white;">Logout</a></li>
    <?php else : ?>
        <li><a href="<?= BASEURL; ?>/auth" class="nav-btn">Login Admin</a></li>
    <?php endif; ?>
  </ul>
</nav>