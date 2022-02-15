<?php

class Movie
{
    public $title;
    public $movie_director;
    public $actors = [];
    public $screenwriter;
    public $production_companies;
    public $genres;
    public $hours;
    public $price;
    public $poster;

    public function __construct(string $title, string $movie_director, array $actors)
    {
        $this->title = $title;
        $this->author = $movie_director;
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
    public function setActors($actors)
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
    public function setGenres($genres)
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

$book = new Movie('Django Unchained', 'Quentin Tarantino', ['Jamie Foxx',  'Christoph Waltz', 'Leonardo DiCaprio', 'Samuel L. Jackson']);
