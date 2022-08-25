<?php

require_once 'AppController.php';

class DefaultController extends Appcontroller
{

    public function index()
    {
        $this->render('login', ['message' -> 'hey there']);
    }

    public function users()
    {
        $this->render('users');
    }
}
