/* JSON
  PROPIEDAD   VALOR
  "NOMBRE":   "JAVIER"
*/
let superheroes=
{

    "squadName": "Super heo squad",
    "homeTown": "Metro City",
    "formed": 2016,
    "secretBase": "Super tower",
    "active": true,
    "members": [
      {
        "name": "Capitán América",
        "age": 29,
        "secretIdentity": "Dan Jukes",
        "powers": [
          "Radiation resistance",
          "Turning tiny",
          "Radiation blast"
        ]
      },
      {
        "name": "Iron Man",
        "age": 39,
        "secretIdentity": "Jane Wilson",
        "powers": [
          "Million tonne punch",
          "Damage resistance",
          "Superhuman reflexes"
        ]
      },
      {
        "name": "Sub Cero",
        "age": 1000000,
        "secretIdentity": "Unknown",
        "powers": [
          "Immortality",
          "Heat Immunity",
          "Inferno",
          "Teleportation",
          "Interdimensional travel"
        ]
      }
    ]
}

//console.log(superheroes);

//console.log(superheroes.members[1].name);

//console.log(superheroes.members[2].powers[3]);


// Todos los poderes  //
/*
for (i=0; i<superheroes.members.length; i++){
  
    for (j=0; j<superheroes.members[i].powers.length; j++){

        console.log(superheroes.members[i].powers[j]);

    }

}

console.log('-------------------------------------');

// Super heroe mayor a 35 //
/*for (i=0; i<superheroes.members.length ; i++){
    if (superheroes.members[i].age>35){
        console.log(superheroes.members[i].name);
        console.log(superheroes.members[i].age);
    }
}
*/

/* Recorre array 

for (   const key   in  superheroes.members){
    const element=superheroes.members[key];
    console.log(element);
}

*/

function mayor(){
    for (i=0; i<superheroes.members.length;i++){
        if (superheroes.members[i].age>100){
            let super_mayor=(superheroes.members[i].name);
            document.getElementById("nombre_m").innerHTML=(super_mayor);
        }
    }
  
}


function borrar(){
    document.getElementById("nombre_m").innerHTML=("");
}