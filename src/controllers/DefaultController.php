<?php

require_once 'AppController.php';

class DefaultController extends Appcontroller {
    
    //Nasze widoki
    public function index() {
        // TODO display login.html
        $this->render('login');
    }

    public function calendar() {
        //TODO display projcts.html
        $this->render('calendar');
    }
}