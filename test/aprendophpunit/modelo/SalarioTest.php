<?php


namespace aprendophpunit\modelo;


class SalarioTest extends \PHPUnit\Framework\TestCase
{
    public function testSalarioDevuelveIncremento20porciento(){
        $incremento20 = 2000*2/100;
        $salario = new Salario();
        $salarioObtenido = $salario->incrementoSalario(2000);
        $salarioEsperado = 2000 + $incremento20;
        $this->assertEquals($salarioEsperado,$salarioObtenido,"Los salarios son iguales.");
    }


    public function testRetencionSalario22porciento(){
        $retencionEsperada = 2000*22/100;
        $salario = new Salario();
        $retencionObtenida = $salario->retencionSalario(2000);
        $this->assertEquals($retencionEsperada,$retencionObtenida);
    }
}