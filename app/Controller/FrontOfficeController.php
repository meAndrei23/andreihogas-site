<?php

use Base\BaseController;

use View\View;

class FrontOfficeController extends BaseController {
	
	function homeAction (){
		$view=new View('pages.home');
		$dati = [
			['titolo'=>'figo1', 'descrizione'=>'bla bla balb alba lba lbla bla'],
			['titolo'=>'figo2', 'descrizione'=>'bla bla balb alba lba lbla bla'],
			['titolo'=>'figo3', 'descrizione'=>'bla bla balb alba lba lbla bla']
		];
		$dataToView['dati'] = $dati;
		$view->show($dataToView);
	}
}