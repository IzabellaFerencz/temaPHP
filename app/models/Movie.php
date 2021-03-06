<?php
/**
 * Created by PhpStorm.
 * User: I.Ferencz
 * Date: 12/17/2018
 * Time: 1:05 PM
 */

namespace App\models;


use Framework\Model;

class Movie extends Model
{
    //we have to set specify the corresponding model for the table
    protected $table = "Movies";

    protected $id;
    protected $Title;
    protected $Description;
    protected $RatingSum;
    protected $NrOfRatings;

    public function __toString()
    {
        return $this->Title."-".$this->Description."-".$this->RatingSum;
    }

    /**
     * @return mixed
     */
    public function getRatingSum()
    {
        return $this->RatingSum;
    }

    /**
     * @param mixed $RatingSum
     */
    public function setRatingSum($RatingSum): void
    {
        $this->RatingSum = $RatingSum;
    }

    /**
     * @return mixed
     */
    public function getNrOfRatings()
    {
        return $this->NrOfRatings;
    }

    /**
     * @param mixed $NrOfRatings
     */
    public function setNrOfRatings($NrOfRatings): void
    {
        $this->NrOfRatings = $NrOfRatings;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param mixed $Title
     */
    public function setTitle($Title): void
    {
        $this->Title = $Title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description): void
    {
        $this->Description = $Description;
    }

    /**
     * @param $title
     * @param $description
     * @param $inputRating
     * @return bool
     *
     * in momentul in care adaug in tabel mr of ratings ar trebui sa fie by default 1, urmand ca acesta sa se actualizeze doar in
     * momentul in care adauga cine rating
     *
     * rating sum va fi exact ratingul dat de cel care adauga, la fel el se va actualiza cand va mai da cineva review
     */
    public function addMovie($title, $description, $rating){
            $db = $this->newDbCon();


            $db->query( "INSERT INTO movies (Title, Description, RatingSum) VALUES ('$title','$description','$rating')");

            return true;

    }


}