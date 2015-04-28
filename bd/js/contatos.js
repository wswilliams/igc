/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function(){
		jQuery('#login_user').submit(function(){
			var dados = jQuery( this ).serialize();
 
			jQuery.ajax({
				type: "POST",
				url: "bd/valida_login.php",
				data: dados,
				success: function( data )
				{
                                    
                                    if(data == 1){
                                        window.location.href = "cadastroigc.php";
                                    }else{
                                        alert("Usuario ou Senha inválidos ");
                                    }
//					
                                        
				}
			});
			
			return false;
		});
	});


