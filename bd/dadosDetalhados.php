<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ("control/controle.php");
require_once ("modelo/objetoMembro.php");

$objCibtrole = controle::getInstance();
$nomeBusca = $_POST["nome"];

$objetoMembro =new objetoMembro();

$objetoMembro=$objCibtrole->pesquisarMembroControle($nomeBusca);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dados Detalhados</title>

    <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>              
    <script src="js/updateDados.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <link rel="stylesheet" href="css/colorbox.css" />
    
    
                <!--<link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />-->    
    <script src="js/jquery.colorbox.js"></script>
    <script src="js/colobox-interno.js"></script>
    <script src="js/jquery.colobox-item.js"></script>
    <script type="text/javascript" src="js/suavizar-carregamento-pagina.js"></script>
    <script type="text/javascript" src="js/newletter.js"></script>
    <script src="js/modal.js"></script>
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="Stylesheet" href="css/home.css" />
    <link rel="Stylesheet" href="css/datepicker.css" />
    
    <script>
                            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                            ga('create', 'UA-39930240-2', 'geracaoparacristo.com');
                            ga('send', 'pageview');

                    </script>
    
                <!--<link href="css/menu.css" rel="stylesheet" type="text/css" />-->
    <script>
           $(function(){
              $( "#datanascimento" ).datepicker({      
              changeMonth: true,
              changeYear: true
             });
         });
     </script>
     
    </head>
    
		
    <body onLoad="atualizarDataHora();">
        
      <div class="root-mastter">
          <div class="root-mastter-cabec">.</div>
          <div class="container1">
          </div>
                <!--<div class="root-mastter-cabec1">-->
