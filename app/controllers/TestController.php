<?php

// en teoria   debe abrir el mensaje "hello from test"

class TestController extends ApplicationController{
	// controller 
	public function indexAction()
	{
		$this->view->message = "hello from test::index";
	}
	
	public function checkAction()
	{
		echo "hello from test::check";
	}

}
