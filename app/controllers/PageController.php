<?php
/**
 * Created by PhpStorm.
 * User: hamze
 * Date: 11/26/2018
 * Time: 11:14 AM
 */

namespace App\Controllers;
use App\models\Movie;
use Framework\Controller;

class PageController extends Controller
{
    public function aboutUsAction()
    {
        $text="Hello";
        echo $text;
    }

    public function viewMovieList()
    {
        $movie = new Movie();
        //dump($movie);
        $movies=$movie->getAll();
        dump($movies);
        $i=0;
        $movieObjs=array();
        foreach ($movies as $m)
        {
            $mov = new Movie();
            $mov->setId($m->Id);
            $mov->setId($m->id);
            $mov->setTitle($m->Title);
            $mov->setDescription($m->Description);
            $mov->setRating($m->Rating);

            $movieObjs[$i] = $mov;
            $i++;
        }
        $moviesString ="";
        foreach ($movieObjs as $mo)
        {
            $moviesString.=$mo.'\n';
        }
        return $this->view("page/movieList.html",["movies"=>$moviesString]);
    }

    public function viewMovie($id)
    {
        $movie = new Movie();
        $movieDetail = $movie->get($id);
        $movie->setId($movieDetail->id);
        $movie->setTitle($movieDetail->Title);
        $movie->setDescription($movieDetail->Description);
        $movie->setRating($movieDetail->Rating);

        return $this->view("page/movie.html",["movie" =>$movie]);
    }
}