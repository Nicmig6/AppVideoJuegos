function validarModificar_videojuego(forma){    
    var videojuego = forma.videojuego;
    if (videojuego.value == "") {
        alert("Debe seleccionar un videojuego");
        return false;
    }
    var completado = forma.completado;
    if (completado.value == "") {
        alert("Debe seleccionar si completo o no el videojuego");
        return false;
    }
    alert("Formulario valido, guardando informacion en la base de datos...");
    return true;
}
