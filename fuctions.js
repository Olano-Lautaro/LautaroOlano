fetch   ('https://randomuser.me/api/')
.then   (res    => res.json())
.then   (data   =>{
    console.log(data.results[0].gender);
    console.log(data.results[0].dob.age);
    })
function    Usuario(){
    fetch   ('https://randomuser.me/api/')
    .then   (res    => res.json())
    .then   (data   =>{
        if  (data.results[0].gender=="female"){
            document.getElementById("usuario").innerHTML=("usuario mujer");

            if (data.results[0].dob.age>20 && data.results[0].dob.age<40){
                let HTML
                document.getElementById("edad").innerHTML=("cumple con la edad");
            }
        
           
           

        }else (data.results[0].gender=="male");{
          alert('Usuario no cumple con los requisitos');
        }

        
        
    })
}