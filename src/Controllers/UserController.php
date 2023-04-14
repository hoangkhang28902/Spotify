<?php 

class UserController extends Controller {
    public function __construct() {
        $this->UserModel = $this->model('User');
    }

    public function index()
    {
        $user = $this->UserModel->getUsers();

        $this->view('page/User', [
            'user' => $user
        ]);
    }

}

?>