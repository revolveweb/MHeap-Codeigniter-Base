<?php

class Welcome extends Admin_Controller {

	function Welcome()
	{
		parent::__construct();	
	}
	
	function index()
	{
		$this->partial->register('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
