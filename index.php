<?php

class Movie
{
  public $title;
  public $regia;
  public $year;
  public $genres = [];

  function __construct($_title)
  {
    $this->title = $_title;
  }

  public function getMovieInfo() {
    $genres = $this->getGenreInfo($this->genres);
    echo "Titolo del film: $this->title<br>Regia: $this->regia<br>Anno: $this->year<br>Generi: $genres<br><br>";
  }

  public function getGenreInfo($_genres) {
    $result = '';
    foreach ($_genres as $index=>$genre) {
      
      $result = $index === 0 ? $result .= $genre : $result .= " - $genre";
    }
    return $result;
  }
}

$titanic = new Movie("Titanic");

$titanic->regia = "James Cameron";
$titanic->year = 1997;
$titanic->genres[] = "Romantico";
$titanic->genres[] = "Disastro";

$avatar = new Movie("Avatar");

$avatar->regia = "James Cameron";
$avatar->year = 2009;
$avatar->genres[] = "Azione";
$avatar->genres[] = "Avventura";
$avatar->genres[] = "Fantastico";

$titanic->getMovieInfo();
$avatar->getMovieInfo();