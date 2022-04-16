<!DOCTYE HTML>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href = "about.php">About Page</a></li>
            <li><a href = "contact.php">Contact Page</a></li>
        </ul>
    </nav>


    <?php foreach ($tasks as $task): ?>
        <li>
            <?php if ($task->completed): ?>
                <strike><?=$task->description;?></strike>

            <?php else: ?>
            <?=$task->description;?>
            <?php endif;?>
        </li>
        <?php endforeach;?>
</body>

</html>
