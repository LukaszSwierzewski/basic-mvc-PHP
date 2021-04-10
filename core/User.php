<?php


class User
{

    public $id;
    public $name;
    public $email;


    function show_user()
    {
        echo "the user $this->name have ID $this->id and email: $this->email";
    }
}
