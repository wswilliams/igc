<?php
class objetoMembro{
		private $matricula; private $nome; private $sexo; private $data; private $rg; private $cpf; private $estadocivil;
		private $natural; private $profissao; private $escola; private $pai; private $mae; private $necessidade;
		private $fone; private $filho; private $formacao; private $membrasia; private $funcao; private $participou;
		private $trabalhando; private $viajando; private $congrega; private $rua; private $bairro; private $casa; private $status;
                private $email; private $idCarta; private $lider;
 private static $instance;
    	
        public function __construct()
			{

				try{

                    $this->getMatricula(); $this->getNome(); $this->getSexo(); $this->getData();
                    $this->getRg(); $this->getCpf(); $this->getEstadocivil(); $this->getNatural();
                    $this->getProfissao(); $this->getEscola(); $this->getPai(); $this->getMae();
                    $this->getNecessidade(); $this->getFone(); $this->getFilho(); $this->getFormacao();
                    $this->getMembrasia(); $this->getFuncao(); $this->getParticipou(); $this->getTrabalhando();
                    $this->getViajando(); $this->getCongrega(); $this->getRua(); $this->getBairro();$this->getCasa();$this->getEmail();
                    $this->getIdCarta();$this->getLider();
                   }catch (Exception $e) {
                      echo($e->getMessage());
		       }
			}
/*
       public static function getInstance(){
            try{
		       if (! self:: $instance){
			      self:: $instance = new objetoMembro();
		          }
		       return self:: $instance;
		       }catch (Exception $e) {
                      echo($e->getMessage());
		       }
	         }
*/
                function getLider() {
                   return $this->lider;
                }

                function setLider($lider) {
                   $this->lider = $lider;
                }

                function getIdCarta() {
                return $this->idCarta;
                }

                function setIdCarta($idCarta) {
                   $this->idCarta = $idCarta;
                }

                 public function setMatricula($matricula) {
                     $this->matricula = $matricula;
                 }

                 public function setNome($nome) {
                     $this->nome = $nome;
                 }

                 public function setSexo($sexo) {
                     $this->sexo = $sexo;
                 }

                 public function setData($data) {
                     $this->data = $data;
                 }

                 public function setRg($rg) {
                     $this->rg = $rg;
                 }

                 public function setCpf($cpf) {
                     $this->cpf = $cpf;
                 }

                 public function setEstadocivil($estadocivil) {
                     $this->estadocivil = $estadocivil;
                 }

                 public function setNatural($natural) {
                     $this->natural = $natural;
                 }

                 public function setProfissao($profissao) {
                     $this->profissao = $profissao;
                 }

                 public function setEscola($escola) {
                     $this->escola = $escola;
                 }

                 public function setPai($pai) {
                     $this->pai = $pai;
                 }

                 public function setMae($mae) {
                     $this->mae = $mae;
                 }

                 public function setNecessidade($necessidade) {
                     $this->necessidade = $necessidade;
                 }

                 public function setFone($fone) {
                     $this->fone = $fone;
                 }

                 public function setFilho($filho) {
                     $this->filho = $filho;
                 }

                 public function setFormacao($formacao) {
                     $this->formacao = $formacao;
                 }

                 public function setMembrasia($membrasia) {
                     $this->membrasia = $membrasia;
                 }

                 public function setFuncao($funcao) {
                     $this->funcao = $funcao;
                 }

                 public function setParticipou($participou) {
                     $this->participou = $participou;
                 }

                 public function setTrabalhando($trabalhando) {
                     $this->trabalhando = $trabalhando;
                 }

                 public function setViajando($viajando) {
                     $this->viajando = $viajando;
                 }

                 public function setCongrega($congrega) {
                     $this->congrega = $congrega;
                 }

                 public function setRua($rua) {
                     $this->rua = $rua;
                 }

                 public function setBairro($bairro) {
                     $this->bairro = $bairro;
                 }

                 public function setCasa($casa) {
                     $this->casa = $casa;
                 }

