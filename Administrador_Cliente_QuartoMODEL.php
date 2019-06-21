<?php 
	class Administrador_Cliente_Quarto{
		private $cod;
		private $fk_Cliente;
		private $fk_Quarto;
		private $fk_Administrador;
		private $num_reserva;
		private $data_inicio;
		private $data_fim;
		private $hora;
		private $tipo_pagamento;
		private $qtd_adulto;
		private $qtd_crianca;

		public function getCod(){
			return $this->cod;
		}
		public function setCod($cod){
			$this->cod = $cod;
		}

		public function getFk_Cliente(){
			return $this->fk_Cliente;
		}
		public function setFk_Cliente($fk_Cliente){
			$this->fk_Cliente = $fk_Cliente;
		}

		public function getFk_Quarto(){
			return $this->fk_Quarto;
		}
		public function setFk_Quarto($fk_Quarto){
			$this->fk_Quarto = $fk_Quarto;
		}

		public function getFk_Administrador(){
			return $this->fk_Administrador;
		}
		public function setFk_Administrador($fk_Administrador){
			$this->fk_Administrador = $fk_Administrador;
		}

		public function getNum_reserva(){
			return $this->num_reserva;
		}
		public function setNum_reserva($num_reserva){
			$this->num_reserva = $num_reserva;
		}

		public function getData_inicio(){
			return $this->data_inicio;
		}
		public function setData_inicio($data_inicio){
			$this->data_inicio = $data_inicio;
		}

		public function getData_fim(){
			return $this->data_fim;
		}
		public function setData_fim($data_fim){
			$this->data_fim = $data_fim;
		}

		public function getHora(){
			return $this->hora;
		}

		public function setHora($hora){
			$this->hora = $hora;
		}

		public function getTipo_pagamento(){
			return $this->tipo_pagamento;
		}

		public function setTipo_pagamento($tipo_pagamento){
			$this->tipo_pagamento = $tipo_pagamento;
		}

		public function getQtd_adulto(){
			return $this->qtd_adulto;
		}

		public function setQtd_adulto($qtd_adulto){
			$this->qtd_adulto = $qtd_adulto;
		}
		
		public function getQtd_crianca(){
			return $this->qtd_crianca;
		}

		public function setQtd_crianca($qtd_crianca){
			$this->qtd_crianca = $qtd_crianca;
		}
	}
?>