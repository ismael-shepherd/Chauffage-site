<div id="footer">

<div class="container">
  <div class="row">
    <div class="col-sm">
    <h5>Contactez-nous</h5>
    <h4 class="title-ser">Hassan CHPL</h4>
    <p><i class="fas fa-map-marker-alt"></i> Chaussée de Wavre 1997 / B-1160 AUDERGHEM</p>
    <p><i class="fas fa-phone-volume"></i> Gsm :+32 496 31 78 55<br>
      Fax : +32(0)2/662.20.84</p>
      <p><i class="fas fa-at"></i> <a class="title-ser" href="mailto: hassan.chpl@gmail.com">hassan.chpl@gmail.com</a> / N° TVA : BE0661.894.940</p>
      <h6><i class="fab fa-facebook-square"></i> <a class="title-ser" href="">REJOIGNEZ-NOUS SUR FACEBOOK</a></h6>
    </div>
    <div class="col-sm">
    <h4 class="title-ser">Hassan CHPL <i class="fas fa-building"></i></h4>
    <p>Du lundi au vendredi :<br>
       de 16h30 à 22h</p>
       <p>Samedi de : 09h à 18h<br>
          Dimanche de : 10h à 17h</p>
    </div>
    </div>
  </div>
</div>
	
  </div>
</div>
</div>

<!--CSS-->
<style>
.banniere {
  background: rgba(0, 0, 0, 0.911);
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  color: white;
  display: flex;
  justify-content: space-around;
  padding: 30px;
}

.text-banniere p{
  font-size: large;
}
</style>
<!--CSS-->

<?php
if(!isset($_COOKIE['accepte-cookie'])) {
  ?>

<div class="banniere">
  <div class="text-banniere">
    <p>Notre site utilise des cookies pour une meilleure expèrience</p>
  </div>
  <div class="button-banniere">
    <a class="btn btn-success" href="?accepte-cookie">OK, J'accepte</a>
  </div>
</div>

<?php
    }
?>

<!--SCRIPT-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<!--SCRIPT-->
</body>
</html>