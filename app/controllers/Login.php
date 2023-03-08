<?php

class Login extends Controller {
    public function index()
    {
        if(!isset($_SESSION['userSession'])) {
            $data['title'] = "Login";

            $this->view("layouts/auth/header", $data);
            $this->view("pages/auth/login");
            $this->view("layouts/auth/footer");
        } else {
            redirect("dashboard");
        }
    }

    public function process()
    {
        if($this->model('user')->findUserByUsername($_POST['username'])) {
            $loginInUser = $this->model('User')->login($_POST);
            if($loginInUser) {
                redirect("dashboard");
            } else {
                redirect("login");
            }       
        } else {
            redirect("login");
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['userSession']);
        redirect("login");
    }
}

