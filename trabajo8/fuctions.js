/*fetch   ('https://randomuser.me/api/')
.then   (res    => res.json())
.then   (data   =>{
    console.log(data.results[0].gender);
    console.log(data.results[0].dob.age);
    })*/
function    Usuario(){
    fetch   ('https://randomuser.me/api/')
    .then   (res    => res.json())
    .then   (data   =>{
        let años=data.results[0].dob.age;

        if  (data.results[0].gender=="female" && años>20 && años<40){

            document.getElementById("usuario").innerHTML=("usuario mujer");
            
            console.log("edad= " + años);

            //if (){
                let HTML=`Nombre: ${data.results[0].name.first} <br>
                Apellido: ${data.results[0].name.last} <br>
                Sexo: ${data.results[0].gender}<br>
                Edad: ${data.results[0].dob.age}<br>
                Email: ${data.results[0].email}<br>
                Foto: <br>
                <img src="${data.results[0].picture.large}">
                Longuitud: ${data.results[0]}` 
                document.getElementById("edad").innerHTML=("cumple con la edad");
                document.getElementById("contenido").innerHTML= HTML;
            //}
            //else{
                //alert('Usuario no cumple con los requisitos, fuera del rango de edad');
            //}
    
        }else (data.results[0].gender=="male");{
          alert('Usuario no cumple con los requisitos, es masculino');
        }

        
        
    })
}