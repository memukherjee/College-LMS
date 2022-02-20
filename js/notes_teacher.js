function selectOptionBlank(){
    document.querySelectorAll('select').forEach((e)=>{
        let value = e.options[e.selectedIndex].value
        if(value=='')
            e.nextElementSibling.classList.add('blank')
        else
            e.nextElementSibling.classList.remove('blank')
    })
}