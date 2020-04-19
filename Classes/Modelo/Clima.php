<?php

namespace Classes\Modelo;

class Clima {

    public $codCidade;
    public $cidade;
    public $temperatura;
    public $velocidadeVento;
    public $nascerDoSol;
    public $porDoSol;
    public $humidade;
    public $pressao;
    public $descricao;
    public $icone;

    //Converte de kelvin para celsius
    public function getTemperaturaCelsius() : float {
        return $this->temperatura - 273.15;
    }
    
    //Convete de kelvin para fahrenheit
    public function getTemperaturaFahrenheit() : float {
       
        return $this->getTemperaturaFahrenheit= 9/5*($this->temperatura-273.15)+32;
	
    }
}

?>
