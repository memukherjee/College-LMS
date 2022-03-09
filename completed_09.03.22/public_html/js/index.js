function togglePassword(e) {
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
    console.log(e);
  }

  function loadPaddingCard() {
    var card = document.getElementById("card");
    card.classList.add("card-padding");
  }

  function onLoad() {
    loadPaddingCard();
  }