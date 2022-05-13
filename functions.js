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

function    info(){
    fetch   ('https://randomuser.me/api/')
    .then   (res   => res.json())
    .then   (data =>{
        document.getElementById(informacion).innerHTML=(
            <table>
                <tr>
                    <td>${innerHTML=(data.results[0].name.first)}</td>
                </tr>
                <tr>
                    <td>${innerHTML=(data.results[0].name.last)}</td>
                </tr>
                
            </table>
         
        )
    })

}