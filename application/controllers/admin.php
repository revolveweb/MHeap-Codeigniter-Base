<?php

class admin extends Admin_Controller {

	function index(){}

	
	/* Users */
	function users($__method = null){
		if ( in_array( $__method, array('edit') ) ){			
			$this->load->model('users_model');
			$this->users_model->set_table('users');

			$params = array_splice( func_get_args(), 1 );
			call_user_func_array(array($this, '_users_'.$__method), $params);
		}
	}

	function _users_edit($__id = null){
		if ( is_null($__id) ){
			$this->data['users'] = $this->users_model->get_all('id, username, email, last_login');
			$this->partial->register('admin/list_users');
		}
		else
		{
			$this->load->language('auth');

			if ($this->input->post('user_username') {
				$this->message->set( 'notice', 'Updated' );
			}

			$this->data['user'] = $this->users_model->get_one( array('id' => $__id) );
			$this->partial->register('admin/users_edit');
		}
	}

}
