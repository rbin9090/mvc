<?php




/**
 * APLICATION
 */
class Aplication
{
	
public function executar(){
	$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'home';
	$classname = 'Controllers\\'.$url;
	$url = ucfirst($url);
	$url.="Controller";//
	if(file_exists('Controllers/'.$url.'.php')){
		echo "estou carregando a classe".$classname;
		$controlador = new $url;//*
		$controlador->executar();//*
	}else{
		die('controlador inexistente');
	}


}
}



?>