<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $userModel;
    private $session;

    public function __construct(){
        $this->userModel = new \App\Models\UserModel();
        $this->session = \Config\Services::session();
    }

    public function index() {
        return view('login');
    }
    public function dashboard() {
        if(session('user')==""){
            return redirect()->to("/");
        }
        return view('dashboard');
    }


 
}
