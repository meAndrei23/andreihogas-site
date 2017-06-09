<?php

namespace Option;

class Option{
	
	public $basePath = 'app/config/';
	
	function readOptions($file){
		return require($this -> basePath.$file.'.php');
	}
}