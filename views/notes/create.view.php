
<?php

require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");

?>
    
<!-- Home Page Body -->
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold text-center mb-4">Create a Note</h1>
    <p class="text-gray-700 text-center">
        <form method="POST">
            <label for="body">Description</label>
            <div>
                <textarea id="body" name="body"><?= $_POST['body'] ?? ''  ?></textarea>
                <?php if (isset($errors['body'])) : ?>
                    <p class="text-red-500 text-sm"><?= $errors['body'] ?></p>
                <?php endif; ?>
            </div>
            <p>
                <button type="submit">Create</button>
            </p>
        </form>
    </p>
</div> 

<?php

require base_path("views/partials/footer.php");

?>