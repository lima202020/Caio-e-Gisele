<?php 
	class Servico{
		private $cod;
		private $tipo;
		private $num_confir;
		private $preco_diaria;

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

		public function getNum_confir(){
			return $this->num_confir;
		}
		public function setNum_confir($num_confir){
			$this->num_confir = $num_confir;
		}

		public function getPreco_diaria(){
			return $this->preco_diaria;
		}
		public function setPreco_diaria($preco_diaria){
			$this->preco_diaria = $preco_diaria;
		}
	}
?>