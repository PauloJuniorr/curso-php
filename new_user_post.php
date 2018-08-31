<?php
include 'inc/mysql.php';
session_start();

 if (!$_POST) {
 header('Location: new_user.php');
 return;
 }

$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$earning = isset($_POST['earning']) ? $_POST['earning'] : null;

$errors = array();

if (!$name) {
	$errors[] = 'Campo nome é obrigatório!';
}

if (!$email) {
	$errors[] = 'Campo e-mail é obrigatório!';
} else {
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = 'Endereço de e-mail é invalido!';
	}
}

if (!$password) {
	$errors[] = 'Campo senha é obrigatório!';
}

if (count($errors)) {
	$_SESSION['errors'] = $errors;
	header('Location: new_user.php');
	return;
}


$sql = 'INSERT INTO users (name, email, password, earning) 
VALUES
("'.$name.'", "'.$email.'", "'.password_hash($password, PASSWORD_BCRYPT).'", "'.$earning.'");
';

if (mysqli_query($link, $sql)) {
	$_SESSION['success'] = 'Novo usuário salvo com sucesso!';
} else {
	$_SESSION['errors'][] = 'Ocorreu um problema ao salvar o usuário. Favor tentar novamente ou entre em contato.';
}

header('Location: new_user.php');
return;
