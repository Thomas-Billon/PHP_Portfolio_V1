<section id="contact">
	<div class="line-container-left"><div class="line-decoration-left"></div></div>
	<div class="contact-main-title">
		<i class="fa fa-envelope" aria-hidden="true"></i>
		<h2>Envoyez moi un mail !</h2>
		<i class="fa fa-reply" aria-hidden="true"></i>
	</div>
	<div class="line-container-right"><div class="line-decoration-right"></div></div>
	<p class="text_contact">Je suis ouvert à toutes suggestions &amp; offres d'emploi !</p>
	<div class="contact-container">
		<form class="contact-form" action="content/contact_form_ajax.php" method="POST">
			<input class="contact-form-input contact-form-name" type="name" name="name" autocomplete="on" placeholder="Votre Nom" required />
			<input class="contact-form-input contact-form-email" type="email" name="email" autocomplete="on" placeholder="Votre Email" required />
			<textarea class="contact-form-input contact-form-message" name="message" rows="4" maxlength="1000" placeholder="Votre Message" required></textarea>
			<button class="contact-form-send" type="submit" name="submit">Envoyer !</button>
		</form>
	</div>
</section>