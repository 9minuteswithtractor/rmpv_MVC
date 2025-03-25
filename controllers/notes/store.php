<?php 

use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$userId = 2;

$config = require base_path('config.php');

$db = new Database($config['database']);

$errors = [];

$body_min_ln = 3;
$body_max_ln = 5;
if (! Validator::string($_POST['body'], $body_min_ln, $body_max_ln)) {
    $errors['body'] = "The body must be between {$body_min_ln} and {$body_max_ln} characters";
}

if (empty($errors)) {
    
    $sql = "INSERT INTO notes (body, user_id) VALUES (:body, :user_id)"; 
    $db->query($sql, [
        'body' => $_POST['body'],
        'user_id' => $userId
    ]);

    header('location: /notes');
    die();
}

view("notes/create.view.php", [
    'page' => 'Create Note',
    'errors' => $errors
]);

