<?php

class Public_Controller extends MY_Controller{

	function __construct(){
		parent::__construct();

		$this->data['page']['type'] = 'Public';
	}

}
