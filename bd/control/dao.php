<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dao
 *
 * @author williams
 */
class dao {
    //put your code here
    private static $instance;

    /*metodo projeto sington
      */
    public static function getInstance(){
      try{
	 if (! self:: $instance){
	      self:: $instance = new dao();
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
     public function cadadastrarMembroDao(objetoMembro $ace){
      
        $pesquisaNome=$ace->getNome();
        require_once ("conexao.php");
    
        $obj = Connection::getInstance();
        $ret=3;
        
        $busca = mysql_query("Select Nome from membros where Nome like '%$pesquisaNome%'") or die ("Nao foi possivel realizar a busca".mysql_error());
        $reg = mysql_fetch_assoc($busca);
        
	if($reg != ""){
            $ret = 1;
        }
        else{
                $ace->setStatus("ATIVO");
            	$matricula = $ace->getMatricula(); $nome = $ace->getNome(); $sexo=$ace->getSexo(); $data=$ace->getData(); $rg=$ace->getRg(); $cpf=$ace->getCpf(); $estadocivil=$ace->getEstadocivil();
		$natural=$ace->getNatural(); $profissao=$ace->getProfissao(); $escola=$ace->getEscola(); $pai=$ace->getPai(); $mae=$ace->getMae(); $necessidade=$ace->getNecessidade();
		$fone=$ace->getFone(); $filho=$ace->getFilho(); $formacao=$ace->getFormacao(); $membrasia=$ace->getMembrasia(); $funcao=$ace->getFuncao(); $participou=$ace->getParticipou();
		$trabalhando=$ace->getTrabalhando(); $viajando=$ace->getViajando(); $congrega=$ace->getCongrega(); $rua=$ace->getRua(); $bairro=$ace->getBairro(); $casa=$ace->getCasa(); $status=$ace->getStatus(); $email=$ace->getEmail();
                $lider=$ace->getLider();
                $data1 = date($data);

		$inse = "INSERT INTO membros (Matricula,Nome,Sexo,DataNascimento1,Naturalidade,Escolaridade,Profissao,Rg,Cpf,EstadoCivil,Pai,Mae,NecessidadeEspeciais,Filho,fone,formacaoEclesiatica,IntegracaoMembrasia,Funcao,JaParticipou,EstadoAtual,Trabalhando,Congrega,Rua,Casa,Bairro,Status,tx_email,LiderCelula )VALUES('','$nome','$sexo','$data1','$natural','$escola','$profissao','$rg','$cpf','$estadocivil','$pai','$mae','$necessidade','$filho','$fone','$formacao','$membrasia','$funcao','$participou','$viajando','$trabalhando','$congrega','$rua','$casa','$bairro','$status','$email','$lider')";

            $result = mysql_query($inse) or die ("Falha na insercao do membro".mysql_error());

            if ($result)
              {
                $ret = 0;
                
              }else{

               $ret = 2;
              }
        }
        
        mysql_free_result($busca);
        $obj->freebanco();
      
      return $ret;
     }
     /*fim
      */
     
     
     /*metodo para pesquisar um membro que recebe como parametro um tipo string
      * e retorna um objeto
      */
     public function pesquisarMembroDao($obj){
      
      require_once ("conexao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objConexao = Connection::getInstance();
      $objMembro = new objetoMembro();
      
      $busca = mysql_query("Select * from membros where Nome like '%$obj%'") or die ("Nao foi possivel realizar a busca".mysql_error());
      $reg = mysql_fetch_assoc($busca);
        
	if($reg != ""){

            $objMembro->setMatricula($reg['Matricula']); $objMembro->setNome($reg['Nome']);
            $objMembro->setSexo($reg['Sexo']); $objMembro->setData($reg['DataNascimento1']); $objMembro->setRg($reg['Rg']);
            $objMembro->setCpf($reg['Cpf']); $objMembro->setEstadocivil($reg['EstadoCivil']);
            $objMembro->setNatural($reg['Naturalidade']); $objMembro->setProfissao($reg['Profissao']); $objMembro->setEscola($reg['Escolaridade']); 
            $objMembro->setPai($reg['Pai']); $objMembro->setMae($reg['Mae']); $objMembro->setNecessidade($reg['NecessidadeEspeciais']);
	    $objMembro->setFone($reg['Fone']); $objMembro->setFilho($reg['Filho']); $objMembro->setFormacao($reg['FormacaoEclesiatica']);
            $objMembro->setMembrasia($reg['IntegracaoMembrasia']); $objMembro->setFuncao($reg['Funcao']); $objMembro->setParticipou($reg['JaParticipou']);
	    $objMembro->setTrabalhando($reg['Trabalhando']); $objMembro->setViajando($reg['EstadoAtual']); $objMembro->setCongrega($reg['Congrega']); 
            $objMembro->setRua($reg['Rua']); $objMembro->setBairro($reg['Bairro']); $objMembro->setCasa($reg['Casa']); $objMembro->setStatus($reg['Status']);
            $objMembro->setEmail($reg['tx_email']);
            $objMembro->setLider($reg['LiderCelula']);

            return $objMembro;
        }
        else{
            
        }
        
      mysql_free_result($busca); //limpa o resultado da pesquisa libera a memoria ocupado
      $objConexao->freebanco(); // fecha a conec��o com o banco

     }
     /*fim
      */
     
     /*metodo para pesquisar um membro que recebe como parametro um tipo int
      *referente a matricula do membro e retorna um objeto
      */
     public function pesquisarMembroMatriculaDao($matricula){
      
      require_once ("conexao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objConexao = Connection::getInstance();
      $objMembro = new objetoMembro();
      
      $busca = mysql_query("Select Nome,Matricula from membros where Matricula = $matricula") or die ("Nao foi possivel realizar a busca".mysql_error());
      $reg = mysql_fetch_assoc($busca);
        
	if($reg != ""){
            $objMembro->setMatricula($reg['Matricula']); $objMembro->setNome($reg['Nome']);
        }
        else{
            
        }
        
      mysql_free_result($busca); //limpa o resultado da pesquisa libera a memoria ocupado
      $objConexao->freebanco(); // fecha a conec��o com o banco
      return $objMembro;
     }
     
     
     /*metodo para pesquisar um membro que recebe como parametro um tipo string
      * e retorna um objeto
      */
     public function pesquisarCelulaDao($obj){
      
      require_once ("conexao.php");
      require_once ("modelo/objetocelula.php");
      
      $objConexao = Connection::getInstance();
      $objCelula = new objetocelula();
      
      $busca = mysql_query("Select Codigo, NomeCelula, Lider, Rua, Casa, Bairro,DiadaCelula,Status from celulas WHERE Codigo = $obj") or die ("Nao foi possivel realizar a busca".mysql_error());
      $reg = mysql_fetch_assoc($busca);
        
	if($reg != ""){

            $objCelula->setNumero($reg['Codigo']);
            $objCelula->setNome($reg['NomeCelula']);
            $objCelula->setLider($reg['Lider']);
            $objCelula->setRua($reg['Rua']);
            $objCelula->setCasa($reg['Casa']);
	    $objCelula->setBairro($reg['Bairro']);
            $objCelula->setDia($reg['DiadaCelula']);
	    $objCelula->setStatus($reg['Status']);            

            return $objCelula;
        }
        else{
            
        }
        
      mysql_free_result($busca); //limpa o resultado da pesquisa libera a memoria ocupado
      $objConexao->freebanco(); // fecha a conec��o com o banco

     }
     /*fim
      */
     
     /*metodo para cadastrar uma celula que recebe como parametro um objeto celula
      * e retorna um inteiro
      */
     public function cadadastrarCelulaDao(objetocelula $ace){
      
        $pesquisaNome=$ace->getNome();
        require_once ("conexao.php");
    
        $obj = Connection::getInstance();
        $ret=3;
        
        $busca = mysql_query("Select NomeCelula from celulas where NomeCelula like '%$pesquisaNome%'") or die ("Nao foi possivel realizar a busca".mysql_error());
        $reg = mysql_fetch_assoc($busca);
        
	if($reg != ""){
            $ret = 1;
        }
        else{
             $nome=$ace->getNome(); $lider=$ace->getLider();
	     $rua=$ace->getRua(); $casa=$ace->getCasa();
             $bairro=$ace->getBairro();
             $dia=$ace->getDia();
             $status=$ace->getStatus();
	     $estilo=$ace->getEstilo();
            	
		$inse = "INSERT INTO celulas (Codigo,CodLider,NomeCelula,Rua,Casa,Bairro,DiadaCelula,Estilo,Status)VALUES('','$lider','$nome','$rua','$casa','$bairro','$dia','$estilo','$status')";

            $result = mysql_query($inse) or die ("Falha na insercao da celula".mysql_error());

            if ($result)
              {
                $ret = 0;
                
              }else{

               $ret = 2;
              }
        }
        
        mysql_free_result($busca);
        $obj->freebanco();
      
      return $ret;
     }
     /*fim
      */
     
     /*metodo para cadastrar uma celula que recebe como parametro um objeto celula
      * e retorna um inteiro
      */
     public function cadadastrarCartaDao($mat,$tip,$data){
      
        require_once ("conexao.php");
    
        $obj = Connection::getInstance();
        $ret=3;
        $string = "SELECT CodMembro,CodCarta FROM membros JOIN recebemcartas ON (CodMembro = Matricula) JOIN cartas ON (CodCarta = Cod_Carta) where CodMembro = '$mat'";
        $busca = mysql_query($string) or die ("Nao foi possivel realizar a busca".mysql_error());
        $reg = mysql_fetch_assoc($busca);
        
	if($reg != ""){
            $ret = 1;
        }
        else{
             	
             $inse = "INSERT INTO recebemcartas (CodMembro,CodCarta,datarecebimento)VALUES('$mat','$tip','$data')";
             $result = mysql_query($inse) or die ("Falha na insercao do membro".mysql_error());

            if ($result)
              {
                $ret = 0;
                
              }else{

               $ret = 2;
              }
        }
        
        mysql_free_result($busca);
        $obj->freebanco();
      
      return $ret;
     }
     /*fim
      */
     
     /*metodo para cadastrar uma celula que recebe como parametro um objeto celula
      * e retorna um inteiro
      */
     public function validarLoginDao($login,$senha){
      
        require_once ("conexao.php");
    
        $obj = Connection::getInstance();
        $ret=3;
        
        $busca = mysql_query("Select usa_Login from usuarios where usa_Login = '$login' and usa_Senha = '$senha'") or die ("Nao foi possivel realizar a busca".mysql_error());
        $reg = mysql_fetch_assoc($busca);
        
        if($reg != ""){   
            $var = $reg["usa_Login"];
            setcookie("nome",$var, time() + 3600*24*1);
            $ret = 1;
        }
        else{
             
            $ret = 2;
            
        }
        
        mysql_free_result($busca);
        $obj->freebanco();
      
      return $ret;
         
       
     }
     /*fim
      */
     
     /*metodo para membros nas celulas
      */
     public function incluirMembrosnaCelulaDao($matricula,$celula){
      
        require_once ("conexao.php");
    
        $obj = Connection::getInstance();
        $objMembro = new objetoMembro();
        $objMembro->setMatricula(0); 
        $ret=0;
        $script ="INSERT INTO celulamembro (CodCelula,CodMembro)VALUES('$celula','$matricula')";
        $result = mysql_query($script) or die ("Falha ao adicionar".mysql_error());
        
            if ($result)
              {
                $ret=1;
                $busca = mysql_query("Select Nome,Matricula from membros where Matricula = $matricula") or die ("Nao foi possivel realizar a busca".mysql_error());
                $reg = mysql_fetch_assoc($busca);
                $objMembro->setMatricula($reg['Matricula']); $objMembro->setNome($reg['Nome']);
                mysql_free_result($busca);
              }else{
                  $ret=2;
              }
              
        $obj->freebanco();
        return $objMembro;
     }
     /*fim
      */
     
     /*metodo para cadastrar uma celula que recebe como parametro um objeto celula
      * e retorna um inteiro
      */
     public function excluirMembrodaCelulaDao($codCelula,$matricula){
      
        require_once ("conexao.php");
        require_once ("modelo/objetoMembro.php");
    
        $obj = Connection::getInstance();
        $objMembro = new objetoMembro();
        $ret=3;
           
         $string= "Select Matricula,Nome from membros WHERE Matricula = '$matricula'";
         $resul1 = mysql_query($string)or die ("Nao foi possivel encontrar o membro".mysql_error());
         
         if($resul1){   
            $reg = mysql_fetch_assoc($resul1);
            $objMembro->setMatricula($reg["Matricula"]);
            $objMembro->setNome($reg["Nome"]);
        }
//         $string="DELETE FROM `geracaopar1_1`.`celulamembro` WHERE `celulamembro`.`CodCelula` = 5 AND `celulamembro`.`CodMembro` = 7";
         $resul = mysql_query("DELETE FROM celulamembro WHERE CodCelula = '$codCelula' AND CodMembro = '$matricula'")or die ("Nao foi possivel excluir membro".mysql_error());
        
        if($resul){   
            
            $ret=1;
        }
        mysql_free_result($resul1);
        $obj->freebanco();
      return $objMembro;
     }
     /*fim
      */
     
     
      /*metodo para atualizar os dados do membro
      */
     function updateMembroDao(objetoMembro $ace){
         
      require_once ("conexao.php");
    
      $obj = Connection::getInstance();
      $ret=3;
      
            $matricula = $ace->getMatricula(); $nome = $ace->getNome(); $sexo=$ace->getSexo(); $data=$ace->getData(); $rg=$ace->getRg(); $cpf=$ace->getCpf(); $estadocivil=$ace->getEstadocivil();
	    $natural=$ace->getNatural(); $profissao=$ace->getProfissao(); $escola=$ace->getEscola(); $pai=$ace->getPai(); $mae=$ace->getMae(); $necessidade=$ace->getNecessidade();
	    $fone=$ace->getFone(); $filho=$ace->getFilho(); $formacao=$ace->getFormacao(); $membrasia=$ace->getMembrasia(); $funcao=$ace->getFuncao(); $participou=$ace->getParticipou();
	    $trabalhando=$ace->getTrabalhando(); $viajando=$ace->getViajando(); $congrega=$ace->getCongrega(); $rua=$ace->getRua(); $bairro=$ace->getBairro(); $casa=$ace->getCasa(); $status=$ace->getStatus();$email=$ace->getEmail();
            $data1 = date($data); $lider=$ace->getLider();
            
         $inse = "UPDATE membros SET Nome = '$nome',Sexo = '$sexo',DataNascimento1 = '$data1',Naturalidade= '$natural',Escolaridade= '$escola',Profissao= '$profissao',Rg = '$rg',Cpf= '$cpf',EstadoCivil= '$estadocivil',Pai= '$pai',Mae= '$mae',NecessidadeEspeciais= '$necessidade',Filho= '$filho',fone= '$fone',formacaoEclesiatica= '$formacao',IntegracaoMembrasia= '$membrasia',Funcao= '$funcao',JaParticipou= '$participou',EstadoAtual= '$viajando',Trabalhando= '$trabalhando',Congrega= '$congrega',Rua= '$rua',Casa= '$casa',Bairro= '$bairro',Status= '$status',tx_email='$email',LiderCelula='$lider' WHERE Matricula = '$matricula'";
         $result = mysql_query($inse) or die ("Falha na insercao da celula".mysql_error());
         
         if ($result)
          {
            $ret = 1;
            
          }else{   
           $ret = 2;
          }
          
          $obj->freebanco();
          
      return $ret;
      
     }
     /*fim
      */
     
     /*metodo para pesquisar membro e retornar um lista
      */
     function listadeMembrodaDao($nome){
      require_once ("conexao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = Connection::getInstance();
      
      $resultado = mysql_query("Select * from membros where Nome LIKE '%$nome%'") or die ("Nao foi possivel realizar a busca".mysql_error());
      $listaMembro = array();
      
      $i=0;
      $achou=FALSE;
      
    if($resultado != ""){
          
      while ($registro = mysql_fetch_assoc($resultado)){
              
	    $membro = new objetoMembro();
                             
            $membro->setMatricula($registro['Matricula']);
            $membro->setNome($registro['Nome']);
            $membro->setSexo($registro['Sexo']); 
            $membro->setData($registro['DataNascimento1']); 
            $membro->setRg($registro['Rg']);
            $membro->setCpf($registro['Cpf']); 
            $membro->setEstadocivil($registro['EstadoCivil']);
            $membro->setNatural($registro['Naturalidade']); 
            $membro->setProfissao($registro['Profissao']); 
            $membro->setEscola($registro['Escolaridade']); 
            $membro->setPai($registro['Pai']); 
            $membro->setMae($registro['Mae']); 
            $membro->setNecessidade($registro['NecessidadeEspeciais']);
	    $membro->setFone($registro['Fone']); 
            $membro->setFilho($registro['Filho']); 
            $membro->setFormacao($registro['FormacaoEclesiatica']);
            $membro->setMembrasia($registro['IntegracaoMembrasia']); 
            $membro->setFuncao($registro['Funcao']); 
            $membro->setParticipou($registro['JaParticipou']);
	    $membro->setTrabalhando($registro['Trabalhando']); 
            $membro->setViajando($registro['EstadoAtual']); 
            $membro->setCongrega($registro['Congrega']); 
            $membro->setRua($registro['Rua']); 
            $membro->setBairro($registro['Bairro']); 
            $membro->setCasa($registro['Casa']); 
            $membro->setStatus($registro['Status']);
                        
	    $listaMembro[$i] = $membro;
            
	    $i++;
            $achou = true;
	}
        
    }
		return $listaMembro;
                if($achou){
                   mysql_free_result($registro);
                }
		mysql_free_result($resultado);
                $objDao->freebanco(); 
     }
     /*fim
      */
     
     /*metodo para pesquisar membros na celula e retornar um lista
      */
     function listadeMembroCelulaDao($matricula){
      require_once ("conexao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = Connection::getInstance();
      
      $resultado = mysql_query("Select Matricula,Nome from celulas c join celulamembro e on e.CodCelula = c.Codigo join membros m on e.CodMembro = m.Matricula WHERE c.Codigo = $matricula") or die ("Nao foi possivel realizar a busca".mysql_error());
      $listaMembro = array();
      
      $i=0;
      $achou=FALSE;
      
    if($resultado != ""){
          
      while ($registro = mysql_fetch_assoc($resultado)){
              
	    $membro = new objetoMembro();
                             
            $membro->setMatricula($registro['Matricula']);
            $membro->setNome($registro['Nome']);
                        
	    $listaMembro[$i] = $membro;
            
	    $i++;
            $achou = true;
	}
        
    }
		return $listaMembro;
                if($achou){
                   mysql_free_result($registro);
                }
		mysql_free_result($resultado);
                $objDao->freebanco(); 
     }
     /*fim
      */
     
     /*metodo para pesquisar membro e retornar um lista
      */
     function listadeTodosMembroDao(){
      require_once ("conexao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = Connection::getInstance();
      
      $resultado = mysql_query("Select Matricula,Nome,Naturalidade,Fone from membros order by Nome") or die ("Nao foi possivel realizar a busca".mysql_error());
      $listaMembro = array();
      
      $i=0;
      
          
      while ($registro = mysql_fetch_assoc($resultado)){
              
          if($registro["Nome"] != ""){
              
	    $membro = new objetoMembro();
                             
            $membro->setMatricula($registro['Matricula']);
            $membro->setNome($registro['Nome']);
            $membro->setNatural($registro['Naturalidade']); 
	    $membro->setFone($registro['Fone']); 
                        
	    $listaMembro[$i] = $membro;
            
	}
        $i++;
      }
		return $listaMembro;
		mysql_free_result($resultado);
                $objDao->freebanco();
      
     }
     /*fim
      */
     
     /*metodo para pesquisar todos os membro com status ativo
      */
     function listadeMembroativosDao(){
      require_once ("conexao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = Connection::getInstance();
      
      $resultado = mysql_query("Select Matricula,Nome,Naturalidade,Fone from membros where Status = 'ATIVO' order by Nome") or die ("Nao foi possivel realizar a busca".mysql_error());
      $listaMembro = array();
      
      $i=0;
      
      while ($registro = mysql_fetch_array($resultado, MYSQL_ASSOC)){
                
	    $membro = new objetoMembro();
                             
            $membro->setMatricula($registro['Matricula']);
            $membro->setNome($registro['Nome']);
            $membro->setNatural($registro['Naturalidade']); 
	    $membro->setFone($registro['Fone']); 
                        
	    $listaMembro[$i] = $membro;
            
	    $i++;
	}

		return $listaMembro;
		mysql_free_result($resultado);
                $objDao->freebanco();
      
     }
     /*fim
      */
     
          /*metodo para pesquisar todos as celulas
      */
     function listaTodasCelulasDao(){
      require_once ("conexao.php");
      require_once ("modelo/objetocelula.php");
      
      $objDao = Connection::getInstance();
      
      $resultado = mysql_query("Select Codigo,CodLider,NomeCelula,Estilo from celulas") or die ("Nao foi possivel realizar a busca".mysql_error());
      $listaCelula = array();
      
      $i=0;
      
      while ($registro = mysql_fetch_assoc($resultado)){
                
	    $celula = new objetocelula();
                             
            $celula->setId($registro['Codigo']);
            $celula->setLider($registro['CodLider']);
            $celula->setNome($registro['NomeCelula']);
            $celula->setEstilo($registro['Estilo']);
                        
	    $listaCelula[$i] = $celula;
            
	    $i++;
	}

		return $listaCelula;
		mysql_free_result($resultado);
                $objDao->freebanco();
      
     }
     /*fim
      */

     /*metodo para pesquisar todos os aniversariantes do mes
      */
     function listaTodosAniversariantesdoMes($mes){
      require_once ("conexao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = Connection::getInstance();
      $consulta="SELECT Matricula,Nome,DataNascimento1,Fone FROM membros WHERE MONTH(DataNascimento1) = $mes";
      
      $resultado = mysql_query($consulta) or die ("Nao foi possivel realizar a busca".mysql_error());
      
      $listaMembro = array();
      
      $i=0;
          
      while ($registro = mysql_fetch_array($resultado, MYSQL_ASSOC)){
                
	    $membro = new objetoMembro();
                             
            $membro->setMatricula($registro['Matricula']);
            $membro->setNome($registro['Nome']);
            $membro->setData($registro['DataNascimento1']); 
            $membro->setFone($registro['Fone']); 
                        
	    $listaMembro[$i] = $membro;
            
	    $i++;
	}
                
      
		return $listaMembro;
		mysql_free_result($resultado);
                $objDao->freebanco();
      
     }
     /*fim
      */

     /*metodo para pesquisar todos os aniversariantes do dia
      */
     function listaTodosAniversariantesdeHojeDao(){
      require_once ("conexao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = Connection::getInstance();
  
      $dataAtual = Date("Y-m-d");
      $mes = $dataAtual[5].$dataAtual[6];
      $dia = $dataAtual[8].$dataAtual[9];
      //echo "Mes ". $mes. "Dia ".$dia;
      
//      $dbconn = mysqli_connect ($objDao->getServer(),$objDao->getUsername(),$objDao->getPassword(),$objDao->getDb());
      
//      $resultado = mysqli_query ($dbconn,"CALL aniversariantedehoje($mes,$dia)");
      $consulta="SELECT Matricula,Nome,DataNascimento1,Fone FROM membros WHERE MONTH(DataNascimento1) = $mes AND DAY(DataNascimento1)=$dia";
      
      $resultado = mysql_query($consulta) or die ("Nao foi possivel realizar a busca".mysql_error());
      
      $listaMembro = array();
      
      $i=0;
          
      while ($registro = mysql_fetch_array($resultado, MYSQL_ASSOC)){
                
	    $membro = new objetoMembro();
                             
            $membro->setMatricula($registro['Matricula']);
            $membro->setNome($registro['Nome']);
            $membro->setData($registro['DataNascimento1']); 
            $membro->setFone($registro['Fone']); 
                        
	    $listaMembro[$i] = $membro;
            
	    $i++;
	}
                
      
		return $listaMembro;
		mysql_free_result($resultado);
                $objDao->freebanco();
                
      
     }
     /*fim
      */
      /*metodo para pesquisar todos os membros com o nome passado
      */
     function listadeMembroPorNome($nome){
      require_once ("conexao.php");
      require_once ("modelo/objetoMembro.php");
      
      $objDao = Connection::getInstance();
      
      $resultado = mysql_query("SELECT Matricula,Nome,Naturalidade,Fone FROM membros WHERE Nome LIKE '%$nome%'") or die ("Nao foi possivel realizar a busca".mysql_error());
      $listaMembro = array();
      
      $i=0;
      
          
      while ($registro = mysql_fetch_assoc($resultado)){
              
//          if($registro["Nome"] != ""){
              
	    $membro = new objetoMembro();
                             
            $membro->setMatricula($registro['Matricula']);
            $membro->setNome($registro['Nome']);
            $membro->setNatural($registro['Naturalidade']); 
	    $membro->setFone($registro['Fone']); 
                        
	    $listaMembro[$i] = $membro;
            
//	}
        $i++;
      }
		return $listaMembro;
		mysql_free_result($resultado);
                $objDao->freebanco();
     }
     /*fim
      */

     /*metodo para cadastrar uma celula que recebe como parametro um objeto celula
      * e retorna um inteiro
      */
  public function listadeTodasCartaDao(){
      
        require_once ("conexao.php");
        require_once ("modelo/objetoMembro.php");
    
        $obj = Connection::getInstance();
        $listaMembro = array();
        
        $string = "SELECT CodMembro,CodCarta,Nome,datarecebimento FROM membros JOIN recebemcartas ON (CodMembro = Matricula) JOIN cartas ON (CodCarta = Cod_Carta)";
        $resultado = mysql_query($string) or die ("Nao foi possivel realizar a busca".mysql_error());
	$i=0;          
      while ($registro = mysql_fetch_assoc($resultado)){

	    $membro = new objetoMembro();                 
            $membro->setMatricula($registro['CodMembro']);
            $membro->setIdCarta($registro['CodCarta']);
            $membro->setNome($registro['Nome']);
            $membro->setData($registro['datarecebimento']); 
                        
	    $listaMembro[$i] = $membro;
            
        $i++;
      }
		
		mysql_free_result($resultado);
                $obj->freebanco();
      return $listaMembro;
     }
     /*fim
      */
     
     /*metodo para cadastrar uma celula que recebe como parametro um objeto celula
      * e retorna um inteiro
      */
  public function listadeTodosEmailDao(){
      
        require_once ("conexao.php");
        require_once ("modelo/objetoEmail.php");
    
        $obj = Connection::getInstance();
        $listaEmail = array();
        
        $string = "Select  nome,email,comentario,data from email order by data";
        $resultado = mysql_query($string) or die ("Nao foi possivel realizar a busca".mysql_error());
	$i=0;          
      while ($registro = mysql_fetch_assoc($resultado)){

	    $email = new objetoEmail();                 
            $email->enviarEmail($registro['email'],$registro['nome'],$registro['comentario'],$registro['data']);                        
	    $listaEmail[$i] = $email;
            
        $i++;
      }
		
		mysql_free_result($resultado);
                $obj->freebanco();
      return $listaEmail;
     }
     /*fim
      */
     
     /*metodo para pesquisar membro e retornar um lista
      */
     function listadeTodosLiderDao(){
      require_once ("../conexao.php");
      require_once ("../modelo/objetoMembro.php");
      
      $objDao = Connection::getInstance();
      
      $resultado = mysql_query("Select Matricula,Nome from membros where LiderCelula = 'S' order by Nome") or die ("Nao foi possivel realizar a busca".mysql_error());
      $listaMembro = array();
      
      $i=0;
      
          
      while ($registro = mysql_fetch_assoc($resultado)){
              
          if($registro["Nome"] != ""){
              
	    $membro = new objetoMembro();
                             
            $membro->setMatricula($registro['Matricula']);
            $membro->setNome($registro['Nome']);
                        
	    $listaMembro[$i] = $membro;
	}
        $i++;
      }
		return $listaMembro;
		mysql_free_result($resultado);
                $objDao->freebanco();
     }
     /*fim
      */

 /*metodo para pesquisar todos as celulas
      */
     function listaTodasMembroPorsexoDao($sexo){
      require_once ("conexao.php");
       require_once ("modelo/objetoMembro.php");
      
      $objDao = Connection::getInstance();
      
      $resultado = mysql_query("Select Matricula,Nome from membros where Sexo = '$sexo' order by Nome") or die ("Nao foi possivel realizar a busca".mysql_error());
      
      $listaMembro = array();
      
      $i=0;
      
          
      while ($registro = mysql_fetch_assoc($resultado)){
              
          if($registro["Nome"] != ""){
              
	    $membro = new objetoMembro();
                             
            $membro->setMatricula($registro['Matricula']);
            $membro->setNome($registro['Nome']);
                        
	    $listaMembro[$i] = $membro;
	}
        $i++;
      }
		return $listaMembro;
		mysql_free_result($resultado);
                $objDao->freebanco();
     }
     /*fim
      */
}
