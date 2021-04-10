<?php
require 'core/functions.php';
require 'core/Task.php';
require 'core/User.php';
$todos = $query->select_all('todos', 'Task');
$users = $query->select_all('users', "User");




require 'views/index.view.php';
