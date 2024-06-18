<?php
namespace app\controllers;

use app\core\Request;
use app\core\Controller;
use app\models\RegisterModel;
use app\models;

class AuthController extends Controller {
    public function login(Request $request) {
        $this->setLayout('auth');
        if($request->isPost()){
            return "handle login";
        }
        return $this->render("login");
    }
    public function register(Request $request) {
        $this->setLayout('auth');
        $registerModel = new RegisterModel();
        if($request->isPost()){
            $registerModel->loadData($request->input());
            if($registerModel->validate() && $registerModel->save()) {
                return 'success';
            }
            return $this->render("register", ["model"=>$registerModel]);
        }
        return $this->render("register", ["model"=>$registerModel]);
    }
}