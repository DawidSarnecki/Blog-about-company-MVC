﻿<?php
/*********************************************************** 
* Class name:
*    Users
* Descripton:
*    Extends Controller
**********************************************************/
class User extends Controller
{
	/*********************************************************** 
	* Protected members
	************************************************************/  	
	
	protected function register(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->register(), true);
	}

	protected function login(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->login(), true);
	}

	protected function logout(){
		unset($_SESSION['logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL.'blog');
	}
}