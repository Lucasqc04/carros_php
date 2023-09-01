<?php

namespace App\model;


class CarrosEspeciais extends Carros{

   public function __construct($Id, $Marca, $Modelo, $Velocidade, $Controle, $Aceleracao, $Arrancada, $Frenagem, $Preco, $Cor){
parent::__construct($Id, $Marca, $Modelo, $Velocidade, $Controle, $Aceleracao, $Arrancada, $Frenagem, $Preco, $Cor); 


}
}