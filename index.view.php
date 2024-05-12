<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body #b {
            display: grid;
            place-items: center;
            height: 10vh;
            margin: 0;
            font-family: sans-serif; 
        }
    </style>

</head>
<body>

    <br>
    <br>
    <h1>Test with functions</h1>
    <br>
    <!-- Functions & Filters --->
    <ul>
        <?php foreach ($filteredBooks as $book2) : ?>
            <li>
                    <a href="<?=$book2['purchaseUrl']?>">
                        <?= $book2['name']; ?> (<?=$book2['releaseYear'] ?>) - <?=$book2['author'] ?> 
                    </a>
                </li>z
        <?php endforeach; ?>
    </ul>
    <br>
    <br>
    <h1>Test with Lambda Functions</h1>
    <br>
    <!-- Lambda Functions --->
    <ul>
        <?php foreach ($filteredBooks2 as $book2) : ?>
            <li>
                    <a href="<?=$book2['purchaseUrl']?>">
                        <?= $book2['name']; ?> (<?=$book2['releaseYear'] ?>) - <?=$book2['author'] ?> 
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>
    

</body>
</html>