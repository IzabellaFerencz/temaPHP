<?php
/**
 * Created by PhpStorm.
 * User: hamze
 * Date: 12/10/2018
 * Time: 10:41 AM
 */
namespace App\Controllers;
use \Framework\Controller;

class QueryController extends Controller
{
    public function myAction()
    {
        $text="Hello query";

        echo $text;
    }
}