/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function(){
//function lisparCamposCelula(){
		jQuery('#addMembro').submit(function(){
			var dados = jQuery( this ).serialize();
                        var x = document.getElementById("listAdd");
                        x.remove(x.selectedIndex);
                        
			jQuery.ajax({
				type: "POST",
				url: "addmembroCelula.php",
				data: dados,
				success: function(data)
				{
                                        var valores= data.split(";");
                                        var indice = document.getElementById("listEx").length;
                                        document.getElementById("listEx").options[indice] = new Option(valores[0],valores[1]);
                                    
				}
			});
			
			return false;
		});
	});


