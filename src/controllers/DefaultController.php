<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function projects()
    {
//        Get project from db and pass to projects template
        $this->render('projects');
    }
}