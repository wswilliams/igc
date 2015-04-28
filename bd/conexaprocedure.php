<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexaprocedure
 *
 * @author williams
 */
class conexaprocedure {

    //put your code here

    private $server;
    private $username;
    private $password;
    private $db;
    private static $instance;

    //medodo contrutor
    public function __construct() {

        try {

            $server = "localhost";
            $username = "Bdigc";
            $password = "Homega36Alfa";
            $db = "igc1";
    /*        
              $server ="dbmy0026.whservidor.com";
              $username="geracaopar1";
              $password="homega36@";
              $db="geracaopar1";
    */         

            $this->server = $server;
            $this->username = $username;
            $this->password = $password;
            $this->db = $db;
        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }

    //fim do metodo construtor
    //projeto singto
    public static function getInstance() {

        try {
            if (!self:: $instance) {
                self:: $instance = new conexaprocedure();
            }
            return self:: $instance;
        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }

    //fim do metodo singto

    public function getServer() {
        return $this->server;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDb() {
        return $this->db;
    }

}

;
?>
