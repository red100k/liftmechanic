<?php # МОДУЛЬ ВХОДА ДЛЯ ПОЛЬЗОВАТЕЛЯ Вер. 06-10-18
        // Описание 
        // Модуль сравнивает куку или сессию с информацией в базе если она правельная
        // то перенаправляет на страницу приложения

# Подключение необходимых модулей (начало)
    require_once 'config__usr__auth.php';                                   // Модуль конфигурации для авторизации   
    require_once USR__AUTH__DB;                                             // Подключение к БД если еще не подключено 
    require_once 'random_string.php'; // Модуль генерации случайной строки
# Подключение необходимых модулей (конец)

# Вход пользователя (НАЧАЛО) 
if(isset($_POST['login_submit']))
{
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
    // Подготовка запроса
    $stmt = $pdo->prepare("SELECT ".T__ID.", ".T__PASS.",".T__HASH." FROM ".DB__TB." WHERE ".T__LOGIN."=? LIMIT 1");  // Подготавливаем запроса
    $stmt->execute(array($_POST['login_name'])); // Склейка переменных   
    $result = $stmt->fetch(); // Выполнение запроса 
    # Сравниваем пароли
    if($result[T__PASS] === md5(md5($_POST['login_password'])))        // Если пароли равны то выполняем следующее 
    { console_log('Совпадение паролей = Да');

        # 1) Генерируем случайное число и шифруем его
            $length = 25;
            $chartypes = "special,upper,numbers,lower";
            $hash = random_string($length, $chartypes);       

        # 2) Записываем в БД новый хеш авторизации и IP
            $stmt = $pdo->prepare("UPDATE ".DB__TB." SET ".T__HASH."=? WHERE ".T__ID."=?");  // Подготавливаем запроса
            $stmt->execute(array($hash,$result[T__ID])); // Присваиваем псевдо переменной значения
        # 3) Устанавливаем куки
            setcookie(C__ID, $result[T__ID], time()+C__TIME,"/");    // Идентификатор пользователя
            setcookie(C__HASH, $hash,time()+C__TIME,"/");           // Хеш хеша пароля
            
        # 4) Устанавливаем сессию               
            $_SESSION[S__ID] = $result[T__ID];                      // Идентификатор пользователя
            $_SESSION[S__HASH] = $hash;                             // Хеш хеша пароля
        console_log('Cозданна сессия: Пользователь №:'.$_SESSION[S__ID].' Хеш: '. $_SESSION[S__HASH]);

        # 5) Действие при успешной авторизации
            // header("Refresh: 0"); exit();
             echo' <script> window.location.href="/"</script>';
    } else {
       $errors = "Неверный логин или пароль";// Выводим сообщение об ошибке
    }
}
# Вход пользователя (КОНЕЦ) 
?>
<div class="login col-sm-12 col-md-12 col-lg-12 col-xl-12">
<form class="form form__login" action="" method="POST">   
    <h1 class="form__title form__title__login">Вход</h1>
    <p class="form__massage"><?php if (isset($errors)){echo $errors; } ?></p>
    <input class="form__input" type="text" placeholder="Логин" name="login_name" /><br />
    <input class="form__input" type="password" placeholder="Пароль" name="login_password" /><br/> 
    <input class="form__button" type="submit" name="login_submit" value="Войти" />
</form>
</div>
