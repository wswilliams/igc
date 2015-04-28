	<?php
	class Conectar{
			protected $link;
			private $server; private $username; private $password; private $db; private $busca;
            private static $instance;


            public function __construct()
			{

				try{
                    $server ="localhost"; $username="Bdigc"; $password="Homega36Alfa"; $db="bdaigc";
//                    $server ="dbmy0106.whservidor.com";
//                   $username="geracaopar";
//                  $password="homega36alfa";
//                    $db="geracaopar";
                    $this->server = $server;
				    $this->username = $username;
				    $this->password = $password;
				    $this->db = $db;
                    $this->connect();

                   }catch (Exception $e) {
                      echo($e->getMessage());
		       }
			}

            public static function getInstance(){
            try{
		       if (! self:: $instance){
			      self:: $instance = new Conectar();
		          }
		       return self:: $instance;
		       }catch (Exception $e) {
                      echo($e->getMessage());
		       }
	         }

			private function connect()
			{

                    $this->link= mysql_connect($this->server, $this->username, $this->password, $this->db);
				    mysql_select_db($this->db, $this->link);

			}

			public function __sleep()
			{
				return array('server', 'username', 'password', 'db');
			}

			public function __wakeup()
			{
				$this->connect();
			}

			public function freebanco(){
				mysql_close($this->link);
			}
		};

?>
