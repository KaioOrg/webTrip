<?php 
$mySQL = new mysqli('localhost', 'Admin', '', 'uvoyagedate');
if(mysqli_connect_errno()){
    echo 'Невозможно подключение'. mysqli_connect_error();
}
?>