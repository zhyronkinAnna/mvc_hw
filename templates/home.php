<h1 class="text-center mt-5"><?= $title ?></h1>

<?php foreach($categories as $category): ?>

    <h2><?= $category->name ?></h2>

<?php endforeach ?>