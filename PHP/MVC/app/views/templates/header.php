<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css"> <!--BASEURL Memanggil yang di file Const.php tdi -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/App.css">
    <title><?= $data['title'] ?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= BASEURL;?>">
  <img src="<?= BASEURL;?>/img/logo.svg" width="35" height="35" class="d-inline-block align-top" alt="">
    Navbar
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= BASEURL;?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= BASEURL;?>/about">About</a>
      <a class="nav-item nav-link" href="<?= BASEURL;?>/react">React</a>
    </div>
  </div>
</nav>