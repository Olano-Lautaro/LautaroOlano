// funciones con parametros//

function sumar (num1,num2){
    let resultado1=num1+num2;
    console.log(resultado);
    alert(resultado)
}

function sumar1(){
    
 
    let num1 = document.getElementById("valorA").value;
    
    let num2 = document.getElementById("valorB").value;

    
    
   let resultado= Number (num1) + Number (num2);
    //console.log(resultado);

    //if (num1>num2){
    //    alert(num1 +" es mayor que "+ num2)
    //}
    //else {
    //    alert(num2 +" es mayor que "+ num1);
    //} 

    document.getElementById("resultado1").innerHTML=(resultado);

}