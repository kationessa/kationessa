<?php

function register_styles(){
	wp_register_style('my-bootstrap', get_template_directory_uri() .
		'bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('my-bootstrap');

	wp_register_style('mbootstrap', get_template_directory_uri() .
		'bootstrap/css/bootstrap.css');
	wp_enqueue_style('mbootstrap');

	wp_register_style('mbbootstrap', get_template_directory_uri() .
		'bootstrap/css/bootstrap-theme.css');
	wp_enqueue_style('mbbootstrap');

	wp_register_style('minbootstrap', get_template_directory_uri() .
		'bootstrap/css/bootstrap-theme.min.css');
	wp_enqueue_style('minbootstrap');
}