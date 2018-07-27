<?php

$site = array(
    'title' => 'Novo Usuário'
);

include 'layout/header.php';

?>

<div class="container">
	<p>Adicione abaixo um novo usuário</p>

<form action="new_user_post.php" method="post">
	<div>
		<label>Nome</label>
		<input type="text" name="name">
	</div>

	<div>
		<label>E-mail</label>
		<input type="email" name="email">
	</div>

	<div>
		<label>Senha</label>
		<input type="password" name="password">
	</div>

	<div>
		<label>Salário</label>
		<input type="text" name="earning">
	</div>

	<div>
		<button type="submit" class="button">Salvar</button>
	</div>
</form>

</div>


<?php

include 'layout/footer.php';
