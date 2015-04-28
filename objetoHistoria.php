<?php

class objetoHistoria {

    private $id;
    private $titulo;
    private $texto;
    private $data;
    private $imagem;
    private static $instance;

    public function __construct() {

        try {

            $this->getId();
            $this->getTexto();
            $this->getTitulo();
            $this->getData();
            $this->getImagem();
        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function settexto($texto) {
        $this->texto = $texto;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public static function setInstance($instance) {
        self::$instance = $instance;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getData() {
        return $this->data;
    }

    public function getImagem() {
        return $this->imagem;
    }

    function valida($id, $titulo, $texto, $imagem, $data) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->imagem = $imagem;
        $this->data = $data;
    }

    public function __toString() {
        return $this->titulo." ".$this->texto." ".$this->imagem." ".$this->data;
        /* $this->matricula." ".$this->nome." ". 
          $this->sexo." ".$this->data." ".$this->rg." ".$this->cpf." ".$this->estadocivil." ".
          $this->natural." ".$this->profissao." ".$this->escola." ".$this->pai." ".$this->mae." ".$this->necessidade." ".
          $this->fone." ".$this->filho." ".$this->formacao." ".$this->membrasia." ".$this->funcao." ".$this->participou." ".
          $this->trabalhando." ".$this->viajando." ".$this->congrega." ".$this->rua." ".$this->bairro." ".$this->casa." ".$this->status; */
    }

}

;
?>
