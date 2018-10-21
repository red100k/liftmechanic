<?php
// Проверка разрешения
include $_SERVER['DOCUMENT_ROOT']."/function/protection.php";
if (isset($_GET["auth_user"]) and $_GET["auth_user"]=='exit'){
    $_SESSION["user_id"] = '';
    $_SESSION["user_hash"] = '';
}

echo 
'<div class="navigation">
    <form class="" action="" method="Get">  
    <button class="form__button__menu" type="submit" name="view" value="menu">
    </button>
    </form>
</div>




'
;
?>