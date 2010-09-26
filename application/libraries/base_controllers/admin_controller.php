<?php

class Admin_Controller extends Private_Controller{

	function __construct(){
		parent::__construct();

		$this->data['page']['type'] = 'Admin';
	
		if ( ! $this->ion_auth->is_admin() ){
			$this->message->set('error','Administrator Access Required');
			redirect('auth/login');
		}
	}

}
