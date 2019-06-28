<?php


class loginModel
{
    public function loginUserModel($postMassLog)
    {
        session_start();
        var_dump($_SESSION["testDump"]);
        die;
        $conn = new PDO ('mysql:host=localhost;dbname=registration', 'root', '');


        if (isset($postMassLog['login'])) {
            $userLogin = $postMassLog['login'];
            $UserPassword = $postMassLog['pass'];



            $sql = "SELECT login, pass FROM user WHERE login=? AND pass=? ";
            $query = $conn->prepare($sql);
            $query->execute([
                ':login' => $postMassLog['login'],
                ':pass' => $postMassLog["pass"]
            ]);
        }}}
//            if($query->rowCount() >= 1) {
//                $_SESSION['userLogin'] = $userLogin;
//
//                header("location: login.php");
//            }
//            else
//            {
//                $message = "Username/Password is wrong";
//                echo $message;
//            }
//        }


