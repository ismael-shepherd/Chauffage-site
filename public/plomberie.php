<?php
$title = "Plomberie | Hassan";
require '../partials/header.php';
?>

	<div id="page" class="container">
	 <div class="container">
		<section class="text1">
			<h4 class="title-principal">Installation, réparation et</h4><br>
			<h3>entretien de votre plomberie</h3>
		</section>

		<section class="text2 py-4">
			<p class="text-muted">Vous souhaitez réparer ou installer votre <b>plomberie à Auderghem</b> ou ailleurs ? Hassan CHPL prend en charge toutes vos réparations, entretiens et dépannage, ainsi que la pose de nouveau matériel. Un patron expérimenté sur le chantier soigne chaque intervention dans ses moindres détails.</p>
		</section>

		<section class="text3">
			<h5 class="title-ser">NOS SERVICES</h5>
			<p class="text-muted">Nous assurons tous les travaux de chauffage :</p>

				<ul>
					<li><i class="fas fa-tools"></i> installation complète ;</li>
					<li><i class="fas fa-tools"></i> entretien et remise en état complète de la tuyauterie et de la robinetterie ;</li>
					<li><i class="fas fa-tools"></i> installation des <b>sanitaires</b> (évier, WC suspendu, lavabo, baignoire, douche...) ;</li>
					<li><i class="fas fa-tools"></i> placement et réparation de <a class="title-ser" href="chauffage.php">chauffe-eau et du chauffage ;</a></li>
                    <li><i class="fas fa-tools"></i> installation et réparation des boilers et de chauffe-eau ;</li>
                    <li><i class="fas fa-tools"></i> dépannage de tous problèmes : fuites, débouchage et détartrage ; </b></li>
                    <li><i class="fas fa-tools"></i> ...</li>

				</ul>
				<p class="text-muted">Notre service de <b>dépannage</b> fonctionne <b>7 jours sur 7.</b> N’hésitez pas à nous contacter pour une intervention rapide !</p>
		</section>

		<section class="text4">
            <h5 class="title-ser">UNE ENTREPRISE A L'ECOUTE DU CLIENT</h5>
            <p class="text-muted">Chez Hassan CHPL, nous veillons à ce que vous soyez satisfait du résultat.</p>
			<p class="text-muted">Chaque chantier est réalisé avec efficacité et soin. Vous souhaitez rénover ou installer mais ne savez pas comment ? Nous vous conseillons et vous orientons vers les solutions les plus avantageuses. Et pour que vos installations durent, nous travaillons avec du matériel de première qualité, fabriqué par des <b>marques reconnues.</b></p>
		</section>

		<section class="text5">
			<?php
			$text = "CONTACTEZ-NOUS";
			?>
			<h5 class="title-ser"><?= strtoupper($text); ?></h5>
			<p class="text-muted">Besoin d’entretenir votre chaudière ou de réaliser des travaux de chauffage ? <a class="title-ser" href="contact.php">Prenez contact avec un chauffagiste</a> expérimenté dès maintenant. Le montant de votre devis sera déduit du coût total de vos travaux si vous les réalisez. Une urgence ? Contactez notre service de dépannage 7j/7 pour une réparation rapide! Située à Auderghem, Hassan CHPL travaille régulièrement à Bruxelles, dans le Hainaut et partout en Wallonie. Des questions ? N’hésitez pas à nous faire part de vos interrogations, nous sommes à votre disposition pour tout renseignement supplémentaire.</p>
		</section>

		</div>
	</div>
</div>



<?php require '../partials/footer.php' ?>