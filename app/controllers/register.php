<?php

class Register extends Controller {

    public function index() {		
      $this->view('register/index');
    }

    public function create(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $user = $this->model('User');

        $result = $user->create_user($username, $password);
        if ($result === "User created successfully") {
            header('Location: /login?success=' . urlencode('Registration successful. You can now login.'));
            exit();
        } else {
            $error = $result;
        }
    }
}