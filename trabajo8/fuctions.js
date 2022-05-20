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
        console.log(data.results[0]);
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
                <img src="${data.results[0].picture.large}"><br>
                Longuitud: ${data.results[0].location.coordinates.longitude}<br>
                Latitud: ${data.results[0].location.coordinates.latitude}<br><hr>` 
                document.getElementById("edad").innerHTML=("cumple con la edad");
                document.getElementById("contenido").innerHTML= HTML;
            //}
            //else{
                //alert('Usuario no cumple con los requisitos, fuera del rango de edad');
            //}
            var map = L.map('map').setView([data.results[0].location.coordinates.latitude, data.results[0].location.coordinates.longitude], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>'
            }).addTo(map);
            var marker = L.marker([data.results[0].location.coordinates.latitude, data.results[0].location.coordinates.longitude]).addTo(map);
    
           
        }else (data.results[0].gender=="male");{
          alert('Usuario no cumple con los requisitos, es masculino');
        }
           
        
        
    })
}