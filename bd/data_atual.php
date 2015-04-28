<?php

class Data {

    var $meses;
    var $hoje;
    var $dia;
    var $mes;
    var $nomemes;
    var $ano;
    var $segundo;
    var $minutos;
    var $horas;
    private static $instance;

    public function __construct() {
        $this->meses = array(1=> "Janeiro",2=>"Fevereiro",3=>"Marco",4=>"Abril",5=>"Maio",6=>"Junho",7=>"Julho",8=>"Agosto",9=>"Setembro",
			   10=>"Outubro",11=>"Novembro",12=>"Dezembro");//(1 => 01, 2 => 02, 3 => 03, 4 => 04, 5 => 05, 6 => 06, 7 => 07, 8 => 08, 9 => 09, 10 => 10, 11 => 11, 12 => 12);
        $this->hoje = getdate();
        $this->dia = $this->hoje["mday"];
        $this->mes = $this->hoje["mon"];
        $this->nomemes = $this->meses[$this->mes];
        $this->ano = $this->hoje["year"];
        $this->segundo=$this->hoje["seconds"];
        $this->minutos=$this->hoje["minutes"];
        $this->horas=$this->hoje["hours"];
    }

    public static function getInstance() {
        try {
            if (!self:: $instance) {
                self:: $instance = new Data();
            }
            return self:: $instance;
        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }

    function getSegundo() {
        return $this->segundo;
    }

    function getMinutos() {
        return $this->minutos;
    }

    function getHoras() {
        return $this->horas;
    }

    function setSegundo($segundo) {
        $this->segundo = $segundo;
    }

    function setMinutos($minutos) {
        $this->minutos = $minutos;
    }

    function setHoras($horas) {
        $this->horas = $horas;
    }

        
    function getMeses() {
        return $this->meses;
    }

    function getHoje() {
        return $this->hoje;
    }

    function getDia() {
        return $this->dia;
    }

    function getMes() {
        return $this->mes;
    }

    function getNomemes() {
        return $this->nomemes;
    }

    function getAno() {
        return $this->ano;
    }

    function setMeses($meses) {
        $this->meses = $meses;
    }

    function setHoje($hoje) {
        $this->hoje = $hoje;
    }

    function setDia($dia) {
        $this->dia = $dia;
    }

    function setMes($mes) {
        $this->mes = $mes;
    }

    function setNomemes($nomemes) {
        $this->nomemes = $nomemes;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function data_atual() {
        echo "Data: ".$this->dia."/".$this->mes ."/".$this->ano ." as ".$this->horas .":".$this->minutos .":".$this->segundo;
    }

}

;
?>
