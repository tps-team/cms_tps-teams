<?php

function get_catigories($link) {
    $sql = "SELECT * FROM `categories`";
    $result = mysqli_query($link, $sql); 
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}

function add_to_db($link, $add_to_db){  
    $sql = "INSERT INTO `my_first_blog`.`categories` (`id`, `title`) VALUES (NULL, \'.$add_to_db.'\)";
    mysqli_query($link, $sql);    
}

function get_news($link) {
    $sql = "SELECT * FROM `news`";
    $result = mysqli_query($link, $sql); 
    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $news;
}

function get_instruction($link){
    $sql = "SELECT * FROM `instructions`";
    $result = mysqli_query($link, $sql);
    $instuctions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $instuctions;
}

