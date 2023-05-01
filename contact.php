<!doctype html>
<html>
	<head>
		<?php include("inc_head.php");?>
		<title>FEVA | Contact</title>
	</head>

	<body>
		<?php include("inc_header.php");?>
		<main>
			<section id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.4391569631644!2d114.15118707589134!3d22.33704097966025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34040753953a34c7%3A0x72d9457089d68c58!2sFeva%20Works%20IT%20Education%20Centre!5e0!3m2!1sen!2shk!4v1682595159058!5m2!1sen!2shk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section>
			
			<section id="form">
				<div class="container">
					<h1>Enquiry</h1>
					<form action="contact_submit.php" method="post">
						<fieldset>
							<label>Name</label>
							<input type="text" name="name" required>
						</fieldset>
						<fieldset>
							<label>Tel</label>
							<input type="tel" name="tel" required>
						</fieldset>
						<fieldset>
							<label>Email</label>
							<input type="email" name="email" required>
						</fieldset>
						<fieldset>
							<label>Message</label>
							<textarea name="message" required></textarea>
						</fieldset>
						<div class="btns">
							<button type="submit">Submit</button>
							<button type="reset">Reset</button>
						</div>
					</form>
					<?php
					echo($_COOKIE["msg"]);
					setcookie("msg","",time()-10);
					?>
				</div>
			</section>
		</main>
		
		<?php include("inc_footer.php");?>
		
	</body>
</html>




















