/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//function DataHora(){
//            var data = new Date();
//            document.getElementById("datahora").innerHTML = data;
//            setTimeout("DataHora()",1000);
//}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function construirArray(qtdElementos){
	this.length = qtdElementos;
}

    var	arrayDia = new construirArray(7);
	arrayDia[0] = "Domingo";
	arrayDia[1] = "Segunda-Feira";
	arrayDia[2] = "Terça-Feira";
	arrayDia[3] = "Quarta-Feira";
	arrayDia[4] = "Quinta-Feira";
	arrayDia[5] = "Sexta-Feira";
	arrayDia[6] = "Sabado";

	var arrayMes = new construirArray(12);
	arrayMes[0] = "Janeiro";
	arrayMes[1] = "Fevereiro";
	arrayMes[2] = "Março";		
	arrayMes[3] = "Abril";
	arrayMes[4] = "Maio";
	arrayMes[5] = "Junho";
	arrayMes[6] = "Julho";
	arrayMes[7] = "Agosto";
	arrayMes[8] = "Setembro";
	arrayMes[9] = "Outubro";
	arrayMes[10] = "Novembro";
	arrayMes[11] = "Dezembro";

function mostrarDataHora(hora, diaSemana, dia, mes, ano){
	var retorno  = "&nbsp;&nbsp;"+diaSemana+", "+dia+" de "+mes+" de "+ano+" ";
	retorno += "&nbsp; as "+hora;
        var user = document.cookie;
        var dividir = user.split("=");
        document.getElementById("datahora").innerHTML ="Usuario Logado: "+dividir[1] + retorno;
}

function getMesExtenso(mes){
	return this.arrayMes[mes];
}


function getDiaExtenso(dia){
	return this.arrayDia[dia];
}

function atualizarDataHora(){ 
        var dataAtual = new Date();
	var dia = dataAtual.getDate();
	var diaSemana = getDiaExtenso(dataAtual.getDay());
	var mes = getMesExtenso(dataAtual.getMonth());
	var ano =dataAtual.getFullYear();
        var hora = dataAtual.getHours();
        var minuto = dataAtual.getMinutes();
        var segundo = dataAtual.getSeconds();
        
        var horaImprimivel = hora + ":" + minuto + ":" + segundo;
	mostrarDataHora(horaImprimivel, diaSemana, dia, mes, ano);
	setTimeout("atualizarDataHora()",1000);
        
}