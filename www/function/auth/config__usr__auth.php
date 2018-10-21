<?php # КОНФИГУРАЦИЯ АВТОРИЗАЦИИ ПОЛЬЗОВАТЕЛЯ Вер. 06-10-18
            // ОПИСАНИЕ 
            // В этом модуле мы настраиваем входы и выходы информаци, 
            // например поля таблицы или имена куков и сессий
            console_log("Загрузка конфигурации = Готово");
# Местонахождение модуля авторизации 
define("USR__AUTH__DIR", $_SERVER['DOCUMENT_ROOT'].'/function/auth/'); // Путь к модулю авторизации

# Настройка базы данных
define("USR__AUTH__DB", $_SERVER['DOCUMENT_ROOT'].'/function/connect_db.php'); // Модуль подключения к БД
 # Настройка таблицы
    define("DB__TB", 'sys__usr'); // Таблица пользователей
        # Cписок полей (начало)
        define("T__ID",                 'sys__usr__id');        // Идентификатор
        define("T__LOGIN",              'sys__usr__login');     // Логин
        define("T__PASS",               'sys__usr__password');  // Пароль 
        define("T__HASH",               'sys__usr__hash');      // Двойной HASH пароля
        # Cписок полей (конец)
# Настройка базы данных (конец)

# Настройка сессии (начало)
        define("S__ID",                 's__id');       // Логин
        define("S__LOGIN",              's__login');    // Логин
        define("S__HASH",               's__hash');     // Пароль
# Настройка сессии (конец)

#Настройка куков (начало)
        define("C__ID",                 'c__id');       // Идентификатор
        define("C__HASH",               'c__hash');     // Пароль
        $C__ID= 'c__id';       // Идентификатор
        $C__HASH='c__hash';     // Пароль
# Настройка куков (конец)

# Время хранения куков у пользователя (начало)
        define("C__TIME",                 '3296000');       // Время авторизации в секундах
# Время хранения куков у пользователя (конец)
?>