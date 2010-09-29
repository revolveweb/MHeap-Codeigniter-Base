<?php

class auth extends Public_Controller {

	function __construct(){
		parent::__construct();
		// Need ion auth even though it's a public controller
		$this->load->library('ion_auth');
	}

	function login() {
		$this->session->keep_flashdata('redirect_to_after_login');

		// We have a form submitted
		if ( $this->input->post('login_email') ){

			// Let's validate. Rules are set in the config			
			$this->load->library('form_validation');
			if ( $this->form_validation->run() !== false ){
				// We passed all the validation, so let's try and log them in
				if ( $this->ion_auth->login(
					$this->input->post('login_email'),
					$this->input->post('login_password'),
					false
				)){
					$this->message->set( 'notice', lang('login_success') );
				}
				else{
					$this->message->set( 'error', lang('login_error') );
				}

			}
			else{
				$this->message->setn( 'error', validation_errors() );
			}
		}

		
		if (!true){
			$page = $this->session->flashdata('redirect_to_after_login');
			if ( $page ) {
				redirect( $page );
			}
		}
	}

	function logout(){
		$this->ion_auth->logout();
		redirect('/');
	}

}
