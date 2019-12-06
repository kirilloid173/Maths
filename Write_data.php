<?php
require_once 'connection2.php';
require_once 'Add_table.php';
$login=$_POST['login'];
$passwords=$_POST['passwords'];


    include_once 'connection2.php';
    $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $query ="CREATE Table IF NOT EXISTS tables
    (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Logins VARCHAR(200) NOT NULL,
    passwords VARCHAR(200) NOT NULL
    )";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

 $query="INSERT INTO tables VALUES(NULL, $login, $passwords)";
 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "<br><br>Datas added";
}
mysqli_close($link);

?>