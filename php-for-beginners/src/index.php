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
            "Do Androids of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ];
    ?>
    <ul>
        <?php foreach($books as $book) {
            echo "<li>".$book."</li>"
        }
        ?>
    </ul>
</body>
</html>