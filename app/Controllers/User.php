<?php

namespace App\Controllers;

class User extends BaseController
{
    private $userModel;
    

    public function __construct(){
        $this->userModel = new \App\Models\UserModel();
        $this->session = \Config\Services::session();
    }

    public function index() {
        return view('registForm');
    }

    public function signin() {
        $email    = $this->request->getPost("email");
        $password = $this->request->getPost("password");

        $cek = $this->userModel->where("email",$email)->first();
        //print_r($cek);
        //die();
        
            if($cek!=""){
                if (password_verify($password, $cek->password)) {
                    
                    $this->session->set("user", $cek);
                    return redirect()->to("dashboard");
                } else {
                    $session = session();
                    session()->setFlashdata('invalid','Invalid email or password :( ');
                    return redirect()->to("/");
                }

            } else {
                $session = session();
                session()->setFlashdata('wrong','Ups..You Are Not Registered! ');
                return redirect()->to("/");
            }
        
    }

    public function signout() {
        session_destroy();
        return redirect()->to("/");
    }

    public function register() {
       $name      =  $this->request->getPost('name');
       $email     =  $this->request->getPost('email');
       $pass      =  $this->request->getPost('password');
       $akses     =  $this->request->getPost('akses');

       //enc password
       $pass_enc = password_hash($pass,PASSWORD_BCRYPT);

       $data = ([
        "name"      => $name,
        "email"     => $email,
        "password"  => $pass_enc,
        "akses"     => $akses,
       ]);
      
       $tambah = $this->userModel->insert($data);
       if($tambah){
        $session = session();
        session()->setFlashdata('message','Registration Succesfull, SignIn Please! ');
        return redirect()->to(base_url("/"));
       } else{
        return redirect()->to(base_url("/register"));
       }
    }
}
