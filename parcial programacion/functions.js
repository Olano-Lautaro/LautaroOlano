
let socio1={
    apellido:   "Parra",
    nombre: "Javier",
    edad:   41,
    dni:28358603,
    facturas:1
}
//console.log(socio1)

let socio2={
    apellido:   "Olano",
    nombre: "Lautaro",
    edad:  20,
    dni:43828075,
    facturas: 5
}
//console.log(socio2)

let socio3={
    apellido:   "Perez",
    nombre: "Gabriel",
    edad:   33,
    dni:25902133,
    facturas:   6
}
//console.log(socio3)

let socio4={
    apellido:   "Sanchez",
    nombre: "Juana",
    edad:23,
    dni: 33910984,
    facturas:   20
}
//console.log(socio4)

let socio5={
    apellido:   "Romero",
    nombre:"Victoria",
    edad:   50,
    dni:34567005,
    facturas:   7
}
//console.log(socio5)

function buscar_dni(){
    //console.log(document.getElementById('dni').value);
    let socios=[socio1,socio2,socio3,socio4,socio5]

    for (let i=0; i<(socios.length); i++){

        let cant_factura= socios[i].facturas

        if (socios[i].dni == document.getElementById('dni').value){
            console.log(socios[i].facturas)
            //console.log('Entro');
            //MENOS O IGUAL A 3 FACTURAS
            if (cant_factura<=3){
                document.getElementById('cartel').style.background="green"
                document.getElementById('cartel').innerHTML= 'Facturas: '+ cant_factura
                document.getElementById('info_socio').innerHTML= 'Nombre Completo del Socio: ' + socios[i].apellido+', '+socios[i].nombre
            };
            // ENTRE 3 A 6 FACTURAS
            if (cant_factura>3 & cant_factura<6){
                document.getElementById('cartel').style.background="yellow"
                document.getElementById('cartel').innerHTML= 'Facturas: '+ cant_factura
                document.getElementById('info_socio').innerHTML= 'Nombre Completo del Socio: ' + socios[i].apellido+', '+socios[i].nombre
            };
            // MAYOR O IGUAL A 6 FACURAS
            if (cant_factura<=6){
                document.getElementById('cartel').style.background="red"
                document.getElementById('cartel').innerHTML= 'Facturas: '+ cant_factura
                document.getElementById('info_socio').innerHTML= 'Nombre Completo del Socio: ' + socios[i].apellido+', '+socios[i].nombre
            };

        }//else{
            document.getElementById('cartel').style.background="red"
            document.getElementById('cartel').innerHTML= "No Existe"
        //}  

        console.log(socios[i])
    }
}
        



// buscar por el DNI si el socio existe, en caso de no existir mostrar e rojo "No Existe"..... si existe evaluar lo siguiente:
// si tiene menos de 3 facturas mostrar en verde.
// mas de 3 y menos de 6 mostrar en amarillo.
// mas de 6 mostrar en rojo.
// en todos los casos nombre y cantidad de facturas