<?php

class Private_Controller extends Public_Controller{

	function __construct(){
		parent::__construct();

		$this->data['page']['type'] = 'Private';

		// Check login details
		// $this->ion_auth->logged_in()
	}

}
