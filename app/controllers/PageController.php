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
    public function homeAction()
    {
        return $this->view("page/homePage.html");
    }

    public function viewMovieList()
    {
        $movie = new Movie();
        //dump($movie);
        $movies=$movie->getAll();

        return $this->view("page/movieList.html",["movies"=>$movies]);
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

    public function rateMovie($id){
        $newRating = $_POST['rating'];
        bdump($newRating);
        //save in db
        //calculeaza noua medie
        return json_encode(["rating" => 3.5]);

}
    public function addActionForm(){

        return $this->view("page/addMovie.html");

}
    public function addMovie(){
        $title=$_POST["title"];
        $description=$_POST["description"];
        $rating=$_POST["rating"];
        $db=new Movie();
        $db->addMovie($title, $description, $rating);
        if($db){
            return $this->view("page/success.html");
        }
    }
}