<?php

/**
* Clase Bootstrap
* Controlador frontal de la aplicación
*/
namespace Mvc\App;

class Bootstrap
{
    public function __construct()
    {
//        echo "Dentro de bootstrap, __construct";
        $url =  $this->_getUrl();
//        echo "<pre>";
//        var_dump($url);
//        echo "</pre>";
//        echo "Controlador: $url[0] <br>";
//        echo "Metodo: $url[1]";
        //cargar controlador

        $this->_load($url);

    }


    private function _getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], "/");
            $url = explode("/", $url);
        } else {
            $url[] = 'index';
            $url[] = 'index';
        }
        if (count($url) == 1) {
            $url[] = 'index';
        }
        return $url;
    }

    private function _load($url)
    {
        try {
            $controllerName = ucfirst(array_shift($url));
            var_dump($controllerName);
            if (file_exists('../controllers/' . $controllerName . '.php')) {
                require_once '../controllers/' . $controllerName . '.php';
                
                $controllerName = "\\Mvc\\Controller\\" . $controllerName;
                $controller = new $controllerName; //creo controlador
    //            $controller = new Controller\Index; //creo controlador
    //            $xx = new $controllerName;
                $method = array_shift($url); //tomo el método
                if (method_exists($controller, $method)) {
                    call_user_func_array(array($controller, $method), $url);
                } else {
                    //die("Método $method no encontrado");
                    throw new \Exception("Método $method no encontrado", 404);
                }

            } else {
                //die("Controlador $controllerName  no encontrado");
                throw new \Exception("Controlador $controllerName  no encontrado", 404);
            }
        } catch (\Exception $e) {
            //echo $e->getMessage();
            require_once '../controllers/Error.php';
            $controller = new \Mvc\Controller\Error;
            $controller->index($e);
        }
    }
}
