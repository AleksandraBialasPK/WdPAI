<?php

require_once 'src/controllers/DefaultController.php';

class Routing
{
    //zeby odwolac sie do kontrolerow
    public static $routes; //tablica przechowujaca URL i sciezke kontrolera ktory zostanie otwarty

    //metoda pozwalajaca wstawic do tablicy odpowiedni kontroler przydzielony do okreslonego urla
    public static function get($url, $controller)
    {
        self::$routes[$url] = $controller;
    }

    //pozwala uruchomic dany kontroler przypisany pod URL
    public static function run($url)
    {
        $action = explode("/", $url)[0]; //dzieli string wejsciowy wzgledem separatora

        if (!array_key_exists($action, self::$routes)) {
            die("Wrong url!"); //zatrzymuje wykonanie interpretera
        }
        //pobieramy kontroler z tablicy routingu
        $controller = self::$routes[$action];
        //tworzymy obiekt kontrolera
        $object = new $controller;
        //z tego kontrolera chcemy wywolac akcje
        $object->$action();
    }
}
