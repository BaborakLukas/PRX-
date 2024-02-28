<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON to HTML Table</title>
    <link rel="stylesheet" href="validate.css">
</head>
<body>
<div class="knihovna"><img src="logo.jpg" alt="knihovna"></div>
<?php
$jsonString = file_get_contents('database1.json');
$data = json_decode($jsonString, true);

if ($data !== null && isset($data['books'])) {
    echo '<div class="stul">';
    echo '<table border="1">';
    echo '<tr><th>Titul</th><th>Žánr</th><th>Autor</th><th>Info</th></tr>';

    $rowCounter =   1;

    foreach ($data['books'] as $book) {
        echo '<tr>';
        
        echo '<td>' . (isset($book['title']) ? $book['title'] : '') . '</td>';
        echo '<td>' . (isset($book['genre']) ? $book['genre'] : '') . '</td>';
        echo '<td>' . (isset($book['author']) ? $book['author'] : '') . '</td>';
        
        switch ($rowCounter) {
            case  1:
                $infoLink = 'kniha1.html';
                break;
            case  2:
                $infoLink = 'kniha2.html';
                break;
            case  3:
                $infoLink = 'kniha3.html';
                break;
            default:
                $infoLink = '#';
        }

        
        echo '<td><a target=”_blank” href="' . $infoLink . '">More Info</a></td>';
        
        echo '</tr>';

        
        $rowCounter++;
    }

    echo '</table>';
} else {
    echo 'Error decoding JSON or missing "books" key';
}
?>

</body>
</html>
