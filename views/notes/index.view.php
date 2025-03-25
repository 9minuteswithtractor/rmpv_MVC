<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
// dd($notes);
?>
    
<!-- Home Page Body -->
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold text-center mb-4">Notes page</h1>
    <p class="text-gray-700 text-center">
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?=$note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </p>
    <p class="mt-5">
        <a href="/notes/create" class="text-blue-700 hover:underline">Create Note</a>
    </p>
</div>
    
<?php

require base_path("views/partials/footer.php");

?>