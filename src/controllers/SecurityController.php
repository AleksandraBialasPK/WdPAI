<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php'

class SecurityController extends AppController
{
    public function login()
    {
       $user - new User(email:'ktos@pk.edu.pl', password: 'cos', name: 'Jakis', surname: 'Ktos') 
    }
}