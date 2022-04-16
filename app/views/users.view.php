<title>All Users</title>
<header><h1>All Users</h1></header>
<?php require 'partials/head.php';?>

<?php foreach ($users as $user): ?>

    <li><?=$user->name;?></li>


<?php endforeach;?>

<form method="POST" action="/users">
    <input type="text" name="name"></input>
    <button type="submit">Send</button>
</form>
<?php require 'partials/footer.php';?>
