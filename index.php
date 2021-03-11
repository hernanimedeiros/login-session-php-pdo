<?php include("./includes/config.php");?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<?php include("./includes/head_tags.php");?>
	<?php include("./includes/link_top.php");?>
</head>
<body>
	<?php include("./includes/header_caroussel.php");?>
	<?php include("./includes/navigation.php");?>
	<section id="newsletter" class="container-fluid dark-mode my-5 py-3">
		<h4 class="text-center">Receba dicas, cupons de desconto e outras promoções</h4>
		<form class="form-inline justify-content-center my-4" action="send_mail.php" method="POST">
			<label for="text" class="mr-sm-2"></label>
			<input name="newsletter_user" type="text" class="form-control mb-2 mr-sm-2 w-25" placeholder="O seu Nome ou Empresa" id="newsletter_id" required>
			<label for="email" class="mr-sm-2"></label>
			<input name="newsletter_email" type="email" class="form-control mb-2 mr-sm-2 w-25" placeholder="O seu melhor mail" id="newsletter_email" required>
			<button type="submit_newsletter" class="btn btn-success shadow-sm mb-2">Subscrever</button>
		</form>
	</section>
<?php include("./includes/footer.php");?>
<?php include("./includes/link_bottom.php");?>
</body>
</html>
