<?php

namespace Mvc\Controller;

/**
* 
*/
class Login extends Controller
{
	
	public function __construct(argument)
	{
		parent::__construct();
	}

	public function index()
	{
		require_once '../views/login/index.php';
	}

	public function in()
	{
		#Guardar sesión de usuario
		session_start();
		$_SESSION['user']=$_POST[user];
	}

	public function out()
	{
		unset ($_SESSION['user']);
	}
}