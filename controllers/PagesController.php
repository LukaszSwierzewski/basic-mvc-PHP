<?php

class PagesController

{

    public function home()
    {
        require 'core/functions.php';
        require 'core/Task.php';
        $query = require 'core/boostrap.php';
        require 'core/User.php';
        $todos = $query->select_all('todos', 'Task');
        $users = $query->select_all('users', "User");
        require 'views/index.view.php';
    }

    public function about()
    {

        require 'core/Gowno.php';
        $query = require 'core/boostrap.php';
        $other_query = $query->select_all('todos', "Gowno");
        require 'views/about.view.php';
    }

    public function contact()
    {

        require 'views/contact.view.php';
    }
}
