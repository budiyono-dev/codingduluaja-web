<?php

namespace App\Controllers;

class Auth extends BaseController {
    public function getLogin(){
        return view();
    }
	public function pageRegister(){
		return view('adm/main');
	}
	
	public function pageLogin(){
		return view('login',['title' =>'Login']);
	}
	
	public function login(){
	}
	
	public function register(){
	}
}