<h1 class="text-center mt-5"><?= $title ?></h1>
<hr>

<?php foreach($categories as $category): ?>
    <br>
    <br>
    <h2 class="container ml-auto"><?= $category->name ?></h2>
    
    <?php foreach($articles as $article): ?>
        <?php if ($article->category_id === $category->id): ?>
            <div class="container mt-5">
                <h5><?= $article->title?></h5>
                <article><?= $article->content ?></article>
            </div>
         
        <?php endif; ?>
    <?php endforeach; ?>
    <hr>
<?php endforeach; ?>
