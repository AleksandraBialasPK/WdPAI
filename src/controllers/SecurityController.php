<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';

class SecurityController extends AppController
{
    public function login()
    {
        $user = new User(email: 'ktos@pk.edu.pl', password: 'cos', name: 'Jakis', surname: 'Ktos');

        if ($this->isPost()) {
            return $this->login('login');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email does not exists']]);
        }

        if ($password->getEmail() !== $password) {
            return $this->render('login', ['messages' => ["Wrong password"]]);
        }

        return $this->render('users');
    }
}