<?php
    $connection = mysqli_connect('localhost', 'root', '', 'cmsik');
    if(!$connection){
        echo "Соединени с БД не удалось";
    }
?>