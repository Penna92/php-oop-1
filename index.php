<?php
require_once __DIR__ . '/Classes/Movie.php';

$movies = [
    [
        'title' => 'Fantozzi - il ritorno',
        'genre' => 'Comedy',
        'date' => '1992',
        'original_language' => 'Italiano',
        'price' => '6,00'
    ],
    [
        'title' => 'Tre uomini e una gamba',
        'genre' => 'Comedy',
        'date' => '1997',
        'original_language' => 'Italiano',
        'price' => '5,99'
    ],
    [
        'title' => 'Il signore degli anelli - Il ritorno del re',
        'genre' => 'Fantasy',
        'date' => '2003',
        'original_language' => 'Inglese',
        'price' => '22,80'
    ],
    [
        'title' => 'Midsommar - Il villaggio dei dannati',
        'genre' => 'Horror',
        'date' => '2019',
        'original_language' => 'Inglese',
        'price' => '12,99'
    ],
    [
        'title' => 'Terminator',
        'genre' => 'Action',
        'date' => '1984',
        'original_language' => 'Inglese',
        'price' => '16,00'
    ],
    [
        'title' => 'The Northman',
        'genre' => 'Adventure/Action',
        'date' => '2022',
        'original_language' => 'Inglese//Norrena',
        'price' => '12,99'
    ],
    [
        'title' => 'Nobody - Io sono nessuno',
        'genre' => 'Action/Thriller',
        'date' => '2021',
        'original_language' => 'Inglese',
        'price' => '15,94'
    ],
    [
        'title' => 'Quo vado?',
        'genre' => 'Comedy',
        'date' => '2016',
        'original_language' => 'Italiano',
        'price' => '7,75'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Movies</title>
</head>

<body class="d-flex flex-column justify-content-center align-items-center gap-5">
    <h1 class="text-center text-danger mt-5">FILM DA NON PERDERE</h1>
    <div class="container row justify-content-around">
        <?php
        foreach ($movies as $key => $value) {
            $movie = new Movie($value['title'], $value['genre'], $value['date'], $value['original_language']);
            // var_dump($movie);
            $movie->setPrice($value['price']);
            // $movies[] = $movie; // potrei anche pushare le macchine così
        ?>
            <div class="card text-center d-flex flex-column justify-content-center col-sm-12 col-md-6 col-lg-4 mx-3 my-3 p-5 gap-3">
                <h3>Title: <?php echo $movie->getTitle() ?></h3>
                <h4>Genre: <?php echo $movie->getGenre() ?></h4>
                <h4>Date: <?php echo $movie->getDate() ?></h4>
                <h4>Original language: <?php echo $movie->getOriginal_Language() ?></h4>
                <h5 class="text-danger">Price: <?php echo "{$movie->getPrice()} &euro;" ?></h5>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>