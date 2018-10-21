<?php
# LiftMechanic ver. 1.0
# Dmitriy Melnik 2018

// Режим отладки
include "debug.php";
// Старт сессии 
session_start(); 
// Ключ защиты
$protection='on';
// Подключение к базе данных
include $_SERVER['DOCUMENT_ROOT']."/function/connect_db.php";
// Модуль пользователя
// Проверка разрешения
include $_SERVER['DOCUMENT_ROOT']."/function/auth/check.php";
// Если не пройдем авторизацию все что ниже не запустим
include $_SERVER['DOCUMENT_ROOT']."/view/user.php";

?>