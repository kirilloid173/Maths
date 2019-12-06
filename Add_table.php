<?php
function create_table(){
include_once 'connection2.php';
$link = mysqli_connect($host, $user, $password, $database) 
or die("Ошибка " . mysqli_error($link));
$query2 ="CREATE Table tables
(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
Logins VARCHAR(200) NOT NULL,
passwords VARCHAR(200) NOT NULL
)";
}
?>