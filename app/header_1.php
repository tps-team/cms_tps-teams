<?php if($_SERVER['REQUEST_METHOD'] != "POST") : ?>
    <?php
        require_once 'app/include/database.php';
        require_once 'app/include/functions.php'; 
        $logined = 0;
    ?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TPS-Team's site</title>
        <link href="public/css/bootstrap.css" rel="stylesheet">
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
                        <li><a href="/categories.php?id=<?=$category["id"]?>"><?=$category["title"] ?></a></li>
                        <?php endforeach; ?>
                        <?php endif;?>
                    
                    <?php if ($logined === 0) : ?>
                    <form action="" method="post" class="navbar-form navbar-right hidden-sm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ваш ник" name="nick" value="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Пароль" name="password" value="">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-sign-in"></i> ВОЙТИ
                        </button>
                    </form>         
                    
                    <?php elseif ($logined === 1): ?>
                        <ul class="nav navbar-nav">
                            <li><a href="/profile.php?user=<?=$globalearray["nick"]?>"><?=$globalearray["nick"]?></a></li>
                        </ul>
                    <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>

<pre>
          

<?php else : ?>
    <?php
        $globalearray = array();
        require_once 'app/include/database.php';
        require_once 'app/include/functions.php'; 
        $db_result = get_DB_list_users($link);
        $name = "statusVAR";
        
        
        
        if($db_result["nick"] == $_POST["nick"]){
            if($db_result["password"] == md5($_POST["password"])){
                setcookie($name, 1, time() + 3600, '/', "project.com", FALSE);
                
            }  else {
                echo "WRONG PASS";
            }            
        } else {
            echo "WRONG NICK";
        }
        
        
    ?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TPS-Team's site</title>
        <link href="public/css/bootstrap.css" rel="stylesheet">
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
                        <li><a href="/categories.php?id=<?=$category["id"]?>"><?=$category["title"] ?></a></li>
                        <?php endforeach; ?>
                        <?php endif;?>
                    </ul>
                    <?php if ($logined === 0) : ?>
                    <form action="" method="post" class="navbar-form navbar-right hidden-sm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ваш ник" name="nick" value="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Пароль" name="password" value="">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-sign-in"></i> ВОЙТИ
                        </button>
                    </form>         
                    
                    <?php elseif ($logined === 1): ?>
                    <li><a href="/profile.php?user=<?=$globalearray["nick"]?>"><?=$globalearray["nick"]?></a></li>
                    <?php endif;?>
                </div>
            </div>
        </div>
<?php endif;?>
