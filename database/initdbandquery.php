<?php

function initDB() {
    global $db;
    //hard coded values only for these exercises, we should use config
    $dsn = "mysql:host=localhost;dbname=authdb;charset=utf8";
    $username = "root";
    $password = "";

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (Exception $ex) {
        throw new Exception('DB connection error: ' . $ex->getMessage());
    }
}

function getUserDetails($username, $password) {
    global $db;
    $stmt = $db->query('SELECT * FROM `users` WHERE username="'.$username.'"AND password="'.$password.'" ');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function getArticleDetails() {
    global $db;
    $stmt = $db->query('SELECT users.first_name, users.last_name, articles.article_text FROM `users` LEFT JOIN `articles` ON users.id=articles.id');
    $row = $stmt->fetch(PDO::FETCH_NUM);
    return $row;
}
initDB();