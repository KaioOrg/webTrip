<?php
// echo phpinfo();

$mySQL = mysqli_connect(hostname:'127.0.0.1', username:'root', password:'', database:'uvoyagedate');

if(!$mySQL){
    echo 'Невозможно подключение'. mysqli_connect_errno();
}