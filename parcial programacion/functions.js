
let socio1={
    apellido:   "Parra",
    nombre: "Javier",
    edad:   41,
    dni:1,
    facturas:3
}


let socio2={
    apellido:   "Olano",
    nombre: "Lautaro",
    edad:  20,
    dni:2,
    facturas: 5
}


let socio3={
    apellido:   "Perez",
    nombre: "Gabriel",
    edad:   33,
    dni:3,
    facturas:   6
}


let socio4={
    apellido:   "Sanchez",
    nombre: "Juana",
    edad:23,
    dni: 4,
    facturas:   20
}


let socio5={
    apellido:   "Romero",
    nombre:"Victoria",
    edad:   50,
    dni:5,
    facturas:   7
}


function buscar_dni(){
    
    let socios=[socio1,socio2,socio3,socio4,socio5]

    for (let i=0; i<(socios.length); i++){

        
        let dni_buscado= document.getElementById('dni').value
        
        let flag=false

        if (socios[i].dni==dni_buscado){
            console.log('Cantidad de facturas del socio: '+socios[i].facturas)
            console.log('Entro')
            
            //MENOS O IGUAL A 3 FACTURAS
            if(socios[i].facturas<=3){
                document.getElementById('cartel').style.background="green"
                document.getElementById('cartel').innerHTML= 'Facturas: '+ socios[i].facturas
                document.getElementById('info_socio').innerHTML= 'Nombre Completo del Socio: ' + socios[i].apellido+', '+socios[i].nombre
            }

            // ENTRE 3 A 6 FACTURAS
            if(socios[i].facturas>3 & socios[i].facturas<6){
                document.getElementById('cartel').style.background="yellow"
                document.getElementById('cartel').innerHTML= 'Facturas: '+ socios[i].facturas
                document.getElementById('info_socio').innerHTML= 'Nombre Completo del Socio: ' + socios[i].apellido+', '+socios[i].nombre
            }

            // MAYOR O IGUAL A 6 FACURAS
            if(socios[i].facturas>=6){
                document.getElementById('cartel').style.background="red"
                document.getElementById('cartel').innerHTML= 'Facturas: '+ socios[i].facturas
                document.getElementById('info_socio').innerHTML= 'Nombre Completo del Socio: ' + socios[i].apellido+', '+socios[i].nombre
            }

            console.log(socios[i]);
            return flag=true
        }

        

        if (flag==false){
            console.log(flag)

            console.log(i)
            document.getElementById('cartel').style.background="red"
            document.getElementById('cartel').innerHTML= "No existe socio"
    
        }
           
        
        
        
            
        

        

        
    };
}
        



// buscar por el DNI si el socio existe, en caso de no existir mostrar e rojo "No Existe"..... si existe evaluar lo siguiente:
// si tiene menos de 3 facturas mostrar en verde.
// mas de 3 y menos de 6 mostrar en amarillo.
// mas de 6 mostrar en rojo.
// en todos los casos nombre y cantidad de facturas