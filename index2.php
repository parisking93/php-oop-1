<!-- create un file index.php in cui:
è definita una classe ‘Movie’ => all'interno della classe sono dichiarate delle variabili d'istanza => all'interno della classe è definito un costruttore => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

class Movie {
    public $title;
    public $genre;
    public $price;
    public $link_image;
    public $vote;
    public $description;

    function __construct($_title, $_genre, $_price){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->price = $_price . '$';
    }

}

$movie1 = new Movie('Matrix', 'Action', 35);
$movie2 = new Movie('Pokemon', 'Animation', 12);

var_dump($movie1);
var_dump($movie2);

?>