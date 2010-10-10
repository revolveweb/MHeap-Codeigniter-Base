<?php

function controller_url($__url){
	return site_url(get_instance()->router->class.'/'.$__url);
}

function method_url($__params = array()){
	if (!is_array($__params)){ $__params = array($__params); }
	$c = &get_instance();
	return site_url( '/'.$c->router->class.'/' . $c->router->method.'/' . implode($__params,'/') );
}

function param_url($__params = array()){
	if (!is_array($__params)){ $__params = array($__params); }
	$p = array_merge( array_splice(get_instance()->uri->segment_array(), 2), $__params );
	return method_url($p);
}
