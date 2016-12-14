<?php

namespace Mvc\Controller;

/**
* 
*/
class Client extends Controller
{
	
	public function __construct(argument)
	{
		parent::__construct();
	}

	public function index($page = 1)
	{
		$rows = $this->_model->get($page);

        require '../views/client/index.php';
	}
}