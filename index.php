<?php

include_once 'app/header.php';
$news = get_news($link);

?>
    <div class="alert alert-danger">
        <strong>ВНИМАНИЕ! </strong> Возможна нестабильная работа сайта
    </div>
    
    <?php require_once 'app/carousel.php';?>

    <?php foreach ($news as $n_news) :?>
    <div class="news">
        <h1 class="page-header"><?=$n_news["header"]?></h1>
        <p class="well"><?=$n_news["text"]?></p>
    </div>
    <?php endforeach; ?>
        
<?php

require_once 'app/footer.php';

