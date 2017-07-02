<?php

namespace  app\Control;


Class DefaultController extends Controller{

  
        
    public function isAction($act)
    {
        return $act;   
    }

    public function indexAction()
    {
        
        $this->render('default/index.php');
    }


    
}//fim da classe.

