<?php
class Controller {

    public function model($model) {
        require_once 'app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        // Extract the data array into individual variables
        extract($data);

        // Now require the view file
        require_once 'app/views/' . $view . '.php';
    }
}