<?php
use PHPUnit\Framework\TestCase;
require_once '../src/Linio.php';

class LinioTest extends TestCase{

    public function testIniciarPrueba(){
        $linio = new Linio();
        $datos = $linio->resultado();

        foreach ($linio->valores as $valor) {
            switch (true){
                case ($linio->multiplo($valor,15)):
                    $dato = "Linianos";
                    break;
                case ($linio->multiplo($valor,5)):
                    $dato =  "IT";
                    break;
                case ($linio->multiplo($valor,3)):
                    $dato =  "Linio";
                    break;
                default:
                    $dato =  $valor;
                    break;
            }
            $this->assertSame($datos[$valor], $dato);
        }
    }

}