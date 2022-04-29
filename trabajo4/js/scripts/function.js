//Arrays//


    
    let miarray=["33", "Pera", "True", "43"];

    console.log(miarray);

    //------Muestra tamaño del Array-----//
    
    console.log(miarray.length);
    
    //----Recorre el Array----//

    for (let i=0; i<miarray.length ; i++){
        console.log(miarray[i]);
    }

    //------Otro tipo de recorrer el array------//

    miarray.forEach(Element => {
        console.log(miarray[Element]);
    });

    //-----------------------------------------//

    miarray.push('Sandia');
    miarray.unshift('Naranja');
    miarray.pop('Pera');
    console.log(miarray);
      

    //------------------------------------------//    
  
    let array=["99","4","34","93","1"];
    

    for (let i=0; i<array.length; i++){
    
        if (array[i]>50){
            console.log(array[i])
        }
    }


    
    
    