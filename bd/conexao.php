<?php
class Connection{
     protected $link;
     private $server;
     private $username;
     private $password;
     private $db;
     private $busca;
     private static $instance;

     //medodo contrutor
      public function __construct(){
	
          try{
                $server ="localhost"; $username="root"; $password="root"; $db="geracaopar1_1";
/*                $server ="dbmy0055.whservidor.com";
                $username="geracaopar1_1";
                $password="homega36@";
                $db="geracaopar1_1";   
*/     
                $this->server = $server;
		$this->username = $username;
		$this->password = $password;
		$this->db = $db;
                $this->connect();
                    
              }catch (Exception $e) {
                      echo($e->getMessage());
	      }
	}
    //fim do metodo construtor
    
        //projeto singto
    public static function getInstance(){
    
        try{
	    if (! self:: $instance){
	        self:: $instance = new Connection();
	        }
	       return self:: $instance;
	       }catch (Exception $e) {
                  echo($e->getMessage());
	     }
      }
    //fim do metodo singto
      
      //metodo connect, conecta a base de dado
      private function connect(){

         $this->link= mysql_connect($this->server, $this->username, $this->password,$this->db);
	 mysql_select_db($this->db,$this->link);

      }
      //fim do metodo conexao

      
      //metodo magico sllep
      public function __sleep(){
	return array('server', 'username', 'password', 'db');
      }
      //fim
      
      //metodo magico wakeup, para reconectar cosa a conexao tenha caido
     public function __wakeup(){
	$this->connect();
     }
     //fim

     //metodo freebanco, que limpa da memoria "fexa a conexao"
    public function freebanco(){
      mysql_close($this->link);
     }
     //fim
};

?>
