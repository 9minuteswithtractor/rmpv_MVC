<?php 

use Core\Database;
use Core\Validator;

$userId = 2;

$errors = [];

view("notes/create.view.php", [
    'page' => 'Create Note',
    'errors' => $errors
]);