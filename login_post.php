<?php
include 'inc/mysql.php';
session_start();

 if (!$_POST) {
 header('Location: login.php');
 return;
 }


$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$errors = array();



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
	header('Location: login.php');
	return;
}


$sql = 'select * from users where email like "'.$email.'" limit 1';

if ($result = mysqli_query($link, $sql)) {
   

   if ($user = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $user['Password'])) {
	      $_SESSION['logged'] = true;
	      $_SESSION['current_user'] = $user;
	      $_SESSION['success'] = 'Você entrou com sucesso!';
      } else {
      	$_SESSION['errors'][] = 'Senha inválida!';
      }
  }

} else {
	$_SESSION['errors'][] = 'Nenhum usuário encontrado com esse endereço de e-mail!';
  
}

header('Location: login.php');
return;
