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

Por último, se desarrolló la función que será llamada para la ejecución principal del Challenge. Esta función la llamé _main_ y recibe un único parámetro llamado _$es_test_ (por defecto es **False**), sólo para diferenciar si el llamado del mismo viene desde PHPUnit.
```
    public function main($es_test = false)
```
Al inicio, simplemente se define cómo será mostrado el salto de línea, esto solamente con fines estéticos para que sea legible la información final.
```
    $salto_linea = "<br/>";
    if ($es_test){ # Unico IF (Sólo para dar formato al salto de linea)
        $salto_linea = "\n";
    }
```
En esta sección fue utilizado el único **if** permitido para el Challenge 🤓

Posteriormente, se recorre la variable _valores_ del objeto _Linio_ para determinar cúales son múltiplos y cuales no: 
```
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
```

En resumen, la función principal quedaría de la siguiente forma:
```
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
```

## ¿Como probamos? ⚙️

Se desarrolló con la propósito de poder ejecutarse, tanto por entorno web, como con PHPUnit.

### Navegador Web 🔩
En la raiz del proyecto, se tiene el archivo _**index.php**_, que simplemente tiene la instanciación a la clase **Linio** y la posterior llamada a la función _main_
```
    $prueba = new Linio();
    $prueba->main();
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





