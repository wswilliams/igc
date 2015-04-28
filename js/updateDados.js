/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function(){
		jQuery('#cadastrar-membro').submit(function(){
			var dados = jQuery( this ).serialize();
 
			jQuery.ajax({
				type: "POST",
				url: "bd/update_membro.php",
				data: dados,
				success: function( data )
				{
                                     if(data == 1){
                                        alert("Parabens, os dados foram atualizados com sucesso"); 
                                     }else if(data == 3){
                                         alert("Desculpe, não foi possível atualizar os dados"); 
                                     }else{
                                        alert("Erro, não foi possivel alterar os dados membro"); 
                                     }
                                  
				}
			});
			
			return false;
		});
	});


