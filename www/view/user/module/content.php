<?php 
// Проверка разрешения

    if (isset($_GET['view'])&& $_GET['view']=='menu'){
        unset($_GET['view']);
    }

    include $_SERVER['DOCUMENT_ROOT']."/function/protection.php";
    if (!isset($_GET['view'])){
            require_once $_SERVER['DOCUMENT_ROOT']."/view/template/main_menu.html";
    }
    if (isset($_GET['view'])&&$_GET['view']=='faults'){
        require_once $_SERVER['DOCUMENT_ROOT']."/view/template/search_fault.html";
    }

?>
<div class="content">
        <div>
    
        <?php
        if (isset($_GET['fault_']) && $_GET['fault_']=='search_code' && $_GET['text_fault']!=null){
            $my_query=$_GET['text_fault'];         // заносим в переменную данные с запроса
            $my_query2=$_GET['assembled'];         // заносим в переменную данные с запроса
            $stmt = $pdo->prepare('SELECT * FROM `faults`  WHERE `code`= ? AND `assembled`= ?'); // Подготовим запрос
            $stmt->execute(array($my_query,$my_query2));       // Выполняем запроc
            $row = $stmt->fetch();                  // Запишым результат запроса в массив

            echo '
            <div id="code" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1  class="form-label">Результат</h1>
            </div>
                
            <div class=" col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="fault_header__item">
                            <h1>Код: <span class="red_span">'.$row['code'].'</span></h1>
                            <h1>CEN:<span class="red_span">'.$row['code_c'].'</span></h1>
                            <h1>Тип запазд.: <span class="red_span">'.$row['type'].'</span></h1>
                        </div>
                    </div> 
                    <div id="description" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h1 class="fault_header"> Описание</h1>
                    </div>
                    <div class="_description col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="fault_text">
                            '.$row['description'].'
                        </div>
                        <div class="fault_action">
                            <a href="index.php">
                                <svg viewbox="0 0 100 100">
                                    <use xlink:href="#cog"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div id="cause" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h1 class="fault_header">Возможная причина</h1>
                    </div>
                    <div class="_cause col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="fault_text">
                            '.$row['cause'].'
                        </div>
                        <div class="fault_action">
                            <a href="index.php">
                                <svg viewbox="0 0 100 100">
                                    <use xlink:href="#cog"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div id="detection" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h1 class="fault_header">Выявление</h1>
                    </div>
                    <div class="_detection col-sm-12 col-md-12 col-lg-12 col-xl-12">                      
        ';


         if (isset($_GET['fault_editing'])&& $_GET['fault_editing']=='direction'){
             echo '<input class="fault_text_input" value="'.$row['detection'].' "></input>';}else{echo '<p class="fault_text">'.$row['detection'].' </textarea>';
         }
          echo '   
                <div class="fault_action">
                    <a href="index.php#detection?fault_editing=direction&text_fault='.$row['id'].'&fault_=search_code">
                        <svg viewbox="0 0 100 100">
                            <use xlink:href="#cog"/>
                        </svg>
                    </a>
                    <a href="#fff">
                        <svg viewbox="0 0 100 100">
                            <use xlink:href="#bubble"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div id="action"  class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="fault_header">Действие</h1>
            </div>
            <div class="_action col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="fault_text">
                '.$row['action'].'
                </div>
                <div class="fault_action">
                    <a href="index.php">
                        <svg viewbox="0 0 100 100">
                            <use xlink:href="#cog"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div id="restore" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="fault_header">Восстановление</h1>
            </div>
            <div class="_restore col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="fault_text">
                    '.$row['restore'].'
                </div>
                <div class="fault_action">
                    <a href="index.php">
                        <svg viewbox="0 0 100 100">
                        <use xlink:href="#cog"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div id="scan" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="fault_header">Проверка</h1>
            </div>
            <div class="_scan col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="fault_text">
                    '.$row['scan'].'
                </div>
                <div class="fault_action">
        '; 

        echo '   
        </div>
    </div>
';}



if (isset($_GET['fault_']) && $_GET['fault_']=='search_code_all'){
    $stmt = $pdo->prepare('SELECT * FROM `faults`');  // Подготавливаем запроса
    $stmt->execute();           // Выполняем запроc
    require_once $_SERVER['DOCUMENT_ROOT']."/view/template/search_fault_all.html";
}
?>







        </div>

    </div>
</div>