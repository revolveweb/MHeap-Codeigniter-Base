<?php

$config = array (

	'auth/login' => array (
		array (
		'field' => 'login_email',
		'label' => lang('login'),
		'rules' => 'required|email'
		),
		array (
		'field' => 'login_password',
		'label' => lang('login_success'),
		'rules' => 'required'
		)
	)

);
