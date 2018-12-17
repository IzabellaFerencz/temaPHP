<?php
/**
 * Created by PhpStorm.
 * User: hamze
 * Date: 11/26/2018
 * Time: 11:14 AM
 */

namespace App\Controllers;
use Framework\Controller;

class PageController extends Controller
{
    public function aboutUsAction()
    {
        $text="Hello";

        echo $text;
    }
}