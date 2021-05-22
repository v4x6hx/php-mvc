<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
    <link rel="stylesheet" href="vistas/assets/css/style.css">
    <link href="vistas/assets/css/table7/css.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="vistas/assets/css/table7/font-awesome.css">
    <link rel="stylesheet" href="vistas/assets/css/table7/style.css">
</head>
<body class="text-white">

    <div class="ejercicio1">
        <h1 class="custom">Ejercicio #1</h1>
        <p>Dado un numero, calcular todos los numeros pares
            entre 1 y dicho numero. Despues proceder a sumar
            todos los numeros pares dentro del rango.
        </p>
        <form method="post">
            <input type="number" name="numero1" placeholder="Ingresar un numero">
            <button type="submit" name="calcular">Enviar</button><br>
            <?php
            $action = new PracticaMatematicas();
            $action -> sumarPares();
            ?>
        </form>
    </div>

    <div class="ejercicio2">
        <h1 class="custom">Ejercicio #2</h1>
        <?php
            PracticaMatematicas::cuadradosPrimos();
        ?>
    </div>

    <div class="ejercicio3">
        <h1 class="custom">Ejercicio #3</h1>
        <p>Se tiene un grupo de alumnos, 
            los datos por cada alumno son:</p>
        <ul>
            <li>Nombre</li>
            <li>Sexo (M,F)</li>
            <li>Edad</li>
            <li>Estatura</li>
            <li>Peso</li>
            <li>Color de ojos (1.-azul, 2.-castaño,3.-otro)</li>
            <li>Color de cabello (1.-castaño, 2.-rubio, 3.-otro)</li>
        </ul> 
        <p>Elaborar un algoritmo que lea los datos
            de entrada y que proporcione:
            <br>
            <ol type="a">
                <li>Un listado de las mujeres de cabello rubio 
                    y ojos azules que miden entre 1.65 m y 1.75 m
                    y que pesen menos de 55 kg.
                </li>
                <li>
                    Un listado de los hombre de ojos castaños
                    de mas de 1.70 m de estatura y que pesen
                    entre 60 kg y 70 kg
                </li>
            </ol>
        </p>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Table #07</h2>
                    </div>
                </div>
                <div class="row">
                <?php
                    $jsonStr = file_get_contents('vistas/assets/json/people.json');
                    
                    $gente = json_decode($jsonStr, true);
                ?>
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>Estatura</th>
                                        <th>Peso</th>
                                        <th>Color de ojos</th>
                                        <th>Color de cabello</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($gente as $key => $value) {
                                        echo '<tr>';
                                            echo '<th scope="row">'.++$key.'</th>';
                                            echo '<td>'.$value["Nombre"].'</td>';
                                            echo '<td>'.$value["Sexo"].'</td>';
                                            echo '<td>'.$value["Edad"].'</td>';
                                            echo '<td>'.$value["Estatura"].'</td>';
                                            echo '<td>'.$value["Peso"].'</td>';
                                            echo '<td>'.$value["Color de ojos"].'</td>';
                                            echo '<td>'.$value["Color de cabello"].'</td>';
                                        echo '</tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <p>Womens de cabello rubio, ojos azules, estatura de 1.65 a 1.75m y menos de 55kg</p>
                        <div class="table-wrap">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>Estatura</th>
                                        <th>Peso</th>
                                        <th>Color de ojos</th>
                                        <th>Color de cabello</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($gente as $key => $value) {
                                            if ($value["Sexo"] == 'M' && 
                                                $value["Color de cabello"] == 2 && 
                                                $value["Color de ojos"] == 1 && 
                                                $value["Estatura"] >= 1.65 &&
                                                $value["Estatura"] <= 1.75 &&
                                                $value["Peso"] < 65) {
                                                echo '<tr>';
                                                    echo '<th scope="row">'.++$key.'</th>';
                                                    echo '<td>'.$value["Nombre"].'</td>';
                                                    echo '<td>'.$value["Sexo"].'</td>';
                                                    echo '<td>'.$value["Edad"].'</td>';
                                                    echo '<td>'.$value["Estatura"].'</td>';
                                                    echo '<td>'.$value["Peso"].'</td>';
                                                    echo '<td>'.$value["Color de ojos"].'</td>';
                                                    echo '<td>'.$value["Color de cabello"].'</td>';
                                                echo '</tr>';
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <p>Mens de ojos castaños, estatura de mas de 1.70 y peso entre 60 y 70kg</p>
                        <div class="table-wrap">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>Estatura</th>
                                        <th>Peso</th>
                                        <th>Color de ojos</th>
                                        <th>Color de cabello</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($gente as $keyWomens => $mens) {
                                            if ($mens["Sexo"] == 'H' && 
                                                $mens["Color de ojos"] == 2 && 
                                                $mens["Estatura"] >= 1.70 &&
                                                $mens["Peso"] >= 60 &&
                                                $mens["Peso"] <= 70){
                                                echo '<tr>';
                                                    echo '<th scope="row">'.++$keyWomens.'</th>';
                                                    echo '<td>'.$mens["Nombre"].'</td>';
                                                    echo '<td>'.$mens["Sexo"].'</td>';
                                                    echo '<td>'.$mens["Edad"].'</td>';
                                                    echo '<td>'.number_format($mens["Estatura"],2).'</td>';
                                                    echo '<td>'.$mens["Peso"].'</td>';
                                                    echo '<td>'.$mens["Color de ojos"].'</td>';
                                                    echo '<td>'.$mens["Color de cabello"].'</td>';
                                                echo '</tr>';
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<script src="vistas/assets/css/table7/jquery.js"></script>
<script src="vistas/assets/css/table7/popper.js"></script>
<script src="vistas/assets/css/table7/beacon.js"></script>
</body>
</html>