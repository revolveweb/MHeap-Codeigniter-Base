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
		'label' => lang('password'),
		'rules' => 'required'
		)
	),

	'auth/register' => array (
		array (
		'field' => 'reg_username',
		'label' => lang('username'),
		'rules' => 'required|max_length[15]'
		),
		array (
		'field' => 'reg_email',
		'label' => lang('email'),
		'rules' => 'required|email'
		),
		array (
		'field' => 'reg_password',
		'label' => lang('password'),
		'rules' => 'required|min_length[6]'
		),
		array (
		'field' => 'reg_password_con',
		'label' => lang('password_confirm'),
		'rules' => 'required|matches[reg_password]'
		)
	)

);
