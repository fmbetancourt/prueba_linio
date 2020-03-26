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
     * Función que arma un array asociativo donde el key será el
     * numero correlativo y el valor el resultado correspondiente
     *
     * @return array
     */
    public function resultado(){
        $resultado = array();
        foreach ($this->valores as $num) {
            switch (true){
                case ($this->multiplo($num,15)):
                    $valor = "Linianos";
                    break;
                case ($this->multiplo($num,5)):
                    $valor =  "IT";
                    break;
                case ($this->multiplo($num,3)):
                    $valor =  "Linio";
                    break;
                default:
                    $valor =  $num;
                    break;
            }
            $resultado[$num] = $valor;
        }

        return $resultado;
    }

}