# Linio Challenge!

_Challenge enviado por Linio para Concurso de Desarrollador Web_

## _¿Cómo se comenzó?_ 🚀

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
* **$num** - *Trabajo Inicial* - [villanuevand](https://github.com/villanuevand)
* **$mult** - *Documentación* - [fulanitodetal](#fulanito-de-tal)



## ¿Como ejecutar? ⚙️

_Se desarrolló con la propósito de poder ejecutarse, tanto por cualquier navegador web, como con PHPUnit._

### Navegador Web 🔩

_En la raiz del proyecto, se tiene el archivo_

```
index.php
```
El cual simplemente 
