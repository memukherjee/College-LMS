function togglePassword() {
    var x = document.getElementById("floatingPassword");
    var eye = document.getElementById("eye");
    if (x.type === "password") {
      x.type = "text";
      eye.classList.toggle("fa-eye-slash");
      eye.classList.toggle("fa-eye");
    } else {
      x.type = "password";
      eye.classList.toggle("fa-eye-slash");
      eye.classList.toggle("fa-eye");
    }
  }

  function loadPaddingCard(){
    var card = document.getElementById("card")
    card.classList.add("card-padding")
  }

  function onLoad(){
    departmentLabelFormatter()
    yearLabelFormatter()
    loadPaddingCard()
  }

  function departmentLabelFormatter(){
    var l = document.getElementById("label-dept")
    var input = document.getElementById("floatingSelect")
    var value = input.options[input.selectedIndex].value
    if(value===''){
      l.classList.add("dept-blank")
    }
    else{
      l.classList.remove("dept-blank")
    }
  }

  function yearLabelFormatter(){
    var l = document.getElementById("label-year")
    var input = document.getElementById("floatingSelectYear")
    var value = input.options[input.selectedIndex].value
    console.log(value);
    if(value===''){
      l.classList.add("year-blank")
    }
    else{
      l.classList.remove("year-blank")
    }
  }

  function activeStudent(){
    for(var i=0;i<5;i++){
      let id = "year "+i
      let op = document.getElementById(id)
      op.disabled = false;
    }
    document.getElementById("year 5").selected = false;
    document.getElementById("year 5").disabled = true;
    document.getElementById("year 0").selected = true;
    yearLabelFormatter()
  }

  function activeTeacher(){
    for(var i=0;i<5;i++){
      let id = "year "+i
      let op = document.getElementById(id)
      op.selected = false;
      op.disabled = true;
    }
    document.getElementById("year 5").selected = true;
    document.getElementById("year 5").disabled = false;
    yearLabelFormatter()
  }
