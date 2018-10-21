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
require_once $_SERVER['DOCUMENT_ROOT']."/function/connect_db.php";
// Модуль пользователя
// Проверка разрешения
require_once $_SERVER['DOCUMENT_ROOT']."/function/auth/check.php";
// Если не пройдем авторизацию все что ниже не запустим
require_once $_SERVER['DOCUMENT_ROOT']."/view/user.php";

?>