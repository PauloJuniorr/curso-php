<?php

session_start();
include 'inc/mixin.php';


$site = array(
    'title' => 'Login'
);

include 'layout/header.php';

?>

<div class="container">
	<?php include 'inc/alerts.php'; ?>

	<p>Faça seu login abaixo:</p>

<form action="login_post.php" method="post">


	<div>
		<label>E-mail</label>
		<input type="text" name="email">
	</div>

	<div>
		<label>Senha</label>
		<input type="password" name="password">
	</div>


	<div>
		<button type="submit" class="button">Entrar</button>
	</div>
</form>

</div>


<?php

include 'layout/footer.php';
