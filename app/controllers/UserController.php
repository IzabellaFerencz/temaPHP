<?php
/**
 * Created by PhpStorm.
 * User: hamze
 * Date: 12/3/2018
 * Time: 11:45 AM
 */
namespace App\Controllers;
use Framework\Controller;
use App\models;


class UserController extends Controller
{
    public function showAction($id, $queryString)
    {
        $text="Hello User Controller".$queryString.$id;

        echo $text;
    }

    public function index()
    {
        return $this->view("user/index.html");
    }

    // GET
//    public function loginAction()
//    {
//        $db=new models\User();
//        $username=$_POST["username"];
//        $password= $_POST["password"];
//        $user=$db->getUser($username);
//        if(isset($_POST["submit"])) {
//
//            foreach($user as $auth){
//                if ($auth->username == $username && $auth->password == $password) {
//                    return true;
//                }
//            }
//        }
//        return false;
//
//    }
    /**
     * show login window
     */
    public function login()
    {
        return $this->view("user/login.html");
    }

    // POST

    /**
     * add new user/register
     */
    public function register()
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $passw=password_hash($password,PASSWORD_DEFAULT);
        $db=new models\User();
        $db->newUser($username, $passw, $email);
        if($db){
            return $this->view("user/success.html");
        }
    }

    public function loginUser(){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $db=new models\User();
        $user = $db->getUser($username);
        if($user->fetchColumn(2) == $password){
            session_start();
            $_SESSION["username"]=$username;
            echo "correct";
        }
        else{
            echo "invalid username or password";
        }
    }

}