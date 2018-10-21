<?php
# Модуль пользователя ver. 230518
# DmitriyMelnik 2018
// Проверка разрешения
include $_SERVER['DOCUMENT_ROOT']."/function/protection.php";
# НАЧАЛО HTML ДОКУМЕНТА
    // НАЧАЛО МЕТА ОПИСАНИЯ СТРАНИЦЫ
       
        // Подключение шаблона верха страницы
        include $_SERVER['DOCUMENT_ROOT']."/view/template/html__head.php"; 
    // КОНЕЦ МЕТА ОПИСАНИЙ СТРАНИЦЫ    
    // НАЧАЛО ВЫВОДА КОНТЕНТА
     
        // Верхняя часть страницы (шапка)
            require_once $_SERVER['DOCUMENT_ROOT']."/view/template/hat.html";            
        // Основная часть страницы (контент)
            require_once $_SERVER['DOCUMENT_ROOT']."/view/user/module/content.php";
        // Нижняя часть страницы (подвал)
            require_once $_SERVER['DOCUMENT_ROOT']."/view/user/module/footer.php";
    // КОНЕЦ ВЫВОДА КОНТЕНТА
?>