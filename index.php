<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
        $sentence = "The main body of a book";
        $uppercaseSentence = strtoupper($sentence);
        $lowercaseSentence = strtolower($sentence);
        echo $uppercaseSentence . "<br><br>";
        echo $lowercaseSentence  . "<br><br>"; 
        $newSentence = str_replace("book", "collage", $sentence);
        echo  $newSentence . "<br><br>";
        $length = strlen($sentence);
        echo $length . "<br><br>";
        for ($i = 0; $i < strlen($sentence); $i++) {
            if ($sentence[$i] === 'm') {
                echo $sentence[$i] . "<br>";
            }
        }
        ?>
    </p>
</body>
</html>
