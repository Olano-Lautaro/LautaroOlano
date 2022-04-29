//-------Objetos--------//
/*
Declarar objetos-- const miobjeto= new Object
const persona={
Nombre:'Lautaro',
Apellido:'Olano',
DNI:43828074,
Edad:20,
Estudios:["primarios","secundarios"],
Extranjero: false
} 

console.log(persona);

console.log(persona.Nombre);

persona.Domicilio='Rivadavia 1195'

console.log(persona);

const persona1={
    Apellido:'Rodriguez',
    DNI:43828073,
    Nombre:'Luciano',
    Domicilio:'Ceibas',
    Edad:20
}
console.log(persona1);

console.log("Suma de las edades de persona y persona1:");
console.log(persona.Edad + persona1.Edad);


//-----------------------------------------------------------------------//
const IVA=1.21;
const IVA_general=1.43;

const Item1={
    precio:1900,
    cantidad:35,
    impuesto: IVA,
    calcular_total: function(){
        return this.precio*this.cantidad*this.impuesto;
    }
    
}

const Item2={
    precio:2580,
    cantidad:8,
    impuesto: IVA_general,
    calcular_total: function(){
        return this.precio*this.cantidad*this.impuesto;
    }
}

const Factura={
    Item1,
    Item2,
    // Item1: Item1,
    // Item2: Item2
    Total: function(){
        return Item1.calcular_total()+Item2.calcular_total();
    }
}

console.log(Factura);

console.log("Precio item1: "+ Factura.Item1.precio);
console.log("");

let suma1=(Factura.Item1.cantidad)*(Factura.Item1.precio)*IVA;
let suma2=(Factura.Item2.cantidad)*(Factura.Item2.precio)*IVA_general;

let total=suma1+suma2;

console.log("total suma item1= " +suma1);
console.log("total suma item2= "+suma2);
console.log("total suma de ambos items= "+total)
console.log("");

console.log("Total item 1= "+Item1.calcular_total());

console.log("Total= "+Factura.Total());
*/

const Persona1={
    nombre:'Lautaro',
    apellido:'Olano',
    edad:33,
    sexo:'Masculino',
    nombre_completo: function(){
        return `${this.apellido}, ${this.nombre}`
    }
}

const Persona2={
    nombre:'Zaira',
    apellido:'Neirotti',
    edad:12,
    sexo:'Femenino',
    nombre_completo: function(){
        return `${this.apellido}, ${this.nombre}`
    }
}

const persona3={
    nombre:'Lourdes',
    apellido:'García',
    edad:94,
    sexo:'Femenino',
    nombre_completo: function(){
        return `${this.apellido}, ${this.nombre}`
    }
}

const MostrarPersona={  
    personas_mayores: function(){
        if (persona3.edad>=18){
            console.log(persona3.nombre_completo());
        }
        if (Persona1.edad>=18){
            console.log(Persona1.nombre_completo());
        }
        if (Persona2.edad>=18){
            console.log(Persona2.nombre_completo());
        }

    }

}
console.log("Personas mayores:");
console.log(MostrarPersona.personas_mayores());