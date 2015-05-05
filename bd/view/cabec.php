<?php
    function cabec_Menu()
    {
?>
   <nav class="navbar navbar-default" id="nave">
              <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
                      <!--<a class="navbar-brand" href="home" id="logo"></a>-->
                      <!--<img id="logo" src="img/tp_home_menu_logo.png" width="50%"/>-->
    </div>
    <?php
     if(strcasecmp ($_COOKIE["nome"],"WILLIAMSSILVA")==0){
       ?>  
         <div class="collapse navbar-collapse" id="myNavbar">
        <ul id="nava-li-a" class="nav navbar-nav navbar-right" >
            <li>
                <a href="principal.php">
                    <img src="ICON/home.png" width="40" height="30" border="0" title = "Pagina Inicial">
                </a>
            </li>
            <li>
                <a href="membro.php">
                    <img src="ICON/flat-35681_150.png" width="40" height="30" border="0" title = "Area de Membro">
                </a>
            </li> 
            <li>
                <a href="celula.php">
                    <img src="ICON/internet-37197_150.png" width="40" height="30" border="0" title = "CELULA">
                </a>
            </li> 
            <li>
                <a href="escoladelider.php">
                    <img src="ICON/computer-24944_150.png" width="40" height="30" border="0" title = "Escola de Lideres">
                </a>
            </li> 
            <li>
                <a href="conta.php">
                    <img src="ICON/button-41706_150.png" width="40" height="30" border="0" title = "CONTAS">
                </a>
            </li> 
            <li>
                <a href="anivesariante.php">
                    <img src="ICON/baby-25388_150.png" width="40" height="30" border="0" title = "Aniversariantes">
                </a>
            </li> 
            <li>
                <a href="carta.php">
                    <img src="ICON/icon-28157_150.png" width="40" height="30" border="0" title = "Carta de Saida">
                </a>
            </li> 
            <li>
                <a href="ver_email.php">
                    <img src="ICON/icone_email.png" width="40" height="30" border="0" title = "Checar Email">
                </a>
            </li> 
            <!--<li><a href="copyright.php">Copyright</a></li>-->
            <li>
                <a href="desconectar.php">
                    <img src="ICON/sign-36980_640.png" width="40" height="30" border="0" title = "SAIR">
                </a>
            </li>
        
        <!--<li><a href="http://webmail.tapaproducoes.com.br/" target="_blanck"><span class="glyphicon glyphicon-user"></span> WebMail</a></li>--> 
      </ul>
<!--      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> WebMail</a></li>
      </ul>-->
    </div>
                 
     <?php
     }else{
         ?>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul id="nava-li-a" class="nav navbar-nav navbar-right" >
            <li>
                <a href="#">
                    <img src="ICON/home.png" width="40" height="30" border="0" title = "Pagina Inicial">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="ICON/flat-35681_150.png" width="40" height="30" border="0" title = "Area de Membro">
                </a>
            </li> 
            <li>
                <a href="#">
                    <img src="ICON/internet-37197_150.png" width="40" height="30" border="0" title = "CELULA">
                </a>
            </li> 
            <li>
                <a href="#">
                    <img src="ICON/computer-24944_150.png" width="40" height="30" border="0" title = "Escola de Lideres">
                </a>
            </li> 
            <li>
                <a href="#">
                    <img src="ICON/button-41706_150.png" width="40" height="30" border="0" title = "CONTAS">
                </a>
            </li> 
            <li>
                <a href="#">
                    <img src="ICON/baby-25388_150.png" width="40" height="30" border="0" title = "Aniversariantes">
                </a>
            </li> 
            <li>
                <a href="#">
                    <img src="ICON/icon-28157_150.png" width="40" height="30" border="0" title = "Carta de Saida">
                </a>
            </li> 
            <li>
                <a href="#">
                    <img src="ICON/icone_email.png" width="40" height="30" border="0" title = "Checar Email">
                </a>
            </li> 
            <!--<li><a href="copyright.php">Copyright</a></li>-->
            <li>
                <a href="desconectar.php">
                    <img src="ICON/sign-36980_640.png" width="40" height="30" border="0" title = "SAIR">
                </a>
            </li>
        
        <!--<li><a href="http://webmail.tapaproducoes.com.br/" target="_blanck"><span class="glyphicon glyphicon-user"></span> WebMail</a></li>--> 
      </ul>
<!--      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> WebMail</a></li>
      </ul>-->
    </div>
       <?php
        }
     ?> 
  </div>
</nav>
<!--            <img src="images/BANER1.jpg" width="100%" height="80%" border="0">
            <img src="images/base.jpg" width="981" height="30" border="0">
            
                <table id = "a"  width="100%"  height="35%" background="images/BORDATOP.jpg">
                    <tr><td>
                    <table  width="60%"  align="right">
                       <tr>
                           <td>
                               <a href = "principal1.php">
                                 <img src="ICON/home.png" width="40" height="30" border="0" title = "Pagina Inicial">
                               </a>
                           </td>
                           <td>
                               <a href = "membro.php">
                                 <img src="ICON/flat-35681_150.png" width="40" height="30" border="0" title = "Area de Membro">
                               </a>
                           </td>
                           <td>
                               <a href = "celula.php">
                                   <img src="ICON/internet-37197_150.png" width="40" height="30" border="0" title = "CELULA">
                               </a>
                           </td>
                           <td>
                               <a href = "escoladelider.php?ok=1">
                                   <img src="ICON/computer-24944_150.png" width="40" height="30" border="0" title = "Escola de Lideres">
                               </a>
                           </td>
                           <td>
                               <a href = "conta.php?ok=1">
                                   <img src="ICON/button-41706_150.png" width="40" height="30" border="0" title = "CONTAS">
                               </a>
                           </td>
                           <td>
                               <a href = "anivesariante.php">
                                   <img src="ICON/baby-25388_150.png" width="40" height="30" border="0" title = "Aniversariantes">
                               </a>
                           </td>
                           <td>
                               <a href = "carta.php">
                                   <img src="ICON/icon-28157_150.png" width="40" height="30" border="0" title = "Carta de Saida">
                               </a>
                           </td>
                           <td>
                               <a href = "ver_email.php">
                                   <img src="ICON/icone_email.png" width="40" height="30" border="0" title = "Checar Email">
                               </a>
                           </td>
                           <td>
                               <a href = "copyright.php">
                                   <img src="ICON/copyright.png" width="40" height="30" border="0" title = "copyright">
                               </a>
                           </td>
                           <td>
                               <a href = "desconectar.php">
                                   <img src="ICON/sign-36980_640.png" width="40" height="30" border="0" title = "SAIR">
                               </a>
                           </td>
                       </table>
                      </td>
                    </tr>
                </table>
            
          </div>  -->

<?php
    }
    cabec_Menu();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
