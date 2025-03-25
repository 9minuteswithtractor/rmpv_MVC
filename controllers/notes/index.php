<?php 

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$page = "Notes";

$userId = 2;

$sql = "SELECT * FROM notes WHERE user_id = {$userId}"; 
$notes = $db->query($sql)->get();

view("notes/index.view.php", [
    'page' => 'Notes',
    'notes' => $notes
]);