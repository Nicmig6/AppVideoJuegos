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
        <a href="index.php"  class="navegacion_enlace">Página Principal</a>
        <a href="Listar_videojuegos.php"class="navegacion_enlace">Listar VideoJuegos</a>
    </nav>

    <h3>VideoJuego Nuevo:</h3>  

    <form class="formulario" method="post" onsubmit="return validarForma(this);">
        <label for="nombre" class="nombre_campo">Nombre del Juego:</label>
        <input type="text"name="nombre_videojuego"  class="formulario_campo">
       
        <select class="nombre_campo" name="completado" id="completado">
            <option value="" disabled selected>-- Completado si/no --</option>
            <option value="si">si</option>
            <option value="no">no</option>
        </select>
        <input type="submit" class="boton_campo" value="Enviar">
    </form>

    <?php
if($_POST){
    $videojuego=$_POST["nombre_videojuego"];
    $completado=$_POST["completado"];

    try {
        $db=mysqli_connect("localhost","root","","appvideojuegos");
        $sql="INSERT INTO videojuegos(titulo,completado) VALUES ('$videojuego','$completado');";
        $consulta=mysqli_query($db,$sql);
    } catch (\Throwable $th) {
    echo $th;
    }
}
?>
    
    <footer class="footer">
        <p>Todos los derechos reservados. Nicolas Migliano</p>
    </footer>
    <script src="/script.js"></script>
</body>
</html>