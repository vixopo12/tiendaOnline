<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/LogoTienda.png" type="image/x-icon">
    
</head>
<body>
   
<nav class="narvar">
<ul class="lista-Col">
   <a class="link" href="#"><li style="list-style: none;" class="icono"><img class="imgLogo" src="img/LogoTienda.png" alt=""></li></a>
   <a class="link" href="#"><li class="item-lista">Home</li></a>
   <a class="link" href="#"><li class="item-lista">Productos</li></a>
   <a class="link" href="#"><li class="item-lista">Formulario</li></a>
</ul>
</nav>

<section>
<ul style="margin-left:12px" class="producto">
    <li style="list-style: none;" class="lista-producto">
        <div style="margin-top:15px;" class="card">
        <img style="margin-left:40px;" src="img/PelotaBasquet_Al_Court.png" alt="">
        <Strong><h3>Adidas Court 3</h3></Strong>
        <p>Pelota de medida 7, color naranjo, adidas</p>
        <p>Precio: $$$$</p>
        </div>
    </li>    
    <li style="list-style: none;" class="lista-producto">
        <div style="margin-top:15px;" class="card">
        <img style="margin-left:40px; width:250px;" src="img/adidasZapaCoutVision.png" alt="">
        <Strong><h3>Adidas court vision</h3></Strong>
        <p>Talla 44 - 45, color blanco, adidas</p>
        <p>Precio: $$$$</p>
        </div>
    </li>    
    <li style="list-style: none;" class="lista-producto">
        <div style="margin-top:15px; height: 360px;" class="card">
        <img style="margin-left:5px; height: 220px; " src="img/adidas_badBunny.png" alt="">
        <Strong><h3>Adidas Bad Bunny</h3></Strong>
        <p>Talla 44 - 45, color blanco, adidas</p>
        <p>Precio: $$$$</p>
        </div>
    </li>    
    <li style="list-style: none;" class="lista-producto">
        <div style="margin-top:15px; height: 360px;" class="card">
        <img style="margin-left:75px; height: 220px; " src="img/polera_adidas.png" alt="">
        <Strong><h3>Polera adidas</h3></Strong>
        <p>Talla M - L - XL, color azul, adidas</p>
        <p>Precio: $$$$</p>
        </div>
    </li>    
</ul>

<ul style="margin-left:12px" class="producto">
    <li style="list-style: none;" class="lista-producto">
        <div style="margin-top:15px;" class="card">
        <img style="margin-left:40px;" src="img/PelotaBasquet_Al_Court.png" alt="">
        <Strong><h3>Adidas Court 3</h3></Strong>
        <p>Pelota de medida 7, color naranjo, adidas</p>
        <p>Precio: $$$$</p>
        </div>
    </li>    
    <li style="list-style: none;" class="lista-producto">
        <div style="margin-top:15px;" class="card">
        <img style="margin-left:40px; width:250px;" src="img/adidasZapaCoutVision.png" alt="">
        <Strong><h3>Adidas court vision</h3></Strong>
        <p>Talla 44 - 45, color blanco, adidas</p>
        <p>Precio: $$$$</p>
        </div>
    </li>    
    <li style="list-style: none;" class="lista-producto">
        <div style="margin-top:15px; height: 360px;" class="card">
        <img style="margin-left:5px; height: 220px; " src="img/adidas_badBunny.png" alt="">
        <Strong><h3>Adidas Bad Bunny</h3></Strong>
        <p>Talla 44 - 45, color blanco, adidas</p>
        <p>Precio: $$$$</p>
        </div>
    </li>    
    <li style="list-style: none;" class="lista-producto">
        <div style="margin-top:15px; height: 360px;" class="card">
        <img style="margin-left:75px; height: 220px; " src="img/polera_adidas.png" alt="">
        <Strong><h3>Polera adidas</h3></Strong>
        <p>Talla M - L - XL, color azul, adidas</p>
        <p>Precio: $$$$</p>
        </div>
    </li>    
</ul>
<br>
<div style="background-color: black; width: 400px; margin-left:550px; color: white; border-radius: 5px;" class="formulario">

<center>
<form class="form" action="index.php" name="form1" method="post">
<br>  
<div style="margin-bottom:50px;">
    <label for="nombre">Nombre:</label>
    <input placeholder="Ingrese su nombre"  type="text" name="txt_nombre" >
</div>

<div style="margin-bottom:50px;">
    <label for="Correo">Correo:</label>
    <input placeholder="Ingrese su correo" type="text" name="txt_correo" >
    </div>

    <div style="margin-bottom:50px;">
    <label for="rut">Rut:</label>
    <input placeholder="Ingrese su Rut" type="text" name="txt_rut" >
</div>

 <div style="margin-top:10px;">
    <label for="comentario">Comentario:</label>
    <br>
    <textarea placeholder="Ingrese un comentatario" style="margin-bottom:10px;" id="comentario" name="txtA_comentario" rows="5"></textarea>
    </div>

    <input name="btn_enviar" type="submit" value="Enviar">
    <br>
    <input type="submit" value="Mostrar" name="btn_mostrar">
  </form>


    

  </center>
</div>
</section>

<footer>
    
</footer>
</body>
</html>

<?php 
include("registrar.php");
include("mostrar.php");






?>

