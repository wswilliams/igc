   <?php
  	class objetocelula{
		private $nome; private $lider; private $rua; private $casa; private $bairro;
		private $dia; private $status;private $id; 
		private static $instance;

		public function __construct()
			{

				try{
                                    $this->getNome(); $this->getLider();
				    $this->getRua(); $this->getCasa();
                                    $this->getBairro();
                                    $this->getDia();
                                    $this->getStatus();
                                    $this->getId();

                   }catch (Exception $e) {
                      echo($e->getMessage());
		       }
			}
/*
            public static function getInstance(){
            try{
		       if (! self:: $instance){
			      self:: $instance = new objetocelula();
		          }
		       return self:: $instance;
		       }catch (Exception $e) {
                      echo($e->getMessage());
		       }
	         }
*/
                function getId() {
                return $this->id;
                }

                function setId($id) {
                   $this->id = $id;
                }

                 public function setNome($nome) {
                     $this->nome = $nome;
                 }

                 public function setLider($lider) {
                     $this->lider = $lider;
                 }

                 public function setRua($rua) {
                     $this->rua = $rua;
                 }

                 public function setCasa($casa) {
                     $this->casa = $casa;
                 }

                 public function setBairro($bairro) {
                     $this->bairro = $bairro;
                 }


                 public function setDia($dia) {
                     $this->dia = $dia;
                 }

                 public function setStatus($status) {
                     $this->status = $status;
                 }

                 
		public function getNome()
		{
			return $this->nome;
		}
		public function getLider()
		{
			return $this->lider;
		}
		public function getRua()
		{
			return $this->rua;
		}
		public function getCasa()
		{
			return $this->casa;
		}
		public function getBairro()
		{
			return $this->bairro;
		}
		public function getDia()
		{
			return $this->dia;
		}

		public function getStatus()
		{
			return $this->status;
		}

		function valida($nome, $lider,$rua,$casa,$bairro,$dia,$status){

			$this->nome=$nome; $this->lider=$lider; $this->rua=$rua; $this->casa=$casa; $this->bairro=$bairro;
			$this->dia = $dia; $this->status=$status;
		}
		function valida1($id,$nome, $lider,$rua,$casa,$bairro,$dia,$status){

			$this->nome=$nome; $this->lider=$lider; $this->rua=$rua; $this->casa=$casa; $this->bairro=$bairro;
			$this->dia=$dia; $this->status=$status;$this->id=$id;
		}
                
               public function __toString(){
                    return  $this->nome;
                }
	};
?>
