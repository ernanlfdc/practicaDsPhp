<?php

/**
* Clase controller. Padre del resto de controllers
* Salvo articulo que no lo cambiaremos
*/

namespace Mvc\App;

require_once  '../app/Model.php';

class Controller
{
    protected $_model;

    public function __construct()
    {
        //echo "En el padre de controladores";
        //$this->_model= new Model;
    }
}
