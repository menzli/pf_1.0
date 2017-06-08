<?php

// application/controllers/admin/IndexController.class.php


class IndexController extends Controller{
    public function mainAction(){
        include CURR_VIEW_PATH . "main.php";
        // Load Captcha class
        $this->loader->library("Captcha");
        $captcha = new Captcha;
        $captcha->hello();
    }

    public function indexAction(){
        $userModel = new UserModel("user");
        $users = $userModel->getUsers();
        // Load View template
        require_once  CURR_VIEW_PATH . "index.php";
    }

    public function menuAction(){
        require_once CURR_VIEW_PATH . "menu.php";
    }

    public function dragAction(){
        require_once CURR_VIEW_PATH . "drag.php";
    }

    public function topAction(){
        require_once CURR_VIEW_PATH . "top.php";
    }
}