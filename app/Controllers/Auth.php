<?php

namespace App\Controllers;

class Auth extends BaseController {
    public function getLogin(){
        return view();
    }
	public function pageRegister(){
		return view('register');
	}
	
	public function pageLogin(){
		return view('login');
	}
	
	public function login(){
	}
	
	public function register(){
	}
}