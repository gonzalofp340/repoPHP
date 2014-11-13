<?php
/* Clase para trabajar con php en linea de comando. */
class Console{
	private $_stdin= null;
	
	/* Lee la entrada del usuario en la consola */
	function readInput($str){
		print $str;
		$stdin= fopen("php://stdin", "r");
		$entrada= fgets($stdin);
		$this->_stdin= trim($entrada);
	}

	/* Retorna el texto de la entrada del usuario en la consola */
	function printInput(){
		return $this->_stdin;
	}

	function write($str){
		print trim($str)."\n";
	}
	
	/* Obtiene un array con los parametros */
	function getParams(){
		global $argv;
		$params= $argv;
		unset($params[0]);
		return $params;
	}
	
	function countParams(){
		global $argc;
		$count = $argc;
		return $count-1;
	}
}
