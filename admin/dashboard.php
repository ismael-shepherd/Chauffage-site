<?php
$title = "Dashboard | Hassan";
$bdd = new PDO('mysql:host=localhost;dbname=shph;charset=utf8', 'root', '');
$req = $bdd->query('SELECT src,nom FROM images');

require_once '../functions/auth.php';
forcer_utilisateur_connecte();
$annee = (int)date('Y');
$annee_selection = empty($_GET['annee']) ? $annee : (int)$_GET['annee'];
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title><?= $title ?? "Chauffage Hassan" ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../public/index.php">Hassan CHPL</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      
      <?php if(est_connecte()): ?>
      <a class="nav-link" href="../admin/logout.php">Déconnecter</a>
      <?php endif ?>
     
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <h6>Page du site</h6>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="../public/index.php">
              <span data-feather="file-text"></span>
              Accueil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../public/chauffage.php">
              <span data-feather="file-text"></span>
              Chauffage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../public/plomberie.php">
              <span data-feather="file-text"></span>
              Plomberie
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../public/realisation.php">
              <span data-feather="file-text"></span>
              Réalisations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../public/contact.php">
              <span data-feather="file-text"></span>
              Contact
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="auto">
          DATE : <?= date('Y-m-d'); ?>
        </div>
        <script>
          setInterval('load_message()', 500);
          function load_message() {
            $("#auto").load("auto.php");
          }
        </script>
      </div>
        <h5>Upload d'image en ligne :</h5>
            <?php if(isset($_GET['error'])): ?>
              <p><?php echo $_GET['error'] ?></p>
          <?php endif ?>
          <form action="upload.php" method="POST" enctype="multipart/form-data">
              <input class="btn btn-primary" type="file" name="my_image">
              <button class="btn btn-outline-primary" type="submit" name="submit" value="Upload">Poster l'image</button>
          </form>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            
     
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/d3js/6.5.0/d3.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>

