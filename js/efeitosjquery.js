/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){

//$("body").css("background-image","url(imagens_geral/fundoteste1.png)");


$("#btEsquerdo2").hide();
$("#btDireito2").hide();

$(".div_navnews").mouseover(function(){
  $("#btDireito1").hide();
  $("#btDireito2").show();
  }).mouseout(function(){
    $("#btDireito2").hide();
    $("#btDireito1").show();
  });


$(".div_navnews1").mouseover(function(){
  $("#btEsquerdo1").hide();
  $("#btEsquerdo2").show();
  }).mouseout(function(){
    $("#btEsquerdo2").hide();
    $("#btEsquerdo1").show();
  });
                  
});

