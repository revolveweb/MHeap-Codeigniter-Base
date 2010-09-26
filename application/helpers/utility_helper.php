<?php

function mpr($__d){
	echo '<pre>'.print_r($__d,true).'</pre>';
}

function mprd($__d){
	mpr($__d);
	die;
}
