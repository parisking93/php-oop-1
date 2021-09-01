<!-- create un file index.php in cui:
è definita una classe ‘Movie’ => all'interno della classe sono dichiarate delle variabili d'istanza => all'interno della classe è definito un costruttore => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

// classe 
class Movie {
    public $title;
    public $genre;
    public $price;
    public $linkImage;
    public $vote;
    public $description;
    public $counter = 0;
    public $sumVote;

    // costruttore 
    function __construct($_title, $_genre, $_price){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->price = $_price . '$';
    }

    // metodi 

    //do il voto  al film
    public function setVote($vote) {
        $this->sumVote += $vote;
        $this->counter += 1;
        $this->vote = round($this->sumVote / $this->counter,2);
    }

    //prendo il voto del film
    public function getVote() {
        return $this->vote;
    }
    // fine metodi 

}
// fine classe 



$movie1 = new Movie('Matrix', 'Action', 35);
$movie2 = new Movie('Pokemon', 'Animation', 12);
$avgVote = $movie1-> setVote(5);
$avgVote = $movie1-> setVote(5);
$avgVote = $movie1-> setVote(2);

for($i = 1; $i <= 10; $i++) {
    $avgVote2 = $movie2-> setVote(rand(1,10));
}
$avgVote2 = $movie2-> getVote();

echo 'Media voto Movie ' . $avgVote2;

var_dump($movie1);
var_dump($movie2);

?>