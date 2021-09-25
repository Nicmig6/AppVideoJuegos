function validarAgregar_videojuego(forma){
    var nombre_videojuego= forma.nombre_videojuego;
    if (nombre_videojuego.value == "" ){
        alert("Debe proporcionar un nombre de Videojuego");
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
