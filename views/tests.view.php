<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: red;

        }

        header {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
    </style>
</head>

<body>



    ---klasowy list

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <?php if ($task->completed) : ?>

                <strike>
                <?php endif; ?>
                <li><?php echo $task->description; ?></li>
                <?php if ($task->completed) : ?>

                </strike>
            <?php endif; ?>
        <?php endforeach; ?>

    </ul>
    </header>
</body>

</html>