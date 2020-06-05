<?php
/**
 * Creazione di una classe ‘Movie’
    Dichiarazione delle proprietà della classe
    Dichiarazione del costruttore
    Dichiarazione di almeno un metodo
    Fare poi degli esempi di utilizzo della classe istanziando almeno due oggetti e stampando a schermo il valore delle proprietà
*/

class Movie {
    public $title;
    public $director;
    public $language;
    public $genre;
    public $rating;
    public $duration;
    public $year;
    public $support;
    public $price;

    // Construct
    public function __construct($_title, $_director, $_language, $_genre, $_rating, $_duration, $_year, $_support, $_price) {
        $this->title = $_title;
        $this->director = $_director;
        $this->language = $_language;
        $this->genre = $_genre;
        $this->rating = $_rating;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->support = $_support;
        $this->price = number_format($_price, 2);
    }

    // method
    public function discount($perc) {
        $discount = $this->price * $perc / 100;
        $discount_price = $this->price - $discount;
        
        return number_format($discount_price, 2);
    }

    public function print() {
        echo "<li> <span>Titolo:</span>$this->title </li>
                <li> <span>Regista:</span> $this->director </li>
                <li> <span>Lingua:</span> $this->language </li>
                <li> <span>Genere:</span> $this->genre </li>
                <li> <span>Voto:</span> $this->rating </li>
                <li> <span>Durata:</span> $this->duration </li>
                <li> <span>Anno:</span> $this->year </li>
                <li> <span>Supporto:</span> $this->support </li>
                <li> <span>Prezzo:</span> $this->price € </li>
                <li> <span>Prezzo Scontato del 20%: </span>{$this->discount(20)} € </li>";
    }
}

// instance object
$movie1 = new Movie('Pulp Fiction', 'Quentin Tarantino', 'Eng', 'Drammatico', '8,9/10', 154, 1994, 'DVD', 8);
$movie2 = new Movie('Il Padrino ', 'Francis Ford Coppola', 'Eng', 'Noir', '9,2/10', 175, 1972, 'BluRay', 12);
$movie3 = new Movie('Le ali della libertà', 'Frank Darabont', 'Eng', 'Drammatico', '9,3/10', 142, 1994, 'DVD', 9);
$movie4 = new Movie('Apocalypse Now', 'Francis Ford Coppola', 'Eng', 'Drammatico', '8,4/10', 202, 1979, 'BluRay', 10.90);
$movie5 = new Movie('Ritorno al futuro', 'Robert Zemeckis', 'Eng', 'Fantascienza', '8,5/10', 116, 1985, 'DVD', 7.99);

// display
// echo "<strong>Titolo:</strong> $movie1->title <br>
// <strong>Regista:</strong> $movie1->director <br>
// <strong>Lingua:</strong> $movie1->language <br>
// <strong>Genere:</strong> $movie1->genre <br>
// <strong>Voto:</strong> $movie1->rating <br>
// <strong>Durata:</strong> $movie1->duration <br>
// <strong>Anno:</strong> $movie1->year <br>
// <strong>Supporto:</strong> $movie1->support <br>
// <strong>Prezzo:</strong> $movie1->price € <br>
// <strong>Prezzoscontato al 20%:</strong> {$movie1->discount(20)} € <br>";