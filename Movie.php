<?php

class Movie
{
    public $title;
    public $movie_director;
    public $actors = [];
    public $screenwriter;
    public $production_companies;
    public $genres = [];
    public $hours;
    public $price;
    public $poster;

    public function __construct(string $title, string $movie_director, array $actors)
    {
        $this->title = $title;
        $this->movie_director = $movie_director;
        $this->actors = $actors;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getMovieDirector()
    {
        return $this->movie_director;
    }
    public function setMovieDirector($movie_director)
    {
        $this->movie_director = $movie_director;
    }

    public function getActors()
    {
        return $this->actors;
    }
    public function setActors(array $actors)
    {
        $this->actors = $actors;
    }

    public function getScreenWriter()
    {
        return $this->screenwriter;
    }
    public function setScreenWriter($screenwriter)
    {
        $this->screenwriter = $screenwriter;
    }

    public function getProductionHouse()
    {
        return $this->production_companies;
    }
    public function setProductionHouse($production_companies)
    {
        $this->production_companies = $production_companies;
    }

    public function getGenres()
    {
        return $this->genres;
    }
    public function setGenres(array $genres)
    {
        $this->genres = $genres;
    }

    public function getHours()
    {
        return $this->hours;
    }
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
}

$movie = new Movie('Django Unchained', 'Quentin Tarantino', ['Jamie Foxx',  'Christoph Waltz', 'Leonardo DiCaprio', 'Samuel L. Jackson']);





$movie2 = new Movie('Seven', 'David Fincher', ['Brad Pitt',  'Kevin Spacey', 'Morgan Freeman']);
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
    <?php
    $title = $movie->getTitle();
    $movieDirector = $movie->getMovieDirector();
    $movie->setGenres(['Western', 'Azione', 'Drammatico', 'Avventura']);
    $genres = $movie->getGenres(); ?>
    <h1 style="color: red"><?= $title ?></h1>
    <h3>Regia di: <?= $movieDirector ?></h3>
    <?php
    foreach ($genres as $genre) { ?>
        <h5><?= $genre ?></h5>
    <?php } ?>

    <?php
    $actors = $movie->getActors();
    foreach ($actors as $actor) { ?>
        <ul>
            <li><?= $actor ?></li>
        </ul>
    <?php } ?>

    <?php
    $title = $movie2->getTitle();
    $movieDirector = $movie2->getMovieDirector();
    $movie2->setGenres(['Thriller psicologico', 'Giallo', 'Noir']);
    $genres = $movie2->getGenres(); ?>
    <h1 style="color: red"><?= $title ?></h1>
    <h3>Regia di: <?= $movieDirector ?></h3>
    <?php
    foreach ($genres as $genre) { ?>
        <h5><?= $genre ?></h5>
    <?php } ?>
    <?php
    $actors = $movie2->getActors();
    foreach ($actors as $actor) { ?>
        <ul>
            <li><?= $actor ?></li>
        </ul>
    <?php } ?>

</body>

</html>