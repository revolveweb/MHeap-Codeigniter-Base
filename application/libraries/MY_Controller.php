<?php

class MY_Controller extends Controller{

	function __construct(){
		parent::Controller();

		// Re-enable $_GET
		$_qs = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], '?') + 1);
		parse_str($_qs, $_GET);

		$this->data = array();
		$this->load->language('common');

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

		if (file_exists( $_SERVER['DOCUMENT_ROOT'].'/'.APPPATH.'/views/'.$this->data['page']['controller'].'/'.$this->data['page']['method'].'.php' )){
			$this->partial->register($this->data['page']['controller'].'/'.$this->data['page']['method']);
		}

		$this->data['user_lang'] = $this->config->item('language');
		//$this->lang->load('site', $this->data['user_lang']);		
		$this->lang->load($this->data['page']['controller'], $this->data['user_lang']);
	}

	function _output(){

		// Register any ion_auth messages as normal messages
		$this->message->setn('notice', $this->ion_auth->messages());
		$this->message->setn('error', $this->ion_auth->errors());
		echo $this->partial->outputPage();
	}

}
