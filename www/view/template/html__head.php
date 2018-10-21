<?php
// Проверка разрешения
include $_SERVER['DOCUMENT_ROOT']."/function/protection.php";
 // Подключение переменных
 include $_SERVER['DOCUMENT_ROOT']."/var/html__head-user.php";
echo '<!DOCTYPE html><html lang="ru">
    <head>
    <!-- META -->
    <meta http-equiv="Content-Type" content="'.$meta__http_equiv.'"> 
    <meta name="viewport" content="'.$meta__name__viewport.'" />
    <meta name="description" content="'.$meta__name__description.'"/>
    <meta property="og:title" content="'.$meta__property__og_title.'"/>
    <meta property="og:type" content="'.$meta__property__og_type.'"/>
    <meta property="og:url" content="'.$meta__property__og_url.'"/>
    <meta property="og:image" content="'.$meta__property__og_image.'"/>
    <!-- LINK -->
    <link rel="shortcut icon" href="'.$link__rel__shortcut__icon.'">
';

    foreach ($link__rel__stylesheet as $key => $value) {
        echo '<link rel="stylesheet"    href="'.$value.'" type="text/css">';}
   
echo'
    <!-- TITLE -->  
    <title>'.$title.'</title>
</head>
';
?>