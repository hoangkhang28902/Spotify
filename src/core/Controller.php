<?php 

// Base controller, cấu hình chung cho các Controller
class Controller {
    public function model($model)
    {
        require_once './src/Models/' .$model. '.php';
        $model.="Model";
        return new $model;
    }

    public function view($view, $data = [])
    {
        if (file_exists('./src/Views/' .$view. '.php')) {
            require_once './src/Views/' .$view . '.php';
        } else {
            die('not view');
        }
    }
}

?>