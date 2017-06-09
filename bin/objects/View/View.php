<?php 

namespace View;

class View {

	
	public $basePath = "app/Template/";
	public $baseTemplate = 'base';
	
	public $centerPage;
	
	function __construct($center = 'home'){
		$this -> centerPage = $center;
	}
	
	function render($name, $data = null){
		$name = str_replace(".", '/', $name);
		include($this->basePath.$name.'.php');
	}
	
	function show($data = null){
		$this -> render($this -> baseTemplate, $data);
	}
	
}