
let socio1 = {
    apellido: "Parra",
    nombre: "Javier",
    edad: 41,
    dni: 1,
    facturas: 3
}


let socio2 = {
    apellido: "Olano",
    nombre: "Lautaro",
    edad: 20,
    dni: 2,
    facturas: 5
}


let socio3 = {
    apellido: "Perez",
    nombre: "Gabriel",
    edad: 33,
    dni: 3,
    facturas: 6
}


let socio4 = {
    apellido: "Sanchez",
    nombre: "Juana",
    edad: 23,
    dni: 4,
    facturas: 20
}


let socio5 = {
    apellido: "Romero",
    nombre: "Victoria",
    edad: 50,
    dni: 5,
    facturas: 7
}


// buscar por el DNI si el socio existe, en caso de no existir mostrar e rojo "No Existe"..... si existe evaluar lo siguiente:
// si tiene menos de 3 facturas mostrar en verde.
// mas de 3 y menos de 6 mostrar en amarillo.
// mas de 6 mostrar en rojo.
// en todos los casos nombre y cantidad de facturas


function buscar_dni() {
    //Array Socios
    let socios = [socio1, socio2, socio3, socio4, socio5]

    // facturas
    let factura_verde = 3
    let factura_roja = 6


    for (let i = 0; i < (socios.length); i++) {

        //DNI a buscar
        let dni_buscado = document.getElementById('dni').value

        //dni del socio
        let dni_socio = socios[i].dni

        let flag = false


        if (dni_socio === dni_buscado) {

            // Cartel con informacion de facturas
            let info_facturas = document.getElementById('cartel').innerHTML = 'Facturas: ' + socios[i].facturas

            // cartel con informacion del socio
            let info_socio = document.getElementById('info_socio').innerHTML = 'Nombre Completo del Socio: ' + socios[i].apellido + ', ' + socios[i].nombre


            console.log('Posición de array: ' + i + ' Entro');

            console.log('Cantidad de facturas del socio: ' + socios[i].facturas);

            info_socio;

            info_facturas;

            //MENOS O IGUAL A 3 FACTURAS
            if (socios[i].facturas <= factura_verde) {

                document.getElementById('cartel').style.background = "green"

            }

            // ENTRE 3 A 6 FACTURAS
            if (socios[i].facturas > factura_verde & socios[i].facturas < factura_roja) {

                document.getElementById('cartel').style.background = "yellow"

            }

            // MAYOR O IGUAL A 6 FACURAS
            if (socios[i].facturas >= factura_roja) {

                document.getElementById('cartel').style.background = "red"

            }

            console.log(socios[i])

            flag=true 

            return flag;
        }
        
        if (!flag) {

            console.log('Posición de array :' + i + ' no entró')
            document.getElementById('cartel').style.background = "red"
            document.getElementById('cartel').innerHTML = "No existe socio"

        }


    }




}




