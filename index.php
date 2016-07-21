<?php

include_once 'app/header.php';
$news = get_news($link);

?>

    <?php foreach ($news as $n_news) :?>
    <div class="news">
        <h1 class="news_strange"><?=$n_news["header"]?></h1>
        <p class="news_strange"><?=$n_news["text"]?></p>
    </div>
    <?php endforeach; ?>
        
<?php

require_once 'app/footer.php';

