<?php

class MY_Controller extends Controller{

	function __construct(){
		parent::Controller();

		$this->data = array();

		if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']))
		{
		  	$this->partial->header('layout/header');
			$this->partial->footer('layout/footer');
			define("IS_AJAX", false);
		}else{
			define("IS_AJAX", true);
		}
		
	}

	function _output(){
		echo $this->partial->outputPage();
	}

}