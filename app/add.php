<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Добавление категорий</title>
 </head>
 <body>
     <form action="" method="post">
   <p>ТО ЧТО ДОБАВИТЬ <input name="title" required></p>   
   <p><input type="submit" value="Отправить"></p>
  </form>
 </body>
</html>

<?php
require_once '/include/functions.php';
require_once '/include/database.php';
$add_to_db = $_POST["title"] ;
$query = "INSERT INTO `my_first_blog`.`categories` (`id`, `title`) VALUES (NULL, '$add_to_db');";

mysqli_query($link, $query);
