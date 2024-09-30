<?php 

include('controlador.php');

$resNombre=$_POST['txt_nombre'];
$resCorreo=$_POST['txt_correo'];
$resRut=$_POST['txt_rut'];
$resComentario=$_POST['txtA_comentario'];
$mensaje = "entra";



if ($_POST['btn_mostrar']) {
    echo ('<script>
    alert("' . $mensaje . '");
</script>');
}



?>