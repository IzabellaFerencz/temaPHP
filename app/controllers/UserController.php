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
    public function login()
    {
        return $this->view("user/login.html");
    }

    // POST
    public function register()
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $db=new models\User();
        $db->newUser($username, $password, $email);
        if($db){
            return $this->view("user/success.html");
        }
    }

}