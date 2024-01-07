<?php
	
	define('INCLUDE_PATH','http://localhost/mvc/');
	define('INCLUDE_PATH_FULL','http://localhost/mvc/Views/pages/');
	class App
	{
		
		public function execute(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){
				$className = 'Controllers\\'.$url;
				$controlador = new $className;
				$controlador->execute();
			}else{
				include('404.php');
				die();//controlador inexistente
			}
		}
	}
	
?>