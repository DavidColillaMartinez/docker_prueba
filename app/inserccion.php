<html>

<head>
    <title>Insertar nueva pelicula</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">

    <?
    include('conex.php');
    $query = mysqli_sql('select * from peliculas', false);
    $todos = filter_input_array(INPUT_POST);
    ?>
</head>

<body>

    <div id="cine">
        <h1>Insertar nueva pelicula</h1>
    </div>


    <div id="formu">
        <form onsubmit="" action="" method="post">

            <div id="linea1">

                <div id="siete">
                    <label for="titulo">Titulo:</label> <br>
                    <input type="text" name="titulo" maxlength="30" id="titulo" required autofocus>
                </div>
                <div id="ocho">
                    <label for="titulo">Director:</label><br>
                    <input type="text" name="director" maxlength="30" id="director" required>
                </div>
            </div>
            <div id="linea2">

                <div id="uno">
                    <label for="titulo">Sinopsis:</label>
                    <input type="text" name="sinopsis" maxlength="30" id="sinopsis" required>
                </div>
                <div id="dos">
                    <label for="titulo">Nacionalidad:</label>
                    <input type="text" name="nacionaliad" maxlength="30" id="nacionalidad" required>
                </div>

            </div>

            <div id="linea3">

                <div id="tres">
                    <label for="titulo">Año:</label>
                    <input type="text" name="año" maxlength="30" id="año" required>
                </div>
                <div id="cuatro">
                    <label for="sel">Genero:</label> <br>
                    <select id="sel">
                        <option>Genero</option>
                        <? foreach ($query as $peliculas) {
                            print '<option  value=' . $peliculas['id'] . '>' . $peliculas['titulo'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div id="linea4">

                <div id="cinco">
                    <label for="titulo">Poster:</label>
                    <input type="text" name="titulo" maxlength="30" id="titulo" required>
                </div>
                <div id="seis">
                    <button type="submit" name="enviar" value="Enviar" class="enviar">Enviar</button>
                </div>

            </div>
        </form>

    </div>


</body>

</html>