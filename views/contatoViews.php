<?php


namespace Views;

class contatoViews{

private $nomearquivo;
public function __construct($nomearquivo){
$this->nomearquivo = $nomearquivo;
}



public function render(){
	include ('pages/'.$this->nomearquivo.'.php');
}

}












?>