<?php

include_once 'app/header.php';
$news = get_news($link);

?>
    <div class="alert alert-danger">
        <strong>ВНИМАНИЕ! </strong> Возможна нестабильная работа сайта
    </div>
    
    <div id="carousel" class="carousel slide">
        <!--Индикаторы слайдов-->
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel" data-slide-to="0"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
        </ol>
        
        <!--Слайды-->
        <div class="carousel-inner">
            <div class="item active">
                <img src="public/img/1.png" alt="">
                <!--<div class="carousel-caption">
                    <h3>Первый слайд</h3>
                    <p>Описание первого слайда</p>
                </div>-->
            </div>
            <div class="item">
                <img src="public/img/2.png" alt="">
                <!--<div class="carousel-caption">
                    <h3>Второй слайд</h3>
                    <p>Описание второго слайда</p>
                </div>-->
            </div>
            <div class="item">
                <img src="public/img/3.png" alt="">
                <!--<div class="carousel-caption">
                    <h3>Третий слайд</h3>
                    <p>Описание третьего слайда</p>
                </div>-->
            </div>
            <div class="item">
                <img src="public/img/4.png" alt="">
                <!--<div class="carousel-caption">
                    <h3>Третий слайд</h3>
                    <p>Описание третьего слайда</p>
                </div>-->
            </div>
            <div class="item">
                <img src="public/img/5.png" alt="">
                <!--<div class="carousel-caption">
                    <h3>Третий слайд</h3>
                    <p>Описание третьего слайда</p>
                </div>-->
            </div>
        </div>
        
        <!--Стрелки переключения слайдов-->
        <a href="#carousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    
    </div>

    <?php foreach ($news as $n_news) :?>
    <div class="news">
        <h1 class="page-header"><?=$n_news["header"]?></h1>
        <p class="well"><?=$n_news["text"]?></p>
    </div>
    <?php endforeach; ?>
        
<?php

require_once 'app/footer.php';

