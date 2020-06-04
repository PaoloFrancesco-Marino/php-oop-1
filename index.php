<?php 
// include
include __DIR__ . '/movies.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h2>Movies</h2>

    <ul class="movie">
        <li><img src="https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UY268_CR1,0,182,268_AL_.jpg" alt="pulp fiction"></li>
        <li><span>Titolo:</span> <?php echo $movie1->title?></li>
        <li><span>Regista:</span> <?php echo $movie1->director?></li>
        <li><span>Lingua:</span> <?php echo $movie1->language?></li>
        <li><span>Genere:</span> <?php echo $movie1->genre?></li>
        <li><span>Voto:</span> <?php echo $movie1->rating?></li>
        <li><span>Durata:</span> <?php echo $movie1->duration?> min</li>
        <li><span>Anno:</span> <?php echo $movie1->year?></li>
        <li><span>Supporto:</span> <?php echo $movie1->support?></li>
        <li><span>Prezzo:</span> <?php echo $movie1->price?> €</li>
        <li><span>Prezzo Scontato del 20%:</span> <?php echo $movie1->discount(20)?> €</li>
    </ul>
    <ul class="movie">
        <li><img src="https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UY268_CR3,0,182,268_AL_.jpg" alt="Il padrino"></li>
        <li><span>Titolo:</span> <?php echo $movie2->title?></li>
        <li><span>Regista:</span> <?php echo $movie2->director?></li>
        <li><span>Lingua:</span> <?php echo $movie2->language?></li>
        <li><span>Genere:</span> <?php echo $movie2->genre?></li>
        <li><span>Voto:</span> <?php echo $movie2->rating?></li>
        <li><span>Durata:</span> <?php echo $movie2->duration?> min</li>
        <li><span>Anno:</span> <?php echo $movie2->year?></li>
        <li><span>Supporto:</span> <?php echo $movie2->support?></li>
        <li><span>Prezzo:</span> <?php echo $movie2->price?> €</li>
        <li><span>Prezzo Scontato del 20%:</span> <?php echo $movie2->discount(20)?> €</li>
    </ul>
    <ul class="movie">
        <li><img src="https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="le ali della libertà"></li>
        <li><span>Titolo:</span> <?php echo $movie3->title?></li>
        <li><span>Regista:</span> <?php echo $movie3->director?></li>
        <li><span>Lingua:</span> <?php echo $movie3->language?></li>
        <li><span>Genere:</span> <?php echo $movie3->genre?></li>
        <li><span>Voto:</span> <?php echo $movie3->rating?></li>
        <li><span>Durata:</span> <?php echo $movie3->duration?> min</li>
        <li><span>Anno:</span> <?php echo $movie3->year?></li>
        <li><span>Supporto:</span> <?php echo $movie3->support?></li>
        <li><span>Prezzo:</span> <?php echo $movie3->price?> €</li>
        <li><span>Prezzo Scontato del 20%:</span> <?php echo $movie3->discount(20)?> €</li>
    </ul>
    <ul class="movie">
        <li><img src="https://m.media-amazon.com/images/M/MV5BMDdhODg0MjYtYzBiOS00ZmI5LWEwZGYtZDEyNDU4MmQyNzFkXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="apocalypse now"></li>
        <li><span>Titolo:</span> <?php echo $movie4->title?></li>
        <li><span>Regista:</span> <?php echo $movie4->director?></li>
        <li><span>Lingua:</span> <?php echo $movie4->language?></li>
        <li><span>Genere:</span> <?php echo $movie4->genre?></li>
        <li><span>Voto:</span> <?php echo $movie4->rating?></li>
        <li><span>Durata:</span> <?php echo $movie4->duration?> min</li>
        <li><span>Anno:</span> <?php echo $movie4->year?></li>
        <li><span>Supporto:</span> <?php echo $movie4->support?></li>
        <li><span>Prezzo:</span> <?php echo $movie4->price?> €</li>
        <li><span>Prezzo Scontato del 20%:</span> <?php echo $movie4->discount(20)?> €</li>
    </ul>
    <ul class="movie">
        <li><img src="https://m.media-amazon.com/images/M/MV5BZmU0M2Y1OGUtZjIxNi00ZjBkLTg1MjgtOWIyNThiZWIwYjRiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="ritorno al futuro"></li>
        <li><span>Titolo:</span> <?php echo $movie5->title?></li>
        <li><span>Regista:</span> <?php echo $movie5->director?></li>
        <li><span>Lingua:</span> <?php echo $movie5->language?></li>
        <li><span>Genere:</span> <?php echo $movie5->genre?></li>
        <li><span>Voto:</span> <?php echo $movie5->rating?></li>
        <li><span>Durata:</span> <?php echo $movie5->duration?> min</li>
        <li><span>Anno:</span> <?php echo $movie5->year?></li>
        <li><span>Supporto:</span> <?php echo $movie5->support?></li>
        <li><span>Prezzo:</span> <?php echo $movie5->price?> €</li>
        <li><span>Prezzo Scontato del 20%:</span> <?php echo $movie2->discount(20)?> €</li>
    </ul>
    
</body>
</html>