<?php
loadModel('Login');
session_start(); //sempre que for trabalhar com sessão tem que iniciar ela
$exception = null;

if (count($_POST) > 0){
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        $_SESSION['user'] = $user;
        header("Location: day_records.php");
    } catch (AppException $e){
        $exception = $e;
    }
}

loadView('login', $_POST + ['exception' => $exception]);
