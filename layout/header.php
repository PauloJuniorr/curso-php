<!DOCTYPE html>
<html>
<head>
	<title<?php echo $site['title'] ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<h1><?php echo $site['title'] ?></h1>
		<?php if ($user = current_user()) : ?>
			<p>Bem vindo <?php echo $user['Name'] ?></p>
		<?php endif ?>
	</header>