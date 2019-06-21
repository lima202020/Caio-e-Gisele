<?php 
	class Quarto{
		private $cod;
		private $tipo;
		private $numero;
		private $valor_diaria;
		private $andar;

		public function getCod(){
			return $this->cod;
		}
		public function setCod($cod){
			$this->cod = $cod;
		}

		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}

		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($numero){
			$this->numero = $numero;
		}

		public function getValor_diaria(){
			return $this->valor_diaria;
		}
		public function setValor_diaria($valor_diaria){
			$this->valor_diaria = $valor_diaria;
		}
		
		public function getAndar(){
			return $this->andar;
		}
		public function setAndar($andar){
			$this->andar = $andar;
		}
	}
?>