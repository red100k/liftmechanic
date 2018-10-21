<?php
# Защита от несанкционированого вызова
if (!isset($protection)) { // Если нет разрешения вызова
    header("Location: index.php"); 
    exit();
}
?>