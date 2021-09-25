function validarEliminar_videojuego(forma){    
    var videojuego = forma.videojuego;
    if (videojuego.value == "") {
        alert("Debe seleccionar un videojuego");
        return false;
    }
    alert("Formulario valido, guardando informacion en la base de datos...");
    return true;
}
