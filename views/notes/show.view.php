<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
// dd($notes);
?>
    
<!-- Home Page Body -->
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold text-center mb-4">Note page</h1>
    <p>
        <a href="/notes"  class="text-blue-500 hover:underline"><<< go back</a>
    </p>
    <p class="text-gray-700 text-center">
        <?= htmlspecialchars($note['body']) ?>
    </p>
    <form method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button>Delete</button>
    </form>
</div>
    
<?php

require base_path("views/partials/footer.php");

?>