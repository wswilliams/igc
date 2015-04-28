<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of objetoEmail
 *
 * @author wswilliams
 */
class objetoEmail {
    //put your code here
    private $email; private $nome; private $mensagem; private $data;
    
 function __construct() {
     $this->getEmail();
     $this->getNome();
     $this->getMensagem();
     $this->getData();
 }

 function enviarEmail($email, $nome, $mensagem, $data){
     $this->email=$email;
     $this->nome=$nome;
     $this->mensagem=$mensagem;
     $this->data=$data;
 }
         
 function getEmail() {
     return $this->email;
 }

 function getNome() {
     return $this->nome;
 }

 function getMensagem() {
     return $this->mensagem;
 }

 function getData() {
     return $this->data;
 }

 function setEmail($email) {
     $this->email = $email;
 }

 function setNome($nome) {
     $this->nome = $nome;
 }

 function setMensagem($mensagem) {
     $this->mensagem = $mensagem;
 }

 function setData($data) {
     $this->data = $data;
 }


    
}
