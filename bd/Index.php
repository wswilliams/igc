<html>
   <head>
     <meta name="generator" content="Responsive Web Css (www.responsivewebcss.com)" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/index.css" rel="stylesheet" type="text/css" />	
     <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
     <script type="text/javascript" src="js/validacelula.js"></script>
     
     <style type="text/css">	
      <!--
      
           .estrutura_principal_interna{
               background-image: url("images/autenticar.jpg");
	       background-attachment: fixed;
           }
       
      -->
     </style>
		
	<title>Software Administrativo</title>
		
 </head>
<body>
				
    <div id='root'>
              
       <div class="estrutura_principal_interna"> 
               
         <div id="box1">
                <div class = "cabec">
                    
                </div>
           </div>
          <br><br><br><br><br><br>          
           <div id="box2">     
               <div class="formulario_login">
                <form id="logar" action = "valida_login.php" method = "post" onsubmit="return validarlogin();">
                <table border = "0">
                    <tr>
                        <td colspan="4" align="center">
                          <h3>Autenticar Membro</h3>  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Nome</b>
                        </td>
                        <td>
                            <input type="text" name="Login" maxlength = "50"/>
                        </td>
                    </tr>
                    <tr>
                      <td>
                          <b>Senha</b>
                      </td>
                      <td>
                          <input type="password" name="senha" maxlength = "20"/>
                      </td>
                  </tr>
               </table>
                <table align = "center">
                   <tr>
                       <td>
                           <input type='submit' name="Entrar" value="Entrar">
                       </td>
                       <td>
                           <input type='reset' name="limpar" value="Limpar">
                       </td>
                   </tr>
                </table>

              </form>
             </div>
          </div>
          <br><br><br><br><br>
           <div id="box3"> 
               <div class = "rodape">
                    <?php
                         require_once ("/view/dataatual.php");
                      ?>
                 </div>
           </div>
    </div>
   </div>
			
</body>
</html>
<?php
if(isset($_GET["ok"])){
    $ok=$_GET["ok"];
    
    switch ($ok){
        case 1:
            echo "<SCRIPT LANGUAGE=\"JavaScript\"TYPE=\"text/javascript\"> alert(\"Desculpe, serviço temporariamente indisponível no sistema\")</SCRIPT>";
        break;
        case 2:
            echo "<SCRIPT LANGUAGE=\"JavaScript\"TYPE=\"text/javascript\"> alert(\"Desculpe, login ou senha invalido\")</SCRIPT>";
        break;
        case 3:
            echo "<SCRIPT LANGUAGE=\"JavaScript\"TYPE=\"text/javascript\"> alert(\"Desculpe, estamos em manutenção \")</SCRIPT>";
        break;
    }
}
?>