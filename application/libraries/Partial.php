<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Partial{
	
	private $_assets = array(),
			$_header, $_footer,	
			$_partials = array();

	public function __construct(){
		$this->ci = &get_instance();
	}

	public function header($__view){
		$this->_partials[-9999] = $__view;
	}

	public function footer($__view){
		$this->_partials[9999] = $__view;
	}
	
	public function removeHeader(){
		if (isset($this->_partials['header'])){ unset($this->_partials['header']); }
	}
	
	public function removeFooter(){
		if (isset($this->_footer)){ unset($this->_footer); }
	}
		
	public function register($__view){
		$this->_partials[ count($this->_partials)-1 ] = $__view;		
	}
	
	public function outputPage(){
		
		ksort($this->_partials);

		foreach ($this->_partials as $name => $view){
			if ($view === null){ continue; }
			echo $this->ci->load->view($view, $this->ci->data, true);
		}
	}



	/* Helper Functions */
	private function _insertIntoArray(&$__array, $__offset, $__insert){
		// Can't use array_splice due to keys
		$firstPart = array_slice($__array, 0, $__offset);
		$secondPart = array_slice($__array, $__offset);
			
		// Merge it all back into one
		$__array = array_merge($firstPart, $__insert, $secondPart);
	}
	
}
