<?php
// Проверка разрешения
//include $_SERVER['DOCUMENT_ROOT']."/function/protection.php";
$stmt = $pdo->prepare('SELECT * FROM `users`');  // Подготавливаем запроса
$stmt->execute();           // Выполняем запроc
echo '
<div class="default_section col-sm-12 col-md-12 col-lg-12 col-xl-12">
<h1  class="txt__title">Пользователи</h1>
    <p class="txt__subtitle">Список пользователей</p>
    <table class="table__st1" >
        <tr>
            <th class="head_col">ID</th>
            <th class="head_col">Имя пользователя</th>
            <th class="head_col">Действия</th>
        </tr>';

        foreach ($stmt as $row)
        {echo '  
        <tr>
            <td class="content_col">'.$row['user_id'].'</td>
            <td class="content_col">'.$row['user_login'].'</td>
            <td class="content_col"> Удалить</td>
         </tr>  
         '; }   
         echo "</div>"; 

?>