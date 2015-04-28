/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// JavaScript Document

//var segundos = 0;
//var tempo = 2;
//
//function Contador()
//{    
//	if(segundos == tempo){
//            
//            location.href="home";
//            
//	}else{
//            segundos ++;
//            setTimeout("Contador()",1000);
//	    
//	}
//    
//}
//$(document).ready(function(){
//$(document).ready (function (){
//
// var segundos = 0;
// var tempo = 2;
// var novaURL = "home.php";
//   if(segundos === tempo){
////            location.href="http://127.0.0.1:8080/tapas/home";
////            $(location).attr('href',url);
//           $(window.document.location).attr('href',novaURL);
//	}else{
//            segundos ++;
////           setTimeout(1000);
//	    
//	}
// 
//});
//$(document).ready (function (){
//var novaURL = "home";
//$(window.document.location).attr('href',novaURL);
//});

//$("#container").fadeIn(2000);
//$("a.transition").click(function(event){
//    event.preventDefault();
//    link = this.href;
//    $("body").fadeOut(1000, function(){
//        window.location = link;
//    });        
//});


//$(document).ready(function() {
//$("body").css("display", "none");
//$("body").fadeIn(slow);
//$("a").click(function(event){
//event.preventDefault();
//linkLocation = this.href;
//$("body").fadeOut(1000, redirectPage);
//});
// 
//function redirectPage() {
//window.location = linkLocation;
//}
//});

//$(document).ready(function(){
//    
//    $("body").fadeOut(5600);        
////$("a.transition").click(function(event){
////    event.preventDefault();
//    var novaURL = "home";
////    link = this.href;
//    $("body").fadeIn( 5600, "linear", function(){
//    $('body').css('display', 'none');
//    $('body').fadeIn(1000);
//        window.location = novaURL;
//    });        
//});

$(document).ready(function(){
    $("body").fadeOut(10000);
    setTimeout(function(){
        $("body").fadeOut(1000,function(){
           window.location.href = "home";
        });
    },1000);
 });

//$(document).ready(function(){
//  $("body").fadeIn(5000);
//  function complete() {
//    var novaURL = "home";
//    window.location = novaURL;
//  }
//  $( "#body" ).fadeOut( 1600, "linear", complete );
////  $( "#box2" ).fadeOut( 1600, complete );
//});
 