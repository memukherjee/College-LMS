function matchPass() {
  const pass = document.getElementById("floatingPassword");
  const pass2 = document.getElementById("floatingPassword2");
  if (pass.value === pass2.value) 
    pass2.setCustomValidity("");
  else 
    pass2.setCustomValidity("Passwords Don't Match");
}

myStorage = window.localStorage;
if(!myStorage.getItem('profileImg'))
  myStorage.setItem('profileImg','0.svg')
console.log(myStorage.getItem('profileImg'));
document.getElementById('avatar').src = `images/avatars/${myStorage.getItem('profileImg')}`

function modalClear(){
    const input = document.querySelectorAll('.form-control')
    input.forEach((e)=>{
        e.value=""
    })
}

function imgSelect(e){
  let selectedImg = e.src.replace(/^.*[\\\/]/, '')
  myStorage.setItem('profileImg',selectedImg)
  e.style.border = '2px solid #fff'
  e.style.borderRadius = '100%'
  window.location.reload()
}

document.getElementById('image-edit').addEventListener('mouseover',()=>{
  document.getElementById('avatar').classList.add('blur')
})

document.getElementById('image-edit').addEventListener('mouseout',()=>{
  document.getElementById('avatar').classList.remove('blur')
})