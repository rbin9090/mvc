<?php

namespace Controllers;

class contatoController
{
   private $views;

   public function __construct(){
   	$this->views = new \views\contatoViews('contato');
   	
   }

public function executar(){
	$this->views->render();
}



}

?>