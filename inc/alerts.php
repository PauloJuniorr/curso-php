<?php
   $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : null;
   $success = isset($_SESSION['success']) ? $_SESSION['success'] : null;
?>

<?php if ($errors) : ?>
	<?php unset($_SESSION['errors']) ?>
      <div class="alert alert-error">
      	<?php foreach ($errors as $erro): ?>
      		<p><?php echo $erro ?></p>
      	<?php endforeach ?>
      </div>
<?php endif ?>

<?php if ($success) : ?>
	<?php unset($_SESSION['success']) ?>
      <div class="alert alert-success">
      	<?php echo $success ?>
      </div>
<?php endif ?>

