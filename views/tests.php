<?php

require 'functions.php';

$greeting = 'hello world';

$names = ['Lukasz', 'jeff', 'mary'];




$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'lukasz';

unset($person['age']);

$task = [
    'title' => 'cleaning',
    'assigned_to' => "me",
    'complete' => false,
];

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }
    public function is_completed()
    {
        return $this->completed;
    }
    public function complete()
    {
        $this->completed = true;
    }
}


$tasks = [
    new Task('go to the store'),
    new Task('finish my homework'),
    new Task('clean my room'),
];

$tasks[0]->complete();


require 'views/test.view.php';
