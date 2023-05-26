<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recommended books</h1>
    <?php
        $books = [
            [
                'name' => 'Do Androids of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ]
        ];

        function filter($items, $fn) {
            $result = [];

            foreach ($items as $item) {
                if ($fn($item)) {
                    $result[] = $item;
                }
            }

            return $result;
        }

        // $filteredBooks = $filterByAuthor($books, 'author', 'Philip K. Dick');
        $filteredBooks = filter($books, function($book) {
            return $book['releaseYear'] == 1968;
        });
    ?>
    <ul>
        <?php foreach($filteredBooks as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
                    by <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>