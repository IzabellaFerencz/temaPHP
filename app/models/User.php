<?php
/**
 * Created by PhpStorm.
 * User: I.Ferencz
 * Date: 12/21/2018
 * Time: 12:18 PM
 */

namespace App\models;


use Framework\Model;

class User extends Model
{
    protected $table = "Users";

    protected $id;
    protected $username;
    protected $password;
    protected $email;
}