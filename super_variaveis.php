<?php

session_start();

// var_dump($_SERVER['REMOTE_ADDR']);
// $_SESSION['is_logged'] = true;

var_dump($_GET);

var_dump($_POST);

var_dump($_FILES);

var_dump($_REQUEST);

var_dump($_SESSION);

var_dump($_ENV);

var_dump($_COOKIE);

	// header('Location: ' . $url);
	// exit;
}

?>

<form method="post">
	<input type="text" name="name">
	<input type="text" name="email">
	<input type="text" name="message">

   <input type="file" name="arquivo">

   <button type="submit">Enviar</button>
</form>