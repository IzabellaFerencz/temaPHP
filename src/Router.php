<?php
/**
 * Created by PhpStorm.
 * User: hamze
 * Date: 11/26/2018
 * Time: 10:38 AM
 */
namespace Framework;

class Router
{
    protected $routes;
    protected $requestUri;
    protected $queryString;

    public function __construct($routes, $requestUri, $queryString)
    {
        $this->routes = $routes;
        $this->requestUri = $requestUri;
        $this->queryString = $queryString;


    }

    public function checkRoute()
    {
        dump($this->requestUri);
        if($this->queryString){
            $linkCorect = explode("?", $this->requestUri);
            $this->requestUri = $linkCorect[0];
        }
        if(isset($this->routes[$this->requestUri]))
        {
            $this->checkGuard($this->requestUri);
            $this->callFunction($this->requestUri);
        }
        else{
            preg_match('/\d+/', $this->requestUri, $idNr);
            $link = $this->requestUri;

            $impart=explode("/", $link);
            $newLink=str_replace($impart[2], "{id}",$link);
            if($this->routes[$newLink])
            {
                $this->checkGuard($newLink);
                $this->callFunction($newLink,$idNr[0]);
            }

        }

    }

    public function callFunction($newLink, $id=null)
    {
        $numeController=$this->routes[$newLink]["controller"];
        $numeActiune=$this->routes[$newLink]["action"];


        $controller='\\App\\Controllers\\'. $numeController;

        $selectedController = new $controller();
        $selectedController->$numeActiune($id, $this->queryString);

    }

    private function checkGuard(string $route): void
    {
        if (isset($this->routes[$route]['guard'])) {
            $guard = "\\App\\Guards\\" . $this->routes[$route]['guard'];
            //instantiate and execute the handle action
            (new $guard)->handle();

	    }
    }


}