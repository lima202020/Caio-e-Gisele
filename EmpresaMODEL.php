<?php 
	class Empresa{
		private $cod;
		private $cnpj;
		private $num;
		private $rua;
		private $bairro;
		private $cidade;
		private $estado;
		private $pais;
		private $cep;
		private $slogan;
		private $nome;
		private $tel_celular;
		private $tel_fixo;
		private $email;
		private $twitter;
		private $instagram;
		private $facebook;
		private $foto;

		public function getCod(){
			return $this->cod;
		}
		public function setCod($cod){
			$this->cod = $cod;
		}

		public function getCnpj(){
			return $this->cnpj;
		}
		public function setCnpj($cnpj){
			$this->cnpj = $cnpj;
		}
		
		public function getNum(){
			return $this->num;
		}
		public function setNum($num){
			$this->num = $num;
		}

		public function getRua(){
			return $this->rua;
		}
		public function setRua($rua){
			$this->rua = $rua;
		}

		public function getBairro(){
			return $this->bairro;
		}
		public function setBairro($bairro){
			$this->bairro = $bairro;
		}

		public function getCidade(){
			return $this->cidade;
		}
		public function setCidade($cidade){
			$this->cidade = $cidade;
		}

		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}

		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}

		public function getCep(){
			return $this->cep;
		}
		public function setCep($cep){
			$this->cep = $cep;
		}

		public function getSlogan(){
			return $this->slogan;
		}
		public function setSlogan($slogan){
			$this->slogan = $slogan;
		}

		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getTel_celular(){
			return $this->tel_celular;
		}
		public function setTel_celular($tel_celular){
			$this->tel_celular = $tel_celular;
		}

		public function getTel_fixo(){
			return $this->tel_fixo;
		}
		public function setTel_fixo($tel_fixo){
			$this->tel_fixo = $tel_fixo;
		}
		
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		
		public function getTwitter(){
			return $this->twitter;
		}
		public function setTwitter($twitter){
			$this->twitter = $twitter;
		}
		
		public function getInstagram(){
			return $this->instagram;
		}
		public function setInstagram($instagram){
			$this->instagram = $instagram;
		}

		public function getFacebook(){
			return $this->facebook;
		}
		public function setFacebook($facebook){
			$this->facebook = $facebook;
		}
		
		public function getFoto(){
			return $this->foto;
		}
		public function setFoto($foto){
			$this->foto = $foto;
		}
	}
?>