<!--            </div>
                </div>-->

     <div class="container">
       <div class="root-mastter-cabec">
           <p><h4 id="datahora"></h4></p>
           <?php require_once ("view/cabec.php"); ?>
           
       </div>
    </div>      
    <div class="container">
         <br><br>
             
     <!--<div class="row">-->
        <div class="col-md-12">
                <div class="form-group form-group-sm">
                    <form id="cadastrar-membro" class="form-horizontal" action="" method="POST">
                    
                        <label class="col-sm-2 control-label" for="formGroupInputSmall" id="lbel">Nome</label>
                        <div class="col-sm-5">
                            <input type="hidden" name="matricula" VALUE = <?php print $objetoMembro->getMatricula(); ?>>  
                          <input class="form-control" type="text" name="nome" id="formGroupInputSmall" placeholder="xxxxxxxxxxxx" required="required" VALUE = "<?php print $objetoMembro->getNome(); ?>">
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Data Nascimento</label>
                        <div class="col-sm-3">
                            <input id="datanascimento" class="form-control" type="text" placeholder="99/99/9999" id="formGroupInputSmall" required="required" name="data" value = "<?php echo date($objetoMembro->getData()); ?>"/>
                          <br>
                        </div>
                        
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Rg</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="rg" value = <?php echo $objetoMembro->getRg(); ?> />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">CPF</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="cpf" value = <?php echo $objetoMembro->getCpf(); ?>/>
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Estado Civil</label>
                       <div class="col-xs-2">
                           <?php
                                 $is_civil="CADADO(A)";
                                 $is_civil1="SOLTEIRO(A)";
                                 $is_civil2="VIUVO(A)";
                                 
                                 if(strcasecmp ($objetoMembro->getEstadocivil(),"CADADO(A)")== 0){
                                     $is_civil=$objetoMembro->getEstadocivil();
                                 }
                            ?>
                            <select class="form-control" name="estadocivil">
                                <option value = <?php echo $is_civil; ?>><?php echo $is_civil; ?></option>
                                <option value = <?php echo $is_civil1; ?>><?php echo $is_civil1; ?></option>
                                <option value = <?php echo $is_civil2; ?>><?php echo $is_civil2; ?></option>
                            </select>
                           <br>
                       </div>
                        
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Natural</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="natural" value = "<?php echo $objetoMembro->getNatural(); ?>" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Profiss&atilde;o</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="profissao" value = "<?php echo $objetoMembro->getProfissao(); ?>" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Escolaridade</label>
                       <div class="col-xs-2">
                           <?php
                                 $is_escola="SUPERIOR";
                                 $is_escola1="MEDIO";
                                 $is_escola2="FUNDAMENTAL";
                                 $is_escola3="PRIMARIO";
                                 $is_escola4="TECNICO";
                                 if(strcasecmp ($objetoMembro->getEscola(),"PRIMARIO")== 0){
                                     $is_escola3=$objetoMembro->getEscola();
                                 }
                            ?>
                            <select class="form-control" name="escola">
                                <option value = <?php echo $is_escola3; ?>><?php echo $is_escola3; ?></option> 
                                <option value = <?php echo $is_escola; ?>><?php echo $is_escola; ?></option> 
                                <option value = <?php echo $is_escola1; ?>><?php echo $is_escola1; ?></option> 
                                <option value = <?php echo $is_escola2; ?>><?php echo $is_escola2; ?></option> 
                                <option value = <?php echo $is_escola4; ?>><?php echo $is_escola4; ?></option> 
                            </select>
                           <br>
                       </div>
                        
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Fone</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="tel" placeholder="(99)99999-9999" id="formGroupInputSmall" required="required" name="fone" VALUE = "<?php echo $objetoMembro->getFone(); ?>" />
                          <br>
                        </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Filhos</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="filho" VALUE = <?php echo $objetoMembro->getFilho(); ?> />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Sexo</label>
                       <div class="col-xs-2">
                           <?php
                                 $is_sexo="M";
                                 if(strcasecmp ($objetoMembro->getTrabalhando(),"M")== 0){
                                     $is_trabalhando="F";
                                 }
                            ?>
                            <select class="form-control" name="sexo">
                                <option value = "<?php echo $objetoMembro->getSexo(); ?>"><?php echo $objetoMembro->getSexo(); ?></option>
                                <option value = "<?php echo $is_sexo; ?>"><?php echo $is_sexo; ?></option>
                            </select>
                           <br>
                       </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Nec.Especiais</label>
                         <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="necessidade" VALUE = <?php echo $objetoMembro->getNecessidade(); ?> />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Bairro</label>
                        <div class="col-sm-6">
                          <input class="form-control" name="bairro" type="text" id="formGroupInputSmall" placeholder="xxxxxxxxxxxx" required="required"  VALUE = "<?php echo $objetoMembro->getBairro(); ?>" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Rua</label>
                        <div class="col-sm-6">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="rua" VALUE = "<?php echo $objetoMembro->getRua(); ?>" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Casa</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="casa" VALUE = "<?php echo $objetoMembro->getCasa(); ?>" />
                          <br>
                        </div> 
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Form.Eclesiart</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" placeholder="(99)99999-9999" id="formGroupInputSmall" required="required" name="formacao" VALUE ="<?php echo $objetoMembro->getFormacao(); ?> "/>
                          <br>
                        </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Pai</label>
                        <div class="col-sm-5">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="pai" VALUE = "<?php echo $objetoMembro->getPai(); ?>" />
                          <br>
                        </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">M&atilde;e</label>
                        <div class="col-sm-5">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="mae" VALUE = "<?php echo $objetoMembro->getMae(); ?>" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Integ.Membrasia</label>
                        <div class="col-xs-3">
                            <select class="form-control" name="membrasia">
                                <option VALUE = <?php echo $objetoMembro->getMembrasia(); ?>><?php echo $objetoMembro->getMembrasia(); ?></option>
                            </select>
                           <br>
                       </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Fun&ccedil;&atilde;o</label>
                        <div class="col-sm-4">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="funcao" VALUE = "<?php echo $objetoMembro->getFuncao(); ?>" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">J&aacute;Paticipou </label>
                        <div class="col-sm-4">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="participou" VALUE = "<?php echo $objetoMembro->getParticipou(); ?>" />
                          <br>
                        </div>
                        
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Trabalhando</label>
                        <div class="col-xs-2">
                            <?php
                                 $is_trabalhando="S";
                                 if(strcasecmp ($objetoMembro->getTrabalhando(),"S")== 0){
                                     $is_trabalhando="N";
                                 }
                            ?>
                            <select class="form-control" name="trabalhando">
                                <option VALUE = <?php echo $objetoMembro->getTrabalhando(); ?>><?php echo $objetoMembro->getTrabalhando(); ?></option>
                                <option VALUE = <?php echo $is_trabalhando; ?>><?php echo $is_trabalhando; ?></option>
                            </select>
                           <br>
                       </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Viajando</label>
                         <?php
                                 $is_viajando="S";
                                 if(strcasecmp ($objetoMembro->getViajando(),"S")== 0){
                                     $is_viajando="N";
                                 }
                            ?>
                        <div class="col-xs-2">
                            <select class="form-control" name="viajando">
                               <option VALUE = <?php echo $objetoMembro->getViajando(); ?>><?php echo $objetoMembro->getViajando(); ?></option>
                               <option VALUE = <?php echo $is_viajando; ?>><?php echo $is_viajando; ?></option>
                            </select>
                           <br>
                       </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Congrega</label>
                        <div class="col-xs-2">
                            <?php
                                 $is_congrega="CENTRAL";
                                 $is_congrega1="MANACAPURU";
                                 if(strcasecmp ($objetoMembro->getCongrega(),"CENTRAL")== 0){
                                     $is_congrega="NOVA-OLINDA";
                                 }else if(strcasecmp ($objetoMembro->getCongrega(),"MANACAPURU")== 0){
                                     $is_congrega1="NOVA-OLINDA";
                                 }
                            ?>
                            <select class="form-control" name="congrega">
                                <option VALUE = <?php echo $objetoMembro->getCongrega(); ?>><?php echo $objetoMembro->getCongrega(); ?></option>
                                <option VALUE = <?php echo $is_congrega; ?>><?php echo $is_congrega; ?></option>
                                <option VALUE = <?php echo $is_congrega1; ?>><?php echo $is_congrega1; ?></option>
                            </select>
                           <br>
                       </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Estatus</label>
                        <div class="col-xs-2">
                             <?php
                                 $is_status="ATIVO";
                                 if(strcasecmp ($objetoMembro->getStatus(),"ATIVO")== 0){
                                     $is_status="INATIVO";
                                 }
                            ?>
                            <select class="form-control" name="status">
                                <option VALUE = <?php echo $objetoMembro->getStatus(); ?>><?php echo $objetoMembro->getStatus(); ?></option>
                                <option VALUE = <?php echo $is_status; ?>><?php echo $is_status; ?></option>
                            </select>
                           <br>
                       </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Email</label>
                        <div class="col-sm-6">
                            <input class="form-control" name="email" type="email" id="formGroupInputSmall" placeholder="Email input" value="<?php echo $objetoMembro->getEmail() ?>" >
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Lider de Celula</label>
                        <div class="col-xs-2">
                            <?php
                                 $is_lider="N";
                                 $is_lider1="S";
                                 if(strcasecmp ($objetoMembro->getLider(),"S")== 0){
                                     $is_lider="S";
                                     $is_lider1="N";
                                 }
                            ?>
                            <select class="form-control" name="lider">
                                <option VALUE = <?php echo $is_lider; ?>><?php echo $is_lider; ?></option>
                                <option value=<?php echo $is_lider1;?>><?php echo $is_lider1;?></option>
                            </select>
                           <br>
                       </div>
                        
                       <p align = right>
                           <button class="btn btn-small" type="submit">Enviar</button>
                      </p>
                      
                    </form>
                 </div>
            </div>
                
    </div>
<p id="exiberesposta"></p>
  
</div>

    <!-- Button to trigger modal -->
         
       <footer class="rodape-home">
              <p class="pull-left">
                  Sede: Rua 29 Quadra 139 N 149 Amazonino Mendes<br>
                 Tel (92) 32218417 Cep: 69099120 Manaus Amazonas 

              </p>
              <p class="pull-right">
               <a class="navbar-brand" href="#">
                   <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                </a>
              </p>
              <br>
      </footer>
    
    
	<!--end div principal root -->
        
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
