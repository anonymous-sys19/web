let ubicacionPrincipal = Window.pageYOffset;

window.onscroll = function () {
    let desplasamiento = window.pageYOffset;
    if (ubicacionPrincipal >= desplasamiento) {
        document.getElementById("header").style.top = "0";
    } else {
        document.getElementById("header").style.top = "-100px";
    }
    ubicacionPrincipal = desplasamiento;
}



function doct() {

    document.querySelector('.alertPHP').addEventListener("click", clickPHP)
    function clickPHP() {
        data = false
        if (data) {
            return
        }
        alert("Error: pagina en desarrollo(PHP IS NOT SOPORTD)")
    }
}
