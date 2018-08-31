<?php
session_start();
include 'inc/mixin.php';

$site = array(
    'title' => 'Login'
);
include 'layout/header.php';

?>

<!DOCTYPE html>
<html>
<head>

	<div class="container">
		<?php include 'inc/alerts.php'; ?>

		<p>Deslogue aqui em baixo!</p>

		<form action="logout_post.php" method="post">
		
		<input type="submit" name="logout" id="submit" value="logout" class="button" />
    </form>
	</div>
    
</head>

</body>
</html>

<?php include 'layout/footer.php';?>