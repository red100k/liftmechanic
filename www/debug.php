<?php

function console_log($data){
$dev='on'; // Режим вывода
$output = $data;
if (is_array($output))
            $output = implode(',', $output);
            if ($dev=='on'){
            echo "<script> console.log('log = > "."$output"." ')</script>";}
}
?>