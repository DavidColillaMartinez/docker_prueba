<?
    define('hostnameBDD','localhost');
    define('usernameBDD','Adrian');
    define('passwordBDD','12345');
    define('databaseBDD','cine');

    
/*Conexion con BDD con mysqli */
function mysqli_sql($cadenaSQL, $sinretorno = false)
{
    //Abrir bdd y establecer conexion
    $conexionBDD = mysqli_connect(hostnameBDD, usernameBDD, passwordBDD, databaseBDD) or die("Error: " . mysqli_error($conexionBDD));
    //Ejecutar SQL
    $resultadoBDD = mysqli_query($conexionBDD, $cadenaSQL) or die("Error: " . mysqli_error($conexionBDD));

    //Con un while podremos recorrer el resultado
    if (!$sinretorno) {
        $listado = array();
        while ($filaBDD = mysqli_fetch_assoc($resultadoBDD)) $listado[] = $filaBDD;
        //Liberar resultado
        mysqli_free_result($resultadoBDD);
    }

    //Cerrar conexión
    mysqli_close($conexionBDD);

    if (!$sinretorno) return $listado;
}
?>