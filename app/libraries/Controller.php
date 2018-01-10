<?php

/*
Base Controller
Loads models and views
*/

class Controller{
    // Load model
    public function model($model){
        // require model file
        require_once '../app/models/' . $model . '.php';
        // instantiate model
        return new $model();
    }

    // load view
    public function view($view){
        // check for the view file
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        }else{
            //view does not exists
            die('View does not exist');
        }
    }
}