<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'my_first_blog';

$link = mysqli_connect($host, $user, $password, $database);


if(mysqli_errno($link)) {
echo 'Ошибочка вышла';
exit();
}
   