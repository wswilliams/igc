 function validaMembro(){

          var membro = document.getElementById("cadas");

          var nome = membro.nome;
          var nascimento = membro.data;
          var endereco = membro.rua;
          var rua = membro.bairro;
          var numero = membro.casa;
          var enviar = membro.Cadastra;
          var a,b,c,d,e;
          
    if(nome.value == " "){
      alert('Por favor, O preenchimento do nome e parace esta vazio');
      nome.focus();
      return false;
    }
    else if(nome.value.indexOf(" ") <= 0){
      alert('Por favor, O preenchimento do nome e obrigatorio');
      nome.focus();
      return false;
    }else{
         a=1;
    }

   if(nascimento.value == " "){
      alert('Por favor, inserir uma data de nascimento.\nFormato: yyyy-mm-dd');
      nascimento.focus();
      return false;
   }else{
        b=1;
   }

    if(endereco.value == " "){
          alert('Por favor, o campo rua parece esta vazio?');
          endereco.focus();
          return false;
    }
    else if(endereco.value.indexOf(" ") <= 0){
          alert('Por favor, Informe a rua onde mora?');
          endereco.focus();
          return false;
    }else{
          c=1;
    }
     if(rua.value == " "){
        alert('Por favor, Bairro onde mora?');
        rua.focus();
        return false;
    }
    else if(rua.value.indexOf(" ") <= 0){
        alert('Por favor, Bairro onde mora?');
        rua.focus();
        return false;
    }
     else{
         d=1;
    }

    if(numero.value == " "){

          alert('Por favor, Informe o mumero da casa?');
          numero.focus();
          return false;
    }

    else if(numero.value <= 0){

          alert('Por favor, Informe o mumero da casa?');
          numero.focus();
          return false;
    }else{
          e=1;
    }

    if((a==1) && (b==1) && (c==1) && (d==1) && (e==1)){
          enviar.disabled = false;
    }
 }

 function freeForm(){
          var email = document.getElementById("email");
          var nome = email.nome;
          var ema = email.email;
          var coment = email.pontoref;

          if(nome.value.indexOf(" ") > 0 && ema.value.indexOf(" ") > 0 && coment.value.indexOf(" ") > 0){
          alert('EMAIOR');

          }else{
            nome.value = "";
            ema.value = "";
            coment.value = "";
            enviar.disabled = true;
          }
 }
 
 // validacao da celulas
 
  function validaCelula(){

          var celula = document.getElementById("celula");

          var nome = celula.nome;
          var lider = celula.lider;
          var bairro = celula.bairro;
          var rua = celula.rua
          var numero = celula.numero;
          var dia = celula.dia;
          var status = celula.status;
          var enviar = celula.Cadastra;
          var a,b,c,d,e,f,j;

    if(nome.value == " "){
      alert('Por favor, O preenchimento do nome e parace esta vazio');
      nome.focus();
      return false;
    }
    else if(nome.value.indexOf(" ") <= 0){
      alert('Por favor, O preenchimento do nome e obrigatorio');
      nome.focus();
      return false;
    }else{
         a=1;
    }

   if(lider.value == " "){
      alert('Por favor, inserir uma data de nascimento.\nFormato: yyyy-mm-dd');
      lider.focus();
      return false;
   }else{
        b=1;
   }

    if(bairro.value == " "){
          alert('Por favor, o campo rua parece esta vazio?');
          bairro.focus();
          return false;
    }
    else if(bairro.value.indexOf(" ") <= 0){
          alert('Por favor, Informe a rua onde mora?');
          bairro.focus();
          return false;
    }else{
          c=1;
    }
     if(rua.value == " "){
        alert('Por favor, Bairro onde mora?');
        rua.focus();
        return false;
    }
    else if(rua.value.indexOf(" ") <= 0){
        alert('Por favor, Bairro onde mora?');
        rua.focus();
        return false;
    }
     else{
         d=1;
    }

    if(numero.value == " "){

          alert('Por favor, Informe o mumero da casa?');
          numero.focus();
          return false;
    }

    else if(numero.value <= 0){

          alert('Por favor, Informe o mumero da casa?');
          numero.focus();
          return false;
    }else{
          e=1;
    }


    if((a==1) && (b==1) && (c==1) && (d==1) && (e==1)){
          enviar.disabled = false;
    }
 }

