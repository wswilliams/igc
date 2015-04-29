<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controle
 *
 * @author williams
 */
class controle {
    //put your code here
    private static $instance;
    
    /*metodo projeto sington
      */
    public static function getInstance(){
      try{
	 if (! self:: $instance){
	      self:: $instance = new controle();
	   }
	     return self:: $instance;
        }catch (Exception $e) {
              echo($e->getMessage());
	}
     }
     /*fim
      */
     
     /*metodo para cadastrar um membro que recebe como parametro um objeto membro
      * e retorna um 
      */
     public function cadadastrarMembroControle(objetoMembro $obj){
      require_once ("control/dao.php");
      $objDao = dao::getInstance();
      
      return $ret =$objDao->cadadastrarMembroDao($obj);
     }
     /*fim
      */
     
     /*metodo para pesquisar um membro que recebe como parametro um tipo string
      * e retorna um objeto
      */
     function pesquisarMembroControle($obj){
      require_once ("control/dao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = dao::getInstance();
      $objetoMembro = new objetoMembro();
      
      return $objetoMembro =$objDao->pesquisarMembroDao($obj);
      
     }
     /*fim
      */
     
     /*metodo para pesquisar um membro que recebe como parametro um tipo int
      *referente a matricula do membro e retorna um objeto
      */
     function pesquisarMembroMatriculaControle($matricula){
      require_once ("control/dao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = dao::getInstance();
      $objetoMembro = new objetoMembro();
      
      return $objetoMembro =$objDao->pesquisarMembroMatriculaDao($matricula);
      
     }
     /*fim
      */

    /*metodo para cadastrar uma celula que recebe como parametro um objeto celula
      * e retorna um inteiro
      */
     public function cadadastrarCelulaControle(objetocelula $obj){
      require_once ("control/dao.php");
      $objDao = dao::getInstance();
      
      return $ret =$objDao->cadadastrarCelulaDao($obj);
     }
     /*fim
      */

     /*metodo para cadastrar uma celula que recebe como parametro um objeto celula
      * e retorna um inteiro
      */
     public function cadadastrarCartaControle($mat,$tip,$data){
      require_once ("control/dao.php");
      $objDao = dao::getInstance();
      
      return $ret =$objDao->cadadastrarCartaDao($mat,$tip,$data);
     }
     /*fim
      */
     
          /*metodo para cadastrar uma celula que recebe como parametro um objeto celula
      * e retorna um inteiro
      */
     public function validarLoginControle($login,$senha){
      require_once ("control/dao.php");
      $objDao = dao::getInstance();
      
      return $ret =$objDao->validarLoginDao($login,$senha);
      
     }
     /*fim
      */

     /*metodo para pesquisar um membro e removelo da celula
      */
     function excluirMembrodaCelulaControle($codCelula,$matricula){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      return $objeto =$objDao->excluirMembrodaCelulaDao($codCelula,$matricula);
      
     }
     /*fim
      */
     
      /*metodo para atualizar os dados do membro
      */
     function updateMembroControle(objetoMembro $objeto){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      
      return $ret =$objDao->updateMembroDao($objeto);
      
     }
     /*fim
      */
     
     /*metodo para pesquisar uma celula
      * e retorna um objeto
      */
     function pesquisarCelulaControle($obj){
      require_once ("control/dao.php");
      require_once ("modelo/objetocelula.php");
      
      $objDao = dao::getInstance();
      $celula = new objetocelula();
      
      return $objetoMembro =$objDao->pesquisarCelulaDao($obj);
      
     }
     /*fim
      */
     
     /*metodo para membros nas celulas
      */
     function incluirMembrosnaCelulaControle($matricula,$celula){
      require_once ("control/dao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = dao::getInstance();
      $objMembro = new objetoMembro();
      
      return $objMembro =$objDao->incluirMembrosnaCelulaDao($matricula,$celula);
      
     }
     /*fim
      */
     
     
      /*metodo para pesquisar membro e retornar um lista
      */
     function listadeMembrodaControle($nome){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      $listaCliente = array();
      
      return $listaCliente =$objDao->listadeMembrodaDao($nome);
      
     }
     /*fim
      */
     
      /*metodo para pesquisar membro da celula e retornar um lista
      */
     function listadeMembrodaCelulaControle($matricula){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      $listaCelula = array();
      
      return $listaCliente =$objDao->listadeMembroCelulaDao($matricula);
      
     }
     /*fim
      */
     
     /*metodo para pesquisar membro e retornar um lista
      */
     function listadeTodosMembroControle(){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      $listaCliente = array();
      
      return $listaCliente =$objDao->listadeTodosMembroDao();
      
     }
     /*fim
      */
     
     /*metodo para pesquisar membro e retornar um lista
      */
     function listadeMembroativosControle(){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      $listaCliente = array();
      
      return $listaCliente =$objDao->listadeMembroativosDao();
      
     }
     /*fim
      */
     
          /*metodo para pesquisar celula e retornar um lista
      */
     function listaTodasCelulasControle(){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      $lista = array();
      
      return $lista =$objDao->listaTodasCelulasDao();
      
     }
     /*fim
      */
     
      /*metodo para pesquisar todos os aniversariantes do mes
      */
     function listaTodosAniversariantesdoMesControle($mes){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      $lista = array();
      
      return $lista =$objDao->listaTodosAniversariantesdoMes($mes);
      
     }
     
     /*fim
      */
     
     
      /*metodo para pesquisar todos os aniversariantes do mes
      */
     function listaTodosAniversariantesdeHojeControle(){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      $lista = array();
      
      return $lista =$objDao->listaTodosAniversariantesdeHojeDao();
      
     }
     
     /*fim
      */
     
      /*metodo para pesquisar todos os membros com o nome passado
       * 
       */
 function listadeMembroPorNome($nome){
      require_once ("control/dao.php");
      $objDao = dao::getInstance();
      $lista = array();
      
      return $lista =$objDao->listadeMembroPorNome($nome);
     }
     /*fim
      */
     
          /*metodo para retornar todas as cartas emitidas no sistema
      */
   function listadeTodasCartaControle(){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      $listaCarta = array();
      
      return $listaCarta =$objDao->listadeTodasCartaDao();
      
     }
     /*fim
      */
     
     /*metodo para pesquisar membro e retornar um lista
      */
     function listadeTodosEmailControle(){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      $listaEmail = array();
      
      return $listaEmail =$objDao->listadeTodosEmailDao();
      
     }
     /*fim
      */
     
     /*metodo para pesquisar membro e retornar um lista
      */
     function listadeTodosLiderControle(){
      require_once ("../control/dao.php");
      
      $objDao = dao::getInstance();
      $listaLider = array();
      
      return $listaLider =$objDao->listadeTodosLiderDao();
      
     }
     /*fim
      */
}
