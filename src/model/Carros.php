<?php

namespace App\model;

class Carros{

public $id;
public $marca;
public $modelo;
public $velocidade;
public $controle;
public $aceleração;
public $arrancada;
public $frenagem;
public $preço;
public $cor;

function __construct($Id, $Marca, $Modelo, $Velocidade, $Controle, $Aceleracao, $Arrancada, $Frenagem, $Preco, $Cor) {
        $this->Id = $Id;
        $this->Marca = $Marca;
        $this->Modelo = $Modelo;
        $this->Velocidade = $Velocidade;
        $this->Controle = $Controle;
        $this->Aceleracao = $Aceleracao;
        $this->Arrancada = $Arrancada;
        $this->Frenagem = $Frenagem;
        $this->Preco = $Preco;
        $this->Cor = $Cor;
    }



public function vercarros() {
 
        return $this->Id . "- <br>Marca: " . $this->Marca . 
        "<br>Modelo: " . $this->Modelo . 
        "<br>Velocidade: " . $this->Velocidade . 
        "<br>Controle: " . $this->Controle .
        "<br>Aceleração: " . $this->Aceleracao .
        "<br>Arrancada: " . $this->Arrancada . 
        "<br>Frenagem: " . $this->Frenagem . 
        "<br>Preço: R$" . $this->Preco . 
        "<br>Cor: " . $this->Cor;

}

public function vercarrosimples() {

    return  $this->Marca . "<br> <br>" .  $this->Modelo;

}

}