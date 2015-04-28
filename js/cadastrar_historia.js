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
				url: "bd/cadastro_membro.php",
				data: dados,
				success: function( data )
				{
                                     if(data == 0){
                                        alert("Parabens, cadastro realizado com sucesso"); 
                                     }else if(data == 1){
                                         alert("Desculpe, membro já é cadastro no sistema");
                                     }else{
                                        alert("Erro, não foi possivel cadastrar o membro"); 
                                     }
                                    
				}
			});
			
			return false;
		});
	});


