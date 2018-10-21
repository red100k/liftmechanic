<?php # Добавление нового пользователя
         // Описание
         // 
         //
require_once USR__AUTH__DB;
// include $_SERVER['DOCUMENT_ROOT']."/function/connect_db.php";
if(isset($_POST['submit']))
{
    $err = array();
    # проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }
    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }
    # проверяем, не сущестует ли пользователя с таким именем
    // заносим в переменную данные с запроса
    $stmt = $pdo->prepare("SELECT COUNT(user_id) FROM users WHERE user_login=?");  // Подготавливаем запроса
    $stmt->execute(array($_POST['login'])); // Присваиваем псевдо переменной значение Login
    $result = $stmt->fetchColumn();
    if($result > 0){
        $err[] = "Пользователь с таким логином уже существует в базе данных => ";
    }

    # Если нет ошибок, то добавляем в БД нового пользователя

    if(count($err) == 0)

    {
        $login = $_POST['login'];
        # Убераем лишние пробелы и делаем двойное шифрование
        $password = md5(md5(trim($_POST['password'])));
        echo $login;
        echo $password;
        $stmt = $pdo->prepare("INSERT INTO users SET user_login=?, user_password=?");  // Подготавливаем запроса
        $stmt->execute(array($login,$password));
        //mysql_query("INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
       //header("Location: login.php"); exit();
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
         }
    }

}
?>
 <div class="login col-sm-12 col-md-12 col-lg-12 col-xl-12">
<form method="post" class="form" action="">
<h1 class="form__title form__title__login">Регистрация</h1>
    <p class="form__massage">Добавить нового пользователя</p>
    <input class="form__input" placeholder="|Логин"  name="login" type="text"><br>
    <input class="form__input" placeholder="|Пароль"  name="password" type="text"><br>
    <input class='form__button' name="submit" type="submit" value="Отправить">
</form>
</div>