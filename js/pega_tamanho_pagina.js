/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function tamanho_Pagina(){
var w = window;
var d = document;
var e = d.documentElement;
var g = d.getElementsByTagName('body')[0];
var x = w.innerWidth || e.clientWidth || g.clientWidth;
var y = w.innerHeight|| e.clientHeight|| g.clientHeight;            
alert("Width: "+x);
alert("Height: "+y);
};