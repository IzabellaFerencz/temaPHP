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
    protected $Rating;

    public function __toString()
    {
        return $this->Title."-".$this->Description."-".$this->Rating;
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
     * @return mixed
     */
    public function getRating()
    {
        return $this->Rating;
    }

    /**
     * @param mixed $Rating
     */
    public function setRating($Rating): void
    {
        $this->Rating = $Rating;
    }




}