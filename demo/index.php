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
    <h1>
        <?php
            $greeting = "Hello";
            # single quotation is alot different from the double quotation
            echo " Test  $greeting" ;

        ?>
    </h1>
    
    <?php
        $name = "Dark Matter";
        $read = true;
        
        if ($read) {
            $message = "You have read $name";
        }
        else {
            $message = "You have NOT read $name";   
        }
    ?>

    <h1 id=b>
        <?php echo $message; ?>

        <!-- Short Version to echo --->
        <?= $name; ?>
    </h1>

    <!-- Array --->
    <h1>Recommended Books</h1>
    <?php
        $books = ["Do Androids Dream of Electric Sheep" ,
            "The Langoliers", "Hail Mary"
    ]; 
    ?>
    <ul>
        <?php foreach ($books as $book) {
            echo "<li>{$book}™</li>"; 
        } ?>  
        <br>
        <li>Test Foreach version 2</li>
        <br>
        <?php foreach ($books as $book) : ?>
            <li> <?=$book ?> </li>
        <?php endforeach; ?>
    </ul>
    <br>
    <br>
    <!-- Associative Array --->
    <?php
        $books2 =[
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => '1968',
                'purchaseUrl' => 'https://www.test.com'
            ],
            [   
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => '1968',
                'purchaseUrl' => 'https://www.test1.com'
            ],
            [   
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => '2011',
                'purchaseUrl' => 'https://www.test3.com'
            ]
        ];

        //  Functions & Filters
        function filterByAuthor($books2, $author) {
            $filteredBooks =[];

            foreach ($books2 as $book) {
                if($book['author'] === 'Andy Weir'){
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
        
        function filterByYear($books2, $year) {
            $filteredBooks =[];

            foreach ($books2 as $book) {
                if($book['releaseYear'] === $year){
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }

        function filter($items, $key , $value){
            $filteredItems = [];
            foreach ($items as $item) {
                if($item[$key] === $value)
                    $filteredItems[] = $items;
            }
            return $filteredItems;
        }
        
    ?>

    <ul>
        <?php foreach ($books2 as $book2) : ?>
            <?php if ($book2['author'] === 'Andy Weir') : ?>
                <li>
                    <a href="<?=$book2['purchaseUrl']?>">
                        <?= $book2['name']; ?> (<?=$book2['releaseYear'] ?>) - <?=$book2['author'] ?> 
                    </a>
                </li>
            <?php endif; ?>    
        <?php endforeach; ?>
    </ul>
    
    <br>
    <br>
    <h1>Test with functions</h1>
    <br>
    <!-- Functions & Filters --->
    <ul>
        <?php foreach (filterByAuthor($books2,'Andy Weir') as $book2) : ?>
            <li>
                    <a href="<?=$book2['purchaseUrl']?>">
                        <?= $book2['name']; ?> (<?=$book2['releaseYear'] ?>) - <?=$book2['author'] ?> 
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>

    <br>
    <br>
    <h1>Being more generic</h1>
    <br>
    <ul>
        <?php foreach (filter($books2,'author','Andy Weir') as $book2) : ?>
            <li>
                    <a href="<?=$book2['purchaseUrl']?>">
                        <?= $book2['name']; ?> (<?=$book2['releaseYear'] ?>) - <?=$book2['author'] ?> 
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>

    
</body>
</html>