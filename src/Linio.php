<?php


class Linio{

    const desde = 1;
    const hasta = 100;
    var $valores;

    public function __construct(){
        $valores = array();
        for ($i=self::desde; $i<=self::hasta; $i++){
            array_push($valores, $i);
        }

        $this->valores = $valores;
    }

    /**
     * Funcion que retorna si $num es múltiplo de $mult
     *
     * @param $num
     * @param $mult
     * @return bool
     */
    public function multiplo($num,$mult){
        return empty($num%$mult);
    }

    /**
     * Función que ejecuta la lógica del ejercicio
     *
     * @param bool $test Indica si la llamada es realizada desde el test de PHPUnit
     * @return bool
     */
    public function main($es_test = false){
        $salto_linea = "<br/>";
        if ($es_test){ # Unico IF (Sólo para dar formato al salto de linea)
            $salto_linea = "\n";
        }
        foreach ($this->valores as $num) {
            echo $salto_linea;
            switch (true){
                case ($this->multiplo($num,15)):
                    echo "Linianos";
                    break;
                case ($this->multiplo($num,5)):
                    echo "IT";
                    break;
                case ($this->multiplo($num,3)):
                    echo "Linio";
                    break;
                default:
                    echo $num;
                    break;
            }
        }

        return true;
    }

}