
<!--esta es la función sirve pa cambiar la posición de la imagen/texto al clickar sobre la imagen -->
function ej4(e) {
    //var src = e.src;
    if(e.className == "A"){
        e.className = "B";
    } else {
        e.className = "A";
    }
    //alert(src);
}