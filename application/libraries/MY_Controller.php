<?php

class MY_Controller extends Controller{

	function __construct(){
		parent::Controller();

		// Re-enable $_GET
		$_qs = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], '?') + 1);
		parse_str($_qs, $_GET);

		$this->data = array();

		if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']))
		{
		  	$this->partial->header('layout/header');
			$this->partial->footer('layout/footer');
			define("IS_AJAX", false);
		}else{
			define("IS_AJAX", true); 
		}

		$this->data['page'] = array(
			  'controller' => $this->router->class
			, 'method' => $this->router->method
			, 'type' => 'Abstract'
		);	

		if (file_exists( APPPATH.'/views/'.$this->data['page']['controller'].'/'.$this->data['page']['method'] )){
			$this->partial->register($this->data['page']['controller'].'/'.$this->data['page']['method']);
		}
	}

	function _output(){
		echo $this->partial->outputPage();
	}

}
