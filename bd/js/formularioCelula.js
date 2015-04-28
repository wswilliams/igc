
jQuery(document).ready(function(){
		jQuery('#cadastrar').submit(function(){
			var dados = jQuery( this ).serialize();
                            
			jQuery.ajax({
				type: "POST",
				url: "view/corpo_celula.php",
				data: dados,
				success: function( data )
				{
//                                   alert(data);
                                  document.getElementById("exibePesquisa").innerHTML=data;   
				}
			});
			
			return false;
//                        
		});
	});


