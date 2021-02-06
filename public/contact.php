<?php
$title = "Contact | Hassan";


require_once '../contact-form/vendor/autoload.php';
require '../contact-form/vendor/Helpers/Config.class.php';
require '../contact-form/vendor/SimpleMail/SimpleMail.class.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$mailLoader   = new SplClassLoader('SimpleMail', './vendor');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load('../contact-form/config/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $phone   = stripslashes(trim($_POST['form-phone']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($name && $email && $emailIsValid && $subject && $message) {
        $mail = new SimpleMail();

        $mail->setTo($config->get('emails.to'));
        $mail->setFrom($config->get('emails.from'));
        $mail->setSender($name);
        $mail->setSenderEmail($email);
        $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);

        $body = "
        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html>
            <head>
                <meta charset=\"utf-8\">
            </head>
            <body>
                <h1>{$subject}</h1>
                <p><strong>{$config->get('fields.name')}:</strong> {$name}</p>
                <p><strong>{$config->get('fields.email')}:</strong> {$email}</p>
                <p><strong>{$config->get('fields.phone')}:</strong> {$phone}</p>
                <p><strong>{$config->get('fields.message')}:</strong> {$message}</p>
            </body>
        </html>";

        $mail->setHtml($body);
        $mail->send();

        $emailSent = true;
    } else {
        $hasError = true;
    }
}


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



 <!--FORM-->

    </div>
    <?php if(!empty($emailSent)): ?>
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-success text-center"><?php echo $config->get('messages.success'); ?></div>
        </div>
    <?php else: ?>
        <?php if(!empty($hasError)): ?>
        <div class="col-md-5 col-md-offset-4">
            <div class="alert alert-danger text-center"><?php echo $config->get('messages.error'); ?></div>
        </div>
        <?php endif; ?>

    <!--CSS-->
      <style>
        .form-group {
          margin: 30px;
        }

        .btn {
          margin: 10px;
        }
       </style>
    <!--CSS-->

        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="POST">
            <div class="form-group">
                <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?></label>
                <div class="mb-3">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
               
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                
            </div>
            <div class="form-group">
                <label for="form-phone" class="col-lg-2 control-label"><?php echo $config->get('fields.phone'); ?></label>
               
                    <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="<?php echo $config->get('fields.phone'); ?>">
                
            </div>
            <div class="form-group">
                <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?></label>
               
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                
            </div>
            <div class="form-group">
                <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?></label>
               
                    <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><?php echo $config->get('fields.btn-send'); ?></button>
                </div>
                
            </div>
        </form>
    </div>
    <?php endif; ?>

    <script type="text/javascript" src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form');
    </script>

  <!--FORM-->

		</div>
	</div>
</div>



<?php require '../partials/footer.php' ?>