<?php
$erreur = null;
$password = '$2y$10$dWSyf92b667qy5OWuGHbmO1xsvGmVzDoVDZ0scpXenRzTurxddgZu';
if(isset($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if($_POST['pseudo'] === 'Admin147' && password_verify($_POST['motdepasse'], $password)) {
       session_start();
       $_SESSION['connecte'] = 1;
       header('Location: ../admin/dashboard.php');
    } else {
       $erreur = "Identifiants incorrects";
    }
}

require_once '../functions/auth.php';
if(est_connecte()) {
    header('Location: ../admin/dashboard.php');
}


require '../partials/header.php';
?>

<div id="page" class="container">
	 <div class="container">
		<section class="text1">
    <div class="container">
<?php if($erreur): ?>
 <div class="alert alert-danger">
 <?= $erreur ?>
 </div>
<?php endif ?>

<form action="" method="POST"> 
  <div class="mb-3">
    <input class="form-control" type="text" name="pseudo" placeholder="Nom d'utilisateur">
  </div>
  <div class="mb-3">
    <input class="form-control" type="password" name="motdepasse" placeholder="Votre mot de passe">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
  <div id="emailHelp" class="form-text">Connexion seulement pour les administrateur.</div>
</form>
		</section>
		

	

	

	
		</div>
	</div>
</div>

<?php require '../partials/footer.php'; ?>

