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