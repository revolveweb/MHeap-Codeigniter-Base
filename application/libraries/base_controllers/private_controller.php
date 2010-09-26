<?php

class Private_Controller extends Public_Controller{

	function __construct(){
		parent::__construct();

		$this->data['page']['type'] = 'Private';

		// We need ion_auth loading to check if they have permission
		$this->load->library('ion_auth');
		
		if ( ! $this->ion_auth->logged_in() ){
			$this->message->set('error','Not Logged In');
			$this->session->set_flashdata('redirect_to_after_login', $this->uri->uri_string());
			redirect('auth/login');
		}
	}

}
