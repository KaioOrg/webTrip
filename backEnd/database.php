<?php 
$mySQL = mysqli_connect('localhost', 'Admin', '', 'uvoyagedate');
if(mysqli_connect_errno()){
    echo 'Невозможно подключение'. mysqli_connect_error();
}
?>