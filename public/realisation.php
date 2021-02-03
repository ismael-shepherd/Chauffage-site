<?php
$title = "Réalisation | Hassan";
include '../admin/db_conn.php';
require '../partials/header.php';
?>
<a href="../public/realisation.php"></a>
	<div id="page" class="container">
	 <div class="container">
		<section class="text1">
			<h4 class="title-principal">Nos réalisations en images :</h4><br>
			<h3>installations de plomberie et de chauffage</h3>
		</section>

		<section class="text2 py-4">
			<p class="text-muted">Spécialistes de la <a class="title-ser" href="plomberie.php">plomberie</a> et du <a class="title-ser" href="chauffage.php">chauffage</a>, nous sommes fiers de nos réalisations à Auderghem et ailleurs. Hassan CHPL rénove, installe et remplace vos chaudières, tuyaux, radiateurs... avec soin et attention. Avec un patron méticuleux et expérimenté sur votre chantier, vous avez l’assurance d’un résultat impeccable !</p>
		</section>

		<section class="text3">
			<h5 class="title-ser">POUR DES INSTALLATIONS PARFAITES</h5>
			<p class="text-muted">Nous faisons tout pour vous livrer un chantier soigné :</p>

			<!--CSS-->
				<style>
					.alb {
						width: 250px;
						height: 250px;
						padding: 5px;
						float: left;
					}
					.alb img {
						width: 100%;
						height: 100%;
					}
				</style>
			<!--CSS-->
			<a href="../admin/dashboard.php">&#8592;</a>
    <?php
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) { ?>

            <div class="alb">
			 
                <img src="../admin/uploads/<?=$images['image_url']?>" alt="">
			</div>

        <?php } }?>
		</section>

		

		

		</div>
	</div>
</div>



<?php require '../partials/footer.php' ?>