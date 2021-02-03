<?php
$title = "Contact | Hassan";
require '../partials/header.php';


?>

	<div id="page" class="container">
	 <div class="container">
		<section class="text1">
			<h4 class="title-principal">Prenez contact avec votre chauffagiste</h4><br>
			<h3>dès maintenant</h3>
		</section>

		<section class="text2 py-4">
			<p class="text-muted">Vous êtes à la recherche d’un <b>chauffagiste à Auderghem</b> ou ailleurs dans le pays ? Hassan CHPL assure tous vos travaux de chauffage et de plomberie avec soin et efficacité. Professionnel avec plus de 30 ans d’expérience du métier, le patron veillera à vous offrir le meilleur résultat.</p>
		</section>


		<section class="text5">
			<?php
			$text = "CONTACTEZ-NOUS";
			?>
			<h5 class="title-ser"><?= strtoupper($text); ?></h5>
            <p class="text-muted">Vous souhaitez demander un devis ? Il vous suffit de prendre <b>contact avec votre chauffagiste par téléphone au +32 (0)496/31.78.55</b> ou <b>via le formulaire ci-dessous</b>. Lorsque suivis d’un engament de votre part, le montant de nos devis est déduit du coût total de vos travaux. </p>
            <p class="text-muted">Une <b>urgence ?</b> Notre service de <b>dépannage</b> est disponible <b>7j/7.</b> Nous vous garantissons une intervention rapide ! Hassan CHPL se situe à Auderghem et travaille sur toute la région de Bruxelles, du Hainaut et se déplace partout en Wallonie. Nous sommes également à votre disposition pour toute demande de renseignements supplémentaires.</p>
        </section>

 <form action="" method="POST">
  <div class="mb-3">
  <label for="text" class="form-label">Nom *</label>
    <input type="text" class="form-control" id="text">
  </div>

  <div class="mb-3">    
  <label for="text" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="text">
  </div>
  <div class="mb-3">
  <label for="text" class="form-label">Tél</label>
  <input type="text" class="form-control" id="text">
  </div>
  <div class="mb-3">
  <label for="email" class="form-label">E-mail *</label>
  <input type="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Commentaire *</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
 <p class="text-muted">Lire <a class="title-ser" href="https://cdnnen.proxi.tools/res/global/html/confidentialites-fr.html" target="_blank">les conditions générales d'utilisation</a></p>
</div>
<button type="submit" class="btn btn-primary" name="contact">Envoyer</button>
</form>

		</div>
	</div>
</div>



<?php require '../partials/footer.php' ?>