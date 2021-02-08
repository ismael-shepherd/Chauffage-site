<?php
require '../partials/header.php';
?>

	

	<div id="page" class="container">
	 <div class="container">
		<section class="text1">
			<h4 class="title-principal">Besoin d’un chauffagiste à Auderghem ?</h4><br>
			<h3>Appelez Hassan CHPL ! <a class="link" href="contact.php">+32 496 31 78 55</a></h3>
		</section>

		<section class="text2 py-4">
			<p class="text-muted"><b>Chauffagiste à Auderghem</b>, Hassan CHPL installe, répare et rénove vos installations de chauffage ou de plomberie. Fort d’une expérience de plus de 30 ans, notre patron travaille avec efficacité et attention. Quelle que soit l’envergure de votre projet, Hassan CHPL est là pour vous.</p>
		</section>

		<section class="text3">
			<h5 class="title-ser">NOS SERVICES</h5>
			<p class="text-muted">En tant que <strong>chauffagiste professionnel</strong>, nous assurons tous les travaux suivants :</p>

				<ul>
					<li><i class="fas fa-tools"></i> installation, rénovation et réparation du <a class="title-ser" href="chauffage.php">chauffage</a> et des chaudières ;</li>
					<li><i class="fas fa-tools"></i> ramonage de chaudière et de cheminée ;</li>
					<li><i class="fas fa-tools"></i> restauration, transformation ou placement de la <a class="title-ser" href="plomberie.php">plomberie</a> ;</li>
					<li><i class="fas fa-tools"></i> détection de fuite ;</li>
					<li><i class="fas fa-tools"></i> débouchage et détartrage.</li>
				</ul>
				<p><b>Une urgence ?</b></p>
				<p class="text-muted">Faites appel à notre <b>service dépannage 7j/7!</b> Vous bénéficierez d’un rendez-vous rapide, que vous soyez un <b>particulier ou un professionnel.</b></p>
		</section>

		<section class="text4">
			<h5 class="title-ser">LA QUALITE, LE COEUR DU METIER</h5>
			<p class="text-muted">Parce que votre satisfaction compte, Hassan CHPL travaille avec soin. Un <b>matériel de qualité</b> vous garantit la longévité de vos installations. Nous vous offrons également écoute, conseil, et vous guidons, vers la solution la plus avantageuse pour vous. Hassan CHPL veille également vous laisser un chantier propre, prêt à l’usage ! Vous verrez, <a class="title-ser" href="realisation.php">nos réalisations</a> seront à la hauteur de vos attentes.</p>
		</section>

		<section class="text5">
			<?php
			$text = "CONTACTER-NOUS";
			?>
			<h5 class="title-ser"><?= strtoupper($text); ?></h5>
			<p class="text-muted"><a class="title-ser" href="contact.php">Prenez contact avec votre chauffagiste</a> professionnel pour commencer vos travaux. Si suivi d’un engagement, le montant de votre devis est déduit du coût total de vos travaux. Pour vos urgences, appelez directement notre service de dépannage! Hassan CHPL est basée à Auderghem et intervient sur tout Bruxelles et également dans le Hainaut et ailleurs en Wallonie. Nous restons bien sûr à votre écoute pour toute question complémentaire.</p>
		</section>

		</div>
	</div>
</div>




    <div id="wrapper">
	<div id="header-wrapper">
<header class="header2">
	<div class="header-texture">
	<div class="container">


	<!--CSS-->
	<style>
				.card {
			display: flex;
			height: 280px;
			width: 200px;
			background-color: white;
			border-radius: 10px;
			box-shadow: -1rem 0 3rem #000;
		/*   margin-left: -50px; */
			transition: 0.4s ease-out;
			position: relative;
			top: 60px;
		    left: 60px;

		}
		</style>
	  <!--CSS-->

  
	<div class="container">
  
  <div class="jumbotron">
    
  </div>
  
  <div class="row js-slick-carousel">
    
      <div class="col">
        <div class="card">
		<a href="../public/plomberie.php"><img class="aspect-16to9 card-img-top" src="../images/pic02.jpg" alt="" /></a>
          
          <div class="card-body p-16to9">
            
            <div class="card-body-content">
              <h5 class="card-title">Plomberie</h5>
              <p class="card-text">
                 Un service irréprochable
              </p>
            </div>
            
          </div>
          
        </div>
      </div>

    <div class="col">  
      <div class="card">
	  <a href="../public/realisation.php"><img class="aspect-16to9 card-img-top" src="../images/chauffagiste.jpg" alt="" /></a>
          <div class="card-body p-16to9">
            
            <div class="card-body-content">
              <h5 class="card-title">Nos réalisations</h5>
              <p class="card-text">
                  test
              </p>
            </div>
            
          </div>
        </div>
    </div>

    <div class="col">
      <div class="card">
	  <a href="../public/chauffage.php"><img class="aspect-16to9 card-img-top" src="../images/chauffagiste-min.jpg" alt="" /></a>
        
        <div class="card-body p-16to9">
          
          <div class="card-body-content">
            <h5 class="card-title">Chauffage</h5>
            <p class="card-text">
                test
            </p>
          </div>
          
        </div>
      </div>
    </div>

   
    
   

    
    
  </div> <!-- row -->
  
    
  <div class="jumbotron mt-4">
  </div>
  
</div> <!-- container -->


  </div>
</div>
	</div>
	</div>
</header>
	</div>
</div>

<?php require '../partials/footer.php' ?>



