function removeWork(e){
    let currentData = e.parentElement.parentElement.parentElement
    const rejectedInput = document.getElementById('rejectedId')
    if(rejectedInput.value==="")
        rejectedInput.value=currentData.firstElementChild.innerText
    else
        rejectedInput.value = rejectedInput.value+","+currentData.firstElementChild.innerText
    // console.log(rejectedInput.value);
    currentData.remove()
}

function approved(e){
    let currentData = e.parentElement.parentElement.parentElement
    const acceptedInput = document.getElementById('acceptedId')
    if(acceptedInput.value==="")
        acceptedInput.value=currentData.firstElementChild.innerText
    else
        acceptedInput.value = acceptedInput.value+","+currentData.firstElementChild.innerText
    // console.log(acceptedInput.value);
    currentData.remove()
}

function editEntry(e){
    let currentBtn = e.parentElement.parentElement
    let currentPassword = currentBtn.previousElementSibling
    let currentYear = currentPassword.previousElementSibling
    let currentDept = currentYear.previousElementSibling
    let currentEmail = currentDept.previousElementSibling
    let currentName = currentEmail.previousElementSibling
    let currentId =  currentName.previousElementSibling
    
    document.getElementById('exampleInputPassword1').value = currentPassword.innerText
    document.getElementById('exampleInputYear1').value = currentYear.innerText
    document.getElementById('exampleInputDept1').value = currentDept.innerText
    document.getElementById('exampleInputEmail1').value = currentEmail.innerText
    document.getElementById('exampleInputName1').value = currentName.innerText
    document.getElementById('exampleInputId1').value = currentId.innerText
}

function deleteEntry(e){
    let currentData = e.parentElement.parentElement.parentElement
    const deletedInput = document.getElementById('deletedId')
    if(deletedInput.value==="")
        deletedInput.value=currentData.firstElementChild.innerText
    else
        deletedInput.value = deletedInput.value+","+currentData.firstElementChild.innerText
    // console.log(deletedInput.value)
    currentData.remove()
}