<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    if(isset($_COOKIE["nome"])){
        setcookie('nome','', time()-3600*24*1);
        header('location:../index.php');
    }else{
         header('location:../index.php');
    }
?>
