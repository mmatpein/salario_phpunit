<?php

namespace aprendophpunit\modelo;
class Salario
{
    public function incrementoSalario($salarioActual){
        return $salarioActual+$salarioActual*2/100;
    }

    public function retencionSalario($salarioBruto){
        return $salarioBruto*22/100;
    }
}