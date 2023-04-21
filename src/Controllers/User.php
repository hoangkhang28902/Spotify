<?php
class User extends Controller
{
    private $userModel;

    function __construct()
    {
        $this->userModel = $this->model('User');
    }

    function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->userModel->getUserByUsername($username);

            if ($user && ($password == $user[0]['Password'])) {
                header('Location: /Spotify');
                exit;
            } else {
                $errorMessage = 'Invalid username or password.';
                // $this->view('pages/Login', ['errorMessage' => $errorMessage]);
                echo $errorMessage;
                exit;
            }
        }
        $this->view('pages/Login');
    }
}