                 public function setStatus($status) {
                     $this->status = $status;
                 }
                 public function setEmail($email) {
                     $this->email = $email;
                 }
                 public static function setInstance($instance) {
                     self::$instance = $instance;
                 }
		public function getMatricula()
		{
			return $this->matricula;
		}
		public function getNome()
		{
			return $this->nome;
		}
		public function getEnd()
		{
			return $this->end;
		}
		public function getSexo()
		{
			return $this->sexo;
		}
		public function getData()
		{
			return $this->data;
		}
		public function getRg()
		{
			return $this->rg;
		}
		public function getCpf()
		{
			return $this->cpf;
		}
		public function getEstadocivil()
		{
			return $this->estadocivil;
		}
		public function getNatural()
		{
			return $this->natural;
		}
		public function getProfissao()
		{
			return $this->profissao;
		}
		public function getEscola()
		{
			return $this->escola;
		}
		public function getPai()
		{
			return $this->pai;
		}
		public function getMae()
		{
			return $this->mae;
		}
		public function getNecessidade()
		{
			return $this->necessidade;
		}
		public function getFone()
		{
			return $this->fone;
		}
		public function getFilho()
		{
			return $this->filho;
		}
		public function getFormacao()
		{
			return $this->formacao;
		}
		public function getMembrasia()
		{
			return $this->membrasia;
		}
		public function getFuncao()
		{
			return $this->funcao;
		}
		public function getParticipou()
		{
			return $this->participou;
		}
		public function getTrabalhando()
		{
			return $this->trabalhando;
		}
		public function getViajando()
		{
			return $this->viajando;
		}
		public function getCongrega()
		{
			return $this->congrega;
		}
		public function getRua()
		{
			return $this->rua;
		}
		public function getBairro()
		{
			return $this->bairro;
		}
		public function getCasa()
		{
			return $this->casa;
		}
		public function getStatus()
		{
			return $this->status;
		}
                public function getEmail()
		{
			return $this->email;
		}
		function valida($nome, $sexo,$data,$rg,$cpf,$estadocivil,$natural,$profissao,$escola,$pai,$mae,$necessidade,
			$fone,$filho,$formacao,$membrasia,$funcao,$participou,$trabalhando,$viajando,$congrega,$rua,$casa,$bairro,$email,$lider){
		
			$this->nome=$nome; $this->sexo=$sexo; $this->data=$data; $this->rg=$rg; $this->cpf=$cpf; $this->estadocivil=$estadocivil;
			$this->natural = $natural; $this->profissao =$profissao; $this->escola=$escola; $this->pai=$pai; $this->mae=$mae; $this->necessidade=$necessidade;
			$this->fone=$fone; $this->filho=$filho; $this->formacao=$formacao; $this->membrasia=$membrasia; $this->funcao=$funcao; $this->participou=$participou;
			$this->trabalhando=$trabalhando; $this->viajando = $viajando; $this->congrega = $congrega; $this->rua = $rua;  $this->casa = $casa;$this->bairro = $bairro;
                        $this->email=$email;$this->lider=$lider;
		}
		
		function valida_update($matricula,$nome, $sexo,$data,$rg,$cpf,$estadocivil,$natural,$profissao,$escola,$pai,$mae,$necessidade,
			$fone,$filho,$formacao,$membrasia,$funcao,$participou,$trabalhando,$viajando,$congrega,$rua,$casa,$bairro,$status,$email,$lider){

			$this->matricula=$matricula; $this->nome=$nome; $this->sexo=$sexo; $this->data=$data; $this->rg=$rg; $this->cpf=$cpf; $this->estadocivil=$estadocivil;
			$this->natural = $natural; $this->profissao =$profissao; $this->escola=$escola; $this->pai=$pai; $this->mae=$mae; $this->necessidade=$necessidade;
			$this->fone=$fone; $this->filho=$filho; $this->formacao=$formacao; $this->membrasia=$membrasia; $this->funcao=$funcao; $this->participou=$participou;
			$this->trabalhando=$trabalhando; $this->viajando = $viajando; $this->congrega = $congrega; $this->rua = $rua; $this->bairro = $bairro; $this->casa = $casa; 
                        $this->status = $status;$this->email = $email;$this->lider=$lider;
		}
                
                public function __toString()
                {
                    return  $this->nome;
                    /*$this->matricula." ".$this->nome." ". 
                            $this->sexo." ".$this->data." ".$this->rg." ".$this->cpf." ".$this->estadocivil." ".
                            $this->natural." ".$this->profissao." ".$this->escola." ".$this->pai." ".$this->mae." ".$this->necessidade." ".
                            $this->fone." ".$this->filho." ".$this->formacao." ".$this->membrasia." ".$this->funcao." ".$this->participou." ".
                            $this->trabalhando." ".$this->viajando." ".$this->congrega." ".$this->rua." ".$this->bairro." ".$this->casa." ".$this->status;*/
                }
                
	};
?>
