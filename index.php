<?php

class Movie
{
  public $title;
  public $regia;
  public $year;

  function __construct($title)
  {
    $this->title = $title;
  }

  public function getMovieInfo() {
    echo "Titolo del film: $this->title<br>Regia: $this->regia<br>Anno:$this->year<br>";
  }
}

$titanic = new Movie("Titanic");

$titanic->regia = "James Cameron";
$titanic->year = 1997;

$avatar = new Movie("Avatar");

$avatar->regia = "James Cameron";
$avatar->year = 2009;

$titanic->getMovieInfo();
$avatar->getMovieInfo();