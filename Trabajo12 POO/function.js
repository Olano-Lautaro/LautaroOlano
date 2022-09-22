
function tipoEmpleado(value){
    if (value=='repartidor'){
       document.getElementById('seguntipo').innerHTML='Zona: <input type="text" name="zona" id="ZONA"></input>';
    }else{
        document.getElementById('seguntipo').innerHTML='Comisión: <input type="number" name="comision" id="COMISION"></input>'
    }
}