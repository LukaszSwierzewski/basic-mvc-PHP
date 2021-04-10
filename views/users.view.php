<?php require('views/partials/head.php'); ?>
<?php require('views/partials/nav.php'); ?>

<form method='POST' action='/php-basic/users'>

    <input tyle='text' name='name'>
    <input type='email' name='email'>

    <button type='submit'>SUbmit</button>

</form>



<?php foreach ($users as $user) : ?>
    <p>
        <?php echo $user->show_user(); ?>
    </p>
<?php endforeach ?>