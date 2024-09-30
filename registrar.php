<?php

include('controlador.php');

$resNombre=$_POST['txt_nombre'];
$resCorreo=$_POST['txt_correo'];
$resRut=$_POST['txt_rut'];
$resComentario=$_POST['txtA_comentario'];
$mensaje = "se ha registrado";


if ($_POST['btn_enviar']) {
    echo ('<script>
    alert("' . $mensaje . '");
</script>');
    $consulta= "INSERT INTO `formulario`(`rut`, `nombre`, `correo`, `comentario`) VALUES ('$resRut','$resNombre','$resCorreo','$resComentario')";
    $resultado = mysqli_query($conexion, $consulta);  
}



if ($_POST['btn_mostrar']) {
    
$consul= "SELECT rut, nombre, correo, comentario FROM formulario";
$resul= mysqli_query($conexion, $consul);

if ($resul) {
    if (mysqli_num_rows($resul) > 0) {
        echo "<ul class='LL'>";
      
        while($f = mysqli_fetch_assoc($resul)) {
           
            echo "<div class='lista'>
                    <li class='ya'><strong>Rut:</strong> " . $f["rut"]. "<br>Nombre: " . $f["nombre"]. "<br>Correo: " . $f["correo"]. "<br>Comentario: " . $f["comentario"]. 
                    "<br><br> <center> </center> 
                   <form method='POST' action=''>
                            <input type='hidden' name='rut' value='" . $f["rut"] . "'>
                            <center>
                                <input type='submit' name='btn_cambiar' value='Cambiar Datos' class='cambiar_datos'>
                                <input type='submit' name='btn_borrar' value='Borrar Datos' class='borrar_datos'>
                            </center>
                        </form>
                   </li>
                    </div><br>";
        }
        echo "</ul>";

        
        }


    } else {
        echo "No hay registros.";
    }
    
}




if (isset($_POST['btn_borrar'])) {
    $rut = $_POST['rut'];

    $borrar = "DELETE FROM formulario WHERE rut = '$rut'";
    $resultado_borrar = mysqli_query($conexion, $borrar);

    if ($resultado_borrar) {
        echo "<script>alert('Registro eliminado correctamente.')</script>";
    } else {
        echo "<script>alert('error al eliminar los datos.')</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .lista{
        background-color: black;
        color: white; 
        list-style: none;
        text-align: center;
        width: 300px;
        margin-right: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }

    .LL{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
</style>
</head>
<body>
    
</body>
</html>