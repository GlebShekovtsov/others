<?php
 $db_host ="localhost";
 $db_user ="root";
 $db_password ="root";
 $db_name = "main";

 $connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);
 if (!$connection)
 {
     die("Ошибка в подключении к базе данных" . mysqli_error($connection));
 }
 
?>