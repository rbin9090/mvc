<?php




/**
 * APLICATION
 */
class Aplication
{
	
public function executar(){
	$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'home';
	$url = ucfirst($url);
	$url.="Controller";//
	
	
	
	if(file_exists('Controllers/'.$url.'.php')){
		
		$classname = 'Controllers\\'.$url;
		$controller = new $classname;//*
		$controller->executar();//*
	}else{
		die('<h2 style=color:green;>Não existe esse controlador!</h2>');
	}


}
}



?>