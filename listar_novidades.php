<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//variavel para ser exibida como retorno da funcao
$ok = "";
$somadosCampos=0;
$tam=0;
// Define uma variável para testar o validador
//$email = $_POST["email"];
if ( isset($_GET["titulo"])) {
    $titulo = filter_input(INPUT_GET, 'titulo');
    $data;
    
//    echo ''.$nome."<br>".
//        $fone."<br>".
//        $email."<br>".
//        $assunto."<br>".
//        $mensage."<br>";
    
// Define uma função que poderá ser usada para validar e-mails usando regexp
    
    if (preg_match("/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/",$titulo)) {
        $somadosCampos++;
        $data=Date($titulo);
    }  else {
        $ok.="Erro \n".$titulo;
    }
    
// Faz a verificação usando a função
    if ($somadosCampos == 1) {
                
      try{
          require_once ("view/conectar.php");
          require_once ("objetoHistoria.php");
          $obj = Connection::getInstance();
  
            //1 – Definimos Para quem vai ser enviado o email 
        
//        $mes_atual = date("m");
//        $mes = $$data["mon"];
//        $sql = mysql_query("SELECT * FROM tabela where MONTH(data) = '$mes_atual'"); 
        $busca = mysql_query("SELECT * from historico where MONTH(data) = MONTH('$data')") or die ("Nao foi possivel realizar a busca".mysql_error());
        //$resultado = mysql_fetch_assoc($busca);

        $listaHistoria = array();
        $i=0;
//        $tam=count($resultado);
         while ($registro = mysql_fetch_assoc($busca)){
//        for ($index = 0; $index < count($resultado); $index++) {

	    $historia = new objetoHistoria();
            
            $historia->setId($registro['id_item']);
            $historia->setTitulo($registro['titulo']);
            $historia->settexto($registro['texto']); 
            $historia->setImagem($registro['imagem']); 
            $historia->setData($registro['data']); 
                        
	    $listaHistoria[$i] = $historia;
	    $i++;
	}
        $tam=$i;
        mysql_free_result($busca);
        $obj->freebanco();

        $chave = array_keys($listaHistoria);
        for ($index2 = 0; $index2 < sizeof($chave); $index2++) {
            $indice2 = $chave[$index2];
//             $ok.=$listaHistoria[$indice2]->getTitulo()."<br>".
//              $listaHistoria[$indice2]->getTexto()."<br>".
//             "<img src='{$listaHistoria[$indice2]->getImagem()}'/><br>".
//              $listaHistoria[$indice2]->getData();
             
             $ok.="<div class='col-md-8'>".
                        "<div class='col-sm-6 col-md-2 thumbnail'>".
                            "<img src='{$listaHistoria[$indice2]->getImagem()}'/><br>".
                        "</div>".
                   
                        "<div class='col-md-10'>".
                        "<div class='media-body'>".
                            "<h3 class='media-left'>{$listaHistoria[$indice2]->getTitulo()}</h3>".
                            "<h4 class='media-heading text-justify'>{$listaHistoria[$indice2]->getTexto()}.<br></h4>".
                             "<h4 class='media-heading text-justify'>Data: {$listaHistoria[$indice2]->getData()}.</h4>".
                        "</div>".
                        "</div>".
                        "<hr class='featurette-divider'>".
                        "</div><br>";
        }
        
        }catch (Exception $e) {
             $ok="Erro estamos realizando procedimento administrativo";	       
        }
        
    }
    
}else{
    $ok="E obrigatorio o preenchimento de todos os campos do formulario \n";
}
?>
<?php echo $ok; ?>
