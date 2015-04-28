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
<html>
    <meta http-equiv="Content-Type" CONTENT="text/html; charset=iso-8859-1">
    <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.min1.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <link href="css/ui-lightness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/validar_formulario.js"></script>
<head>
    <script>

        $(function(){

           $("#fone").mask("9999-9999 / 9999-9999");
           $("#cpf").mask("99999999999");
           $("#rg").mask("99999999");
                 // $("#").datepicker($.datepicker.regional["pt-BR"]);
           $( "#datanascimento" ).datepicker({
                   
           changeMonth: true,
           changeYear: true
        });
       });
     </script>
 </head>
<body>
    
<div class="formulario_editar_membro">
    
    <form action = "update_membro.php" method = "post" onsubmit="return validar();">
    
        <table onmouseover="mudar_cor_over(this)" onmouseout="mudar_cor_out(this)">
            <tr>
                <td>
                    <b>Nome do Membro</b> <br />
                    <input type="text" name= "nome" size="50" maxlength = "90" VALUE = "<?php print $objetoMembro->getNome(); ?>" />
                </td>
                <td>
                    <b>Data Nascimento "yyyy-mm-dd"</b><br />
                    <input type="text" value = "<?php echo date($objetoMembro->getData()); ?>" name="data" maxlength = "10" size="40" id="datanascimento"/>
                </td>
                <td>
                    <b>Sexo<br /><select name = "sexo"><option value = "<?php echo $objetoMembro->getSexo(); ?>"><?php echo $objetoMembro->getSexo(); ?></option><option value = "F">F </option><option value = "M">M</option>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Endere&ccedil;o</b><br /> <input type='text' VALUE = "<?php echo $objetoMembro->getRua(); ?>" name="rua" maxlength = "150" size="50" /></b>
                </td>
                <td>
                    <b>Bairro</b><br /><input type='text' VALUE = "<?php echo $objetoMembro->getBairro(); ?>" name="bairro" maxlength = "70" size="40"></dt> <td><b>Casa</b><br /><input type='text' VALUE = "<?php echo $objetoMembro->getCasa(); ?>" name="casa" maxlength = "70" size="5">
                </td>
            </tr>
        </table>

        <table onmouseover="mudar_cor_over(this)" onmouseout="mudar_cor_out(this)">
            <tr>
                <td>
                    <b>Rg</b><br /><input type="text" value = <?php echo $objetoMembro->getRg(); ?> name="rg" maxlength = "8" id="rg" size="10"/></td><td><b>Cpf</b><br /><input type='text' value = <?php echo $objetoMembro->getCpf(); ?> name='cpf' maxlength = "20" id="cpf" size="20"/></b>
                </td>
                <td>
                    <b>Estado Civil</b><br /><select name = "estadocivil"><option value = <?php echo $objetoMembro->getEstadoCivil(); ?>><?php echo $objetoMembro->getEstadoCivil(); ?></option><option value = "Casado">Casado</option><option value = "Casada">Casada</option><option value = "Solteiro">Solteiro</option><option value = "Solteira">Solteira</option>
                </td>
                <td>
                    <b>Natural</b><br /><input type="text" value = "<?php echo $objetoMembro->getNatural(); ?>" name="natural" maxlength = "50" size = "15" />
                </td>
                <td>
                    <b>Profiss&atildeo<b><br /> <input type="text" value = "<?php echo $objetoMembro->getProfissao(); ?>" name="profissao" maxlength = "50" size = "25"/>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Escolaridade</b><br /><select name = "escola" ><option value = <?php echo $objetoMembro->getEscola(); ?>><?php echo $objetoMembro->getEscola(); ?></option> <option value = "Superior">Superior</option><option value = "Medio">Medio</option><option value = "Fundamental">Fundamental</option><option value = "Primario">Primario</option>
                </td>
                <td>
                    <b>Fone</b><br /><input type="text" VALUE = "<?php echo $objetoMembro->getFone(); ?>" name="fone" maxlength = "100" id="fone"/>
                </td>
                <td>
                    <b>Filhos</b><br /><input type="text" VALUE = <?php echo $objetoMembro->getFilho(); ?> name="filho" maxlength = "11" size = "10"/>
                </td>
                <td>
                    <b>Nec.Especiais</b><br /><input type="text" VALUE = <?php echo $objetoMembro->getNecessidade(); ?> name="necessidade" maxlength = "100" size = "10"/>
                </td>
                <td>
                    <b>Form.Eclesiart</b><br /><input type="text" VALUE = <?php echo $objetoMembro->getFormacao(); ?> name="formacao" maxlength = "100" size = "30"/>
                </td>
            </tr>
        </table>

        <table onmouseover="mudar_cor_over(this)" onmouseout="mudar_cor_out(this)">
            <tr>
                <td>
                    <b>Pai</b><br /><input type="text" VALUE = "<?php echo $objetoMembro->getPai(); ?>" name="pai" maxlength = "90" size = "50"/>
                </td>
                <td>
                    <b>Mae</b><br /><input type="text" VALUE = "<?php echo $objetoMembro->getMae(); ?>" name="mae" maxlength = "90" size = "50"/>
                </td>
            </tr>

        </table>
        <table onmouseover="mudar_cor_over(this)" onmouseout="mudar_cor_out(this)">
            <tr>
                <td>
                    <b>Integ.Membrasia </b><br /><select name='membrasia'><option VALUE = <?php echo $objetoMembro->getMembrasia(); ?>><?php echo $objetoMembro->getMembrasia(); ?></option><option value = "ACLAMADO">ACLAMADO</option><option value = "BATISMO">BATISMO</option><option value = "TRANSFERIDO">TRANSFERIDO</option>
                </td>
                <td>
                    <b>Fun&ccedil&atildeo</b><br /> <input type='text' VALUE = "<?php echo $objetoMembro->getFuncao(); ?>" name='funcao' maxlength = "100" size= "20"/>
                </td>

                <td>
                    <b>J&aacutePaticipou </b><br /><input type='text' VALUE = "<?php echo $objetoMembro->getParticipou(); ?>" name='participou' maxlength = "200" size= "60"/>
                </td>
            </tr>
        </table>

        <table onmouseover="mudar_cor_over(this)" onmouseout="mudar_cor_out(this)">
            <tr>
                <td>
                    <b>Trabalhando </b><br /><select name='trabalhando' ><option VALUE = <?php echo $objetoMembro->getTrabalhando(); ?>><?php echo $objetoMembro->getTrabalhando(); ?></option><option value = "S">S</option><option value = "N">N</option>
                </td>
                <td>
                    <b>Viajando <br /><select name='viajando'><option VALUE = <?php echo $objetoMembro->getViajando(); ?>><?php echo $objetoMembro->getViajando(); ?></option><option value = "S">S</option><option value = "N">N</option>
                </td>
                <td>
                    <b>Congrega</b><br /> <select name='congrega'><option VALUE = <?php echo $objetoMembro->getCongrega(); ?>><?php echo $objetoMembro->getCongrega(); ?></option><option value = "TEMPLO CENTRAL">TEMPLO CENTRAL</option><option value = "NCL 16">NCL 16</option><option value = "NOVA OLINDA">NOVA OLINDA</option>
                </td>
                <td>
                    <b>Status</b><br /> <select name='status'><option VALUE = <?php echo $objetoMembro->getStatus(); ?>><?php echo $objetoMembro->getStatus(); ?><option value = "ATIVO">ATIVO</option><option value = "INATIVO">INATIVO</option></option>
                </td>
                <td>
                    <input type='hidden' VALUE = "<?php echo $objetoMembro->getMatricula(); ?>"	 name='matricula' maxlength = "30" size= "20"/>
                </td>
                <td width="10"></td>
                <td>
                    <b>Atualizar</b><br />
                    <input type="image" src="ICON/computer-31177_150.png" width="50" height="35" border="0" title = "Atualizar os dados do registro" >
                </td>
            </tr>
            
        </table>
            
    </form>
 </div>
 </body>
 </html>