<?php
use PHPUnit\Framework\TestCase;
require_once '../src/Linio.php';

class LinioTest extends TestCase{

    public function testIniciarPrueba(){
        $linio = new Linio();
        $this->assertSame(true, $linio->main(true));
    }

}