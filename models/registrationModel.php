<?php
session_start();

class registrationModel
{

public function addUserPublic ($userData){
    $hash = password_hash($userData['pass'], PASSWORD_DEFAULT);
    $db_connection = new PDO('mysql:host=localhost;dbname=registration', 'root', '');
    $prepare_to_db = $db_connection->prepare('insert into registeruserdb (login, pass, email, city) VALUES (:login,:pass,:email,:city)');
    $var = $prepare_to_db->execute([
        ':login' => $userData['login'],
        ':pass' => $hash,
        ':email' => $userData['email'],
        ':city' => $userData['city']
    ]);

    if (is_bool($var) === true) {
        $_SESSION["done"] = "Регистрация успешна";
    }else{
        $_SESSION["err"] = "Ошибка регистрации";
    }

header("Refresh:0 ; http://register/registration");

}


}