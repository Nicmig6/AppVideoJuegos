<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Videojuegos Jugados </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <a href="index.php">
        <header class="header">
            <h1>Página de Videjuegos Jugados Nicolás</h1>
        </header>
    </a>
    <nav class="navegacion">
        <a href="agregar_videojuego.php"  class="navegacion_enlace">Agregar VideoJuego</a>
        <a href="modificar_videojuego.php"  class="navegacion_enlace">Modificar VideoJuego</a>
        <a href="index.php"class="navegacion_enlace">Página principal</a>
        <a href="eliminar_videojuego.php"class="navegacion_enlace">Eliminar VideoJuego</a>
    </nav>

    <h3>Listado de Videojuegos:</h3>  
<?php
$datos=[];
    try {
         $db=mysqli_connect("localhost","root","","appvideojuegos");
          $sql="SELECT * FROM videojuegos;";
         $consulta=mysqli_query($db,$sql);
        
        $i=0;
    
            while($row=mysqli_fetch_assoc($consulta)){
            $datos[$i]["id"]=$row["id"];
            $datos[$i]["titulo"]=$row["titulo"];
            $datos[$i]["completado"]=$row["completado"];
            $i++;
     }

     foreach($datos as $valores){
         $titulo=$valores["titulo"];
         $completado=$valores["completado"];
         echo "<p>$titulo"." "."Completado: "."$completado</p>";
     }
 }

     catch (\Throwable $th) {
        //throw $th;
    }
?>
    <footer class="footer">
    <p>Todos los Derechos Reservados. Nicolas Migliano</p>
    </footer>
</body>
</html>