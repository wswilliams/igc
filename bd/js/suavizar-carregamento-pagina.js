/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 $(document).ready(function() {
             
         $("body").css("display", "none");
         $("body").fadeIn("slow");
        
        $(".thumbnail").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(1000, redirectPage);
        });

        function redirectPage() {
        window.location = linkLocation;
        }

        });