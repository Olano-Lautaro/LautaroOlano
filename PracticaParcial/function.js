function TipoPersona(value){
    if (value == "alumno"){
        document.getElementById('ARANCEL').innerHTML='Arancel: 500'
    }else{
        document.getElementById('ARANCEL').innerHTML='Arancel: 1000'
    }
}