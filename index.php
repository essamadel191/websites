
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

        $filteredBooks = filterByAuthor($books2,'Andy Weir');
    
       
      

        $path = "/home/essam/test1/websites2/";
    require '/home/essam/test1/websites2/index.view.php';

    ?>