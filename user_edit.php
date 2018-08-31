<?php

session_start();
include 'inc/mixin.php';
include 'inc/mysql.php';
redirect_not_logged();

$userId = isset($_GET['ID']) ? (int)$_GET['ID'] : null;

if (!$userId) {
	$_SESSION['errors'][] = 'Informe o usuário para editar!';
	header('Location: users.php');
	exit;
}

$sql = "SELECT * FROM users WHERE id = '".$userId."' limit 1";
$result = msqli_query($link, $sql);

if (!msqli_num_rows($result)) {
	$_SESSION['errors'][] = 'Usuário não existe!';
	header('Location: users.php');
	exit;
}

$data = msqli_fetch_object($result);

$site = array(
    'title' => 'Editar Usuário'
);

include 'layout/header.php';

?>

<div class="container">
	<?php include 'inc/alerts.php'; ?>

	<p>Atualize as informações abaixo:</p>

<form action="user_edit_post.php" method="post">
	<div>
		<label>Nome</label>
		<input type="text" name="name" value="<?php echo $data->Name ?>">
	</div>

	<div>
		<label>E-mail</label>
		<input type="text" name="email" value="<?php echo $data->Email ?>">
	</div>

	<div>
		<label>Senha</label>
		<input type="password" name="password">
	</div>

	<div>
		<label>Salário</label>
		<input type="text" name="earning" value="<?php echo $data->earning ?>">
	</div>

	<div>
		<button type="submit" class="button">Salvar</button>
	</div>
</form>

</div>


<?php

include 'layout/footer.php';
