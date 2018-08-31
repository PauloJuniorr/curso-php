<?php
session_start();
include 'inc/mixin.php';
include 'inc/mysql.php';
redirect_not_logged();

$sql = 'SELECT * from users';

$result = mysqli_query($link, $sql);


$site = array(
    'title' => 'Usuários'
);

include 'layout/header.php';

?>

<div class="container">
	<?php include 'inc/alerts.php'; ?>

	<a href="new_user.php" class="button">Cadastrar Usuário</a>

	<?php if (mysqli_num_rows($result)) : ?>

    <table>
    	<thead>
    		<tr>
    			<th class="align-left">#</th>
    			<th class="align-left">Nome</th>
    			<th class="align-left">E-mail</th>	
    			<th class="align-right">Salário</th>	
    			<th class="align-left">Ações</th>
    			
    		</tr>
    	</thead>
    	<tbody>
    		<?php while ($user = mysqli_fetch_object($result)) : ?>
    		<tr>
    			<td class="align-left"><?php echo $user->ID ?></td>
    			<td class="align-left"><?php echo $user->Name ?></td>
    			<td class="align-left"><?php echo $user->Email ?></td>
    			<td class="align-right">R$<?php echo number_format ($user->earning, 2, ',', '.') ?></td>
    			<td>
    				<a href="user_edit.php?id=<?php echo $user->ID ?>" class="button">Editar</a>
    			</td>
    		</tr>
    	<?php endwhile ?>
    	</tbody>
    </table>

	<?php endif ?>

</div>


<?php

include 'layout/footer.php';
