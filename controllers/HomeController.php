<?php 
namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class HomeController extends Controller
{
    public function index(){
        $params = [
            "title"=> "Home Page",
        ];
        return $this->render('home', $params);
    }
    public function contact(){ 
        return $this->render('contact');
    }
    public function submitContact(Request $request){ 
        $params = $request->input();
        $params = obj($params);
        return $this->render('contact', $params);
    }
}