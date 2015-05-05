<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of objetoEscola
 *
 * @author wswilliams
 */
class objetoEscola {

    //put your code here
    private $id;
    private $nome;
    private $dtinicio;
    private $dtfim;

    public function __construct() {

        try {
            $this->getNome();
            $this->getDtinicio();
            $this->getDtfim();
        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDtinicio() {
        return $this->dtinicio;
    }

    function getDtfim() {
        return $this->dtfim;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDtinicio($dtinicio) {
        $this->dtinicio = $dtinicio;
    }

    function setDtfim($dtfim) {
        $this->dtfim = $dtfim;
    }

    function valida($nome, $dtinicio, $dtfim) {

        $this->nome = mb_strtoupper($nome);
        $this->dtinicio = $dtinicio;
        $this->dtfim = $dtfim;
    }

    function valida1($id, $nome, $dtinicio, $dtfim) {
        $this->id = $id;
        $this->nome = mb_strtoupper($nome);
        $this->dtinicio = $dtinicio;
        $this->dtfim = $dtfim;
    }

    public function __toString() {
        return $this->nome;
    }

}
