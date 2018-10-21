<?php
#Настройка подключения к базе данных

// Параметры для подключения к базе данных
include $_SERVER['DOCUMENT_ROOT']."/var/db.php";
// Привязка параметров
$dsn = "mysql:host=$host; dbname=$db; charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
// Подключение
$pdo = new PDO($dsn, $user, $pass, $opt);
?>