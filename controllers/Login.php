<?php

require_once ("models/loginModel.php");

class Login extends Controller
{
    public function loginUserForm(){
        $this->view->generate('loginForm.php','template_view.php');
    }

    public function loginDb(){
        $this->loginModel->loginUserModel;
    }
}