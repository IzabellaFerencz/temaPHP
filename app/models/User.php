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

    /**
     * @param $username
     * @param $password
     * @param $email
     * @return bool|void
     * add a user to db
     */
    public function newUser($username, $password, $email){
        $db = $this->newDbCon();
        $db->query( "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')");

        return true;
    }

    /**
     * @param $username
     * @return false|\PDOStatement
     * get a user from db based on username
     */
    public function getUser($username){
        $db=$this->newDbCon();
        $user= $db->query("SELECT * FROM users WHERE username='$username'");
        return $user;
    }


    
}