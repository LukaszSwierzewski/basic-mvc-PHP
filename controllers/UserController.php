<?php


class UserController
{
    public function index()

    {
        $query = require 'core/boostrap.php';
        require 'core/User.php';
        $users = $query->select_all('users', "User");
        require 'views/users.view.php';
    }

    public function store()
    {
        $query = require 'core/boostrap.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $query->insert('users', [
            'name' => $name,
            'email' => $email
        ]);
        header('Location: /php-basic/users');
    }
}
