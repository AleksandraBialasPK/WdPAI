<?php
//ten plik wykonuje sie jako pierwszy
require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');    //sciezka ktora wyslala do nas przegladarka na serwer
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('planer', 'DefaultController');

//pobierze z tablicy routingu kontroler przypisany do konkretnego url i z tego kontrolera wykona nasza akcje
Routing::run($path);