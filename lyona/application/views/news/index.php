<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="http://php.le.com/lyona/index.php/news/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>