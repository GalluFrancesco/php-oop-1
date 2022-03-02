<?php

class Movie{
    private string  $title;
    private int     $year;
    private float   $rating;

    function __construct($title, $year, $rating){
        $this->title = $title;
        $this->year = $year;
        $this->rating = $rating;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getYear(){
        return $this->year;
    }

    public function getRating(){
        return $this->rating;
    }
}
$movies=[];
$movie1= new Movie("Il Signore degli Anelli I: La Compagnia dell'Anello", 2001, 9.5);
$movies[]=$movie1;
$movie2= new Movie("Il Signore degli Anelli II: Le Due Torri", 2002, 9.4);
$movies[]=$movie2;
$movie3= new Movie("Il Signore degli Anelli III: Il Ritorno del Re ", 2003, 9.3);
$movies[]=$movie3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width:400px;">
        <?php
            foreach ($movies as $movie) {
                echo "<div>Titolo :". $movie->getTitle()."</div>";
                echo "<div>Anno :". $movie->getYear()."</div>";
                echo "<div>Voto :". $movie->getRating()."</div>";
                echo "<hr>";
            }
        ?>
    </div>
</body>
</html>