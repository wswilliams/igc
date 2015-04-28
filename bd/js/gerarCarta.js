/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//jQuery(document).ready(function(){
function gerarCarta(){
		jQuery('#gerarCartas').submit(function(){
			var dados = jQuery( this ).serialize();
			jQuery.ajax({
				type: "POST",
				url: "gerar_carta.php",
				data: dados,
				success: function( data )
				{
                                  document.getElementById("exibeResposta").innerHTML=data;   
				}
			});
			
			return false;
		});
	};
