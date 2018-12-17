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
}