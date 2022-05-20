/*
fetch   ('text.txt') 
.then   (data   =>  data.text())  
.then   (data   =>  {
    console.log(data);
})
*/

fetch   ('https://randomuser.me/api/')
.then   (res    =>  res.json())
.then   (data   =>{
    console.log(data.results[0]);
})

function    info()  {
    fetch   ('https://randomuser.me/api/')
    .then   (res   => res.json())
    .then   (data =>{
        document.getElementById("nombre").innerHTML=('Nombre: ' +   data.results[0].name.first);
        document.getElementById("apellido").innerHTML=('Apellido: ' +   data.results[0].name.last);
        document.getElementById("sexo").innerHTML=('Sexo: ' +   data.results[0].gender);
        document.getElementById("edad").innerHTML=('Edad: ' +   data.results[0].dob.age);
        document.getElementById("email").innerHTML=('Email: '   +   data.results[0].email);
        document.getElementById("foto").innerHTML=('Foto:' + '<img src="${data.results[0].picture.large}"></img>');
    })

}

function    contenido(){
    fetch   ('https://randomuser.me/api/')
    .then   (res    =>res.json())
    .then   (data   =>{
    let HTML=
    `Nombre: ${data.results[0].name.first} <br>
    Apellido: ${data.results[0].name.last} <br>
    Sexo: ${data.results[0].gender}<br>
    Edad: ${data.results[0].dob.age}<br>
    Email: ${data.results[0].email}<br>
    Foto: <br>
    <img src="${data.results[0].picture.large}">` 

    document.getElementById("informacion").innerHTML= HTML
    })
} 