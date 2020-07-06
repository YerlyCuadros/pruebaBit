function enviarDatos() {
    var codigoBit = document.forms["descargaDocumentos"]["codigoBit"].value;
    var cedula = document.forms["descargaDocumentos"]["cedula"].value;
    if ((codigoBit == "") || (cedula == "")) {
        alert("Debe ingresar los datos");
        return false;
    } else {

        return true
    }
}