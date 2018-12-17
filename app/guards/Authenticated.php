<?php
/**
 * Created by PhpStorm.
 * User: I.Ferencz
 * Date: 12/17/2018
 * Time: 3:55 PM
 */

namespace App\guards;


use Framework\Guard;

class Authenticated implements Guard
{

    public function handle(array $params = null)
    {
        print("handle");
        session_start();
        if (!isset($_SESSION['username']))
            $this->reject();
    }

    public function reject()
    {
        header("Location: /auth/login");
    }
}