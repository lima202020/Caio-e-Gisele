<?php 
class Cliente{
	private $cod;
	private $n_casa;
	private $rua;
	private $bairro;
	private $cidade;
	private $estado;
	private $pais;
	private $cep;
	private $data_nasc;
	private $nome;
	private $tel_celular;
	private $tel_fixo;
	private $email;

	public function getCod(){
		return $this->cod;
	}
	public function setCod($cod){
		$this->cod = $cod;
	}

	public function getN_casa(){
		return $this->n_casa;
	}
	public function setN_casa($n_casa){
		$this->n_casa = $n_casa;
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

	public function getData_nasc(){
		return $this->data_nasc;
	}
	public function setData_nasc($data_nasc){
		$this->data_nasc = $data_nasc;
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
}
?>