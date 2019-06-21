<?php 
	class Cliente_Servico{
		private $cod;
		private $fk_Servico;
		private $fk_Cliente;

		public function getCod(){
			return $this->cod;
		}
		public function setCod($cod){
			$this->cod = $cod;
		}

		public function getFk_Servico(){
			return $this->fk_Servico;
		}
		public function setFk_Servico($fk_Servico){
			$this->fk_Servico = $fk_Servico;
		}

		public function getFk_Cliente(){
			return $this->fk_Cliente;
		}
		public function setFk_Cliente($fk_Cliente){
			$this->fk_Cliente = $fk_Cliente;
		}
	}
?>