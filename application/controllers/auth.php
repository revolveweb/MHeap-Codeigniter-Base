<?php

class auth extends Public_Controller {

	function __construct(){
		parent::__construct();
		// Need ion auth even though it's a public controller
		$this->load->library('ion_auth');
	}

	function login() {
		$this->session->keep_flashdata('redirect_to_after_login');

		$this->ion_auth->login('admin@admin.com','password',false);

		if (true){
			$page = $this->session->flashdata('redirect_to_after_login');
			echo '|'.$page.'|';die;
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
