function rickAndMorty(){

    let id_personaje= document.getElementById('id_personaje').value

    fetch ("https://rickandmortyapi.com/api/character/"+id_personaje)
    .then ((res) => res.json())
    .then (res =>{

        console.log(res)
        
        let creado= res.created
        let nombre= res.name 
        let genero= res.gender
        let estado= res.status
        let especie= res.species
        let tipo= res.type
        let origen= res.origin.name
        let localidad= res.location.name
        let apariencia= res.image


        let html=`Nombre: ${nombre} <br>
            Género: ${genero} <br>
            Estado: ${estado} <br>
            Especie: ${especie} <br>
            Tipo: ${tipo} <br>
            Origen: ${origen} <br>
            Localidad: ${localidad} <br>
            Apariencia: <br><img src=${apariencia}> <br>`

            //Mostrar datos en la página.
        document.getElementById('info').innerHTML= html

        //Insertar datos en el formulario
        document.getElementById('nombre').value=nombre
        document.getElementById('genero').value=genero
        document.getElementById('creado').value=creado
        document.getElementById('especie').value=especie
        document.getElementById('tipo').value=tipo
        document.getElementById('origen').value=origen
        document.getElementById('localidad').value=localidad
        document.getElementById('apariencia').value=apariencia
        document.getElementById('idPersonaje').value=id_personaje

       
        
        
        

    })
    

}