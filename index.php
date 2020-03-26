<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Challenge Linio - Freddy Moreno</title>
    </head>
    <body>
        <h1>Challenge Linio - Freddy Moreno</h1>
        <table align="center" class="table table-striped" style="max-width: 50rem; margin-top: 30px;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Salida</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'src/Linio.php';

                    $prueba = new Linio();
                    $datos = $prueba->resultado();

                    foreach ($datos as $key => $dato) {
                        echo <<<HTML
                            <tr>
                                <th scope="row">{$key}</th>
                                <td>{$dato}</td>
                            </tr>
    HTML;
                    }
                ?>

            </tbody>
        </table>




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
