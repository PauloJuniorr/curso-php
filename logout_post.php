<?php
session_start();

include 'inc/mixin.php';
redirect_not_logged();



	unset($_SESSION['current_user']);
    unset($_SESSION['logged']);

	$_SESSION['success'] = 'Usuário Deslogado!';
	header('Location: login.php');
