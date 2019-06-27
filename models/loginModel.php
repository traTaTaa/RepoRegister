<?php


class loginModel
{
public function loginModel (){
    session_start();

    $conn = new PDO ('mysql:host=localhost;dbname=registration','root','');

    if (isset($_POST['login'])){
        $userLogin = $_POST['login'];
        $UserPassword = $_POST['pass'];


        if(empty($userLogin) && empty($UserPassword)) {
            $message = "Username/Password con't be empty";
        }
        else
        {
            $sql = "SELECT userLogin, UserPassword FROM user WHERE userLogin=? AND UserPassword=? ";
            $query = $conn->prepare($sql);
            $query->execute(array($userLogin,$UserPassword));

            if($query->rowCount() >= 1) {
                $_SESSION['userLogin'] = $userLogin;
                header("location: login.php");
            }
            else
            {
                $message = "Username/Password is wrong";
                echo $message;
            }
        }
    }

}
}