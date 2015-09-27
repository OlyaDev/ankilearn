<?php

class Controller_Anki extends Controller
{

	
	function action_index()
	{
		
		$this->view->generate('anki_view.php', 'template_view.php');
	}
}
