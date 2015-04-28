/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $("#dat-janeiro").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });
    
    $("#dat-fevereiro").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-marco").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-abril").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-maio").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-junho").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-julho").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-agosto").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-setembro").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-outubro").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-novembro").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
    
    $("#dat-desembro").click(function(event) {
            event.preventDefault();
            $( '#resultado' ).html('');
        $.ajax({
                       //pegando a url apartir do href do link
            url: $(this).attr("href"),
            type: 'GET',
            context: jQuery('#resultado'),
            success: function(data){
                this.append(data);
            }
        });     
    });  
 });


