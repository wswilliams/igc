/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//jQuery(document).ready(function(){
function cadastrarCelulas(){
		jQuery('#cadastrar_celula').submit(function(){
			var dados = jQuery( this ).serialize();
			jQuery.ajax({
				type: "POST",
				url: "cadastracelulas.php",
				data: dados,
				success: function( data )
				{
////                                   alert(data);
                                  document.getElementById("exibePesquisa1").innerHTML=data;   
				}
			});
//			
			return false;
//                        
		});
	};

