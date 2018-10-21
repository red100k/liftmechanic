<?php # МОДУЛЬ ПРОВЕРКИ АВТОРИЗАЦИИ ПОЛЬЗОВАТЕЛЯ ВЕР. 06-10-18
            // Описание
            // 
            // 
 
    # Подключение необходимых модулей (начало)
        require_once 'config__usr__auth.php';                                   // Модуль входа
        require_once USR__AUTH__DB;                                             // Подключение к БД если еще не подключено 
    # Подключение необходимых модулей (конец)
    
    #Выход
    if (isset($_GET['log_out'])){
        setcookie($C__ID, $result[T__ID], time()-3000,"/");    // Идентификатор пользователя
        setcookie($C__HASH, $hash,time()-3000,"/");           // Хеш хеша пароля
        session_destroy();
        echo' <script> window.location.href="/"</script>';
    }   

    # Если существует сессия
    if (isset($_SESSION[S__ID]) and isset($_SESSION[S__HASH])) // Если существует сессия 
    { // Выполним следующее
        console_log("Проверка наличии сессии = ОК");
        // 1. Вытаскиваем из БД запись, у которой логин равняеться введенному
            $stmt = $pdo->prepare("SELECT * FROM ".DB__TB." WHERE ".T__ID."=? LIMIT 1");  // Подготавливаем запроса
            $stmt->execute(array($_SESSION[S__ID])); // Присваиваем псевдо переменной значение id из сессии
            $result = $stmt->fetch(); // Выполнение запроса 
        // 2. Проверка наличия совпадения
            if(($result[T__ID] == $_SESSION[S__ID]) or 
            ($result[T__HASH] == $_SESSION[S__HASH])) //Если значения равны
            { // Если есть такой пользователь
                console_log("Cовпадений паролей = ДА");
                $authorization='on';
                
            } 
    }
  
    # Если существует кук        
    if (isset($_COOKIE[$C__ID]) and isset($_COOKIE[$C__HASH]))
    { 
        console_log(" Поиск куков = Успешно");// Выполним следующее          
        
     
            // 1. Вытаскиваем из БД запись, у которой логин равняеться введенному
            $stmt = $pdo->prepare("SELECT * FROM ".DB__TB." WHERE ".T__ID."=? LIMIT 1");  // Подготавливаем запроса
            $stmt->execute(array($_COOKIE[C__ID])); // Присваиваем псевдо переменной значение id из сессии
            $result = $stmt->fetch(); // Выполнение запроса        
            
            // 2. Проверка наличия совпадения
            if(($result[T__ID] == $_COOKIE[C__ID]) or 
            ($result[T__HASH]  == $_COOKIE[C__HASH])) //Если значения не равны то...
            { // Если нет такого пользователя              
               console_log("Cовпадений паролей по кукам = ДА");
               $authorization='on';
            
            } 
    }        
            
        
    if (!isset($authorization) or $authorization!=='on'){
        // Подключение шаблона верха страницы
        include $_SERVER['DOCUMENT_ROOT']."/view/template/html__head.php"; 
        // Верхняя часть страницы (шапка)
        require_once $_SERVER['DOCUMENT_ROOT']."/view/template/hat.html";
        require_once USR__AUTH__DIR.'login.php'; // Модуль входа 
        // Нижняя часть страницы (подвал)
        require_once $_SERVER['DOCUMENT_ROOT']."/view/user/module/footer.php";
        exit();
    }        
      
            
            
            
            
            
            
            
            
      #      else {
     #          $_SESSION[C__ID]  = $_COOKIE[C__HASH]);
      #         $_SESSION[S__ID]) = $_COOKIE[S__HASH]));
    #           echo' <script> window.location.href="/"</script>'; 
    #        }
    #   
    #    }
        
              
                
                
                // 2. Проверка наличия совпадения
    #                if(($result[T__ID] == $_COOKIE[C__ID]) or 
    #                ($result[T__HASH]  == $_COOKIE[C__HASH])) //Если значения не равны то...
    #                { // Если нет такого пользователя
    #                    
    #                    console_log("Cовпадений паролей = ЕСТЬ");
#
 #                      $_SESSION[C__ID]  = $_COOKIE[C__HASH]);
   #                    $_SESSION[S__ID]) = $_COOKIE[S__HASH]));
  #                     echo' <script> window.location.href="/"</script>'; 
 #                    
 #                   } else {
#
 #                       $errors= "Хм, что-то пошло не так 2"; // Вовидим сообщение
 #                       require_once USR__AUTH__DIR.'login.php'; // Модуль входа
 #                       exit(); // Останавливаем дальнейшее выполнение скрипта 
 #                   }
 #           }
 #                       # 2) Действие при успешной авторизации
  #                              // header("Refresh: 0"); exit();
    #                        //   echo' <script> window.location.href="/"</script>';
     #         require_once USR__AUTH__DIR.'login.php'; // Модуль входа             
     #          exit()
        
?>
    