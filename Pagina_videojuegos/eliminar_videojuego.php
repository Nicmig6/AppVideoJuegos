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
        <a href="agregar_videojuego.php"  class="navegacion_enlace">Agregar VideoJuego</a>
        <a href="Listar_videojuegos.php"class="navegacion_enlace">Listar VideoJuegos</a>
        <a href="modificar_videojuego.php"class="navegacion_enlace">Modificar VideoJuego</a>
    </nav>

    <h3>Eliminar VideoJuego:</h3>  
 <form method="POST" class="formulario" onsubmit="return validarEliminar_videojuego(this);">
    <p>
      <select class="videojuego" name="videojuego" id="videojuego">
        <option value="">Seleccione VideoJuego:</option>
        <?php
        try {
            $db=mysqli_connect("localhost","root","","appvideojuegos");
            $sql="SELECT * FROM videojuegos;";
            $consulta=mysqli_query($db,$sql);
            while ($valores = mysqli_fetch_array($consulta)) {
            echo '<option value="'.$valores['titulo'].'">'.$valores['titulo'].'-- Completado: '.$valores['completado'].'</option>';
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
      
        ?>
      </select>

    <button type="submit" class="videojuego">Guardar</button>

    </form>

<?php 
if($_POST){
    $videojuego=$_POST["videojuego"];
    try {
        $db=mysqli_connect("localhost","root","","appvideojuegos");
        $sql="DELETE FROM  videojuegos WHERE titulo='$videojuego';";
        $consulta=mysqli_query($db,$sql);

    } catch (\Throwable $th) {
    echo $th;
    }
}
?>

        <script src="/validarEliminar_videojuego.js"></script>

    <footer class="footer">
        <p>Todos los derechos reservados. Nicolas Migliano</p>
    </footer>
    <script src="/script.js"></script>
</body>
</html>