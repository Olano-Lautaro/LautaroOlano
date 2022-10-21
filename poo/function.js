
function tipoEmpleado(value){
    if (value=='Repartidor'){
       document.getElementById('seguntipo').innerHTML=' Introducir zona con letra mayúscula... por ej: "A", "B", "C", etc. <br>Zona: <input type="text" name="zona" id="ZONA"></input>';
    }else{
        document.getElementById('seguntipo').innerHTML='Comisión: <input type="number" name="comision" id="COMISION"></input>'
    }
}