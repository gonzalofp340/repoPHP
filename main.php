<?php
	require_once "console.class.php";
	
	class Ejemplo extends Console{
		
		public function main(){
			$this->write("Aplicación de consola realizada en PHP");
			$this->readInput("INGRESE SU NOMBRE: ");
			$nombre= $this->printInput();
			$this->write("Su Nombre es: ".$nombre);
			
			$params= $this->getParams();
			
			if($this->countParams() > 0){
				$this->write("**********************************");
				$this->write("PARAMETROS DE LA APLICACION:");
				$this->write("**********************************");
				foreach($params as $param => $value){
					$this->write("\t".$param." = ".$value);
				}
			}
			
		}
		
	}
	
	$exec = new Ejemplo();
	$exec->main();
