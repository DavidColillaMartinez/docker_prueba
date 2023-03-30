<?
header('Content-Type: text/html; charset=utf-8');

include('conex.php');
$query = mysqli_sql('select * from peliculas', false);
function filtro($string)
{
    $string = strval($string);
    $string = str_replace(" ", "", $string);
    return $string;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Planetas</title>
    <link rel="stylesheet" href="home.css">
    <style>
        img {
            max-width: 500px;
            object-fit: cover;
            width: 250px;
            height: 150px;
        }

        .contenerdor {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .caja {
            width: 33%;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="contenerdor">
        <?
        foreach ($query as $peliculas) {
            //$img =filtro($peliculas["titulo"]);
            if ($peliculas["id_genero"] != 0) { ?>
                <div class="caja">
                    <h3><?= ucfirst($peliculas['titulo']) ?></h3>
                    <p> <?= ($peliculas['titulo']) ?> dirigida por <?= $peliculas['director'] ?> (<?= $peliculas['anyo'] ?>)</p>
                    <img src="upload/<?= $peliculas['poster'] ?>">
                    
                </div>
            <? } else { ?>
                <div class="caja">
                    <h3><?= ucfirst($peliculas['titulo']) ?></h3>
                    <p> <?= ($peliculas['titulo']) ?> dirigida por <?= $peliculas['director'] ?> (<?= $peliculas['anyo'] ?>)</p>
                    <img src="upload/<?= $peliculas['poster'] ?>">
                    
                </div><?
                    }
                }
                        ?>
    </div>
</body>

</html>