# Linio Challenge!

_Challenge enviado por Linio para Concurso de Desarrollador Web_

## _¿Cómo se desarrolló?_ 🚀

La premisa o visión que tuve al apenas leer el Challenge fue orientarlo netamente a POO, con lo cual se creó una clase llamada **Linio** la cual contendría toda la lógica necesaria para la realización de la prueba.
Esta clase contiene dos constantes que serían el número inicial y final de la ejecución:
```
    const desde = 1;
    const hasta = 100;
```
Además de una variable donde posteriormente tendriamos un arreglo de los números para la ejecución:
```
    var $valores;
```

En el construct de la clase, básicamente se crea dicho arreglo para ser utilizado posteriormente en la ejecución principal
```
    public function __construct(){
        $valores = array();
        for ($i=self::desde; $i<=self::hasta; $i++){
            array_push($valores, $i);
        }

        $this->valores = $valores;
    }
```

Se desarrolló una simple función _**multiplo**_ a la cual se le pasan dos parametros:
* **$num** - *Número entero al cual se le realizará el cálculo del múltiplo*
* **$mult** - *Número entero que indica el múltiplo a comparar*

Esta función retornará **True** si $num es múltiplo de $mult, y **False** en caso contrario.
```
    public function multiplo($num,$mult){
        return empty($num%$mult);
    }
```

Por último, se desarrolló la función que realiza la lógica solicitada en el Challenge. Esta función la llamé _resultados_.
```
    public function resultado()
```

Posteriormente, se recorre el atributo _valores_ del objeto _Linio_ para determinar cúales son múltiplos y cuales no: 
```
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
```

En resumen, la función principal quedaría de la siguiente forma:
```
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
```

## ¿Como probamos? ⚙️

Se desarrolló con la propósito de poder ejecutarse, tanto por entorno web, como con PHPUnit.

### Navegador Web 🔩
En la raiz del proyecto, se tiene el archivo _**index.php**_, que simplemente tiene la instanciación a la clase **Linio** y la posterior llamada a la función _resultados_
```
    $prueba = new Linio();
    $datos = $prueba->resultado();
```
el cual simplemente lo ejecutamos desde cualquier navegador con una URL parecida a ls siguiente:
```
    http://<localhost o ip de servidor donde se ejecute>/prueba_linio/index.php
```

### Con PHPUnit 🔩
Ejecutamos desde un terminal y ubicados en la carpeta _test/_ que se encuentra dentro del proyecto el siguiente comando:
```
    $ phpunit LinioTest.php
```





