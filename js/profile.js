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

let i=0;
let timer = setInterval(circleColor,500);
const colors = ['yellow','red','green','blue']
let key = 0
async function circleColor(){
  const circles = document.querySelectorAll('.fa-circle')[i]
  circles.classList.add(colors[(i+key)%4])
  if(i === 3){
    await sleep(500);
    document.querySelectorAll('.fa-circle').forEach((e)=>{
      e.classList.remove('red','yellow','green','blue')
    })
    i=-1
    key++
  }
  i++
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function complete(){
  clearInterval(timer)
  timer = null
}

