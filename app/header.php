<?php
    
        
        $errors_array = array();
        require_once 'app/include/database.php';
        require_once 'app/include/functions.php'; 
        $db_result = get_DB_list_users($link);
        
        $logined = 0;
        
        /*
        if($db_result["nick"] == $_POST["nick"]){
            if($db_result["password"] == md5($_POST["password"])){
                $logined = 1;
                $nick = $_POST["nick"];
            }  else {
                $errors_array["pass"] = "pass denited";
            }            
        } else {
            $errors_array["nick"] = "nick wronged";
        }
        */
        
    ?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TPS-Team's site</title>
        <link href="public/css/bootstrap.css" rel="stylesheet">
        <link href="/public/css/restyle.css" rel="stylesheet">
        <script src="/public/js/myOAjs.js">       
        </script>
    </head>

    <body>
            <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">TPS-Team</a>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <?php
                            $categories = get_catigories($link);
                        ?>
                        <?php if (count($categories) === 0): ?>
                        <li><a href="/app/add.php"><i class="glyphicon glyphicon-plus-sign"></i> Добавить категорию </a></li>;
                        <?php else : ?>

                        <?php foreach ($categories as $category) :?>
                            <?php if ($category["cat_id"] == about):?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$category["title"]?><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                      <li class="dropdown-header">Два весёлых инженера</li>
                                      <li><a href="#">MrSteel</a></li>
                                      <li><a href="#">Danila29</a></li>                                      
                                      <li class="divider"></li>
                                      <li class="dropdown-header">TPS-Team</li>
                                      <li><a href="#">MrSteel</a></li>
                                      <li><a href="#">Danila29</a></li>
                                      <li><a href="#">Glebskiy61</a></li>
                                    </ul>
                                  </li>
                            <?php else:?>
                                  <li><a href="categories.php?id=<?=$category["cat_id"]?>"><?=$category["title"] ?></a></li>
                            <?php endif;?>
                        <?php endforeach; ?>
                        <?php endif;?>
                    </ul>
                    <!--
                    <form action="" method="post" class="navbar-form navbar-right hidden-sm">
                        <div class="form-group">
                            <input id="area_1" type="text" class="form-control" placeholder="Ваш ник" name="nick" value="">
                        </div>
                        <div class="form-group">
                            <input id="" type="password" class="form-control" placeholder="Пароль" name="password" value="">
                        </div>
                        <button class="btn btn-primary" type='submit'>
                            <i class="fa fa-sign-in"></i> ВОЙТИ
                        </button>
                    </form>         
                    -->
                    <!--
                    /*
                    <ul class="nav navbar-nav" id="USERTOCKEN"><li><a href="/profile.php?user=<?=$nick?>">Профиль пользователя: <?=$nick?></a></li></ul>
                    */
                     -->
                </div>
            </div>
        </div>
        
