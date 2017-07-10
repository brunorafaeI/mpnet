<?php

namespace app;
use app\control\DefaultController;



class Router
{

    /**
     * @var DefaultController
     */
    private $defaultController;


    public function __construct() {

        $this->defaultController = new DefaultController();

    }


    public function routeRequest(){

        if(isset($_GET['controller']) && isset($_GET['action'])){

            $path = _CTRLPATH_.ucfirst($_GET['controller'].'.php');
            $action = $_GET['action'].'Action';

            if(file_exists($path)){
                if(method_exists($myController,$action)){
                    $myController->$action();
                }
                else{
                    $this->defaultController->indexAction();
                    echo 'Bad Action';
                }
            }
            else{
                $this->defaultController->indexAction();
                echo 'Bad Controller';
            }
        }
        else{
            $this->defaultController->indexAction();

        }
    }



}
