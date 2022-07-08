let libro1 = {
    id: 1,
    autor: "Mark Twain",
    titulo: "Las aventuras de Tom",
    stock: 3,
    valor: 100,
    editorial: "LA FLOR"
}
let libro2 = {
    id: 2,
    autor: "Lautaro",
    titulo: "Facultad 2022",
    stock: 20,
    valor: 50,
    editorial: "LA FLOR"
}
let libro3 = {
    id: 3,
    autor: "Carlos Tevez",
    titulo: "La Pasión por boke",
    stock: 3,
    valor: 70,
    editorial: "Franquito"
}
let libro4 = {
    id: 4,
    autor: "Tesla",
    titulo: "Autos del Futuro",
    stock: 8,
    valor: 500,
    editorial: "Rogelia"
}
let libro5 = {
    id: 5,
    autor: "Messi",
    titulo: "La Soñada",
    stock: 1,
    valor: 5000,
    editorial: "Ceibas"
}

function descuento(){//Descuento 20%
    aux = valor* 0.2;
    return aux;
};

function descuento_editorial(){//Descuento por editorial
    aux = valor* 0.05;
    return aux;
};
function Buscar_libro() {
    //ARRAY DE LIBROS
    let libros = [libro1, libro2, libro3, libro4, libro5]

    //stock control
    const control_stock = 5;

    //valor control
    const control_valor = 100;

    //Editorial control
    const control_editorial = 'LA FLOR';

    let cartel = document.getElementById('cartel');

    //ID Buscado
    const id_buscado = document.getElementById('id_libro').value;

    //Comparación de ID buscado con ID de libros que hay en el array
    const libro_id = libros.find(element => element.id == id_buscado);


    if (libro_id === undefined) {
        //No Existe Libro
        cartel.style.backgroundColor='red';
        cartel.innerHTML='No existe Libro con esa ID'
    } else{
        //En caso de que coincidan las ID

        document.getElementById('info_libro').innerHTML='Autor: '+ libro_id.autor +'<br> Titulo: "'+ libro_id.titulo+'"';

        console.log('Este libro es de ' + libro_id.autor);


        if (libro_id.stock <= control_stock) {
            // MENOR O IGUAL A 5--> Cartel Verde
            cartel.innerHTML = '<b>STOCK: </b>' + libro_id.stock;
            cartel.style.backgroundColor = 'green';
        } else {
            // MAYOR A 5--> Cartel Rojo
            cartel.innerHTML = '<b>STOCK: </b>' + libro_id.stock;
            cartel.style.backgroundColor = 'red';
        };

        const valor_libro = libro_id.valor;
        let valor = valor_libro;

        

        if (valor>=control_valor && libro_id.editorial==control_editorial){

            let valor_1= valor_libro - (descuento(valor_libro));

            let valor_final= valor_1 - (descuento_editorial(valor_libro));
            
            document.getElementById('valor').innerHTML='Valor: '+valor_final;
        }else{
            
            if (valor>=control_valor){

            let valor_final= valor_libro - (descuento(valor_libro));

            document.getElementById('valor').innerHTML='Valor: '+valor_final;

            }else{
                document.getElementById('valor').innerHTML='Valor: '+valor_libro; 
            };

            if (libro_id.editorial==control_editorial){

                let valor_final= valor_libro - (descuento_editorial(valor_libro));

                document.getElementById('valor').innerHTML='Valor: '+valor_final;
            };
        }

        
        
        
    }


}