 <?php
	
	class Conta{
		var $codigo; var $codigo_usuario; var $nomeConta; var $desc; var $valor; var $data;
		
		function getCodigoUsuario()
		{
			return $this->codigo_usuario;
		}
		function getCodigo()
		{
			return $this->codigo;
		}
		
		function getNomeConta()
		{
			return $this->nomeConta;
		}
		function getDesc()
		{
			return $this->desc;
		}
		function getValor()
		{
			return $this->valor;
		}
		function getData()
		{
			return $this->data;
		}
		
		function cadastra($codigo,$codigo_usuario,$data,$desc,$valor){
		
			$this->codigo=$codigo; $this->codigo_usuario=$codigo_usuario; $this->data=$data; $this->desc=$desc; $this->valor=$valor;
		}
		
		function cadastrar_conta($nomeConta){

			$this->nomeConta=$nomeConta;
		}
	};
	
	class Carta{
		var $codigo; var $nome; var $desc; var $matricula;

		function getNome()
		{
			return $this->nome;
		}
		function getDesc()
		{
			return $this->desc;
		}
		function getCodigo()
		{
			return $this->codigo;
		}
        function getMatricula()
		{
			return $this->matricula;
		}
		function emitir($matricula,$codigo){

			$this->matricula=$matricula; $this->codigo=$codigo;
		}
	};
	
  ?>
